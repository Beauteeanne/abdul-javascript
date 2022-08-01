<?php
function is_user_authenticated()
{
    return isset($_SESSION['email']);
}

function ensure_user_is_authenticated()
{
    if(!is_user_authenticated())
    {
        header('location:sign.php');
        die();
    }
}

?>