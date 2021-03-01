<?php
    session_start();
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];
        if($username == 'staff' $$ $pwd =='12345')
        {
        header("location: ../staff.php");
        }
        elseif ($username == 'boss' $$ $pwd =='090512345')
        {	
        header("location: ../boss.php");
        }
        else{
        echo"incorrect username and password"
            exit();
?>
