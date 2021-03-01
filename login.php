<?php
session_start();
$username = $_POST['Username'];
$password = $_POST['Password'];
require_once 'functions.inc.php';
    if ($username == 'admin' && $password == '123') {
        header("location:staff.html");
    } elseif ($username == 'boss' && $password == '123') {
        header("location:boss.html");
    } else
    {
        echo "incorrect username and password";
         header("location:login.html");
    }
    if(isset($_GET["error"]))
            {
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields!</p>";
                }
?>
