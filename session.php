<?php
session_start();
//echo '<pre>';
var_dump($_SESSION);
echo '<pre>';
if(isset($_SESSION['page_count']))
    $_SESSION['page_count']+=1;
else
    $_SESSION['page_count']=1;

$msg="you have viewed my page <span style='color:red'>".$_SESSION['page_count'];
$msg.="&nbsp;</span>in this session.";

if($_SESSION['page_count']>10)
{echo "Thank you for your visit to our website <span style='color:green'>more than 10 </span>&nbsp;times";
    echo '<pre>'; 
    echo $msg;
}echo '<pre>';
var_dump($_SESSION);
//print_r($_SESSION);
//echo '<pre>';
//delete session
//session_destroy();
//unset($_SESSION['pagecount']);
//setcookie('PHPSESSID',time()-1);
?>