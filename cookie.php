<?php 

setcookie("name","<span style='font-size:20px;'>Alaa Ibrahim</span>",time()+60);
//setcookie("course","PHP",time()+60);
echo '<pre>';
var_dump($_COOKIE);
echo '<pre>';
?>
<html>
    <head>
<title>setting cookies with php</title>
    </head>
    <body>
<h1>Hello!</h1>
<?php echo "set cookies"."<br>";
if(isset($_COOKIE["name"]))
echo"welcome"."<br/>".$_COOKIE["name"];
else
echo "sorry ... Not recognized" ."<br/>";

//update cookie 
//setcookie("name","Hamaki");
//delete cookie else executed
//setcookie("name","Alaa Ibrahim",time()-1);


?>
    </body>
</html>