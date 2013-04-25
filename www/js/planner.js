$(function(){

    $(document).ajaxStart(function() {
        $('#task-body').html($('#load').html());
    });

    $.datepicker.setDefaults({ dateFormat: 'dd.mm.yy' }, $.datepicker.regional[ "ru" ]);

    $('.calendar').datepicker({
        numberOfMonths: 2,
//        showButtonPanel: true,
        altField: "#date-for-head-list",
        onSelect : function(date) {
            updateTaskList(date);
        }
//        gotoCurrent: true
    });

    $('#date-for-head-list').datepicker({
        onSelect : function(date) {
            updateTaskList(date);
        }
    }).mask("99.99.9999");;

    $('#show-all').click(function(){
        updateTaskList();
    });

    $('#date_start, #date_end, #date_finish').datepicker({minDate: "D"}).mask("99.99.9999");;

    $('.button-dialog-add').click(function(){
        $('#date_start, #date_end, #date_finish, #desc').val('');
        $('.add-dialog').dialog({
            modal: true,
            width: 540,
            height: 350,
            buttons: {
                "Добавить": function() {
                    $.ajax({
                        type: "POST",
                        url: "/task/add",
                        data: {
                            date_start : $('#date_start').val(),
                            date_end : $('#date_end').val(),
                            date_finish : $('#date_finish').val(),
                            description : $('#desc').val()
                        },
                        success: $.proxy(function() {
                            $( this ).dialog( "close" );
                            updateTaskList();
                        }, this)
                    });
                },
                "Отмена": function() {
                    $( this ).dialog( "close" );
                }
            }
        });
        return false;
    });

    $('.action-delete').live('click', function(){
       if (!confirm("Вы уверены?")) return;
        var id = $(this).data('id');
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

});