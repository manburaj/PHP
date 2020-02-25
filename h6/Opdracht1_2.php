<?php

$users = array(
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201",

);

if (isset($_POST['button'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]] == $_POST['password']){
    $message = "Welkom";
} else {
    $message = "Sorry, geen toegang!";
}

echo $message;