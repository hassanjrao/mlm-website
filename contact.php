<?php

if (isset($_POST["submit"])) {

    $to="rickson7@yahoo.com";
    $subject=$_POST["subject"];
    $txt="Name: ".$_POST["name"]."\nMobile: ".$_POST["mobile"]."\nCity: ".$_POST["city"]."\nComment: ".$_POST["comment"];
    $from=$_POST["email"];

    $headers="From: $from"."\r\n"."Reply-To: $from"."\r\n"."X-Mailer: PHP/".phpversion();

    if(mail($to,$subject,$txt,$headers)){
       echo "success";
    }
}
