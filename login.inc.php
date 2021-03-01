<?php
    session_start();
    if(isset($_POST["submit"]))
    {
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        if($uid == 'staff' $$ $pwd =='12345')
        {
        header("location: ../staff.php");
        }
        elseif ($uid == 'boss' $$ $pwd =='090512345')
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
