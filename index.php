<?php
//ini_set('display_errors', 0);
require_once 'apps/src/functions.php';
logged_only();
require_once 'views/src/header.php';

?>

<h4> Hello ! <?= $_SESSION['auth'][0]; ?></h4>

<?php 
    require 'apps/src/db.php';
    require "apps/delete.php";
    $req = $pdo->prepare("SELECT id_villa,price,nights,type,max_person,checkin,checkout FROM villa");
    $req->execute();
     echo "<form method='POST'> <table class='table'> 
      <tr> 
          <th> ID Villa </th> 
          <th> Price Per night </th> 
          <th> Number of nights </th> 
          <th> Type of housing </th> 
          <th> max of people </th> 
          <th> Check In </th> 
          <th> Check Out </th> 
          <th> Operations </th> 
      </tr>";


    while ($row  = $req->fetch()) {
        $field1name = $row[0];
        $field2name = $row[1];
        $field3name = $row[2];
        $field4name = $row[3];
        $field5name = $row[4]; 
        $field6name = $row[5]; 
        $field7name = $row[6]; 

        echo "<tr> 
                  <td>".$field1name."</td> 
                  <td>".$field2name."</td> 
                  <td>".$field3name."</td> 
                  <td>".$field4name."</td> 
                  <td>".$field5name."</td> 
                  <td>".$field6name."</td> 
                  <td>".$field7name."</td> 
                  <td><a class='button' name='update' href='views/updateForm.php?id=<?php =$field1name ?>'>Update</button><button type='submit' class='button' name='delete'>Delete</button></td></tr>";
    }

    echo "
          <tr>
               <td><button class='button' id='show'>Add a New Villa </button></td>
          </tr>
    </table>
    </form>";
   
    
    require "views/addVilla.php";

?>
<?php require_once 'views/src/footer.php'; ?>
