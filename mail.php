<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "t@creationworks.coach";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
?>



//<?php
//    include("config.php");
//    $message = "";
//    if (isset($_POST['submit'])) {
//        //validated your inputs fields
//        $name    = $_POST['name'];
//        $email   = $_POST['email'];
//        $message = $_POST['message'];
//        $formcontent=$_POST["From: $name \n Message: $message"];
//        $recipient = "t@creationworks.coach";
//        $subject = "Contact Form";
//        $mailheader = "From: $email \r\n";
//        if (mail($recipient, $subject, $formcontent, $mailheader) {
//            $message = "ok";
//        }else{
//            $message = "could not send/ insert";
//        }
//        echo json_encode($message);
//    }
//?>