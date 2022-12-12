<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        border:1px solid grey;
        font: 12px sans-serif bold;
        color: purple;  text-align:left;width:600px;
      }
      form{
      
        border: 1px solid black;
        padding:1px 1px 1px 1px;
        
      }

.error {color: #FF0000;}
</style>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST" >
    
    <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $AgreeErr = "";
        $name = $email = $gender = $Class_details = $Agree=$Group=$Select_Courses= "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name =$_POST["name"];
          }
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = $_POST["email"];
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Email is required";
            }
          }
          
          if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = $_POST["gender"];
          }
          if (empty($_POST["Agree"])) {
            $AgreeErr = "you must agree to terms";
          }

          if (!(empty($_POST["Group"]))) {
            $Group = $_POST["Group"];
          }
          if (!(empty($_POST["Class_details"]))) {
            $Class_details=$_POST["Class_details"];
          }
          if (!(empty($_POST["Courses"]))) {
            echo"";
            
        }
        }
        ?>
        
        <h2>Application name:AAST_BIS class registeration</h2>
        <p><span class="error">*Required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
          <tr><td>Name:</td>
          <td><input type="text" name="name" value="<?php echo $name;?>">
          <span class="error">* <?php echo $nameErr;?></span></td></tr>
          <tr>
            <td>E-mail:</td>
            <td> <input type="email" name="email" value="<?php echo $email;?>">
          <span class="error">* <?php echo $emailErr;?></span></td>
          </tr>
          <tr>
            <td>Group# </td>
            <td><input type="number" name="Group" value="<?php echo $Group;?>"></td>
          </tr>
          <tr>
            <td>Class_details:</td>
            <td><textarea name="Class_details" rows="5" cols="40"><?php echo $Class_details;?></textarea></td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
          <span class="error">* <?php echo $genderErr;?></span></td>
          </tr>
          <tr>
            <td>Select_Courses: </td>
            <td><select  name="Courses[]" multiple size= 4>
          
        <option id="0"value="PHP">PHP</option>
        <option id="1"value="Javascript">Javascript</option>
        <option id="2"value="MySQL">MySQL</option>
        <option id="3"value="HTML">HTML</option>
       
      </select></td>
          </tr>
          <tr>
            <td>Agree:</td>
            <td><input type="checkbox" id="Agree"name="Agree" value="Agree" <?php echo isset($_POST['Agree']) ? "checked" :""; ?>/>  
      <span class="error">* <?php echo $AgreeErr;?></span></td>
          </tr>
          <tr>
            <td><input type="submit" name="submit" value="Submit"></td>
          </tr>
        </table>  
        
        </form>
        
        <?php
        echo "<h2>Your given values are as:</h2>";
        echo"name:   ";
        echo $name;
        echo "<br>";
        echo"email:  ";
        echo $email;
        echo "<br>";
        echo "group:  ";
        echo $Group;
        echo "<br>";
        echo "class details:  ";
        echo $Class_details;
        echo "<br>";
        echo "gender:         ";
        echo $gender;
        echo "<br>";
        echo "your courses are: ";
        foreach ($_POST['Courses'] as $Select_Courses)
        {echo'  '.$Select_Courses;}
        
        ?>
        
</body>
</html>