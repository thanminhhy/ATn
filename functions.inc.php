<?php

function uidExists($conn, $username){
    $pg = "SELECT * FROM user_information WHERE user_name = ?;";
    $stmt = pg_stmt_init($conn);
    if(!pg_prepare($pg))
    {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }
}

function emptyInputLogin($username,$pwd)
{
    $result;
    if(empty($username) || empty($pwd))
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExists($conn, $username);

    if($uidExists == false)
    {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
}
