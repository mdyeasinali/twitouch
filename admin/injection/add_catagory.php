<?php
if (isset($_POST['submit'])) {
    $catagory = $_POST['catagory'];
    $payment = $_POST['payment'];
    $status = "Active";

    $add2 = $con->query("SELECT * FROM job_catagory WHERE catagory='$catagory'");
    $add = $add2->num_rows;
    if ($add > 0) {
        echo "<script>alert('Catagory already exits')</script>";
    } else {
        $sql = "INSERT INTO job_catagory(catagory,payment,status)VALUES('$catagory','$payment','$status')";
        if ($con->query($sql) === TRUE) {
            echo "<script type= 'text/javascript'>alert('New Catagory Added successfully');</script>";
        } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error . "');</script>";
        }
    }
}

if (isset($_POST['update'])) {
    $catagory = $_POST['update_catagory'];
    $payment = $_POST['update_payment'];
    $status = "Active";
    $cat_id = $_REQUEST['cat_id'];

    $query = $con->query("UPDATE `job_catagory` SET catagory = '$catagory' ,payment = '$payment' ,status = '$status' WHERE catagory_id = '$cat_id'");
    if ($query) {
        echo "<script>alert('Sucess!!!')</script>";
        echo "<script>window.location.href='job_catagory.php'</script>";
    } else {
        echo "<script>alert('error!!!')</script>";
        echo "<script>window.location.href='job_catagory.php'</script>";
    }
}


?>