
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/boostrap.css">
    <title>Renting</title>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$().ready(function(){
  
  $("#show").click(function(){
    $(".menu").css("display", "block");

  });
});
</script>
<style>
   
ul.ks-cboxtags {
    list-style: none;
    padding: 20px;
}
ul.ks-cboxtags li{
  display: inline;
}
ul.ks-cboxtags li label{
    /*display: inline-block;*/
    background-color: rgba(255, 255, 255, .9);
    border: 2px solid rgba(139, 139, 139, .3);
    color: #404040;
    border-radius: 25px;
    white-space: nowrap;
    margin: 3px 0px;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    transition: all .2s;
    border: 2px solid #404040;
}

ul.ks-cboxtags li label {
    padding: 8px 12px;
    cursor: pointer;
}

ul.ks-cboxtags li label::before {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 12px;
    padding: 2px 6px 2px 2px;
    content: "\f067";
    transition: transform .3s ease-in-out;
}

ul.ks-cboxtags li input[type="checkbox"]:checked + label::before {
    content: "\f00c";
    transform: rotate(-360deg);
    transition: transform .3s ease-in-out;
}

ul.ks-cboxtags li input[type="checkbox"]:checked + label {
    border: 2px solid #1bdbf8;
    background-color: #109bb0;
    color: #fff;
    transition: all .2s;
}

ul.ks-cboxtags li input[type="checkbox"] {
  display: absolute;
}
ul.ks-cboxtags li input[type="checkbox"] {
  position: absolute;
  opacity: 0;
}
ul.ks-cboxtags li input[type="checkbox"]:focus + label {
  border: 2px solid #8a8aff;
}
</style>
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="#">Renting</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php if(isset($_SESSION['auth'])){ ?>
                    <li ><a href="apps/logout.php">Log Out</a></li>
                <?php }
                else{ ?>
                    <li><a href="../views/registerForm.php">Register</a></li>
                    <li><a href="../renting/views/loginForm.php">Log In </a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <?php
    if (isset($_SESSION['flash'])):
        foreach ($_SESSION['flash'] as $type => $message):?>
            <div class="alert alert-<?= $type; ?>" class>
                <?=$message ?>
            </div>
        <?php endforeach; ?>
    <?php unset($_SESSION["flash"]);?>
    <?php endif; ?>