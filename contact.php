<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    echo'<script>console.log("posted");</script>';
    $fullName = $_POST['name'];
    $emailAddress = $_POST['mail'];
    $emailSubject = $_POST['subject'];
    $emailMessage = $_POST['message'];

    $mailTo = "jonny.whittle@sky.com";
    $headers = "From: ".$emailAddress;
    $txt = "You have recieved an email from".$fullName.".\n\n".$emailMessage;

    mail($mailTo, $emailSubject, $txt, $headers);

    header("Location: index.html?mailsent");

}

?>