<?php

if(($_SERVER['REQUEST_METHOD'] == "POST")){

    $o_pass = $_POST['o_pass'];
    $n_pass = $_POST['n_pass'];
    $c_pass = $_POST['c_pass'];

    if($n_pass != $c_pass){
        echo "<script>alert('Password and Confirm Password didnt match')</script>";
    }
    else{

        $o_pass = md5($o_pass);
        $n_pass = md5($n_pass);

       $q2 = $con->query("SELECT * FROM `users`");
        $row = $q2->fetch_array();
        if($row['password'] == $o_pass){
            $query = $con->query("UPDATE `users` SET password = '$n_pass' WHERE password = '$o_pass'");

            echo "<script>alert('Sucess!!!')</script>";
            echo "<script>window.location.href='profile_view.php'</script>";
        }
        else{
            echo "<script>alert('error!!!')</script>";
            echo "<script>window.location.href='change_password.php'</script>";
        }

    }
}

//$o_pass = md5($o_pass);
//$n_pass = md5($n_pass);
//$this->query = $this->query("SELECT * FROM `admin`");
//$this->fetch = $this->fetch($this->query);
//if($this->fetch['password'] == $o_pass){
//    $this->query = $this->query("UPDATE admin SET password='$n_pass' WHERE password='$o_pass'");
//    header('location:admin_password.php?msg=admin Password updated');
//}
//else{
//    header('location:admin_password.php?msg=admin Old Password NOt Currect');
//}
?>


