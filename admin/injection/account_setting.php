<?php

if(($_SERVER['REQUEST_METHOD'] == "POST")){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $h_img = $_POST['hidden_img'];


    $q2 = $con->query("UPDATE `users` SET `name`='$name',`username`='$username',`email`='$email' WHERE id='$id'");
    if($q2){
        echo "<script>alert('Sucess!!!')</script>";
        echo "<script>window.location.href='profile_view.php'</script>";
    }
    else{
        echo "<script>alert('Error!!!')</script>";
        echo "<script>window.location.href='profile_settings.php'</script>";
    }

    function img_upload($img,$path){
        if ((($_FILES[$img]["type"] == "image/gif")
                || ($_FILES[$img]["type"] == "image/jpeg")
                || ($_FILES[$img]["type"] == "image/jpg")
                || ($_FILES[$img]["type"] == "image/pjpeg")
                || ($_FILES[$img]["type"] == "image/x-png")
                || ($_FILES[$img]["type"] == "image/png"))
            && ($_FILES[$img]["size"] < 2000000))
        {
            if ($_FILES[$img]["error"] > 0)
            {
                $this->error = 10;
                return $this->error;
            }
            else
            {
                $rnd = rand(0,99999);
                if (file_exists($path. $_FILES[$img]["name"]))
                {
                    move_uploaded_file($_FILES[$img]["tmp_name"],$path. $rnd. $_FILES[$img]["name"]);
                    return 'image/'. $rnd . $_FILES[$img]["name"];

                }
                else
                {
                    move_uploaded_file($_FILES[$img]["tmp_name"],$path. $_FILES[$img]["name"]);
                    return 'image/'. $_FILES[$img]["name"];
                }
            }
        }
        else
        {
            $this->error = 10;
            return $this->error;
        }
    }
}
?>