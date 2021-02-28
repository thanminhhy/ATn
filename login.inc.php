<?php
  require_once 'dtb.inc.php';
        require_once 'functions.inc.php';
    if(isset($_POST["submit"]))
    {
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pg = "SELECT * FROM users WHERE username = '$username' AND password = '$password"
        $users = pg_query($conn,$pg);
        if(pg_run_row($user) > 0)
        {echo"Login successfully!"}
        else {
            echo"Wrong Information!"
        }
        
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
