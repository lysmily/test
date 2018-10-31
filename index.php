<?php
$time=date("Y/m/d");
if(strcmp($time,"2018/07/12")!=0)
{
echo "<script LANGUAGE='Javascript'>"; 
echo "location.href='timer.php'"; 
echo "</script>";
}
else
{
echo "<script LANGUAGE='Javascript'>"; 
echo "location.href='btday.html'"; 
echo "</script>";
}
?>
