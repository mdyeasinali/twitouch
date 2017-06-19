<?php
	if(isset($_POST['submit']))
	{
		$catagory = $_POST['catagory'];

		if($catagory=="Captcha"){


            // Set the content-type
            header('Content-type: image/png');
            // Create the image
                        $im = imagecreatetruecolor(400, 30);
            // Create a few colors
                        $white = imagecolorallocate($im, 255, 255, 255);
                        $grey = imagecolorallocate($im, 128, 128, 128);
                        $black = imagecolorallocate($im, 0, 0, 0);
                        imagefilledrectangle($im, 0, 0, 399, 29, $white);
            // set the text to draw
                        $text = 'Testing...';
            // Replace path by your own font path
            putenv('GDFONTPATH=' . realpath('.'));
                        $font = 'fonts/arial.ttf';
            // Add a shadow to the text
                        imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);
            // And add the text
                        imagettftext($im, 20, 0, 10, 20, $black, $font, $text);
            // Using imagepng() results in clearer text compared with imagejpeg()
                        imagepng($im);


            $question = $_POST['answer'];
            $answer = $_POST['c_answer'];

        }else if($catagory=="Data Entry"){

            $question = $_POST['question'];
            $answer = $_POST['d_answer'];
        }else{
            $question = $_POST['answer'];
            $answer = $_POST['u_answer'];
        }



		$pay2 = $con->query("SELECT * FROM job_catagory WHERE catagory='$catagory'");
		$pay = $pay2->fetch_assoc();
		$payment = $pay['payment'];
		
		$add3 = $con->query("INSERT INTO job(catagory,question,answer,payment)VALUES('$catagory','$question','$answer','$payment')");
			if(!$add3)
			{
				echo "<script>alert('Database Error')</script>";
			}
			else
			{
				echo "<script>alert('Success')</script>";
			}
	}
?>