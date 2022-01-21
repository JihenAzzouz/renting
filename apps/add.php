<?php
  
if (!empty($_POST) && isset($_POST)) {
   
    $type = test_input($_POST["type"]);
    $desc = test_input($_POST["description"]);
    $price = test_input($_POST["price"]);
    $nights = test_input($_POST["nights"]);
    $people = test_input($_POST["people"]);
    $checkinList=implode(',', $_POST['checkin']);  
    $checkoutList=implode(',', $_POST['checkout']);
    $equipList = implode(', ', $_POST['equip']);
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
       
        $email_user=$_SESSION['auth'][0];
        $id = rand(100000,999999);
        $req = $pdo->prepare("INSERT INTO villa (id_villa, price, nights,type, explanation, email_user, max_person, checkin, checkout, door, building, street, state, country,equipments) VALUES ('$id','$price','$nights','$type','$desc','$email_user','$people','$checkinList','$checkoutList','$door','$building','$street','$state','$country','$equipList')");
        
        
        $req->execute();
        $pdo=null;
        $_SESSION['flash']['success']="Villa added Succssfully !";
        //header('location: index.php');
        //exit();


    }

}
?>