<?php
if (!empty($_POST) && isset($_POST)) {
   
    $name = test_input($_POST["username"]);
    $phone = test_input($_POST["phone"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["pwd1"]);
    $confirm = test_input($_POST["pwd2"]);
    $errors = array();
    require('src/db.php');
    

    
    if (empty($name) || !preg_match('/^[a-zA-Z ]+$/', $name)) {
        $errors['name'] = 'Enter a validate  name (No numeric chars )';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a validate email)';
    } else {
        $req = $pdo->prepare("SELECT email_user FROM user WHERE  email_user='$email'");
        $req->execute();
        $user = $req->fetch();
        
        if ($user) {
            $errors['email'] = "this email exists";
        }
    }

   
    if (strlen($password) < 8 ) {
        $errors['password'] = 'Password must have at least 8 characters';
    }

    if (empty($password) || empty($confirm)) {
        $errors['password'] = 'Password is required';
    }
    if ($password != $confirm) {
        $errors['password'] .= 'passwords dosent match ';
    }
    if (empty($errors)) { 
        $password = crypt($password, '$2a$07$usesomesillystringforsalt$');
        $token = str_random(60);
        $req = $pdo->prepare("INSERT INTO user (email_user, name, phone, password, token) VALUES ('$email','$name',
    '$phone','$password','$token')");
        
        $req->execute();
        
        $_SESSION['flash']['success']="Succssful Registration !";
        header('location: ../views/loginForm.php');
        exit();


    }

}
?>