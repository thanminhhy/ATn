<?php

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
