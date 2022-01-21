<?php
function debug($var)
{
    echo '<pre>' . print_r($var, true) . '</pre>';
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function str_random($length)
{
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);

}

function logged_only()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();

    }
    else if (!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] = "You don't have the right to access to this page";
        header('location: ../views/loginForm.php');
        exit();

    }
    else
        echo "go away";

}

function reconnect()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        
    }
    else if (isset($_COOKIE['remember']) && !isset($_SESSION['auth'])) {
        $remember_token = $_COOKIE['remember'];
        explode('==', $remember_token);
        $p = explode('==', $remember_token);
        $user_id = $p[0];

        if (!isset($pdo)) {
            global $pdo;
        }
        $req = $pdo->prepare("SELECT * FROM user WHERE email_user= '$user_id'");
        $req->execute();
        $user = $req->fetch();
        if ($user) {
            $exp = $user_id . "==" . $user[4];
            if ($exp == $_COOKIE['remember']) {

                $_SESSION['auth'] = $user;
                setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7);
                //header('location:  index.php');
                //exit();
            } else {
                setcookie('remember', NULL, -1);
            }

        } else {
            setcookie('remember', NULL, -1);
        }
    }
}