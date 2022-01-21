<?php

require_once 'src/functions.php';
require_once 'src/db.php';
reconnect();
if (isset($_SESSION['auth'])){
    header("location ../index.php");
    var_dump($_SESSION['auth']);
    exit();
}

if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['pwd'])) {

    $username = $_POST['username'];
    
    $req = $pdo->prepare("SELECT * FROM user WHERE (email_user = '$username') ");
    $req->execute();
    $user = $req->fetch();
    
    //var_dump($user);
    if ($_POST['pwd']===$user[3]) {
        echo "string";
        $_SESSION['auth'] = $user;

        $_SESSION['flash']['success'] = 'You are now connected';

        if ($_POST['remember']) {
            $remember_token = str_random(255);
            $pdo->prepare('UPDATE  user SET remember_token=? WHERE email_user=?')->execute([$remember_token, $user[0]]);
            setcookie('remember', $user[0] . '==' . $remember_token/*,md5($user[0]."fool")*/, time() + 60 * 60 * 24 * 7);

        }

        header('Location: ../index.php');
        exit();

    } else {

        $_SESSION['flash']['danger'] = 'username or password is incorrect';

    }
}
?>