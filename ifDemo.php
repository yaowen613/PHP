<?php
date_default_timezone_set('PRC');//设置北京时间
echo "现在时间是：".date('Y-m-d H:i:s')."</br>";
$t=(int)date("H");
if($t>=6&&$t<=12)	echo "上午好；";
if($t>=12&&$t<=18) echo "下午好；";
if($t>=18&&$t<=24||$t>=0&&$t<=6) echo "晚上好；";
?>