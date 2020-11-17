<?php
echo $_SERVER["SERVER_NAME"]."<BR/>";
echo $_SERVER["SERVER_PROTOCOL"];
echo "<br>";
echo $_SERVER["SERVER_PORT"];

//set cookie
$month =  86400 + time();
//setcookie('name','Adebayo',$month);
//echo 'cookie has been set';
echo  "<br> ".$_SERVER["HTTP_USER_AGENT"];
//constant
echo "<br>";
define("HP","LAZER");
echo HP;
?>
<script>
console.table(["Mango","Tomatos","Onion"]);
</script>