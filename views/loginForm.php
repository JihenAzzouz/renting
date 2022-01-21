
<?php 
require 'src/header.php';
require '../apps/login.php';
 ?>
<div class="col-xs-6"><br><br><br><br>
    <img src="https://freedesignfile.com/upload/2017/01/Girl-watching-movies-on-a-computer-HD-picture.jpg" class="img-responsive"
         alt="" width="700" height="100%">
</div>
<div class="col-xs-6">
<h1>Log In </h1>
<form action="" method="post">
    <div class="form-group">
        <label>Username : </label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label>Password : <a href="#">(I forgot my password)</a></label>
        <input type="password" name="pwd" class="form-control">

    </div>
    <div class="form-group">
        <input type="checkbox" name="remember" value="1">Remember Me
    </div>
    <input type="submit" value="Connexion" class="btn btn-primary">
</form>
<div>
<br><br>
<p>Not yet a member?<a href="registerForm.php"> Sign Up now</a></p>
</div>
</div>
<?php 'src/footer.php' ?>