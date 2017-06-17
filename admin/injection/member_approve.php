<?php
require_once ('../db.php');
if(isset($_GET['member_id']))
{
    $member_id = $_GET['member_id'];
    $sql = $con->query("SELECT * FROM member WHERE member_id='$member_id'");
    $sql2 = $sql->fetch_assoc();
        $username = $sql2['username'];
   // $date = date("Y/m/d");
    $status = "Active";

    $q = $con->query( "UPDATE `member` SET `status` = '$status', approve_date=NOW()  WHERE `member_id` = '$member_id'");
    $q2 = $con->query("UPDATE users SET status='$status' WHERE username='$username'");
    if(!$q or !$q2 ){
        echo "<script>alert('Error!!!')</script>";
        echo "<script>window.location.href='../member_request.php'</script>";
    }
    else
    {
        echo "<script>alert('Success')</script>";
        echo "<script>window.location.href='../member_request.php'</script>";
    }
}
?>
