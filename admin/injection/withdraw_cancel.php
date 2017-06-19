<?php
require_once ('../db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = $con->query("DELETE FROM withdraw_history WHERE id = '$id'");

    if (!$q) {
        echo "<script>alert('Error!!!')</script>";
        echo "<script>window.location.href='../withdraw_request.php'</script>";
    } else {
        echo "<script>alert('Success')</script>";
        echo "<script>window.location.href='../withdraw_request.php'</script>";
    }

}

?>