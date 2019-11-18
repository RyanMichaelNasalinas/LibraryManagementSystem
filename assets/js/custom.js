$(document).ready(function() {

    //Insert data from modal form
    $('#insert_form').on("submit", function(e) {
        e.preventDefault();

        var firstname = $('#firstname');
        var lastname = $('#lastname');
        var gender = $('#gender');
        var username = $('#username');
        var password = $('#password');
        var email = $('#email');
        var contact_num = $('#contact_num');
        var semester = $('#semester');
        var enrollment_num = $('#enrollment_num');
        var student_status = $('#student_status');
        var user_level = $('#user_level');

        if(firstname.val() == "") {
            alert("Firstname is required");
        } else if(lastname.val() == "") {
            alert("Lastname is required");
        } else if(gender.val() == "") {
            alert("Gender is required");
        } else if(username.val() == "") {
            alert("Username is required");
        } else if(password.val() == "") {
            alert("Password is required");
        } else if(email.val() == "") {
            alert("Email is required");
        } else if(contact_num.val() == "") {
            alert("Contact Number is required");
        } else if(semester.val() == "") {
            alert("Semester is required");
        } else if(enrollment_num.val() == "") {
            alert("Enrollment number is required");
        } else if(student_status.val() == "") {
            alert("Student Status is requried");
        } else if(user_level.val() == "") {
            alert("User level is required");
        } else {
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: $("#insert_form").serialize(),
                beforeSend:function() {
                    $('#insert').val("Insert");
                }, success: function(data) {
                    $('#insert_form')[0].reset();
                    $('#addDataModal').modal('hide');
                    $('#student_table').html(data);
                }
            });
        }

    });
    //End Insert data from modal form

    $(document).on('click','.view_data', function(){
        var employee_id = $(this).attr('id');
        $.ajax({
            url: "select.php",
            method: "POST",
            data: {employee_id:employee_id},
            success: function(data) {
                $('#employee_detail').html(data),
                    $('#dataModal').modal('show');
            }
        });
    });


    //View data from the modal form
    // $('.view_data').click(function () {
    //     var employee_id = $(this).attr('id');
    //     $.ajax({
    //         url: "select.php",
    //         method: "POST",
    //         data: { employee_id: employee_id },
    //         success: function (data) {
    //             $('#employee_detail').html(data),
    //                 $('#dataModal').modal('show');
    //         }
    //     });
    // });

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
});

