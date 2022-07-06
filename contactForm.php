<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $maiTo = "shivkinga53@gmail.com";
    $headers = "From: ".$mailFrom;

    mail($maiTo, $subject, $message);
}