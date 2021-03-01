<?php
    session_start();
    if(isset($_POST["submit"] && $_POST["username"] != '' && $_POST["pwd"] != ''))
    {
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
    }
    else{
        header("location: ../login.php");
    }
?>
