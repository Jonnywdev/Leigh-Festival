<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect values of input field
    $email = $_POST['emailAddress'];
    $subject = $_POST['emailSubject'];
    $message = "" . $_POST['emailMessage'] . $email;
    if (empty($email) || empty($subject) || empty($message)) {
      echo "No Email";
    } else {
        echo "Email, Subject, Message";
        // send email
        // TWAV email after test chris@collinsanddarwell.co.uk
        if(mail("Jonny.whittle@sky.com",$subject,$message)){
            //what after email sends
                echo"<h1>email has been sent</h1>";
        }else{
            echo "Email not sent";
        }
    }
  }
?>
