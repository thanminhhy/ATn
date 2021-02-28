
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
