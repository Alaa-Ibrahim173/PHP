<html>
   <head>
      <style>
       img{width:20px;height:20px;}
       table td, table th {
    border: 1px solid Gainsboro;
}

body{
   width: 600px;
}
      </style>
</head>
<body>
<form action="" method="POST" >
<?php
require_once "configure.php";
 //echo 'Connected successfully';

$name=$email=$gender='';
 mysqli_select_db( $conn,'users_details');
 if(!empty($_POST))
 {$name=$_POST['name'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 if(isset($_POST['mail_status'])) 
 {$mail_status="yes";}
 else{
  $mail_status="no"; }
 if(!empty(($name&&$email&&$gender&&$mail_status))){
 $sql="insert into user(name,email,gender,mail_status)values('$name','$email','$gender','$mail_status')"; 

 $result = mysqli_query( $conn,$sql );
   
   if(! $result ) {
      die('Could not insert to table: ' . mysqli_error($conn));
   }
} }  
   //echo "<br>Data inserted to table successfully\n";
   
 //echo 'Connected successfully';
 $sql="select * from user";
 //
 $result = mysqli_query( $conn,$sql );
 
 if(! $result ) {
    die('Could not insert to table: ' . mysqli_error($conn));
 }?>
 

<h2>User Details.<a href="reg_form_lab4.php"><input type="button" name="add new user"value="add new user"style="margin-left: 200px;background-color:green;color:white;border-radius:3px;height:25px;"></a></h2><hr>

 <table style="border:1px solid Gainsboro;font-size:15px;width:600px;">
 <thead>
     <tr>
                     <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Mail status</th>
                    <th>Action</th>
     </tr>
 </thead>
<tbody>

<?php
if(mysqli_num_rows($result)>0){
while ($row=mysqli_fetch_assoc($result)) {
?>   

<td><?php echo $row['id']?></td>
    <td><?=$row['name']?></td>
    <td><?=$row['email']?></td>
    <td><?=$row['gender']?></td>
    <td><?=$row['mail_status']?></td>
    <td><a href="view.php?id=<?=$row['id']?>"><image src="view.jpg" href="#view"></a>
    |<a href="edit.php?id=<?=$row['id']?>"><img src="edi.jfif" href="#edit"></a>
    |<a href="delete.php?id=<?=$row['id']?>"><img src="delete.png" href="#delete"></a></td>
</tr>
<?php
}}
else{
   echo"0 results";
}
?>
</tbody>
</table>
</form>
</body>
</html>
<?php
 //echo "<br>Data inserted to table successfully\n";
 mysqli_close($conn);
 
?>

