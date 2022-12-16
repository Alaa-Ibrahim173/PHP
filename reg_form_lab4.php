<!DOCTYPE html>
<html lang="en">
<body>

<?php $name=$email=$gender="";
?>
<?php
    ?>
    <form method='post' action="reg_form_lab4_1.php" style="width:500px;border:1px solid black;height:550px;padding:0.125px 50px 10px 50px;font-family:Helvetica;color:darkslate0grey;margin:150px 600px 150px 600px;">
    
    <h1> User Registeration Form </h1>
   <hr>
   <p>Please fill this and submit to add user record to the data base .</p>
   
   <div>
    <p style="font-weight:bold;">Name</p>
    <input type="text" name="name" id="name" style="width: 500px;height:35px;border-radius:3px;border:1px solid Gainsboro;" value="<?php echo $name;?>" >
   </div>
    
   <div>
    <p style="font-weight:bold;">Email</p>
   <input type="email" name="email" id="email" style="width: 500px;height:35px;border-radius:3px;border:1px solid Gainsboro;" value="<?php echo $email;?>">
   </div>

   <div style="font-weight:bold;">
    <p>Gender</p>
    <input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="F") echo "checked"; ?>value="F">F<br/><br/>
    <input type="radio" name="gender" id="gender"<?php if (isset($gender) && $gender=="M") echo "checked";?> value="M">M
    </div><br/>
    
   <input type="checkbox"name="mail_status"id="mail_status"value="<?php echo $mail_status;?>">
   <span style="font-weight:bold;">Receive E-mails from us.</span><br/>

    <input type="submit" value="Submit"style="background-color:#4682B4;color:white;padding:7px 10px;font-size: 15px;text-align: center;
    cursor: pointer;border: none;border-radius: 3px;margin:3px 5px 5px 5px;">

    <input type="button" value="Cancel" style="background-color:white;color:black;padding:7px 10px;font-size: 15px;text-align: center;
    cursor: pointer;border: none;border-radius: 3px;margin:3px 5px 5px 5px;border:1px solid silver">
</form>
<?php

    /*echo "<br/>Test :  <br/>";
    echo $name;
    echo "<br/>";
    echo $email;
    echo "<br/>";
    echo $gender;*/
    
?>
    
    
   
    
</body>
</html>