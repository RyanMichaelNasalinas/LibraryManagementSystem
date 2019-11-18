<?php
    include 'init/init.php';

    if(isset($_POST['employee_id'])) {
        $output = '';
        $query = $crud->displayDataID("student", $_POST['employee_id']);

        $output .= '
            <div class="table-responsive text-center">
                <table class="table table-bordered">';

            foreach($query as $row) {
            $output .= 
            '
                <tr>
                    <td width="50%" class="font-weight-bold bg-primary text-white">Gender</td>
                    <td width="50%" class="text-white">'.$row['gender'].'</td>
                </tr>
                <tr>
                    <td width="50%" class="font-weight-bold bg-primary text-white">Username</td>
                    <td width="50%">'.$row['username'].'</td>
                </tr>
                <tr>
                    <td width="50%" class="font-weight-bold bg-primary text-white">Email Address</td>
                    <td width="50%">'.$row['email'].'</td>
                </tr>
                <tr>
                    <td width="50%" class="font-weight-bold bg-primary text-white">Contact Number</td>
                    <td width="50%">'.$row['contact'].'</td>
                </tr>
                <tr>
                    <td width="50%" class="font-weight-bold bg-primary text-white">Semester</td>
                    <td width="50%">'.$row['sem'].'</td>
                </tr>
                <tr>
                    <td width="50%" class="font-weight-bold bg-primary text-white">Enrollment Number</td>
                    <td width="50%">'.$row['enrollment_num'].'</td>
                </tr>
                <tr>
                    <td width="50%" class="font-weight-bold bg-primary text-white">Student Status</td>
                    <td width="50%">'.$row['std_status'].'</td>
                </tr>
                <tr>
                    <td width="50%" class="font-weight-bold bg-primary text-white">User Level</td>
                    <td width="50%">'.$row['user_level'].'</td>
                </tr>'; 
            } 
            $output .= '</table></div>';
            echo $output;
    }
?>