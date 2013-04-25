$(function(){

//    $(document).ajaxStart(function() {
//        $('#task-body').html($('#load').html());
//    });

    $.datepicker.setDefaults({ dateFormat: 'dd.mm.yy' }, $.datepicker.regional[ "ru" ]);

    $('.calendar').datepicker({
        altField: "#date-for-head-list",
        onSelect : function(date) {
            updateTaskList(date);
        }
    });

    $('#date-for-head-list').datepicker({
        onSelect : function(date) {
            updateTaskList(date);
        }
    }).mask("99.99.9999");

    $('#show-all').click(function(){
        updateTaskList();
    });

    $('#date_start, #date_end, #date_finish').datepicker({minDate: "D"}).mask("99.99.9999");;

    $('.button-dialog-add').click(function(){
        showAddWindow();
        return false;
    });

    $('.tr_task, .action-edit').live('click', function(){
        var id = $(this).closest('.tr_task').data('id');
        showAddWindow();
        getTask(id);
    });

    $('.action-delete').live('click', function(){
       if (!confirm("Вы уверены?")) return;
        var id = $(this).parent().data('id');
        $.ajax({
            url: "/task/delete/" + id
        }).done(function(data) {
            var result = $.parseJSON(data);
            if (result.success)
                updateTaskList();
            else {
                alert('Невозможно удалить запись');
            }
        });
    });

    function updateTaskList(date) {
        var url = "/tasks";

        if (typeof date != "undefined")
            url += "/" + date;

        $.ajax({
            url: url
        }).done(function(data) {
            $('#task-body').html(data);
        });
    };

    updateTaskList();

    function showAddWindow() {
        $('.add-dialog').dialog({
            modal: true,
            width: 540,
            height: 350,
            buttons: {
                "Сохранить": function() {
                    $.ajax({
                        type: "POST",
                        url: "/task/save/" + $('#id').val(),
                        data: {
                            date_start : $('#date_start').val(),
                            date_end : $('#date_end').val(),
                            date_finish : $('#date_finish').val(),
                            description : $('#description').val()
                        },
                        success: $.proxy(function() {
                            $( this ).dialog( "close" );
                            updateTaskList();
                        }, this)
                    });
                },
                "Отмена": function() {
                    $( this ).dialog( "close" );
                    $('#id, #date_start, #date_end, #date_finish, #description').val('');
                }
            }
        });
    }

    function getTask(id) {
        $.getJSON('/task/show/' + id, function(data) {
            showAddWindow();
            for (field in data) {
                $('#' + field).val(data[field]);
            }
        });
    }

});