<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST,'email');
$mobilenum = filter_input(INPUT_POST,'mobilenum');
$issues = filter_input(INPUT_POST,'issues');
if(!empty($username)){
    if(!empty($email)){
        if(!empty($mobilenum)){
            if(!empty($issues)){
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "jefa";
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO datatable (username,email,mobilenum,issues)
    values('$username','$email','$mobilenum','$issues')";
    if($conn->query($sql)){
        echo "new record is inserted successfully";
    }
    else{
        echo "Error: " .$sql ."<br>". $conn->error;
    }
    $conn->close();
}
            }
            else{
                echo "user name should not be empty";
                die();
            }
        }
        else{
            echo "email should not be empty";
            die();
        }
    }
    else{
        echo "mobile number should not be empty";
        die();
    }
}
else{
    echo "issues should not be empty";
    die();
}
?>