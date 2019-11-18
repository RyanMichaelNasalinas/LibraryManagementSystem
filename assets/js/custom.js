$(document).ready(function() {
    $('.view_data').click(function(){
        var employee_id = $(this).attr('id');
        $.ajax({
            url:"select.php",
            method: "post",
            data:{employee_id:employee_id},
            success:function(data) {
                $('#employee_detail').html(data),
                $('#dataModal').modal('show');
            }
        });
    });

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
});

