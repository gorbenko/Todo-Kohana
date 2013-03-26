$(function(){
    $.datepicker.setDefaults({ dateFormat: 'dd.mm.yy' });

    $('.calendar').datepicker({
        numberOfMonths: 2,
        showButtonPanel: true,
        altField: "#date-for-head-list"
    });

    $('#date-for-head-list, #date_start, #date_end, #date_finish').datepicker();

    $('.button-dialog-add').click(function(){
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

    function updateTaskList() {
        $.ajax({
            url: "/task"
        }).done(function(data) {
            $('#task-list-body').html(data);
        });
    };

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

    updateTaskList();

})