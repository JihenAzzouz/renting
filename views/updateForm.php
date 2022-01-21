<?php require_once "../apps/update.php";
logged_only();
require_once '../views/src/header.php';
 if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <p> you didn't fill the inputs correctly </p>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<div class='menu'>
<div class="col-xs-6">
<form action="" method="post">
    <div class="form-group">
        <label>Type of Housing : </label>
         <select name="type">
            <option value="0">Select housing:</option>
            <option value="regular">Regular</option>
            <option value="cottage">cottage</option>
            <option value="duplex">duplex</option>
        </select>
    </div>
    <div class="form-group">
        <label> Description: </label>
        <input type="textarea" name="description" class="form-control" value="<?=$d ?>">
    </div>
    <div class="form-group">
        <label>Price Per Night : </label>
        <input type="text" name="price" class="form-control" value="<?=$p ?>">
    </div>
    <div class="form-group">
        <label>Number of Nights : </label>
        <input type="number" name="nights" class="form-control" value="<?=$n ?>">
    </div>
  
    
    <div class="form-group">
        <label>Max Number of  people: </label>
        <input type="number" name="people" class="form-control" value="<?=$pe ?>">
    </div>
    <div class="form-group">
        <label>choose the times for the Check in </label>
       <div class="row">
           <div class="col-xs-4">
           <input type="checkbox" name="checkin[]" value='00:00'> 00:00
           <input type="checkbox" name='checkin[]' value='01:00'> 01:00
           <input type="checkbox" name='checkin[]' value='02:00'> 02:00
           <input type="checkbox" name='checkin[]' value='03:00'> 03:00
           <input type="checkbox" name='checkin[]' value='04:00'> 04:00
           <input type="checkbox" name='checkin[]' value='05:00'> 05:00
           <input type="checkbox" name='checkin[]' value='06:00'> 06:00
           <input type="checkbox" name='checkin[]' value='07:00'> 07:00
           </div>
           <div class="col-xs-4">
           
           <input type="checkbox" name='checkin[]' value='08:00'> 08:00
           <input type="checkbox" name='checkin[]' value='09:00'> 09:00
           <input type="checkbox" name='checkin[]' value='10:00'> 10:00
           <input type="checkbox" name='checkin[]' value='11:00'> 11:00
           <input type="checkbox" name='checkin[]' value='12:00'> 12:00
           <input type="checkbox" name='checkin[]' value='13:00'> 13:00
           <input type="checkbox" name='checkin[]' value='14:00'> 14:00
           <input type="checkbox" name='checkin[]' value='15:00' checked> 15:00
           

           </div>
           <div class="col-xs-4">
           <input type="checkbox" name='checkin[]' value='16:00'> 16:00
           <input type="checkbox" name='checkin[]' value='17:00'> 17:00
           <input type="checkbox" name='checkin[]' value='18:00'> 18:00
           <input type="checkbox" name='checkin[]' value='19:00'> 19:00
           <input type="checkbox" name='checkin[]' value='20:00'> 20:00
           <input type="checkbox" name='checkin[]' value='21:00'> 21:00
           <input type="checkbox" name='checkin[]' value='22:00'> 22:00
           <input type="checkbox" name='checkin[]' value='23:00'> 23:00

           </div>
        </div>
         
    
    </div>
     <div class="form-group">
        <label>choose the times for the Check out </label>
       <div class="row">
           <div class="col-xs-4">
           <input type="checkbox" name='checkout[]' value='00:00'> 00:00
           <input type="checkbox" name='checkout[]' value='01:00'> 01:00
           <input type="checkbox" name='checkout[]' value='02:00'> 02:00
           <input type="checkbox" name='checkout[]' value='03:00'> 03:00
           <input type="checkbox" name='checkout[]' value='04:00'> 04:00
           <input type="checkbox" name='checkout[]' value='05:00'> 05:00
           <input type="checkbox" name='checkout[]' value='06:00'> 06:00
           <input type="checkbox" name='checkout[]' value='07:00'> 07:00
           </div>
           <div class="col-xs-4">
           
           <input type="checkbox" name='checkout[]' value='08:00'> 08:00
           <input type="checkbox" name='checkout[]' value='09:00'> 09:00
           <input type="checkbox" name='checkout[]' value='10:00' checked> 10:00
           <input type="checkbox" name='checkout[]' value='11:00'> 11:00
           <input type="checkbox" name='checkout[]' value='12:00'> 12:00
           <input type="checkbox" name='checkout[]' value='13:00'> 13:00
           <input type="checkbox" name='checkout[]' value='14:00'> 14:00
           <input type="checkbox" name='checkout[]' value='15:00'> 15:00
           

           </div>
           <div class="col-xs-4">
           <input type="checkbox" name='checkout[]' value='16:00'> 16:00
           <input type="checkbox" name='checkout[]' value='17:00'> 17:00
           <input type="checkbox" name='checkout[]' value='18:00'> 18:00
           <input type="checkbox" name='checkout[]' value='19:00'> 19:00
           <input type="checkbox" name='checkout[]' value='20:00'> 20:00
           <input type="checkbox" name='checkout[]' value='21:00'> 21:00
           <input type="checkbox" name='checkout[]' value='22:00'> 22:00
           <input type="checkbox" name='checkout[]' value='23:00'> 23:00

           </div>
        </div>
         
    
    </div>

  <ul class="ks-cboxtags">
    <li><input type="checkbox" name='equip[]' id="checkboxOne" value="shower"><label for="checkboxOne">Shower</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxTwo" value="fire place"><label for="checkboxTwo">fire place</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxThree" value="fridge" checked><label for="checkboxThree">fridge</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxFour" value="oven"><label for="checkboxFour">oven</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxFive" value="barbacue"><label for="checkboxFive">barbacue</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxSix" value="toaster" checked><label for="checkboxSix">toaster</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxSeven" value="iron"><label for="checkboxSeven">iron</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxEight" value="internet"><label for="checkboxEight">internet</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxNine" value="tv"><label for="checkboxNine">TV</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxTen" value="sauna"><label for="checkboxTen">Sauna</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxEleven" value="jacuzzi"><label for="checkboxEleven">Jacuzzi</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxTwelve" value="air conditioning"><label for="checkboxTwelve">air conditioning</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxThirteen" value="pool"><label for="checkboxThirteen">swimming pool</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxFourteen" value="sun bed"><label for="checkboxFourteen">sun bed</label></li>
    <li><input type="checkbox" name='equip[]' id="checkboxFifteen" value="wash machine"><label for="checkboxFifteen">wash machine</label></li>
  </ul>
<h4>Address</h4>
<div class="form-group">
        <label>Number of door  : </label>
        <input type="number" name="door" class="form-control" value="<?= $d ?>">
    </div>
    <div class="form-group">
        <label> Building : </label>
        <input type="textarea" name="building" class="form-control" value="<?= $b ?>">
    </div>
    <div class="form-group">
        <label>Street : </label>
        <input type="text" name="street" class="form-control" value="<?= $str ?>">
    </div>
    <div class="form-group">
        <label>State : </label>
        <input type="text" name="state" class="form-control" value="<?= $st ?>">
    </div>
    
    <div class="form-group">
        <label>Country: </label>
        <input type="text" name="country" class="form-control" value="<?= $c ?>">
    </div>
    <input type="submit" value="add" class="btn btn-primary">

</form>
</div>
</div>