<?php
//print_r ($_SERVER);
echo $_SERVER,"<br>";
foreach($_SERVER as $key => $value){
    echo "<b>$key:</b> $value<br>\n";
  }
  echo nl2br("<br>\n");
  echo "<br\n>question 4<br\n>";
  $numbers=array("[1]"=>45,"[0]"=>12,"[3]"=>25,"[2]"=>0);
  /*numbers[1]=45;numbers[0]=12;numbers[3]=25;numbers[2]=10*/
  $sum= array_sum($numbers);
  $average = array_sum($numbers)/count($numbers);   
  echo "sum="."$sum<br\n>";
  echo "average="."$average<br\n>";
  echo "<br\n>value reverse sort<br\n>";

  arsort($numbers);
  foreach($numbers as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br\n>";
}
echo "<br\n>key reverse sort<br\n>";
  krsort($numbers);
  foreach($numbers as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br\n>";
}
echo "<br\n>array reverse sort<br\n>";
rsort($numbers);
foreach($numbers as $x=>$x_value)
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br\n>";
}
echo "question 5<br\n>a)ascending order sort by value<br\n>";
$names=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);

//a)ascending order sort by value
asort($names);
foreach($names as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br\n>b)ascending order sort by Key<br\n>";
//b)ascending order sort by Key
ksort ($names);
foreach($names as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo("<br\n>c)descending order sorting by Value<br\n>");
//c)descending order sorting by Value
arsort($names);
foreach($names as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo("<br\n>c)descending order sorting by Value<br\n>");
//c)descending order sorting by Value
krsort($names);
foreach($names as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
