$(function () {
    let edit = false;
    console.log('JQuery is working');
    $('#task-result').hide();
    fetchTasks();
    
    $('#task-form').submit(function (e) {
        const postData = {
            order_number: $('#order_number').val(),
            furniture_description: $('#furniture_description').val(),
            shipping_price: $('#shipping_price').val(),
            shipping_cost: $('#shipping_cost').val(),
            admin_id_admin: $('#admin_id_admin').val(),
            id_order: $('#id_order').val()
        };

        let url = edit === false ? 'task-add.php' : 'task-edit.php';
        console.log(url);
        $.post(url, postData, function (response) {
            console.log(response);
            fetchTasks();
            $('#task-form').trigger('reset');
        });
        e.preventDefault();
    });

    function fetchTasks() {
        $.ajax({
            url: 'task-list.php',
            type: 'GET',
            success: function (response) {
                let tasks = JSON.parse(response);
                let template = '';
                console.log(response);
                tasks.forEach(task => {
                    template += `
                        <tr id_order="${task.id_order}">
                            <td>${task.order_number}</td>
                            <td>
                                <a href="#" class="task-item text-dark">${task.furniture_description}</a>
                            </td>
                            <td>${task.order_number}</td>
                            <td>
                                <button class="btn btn-danger task-delete">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    
                    `;
                    //console.log(task); // object we access to the value of an object with a .
                });

                $('#tasks').html(template);
            }
        });
    }

    $(document).on('click', '.task-delete', function () {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    let element = $(this)[0].parentElement.parentElement;
                    let id_order = $(element).attr('id_order');
                    console.log(id_order);
                    $.post('task-delete.php', { id_order }, function (response) {
                        fetchTasks();
                    });
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your task is safe!");
                }
            });
        
    });

    $(document).on('click', '.task-item', function(){
        let element =$(this)[0].parentElement.parentElement;
        let id_order = $(element).attr('id_order');
        //console.log(id_order);
        $.post('task-single.php', {id_order}, function(response){ 
            const task = JSON.parse(response);
            //console.log(response);
            $('#order_number').val(task.order_number);
            $('#furniture_description').val(task.furniture_description);
            $('#shipping_price').val(task.shipping_price);
            $('#shipping_cost').val(task.shipping_cost);
            $('#admin_id_admin').val(task.admin_id_admin);
            $('#id_order').val(task.id_order);
            //console.log(response);
            edit = true;
        });
    });

});