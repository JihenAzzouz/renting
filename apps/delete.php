<?php


if (isset($_POST['delete']))
{
 

  $req = $pdo->prepare("DELETE FROM villa WHERE id_villa='$field1name'");
  $req->execute();
  $pdo=null;
  $_SESSION['flash']['success']="Villa deleted Succssfully !";

}

     
       
?>