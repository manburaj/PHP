<?php
session_start();
if(isset($_SESSION["user"])){
    echo "<h1>Welkom ".$_SESSION["user"]["name"]." op het website</h1>";
    echo "<p><a href='login.php'>Login</a></p>";
    //alles ok
}else{
    header('location: login.php');
    //terug
}