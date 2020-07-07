<?php


$to = "hassanjrao@gmail.com";
$subject = $_POST["subject"];
$txt = "Name: " . $_POST["name"] . "\nMobile: " . $_POST["mobile"] . "\nCity: " . $_POST["city"] . "\nComment: " . $_POST["comment"];
$from = $_POST["email"];

$headers = "From: $from" . "\r\n" . "Reply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $txt, $headers)) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                Email sent <strong>successfully!</strong>
               
             </div>";
} else {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        Email does not send!
     </div>";
}
