<?php
require_once('admin/db.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $take = $con->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    $t2 = $take->num_rows;
    foreach ($take as $t) {
        $status = $t['status'];
    }
    if ($t2 == 1) {
        if ($status == "Inactive") {
            echo "<script>alert('Your Account Inactive')</script>";
            //echo "<script>window.location.href='wait.html'</script>";
        } else {
            $_SESSION['username'] = $t['username'];
            $_SESSION['id'] = $t['id'];
            $_SESSION['name'] = $t['name'];
            $_SESSION['email'] = $t['email'];
            $role = $t['role'];
            if ($role == "user") {
                echo "<script>window.location.href='build/home.php'</script>";
            } else {
                echo "<script>window.location.href='admin/home.php'</script>";
            }
        }
    } else {
        $_SESSION['admin_access'];
        echo "<script>alert('Username or Password doesn`t match')</script>";
        header("location: auth.php");

    }

}
?>

