<?php
session_start();
$username = $_POST['Username'];
$password = $_POST['Password'];
    if ($username == 'admin' && $password == '123') {
        header("location:staff.html");
    } elseif ($username == 'boss' && $password == '123') {
        header("location:boss.html");
    } else
    {
        echo "<p>incorrect username and password</p>";
         header("location:login.html");
    }
?>
