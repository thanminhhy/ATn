<?php
    if(isset($_POST["submit"]))
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
        require_once 'dtb.inc.php';
        require_once 'functions.inc.php';
        
        if(emptyInputLogin($username, $pwd) !== false)
        {
            header("location: ../login.php?error=emptyinput");
            exit();
        }
        loginUser($conn, $username, $pwd);
    }
    else{
        header("location: ../login.php");
        exit();
    }
?>
