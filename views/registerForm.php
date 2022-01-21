<?php

require '../apps/src/functions.php';
//require '../apps/login.php';
require '../apps/register.php';
require 'src/header.php';
?>
    <div class="col-xs-6 "><br><br><br><br>
        <img src="https://ak9.picdn.net/shutterstock/videos/10233779/thumb/1.jpg" class="img-responsive" alt="" >
    </div>
    <div class="col-xs-6">
    <h1>Register Form</h1>
<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <p> you didn't fill the inputs correctly </p>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
    <form method="POST" action="">
        <div class="form-group">
            <label>Username :</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label>Phone :</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input type="password" name="pwd1" class="form-control">
        </div>
        <div class="form-group">
            <label>Password Confirmation :</label>
            <input type="password" name="pwd2" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="submit">
    </form>
    </div>
<?php require 'src/footer.php'; ?>