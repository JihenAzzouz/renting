<?php
    require_once '../apps/src/functions.php';
    require_once '../views/src/header.php';
    require '../apps/src/db.php';
    
    $req = $pdo->prepare("SELECT price,nights,explanation,max_person,door,building,street,state,country,id_villa FROM villa");
    $req->execute();
    

    while ($row  = $req->fetch()) {
        $p = $row[0];
        $n = $row[1];
        $d = $row[2];
        $pe = $row[3]; 
        $d = $row[4]; 
        $b = $row[5];
        $str = $row[6];
        $st = $row[7];
        $c = $row[8];
               
    }


  
if (!empty($_POST) && isset($_POST)) {
   
    $type = test_input($_POST["type"]);
    $desc = test_input($_POST["description"]);
    $price = test_input($_POST["price"]);
    $nights = test_input($_POST["nights"]);
    $people = test_input($_POST["people"]);
    $checkinList=implode(',', $_POST['checkin']);  
    $checkoutList=implode(',', $_POST['checkout']);
    $equipList = implode(',', $_POST['equip']);
    $door = test_input($_POST["door"]);
    $building = test_input($_POST["building"]);
    $street = test_input($_POST["street"]);
    $state = test_input($_POST["state"]);
    $country = test_input($_POST["country"]);
    $errors = array();
    
    
    if (empty($building) || !preg_match('/^[a-zA-Z0-9]+$/', $building)) {
        $errors['building'] = 'Enter a validate  name of the building';
    }
    if (empty($state) || !preg_match('/^[a-zA-Z]+$/', $state)) {
        $errors['state'] = 'Enter a validate  state';
    }
    if (empty($country) || !preg_match('/^[a-zA-Z]+$/', $country)) {
        $errors['country'] = 'Enter a validate  country';
    }
    if (empty($price) || !filter_var($price, FILTER_VALIDATE_FLOAT)) {
       $errors['price'] = "write a valide price\n";
    }
   
    if (empty($errors)) { 
        $id = $_GET['id'];
        
        $req = $pdo->prepare("UPDATE villa SET price='$price',nights='$nights',type='$type',explanation='$desc',max_person='$people',checkin='$checkinList',checkout='$checkoutList',door='$door',building='$building',street='$street',state='$state',country='$country',equipments='$equipList' WHERE id_villa='$id'");
        
        $req->execute();
        $pdo=null; 
        header('location: ../index.php');
        $_SESSION['flash']['success']="Villa updated Succssfully !";
        
                //exit();
    }
}
?>