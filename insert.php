<?php 

    include 'init/init.php';

    if(!empty($_POST)) {
        $output = '';
        $firstname = $database->escape($_POST['firstname']);
        $lastname = $database->escape($_POST['lastname']);
        $gender = $database->escape($_POST['gender']);
        $username = $database->escape($_POST['username']);
        $password = $database->escape(password_hash($_POST['password'],PASSWORD_DEFAULT));
        $email = $database->escape($_POST['email']);
        $contact_num = $database->escape($_POST['contact_num']);
        $semester = $database->escape($_POST['semester']);
        $enrollment_num = $database->escape($_POST['enrollment_num']);
        $student_status = $database->escape($_POST['student_status']);
        $user_level = $database->escape($_POST['user_level']);

        $insert_query = $crud->insertData($firstname,$lastname,$gender,$username,$password,$email,$contact_num,$semester,$enrollment_num,$student_status,$user_level);
    
        if($insert_query) {
            $output .= '<div class="alert alert-success text-center alert-dismissible fade show mt-2" role="alert">
                                Data Inserted
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';

            $select_query = $crud->displayData("student");
            $output .= '<table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>';
       

        foreach($select_query as $row) {
            $output .= ' <tbody>
                        <tr>
                            <td>' . $row["firstname"] . '</td>
                            <td>' . $row["lastname"] . '</td>
                            <td><input type="button" value="View" name="view" class="btn btn-info view_data" id='. $row['id'] .'></td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                         </tbody>
            ';
        }  
        $output .= '</table>'; 
    }
    echo $output;
}

?>
