<?php
//Show your phpinfo on browser.
echo phpinfo();
echo "<br>";
//Use constant to display your website name which mustn’t change across your pages.
define("lab", "lab1.com");
echo '<span style="color: red; font-size: 35px;"> ' .lab;
echo "<br>";
//Show your server :name, address, port,filename and path of the currently executing script.
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
/*Your brother is 10 years old, If you know that :
    age less than 5 --> Print Msg --> Stay at home,
    age equal 5 --> Print Msg --> Go to Kindergarden,
    age between 6 & 12 --> Print Msg --> Go to grade :XXX
    (Use switch case).*/
    $age_of_your_brother=;
    switch ($age_of_your_brother) {
      case $age_of_your_brother<5:
        echo "Stay at home";
        break;
      case $age_of_your_brother==5:
        echo "Go to Kindergarden";
        break;
      case $age_of_your_brother>6 and $age_of_your_brother<12:
        echo "Go to grade :XXX";
        break;
      }
?>