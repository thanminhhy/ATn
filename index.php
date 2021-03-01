<?php
session_start();
$username = $_POST['Username'];
$password = $_POST['Password'];
    if ($username == 'staff' && $password == '123') {
        header("location:staff.html");
    } elseif ($username == 'boss' && $password == '12345') {
        header("location:boss.html");
    } else
    {
        require "login.html";
    }
?>
