<?php
date_default_timezone_set('PRC');//���ñ���ʱ��
echo "����ʱ���ǣ�".date('Y-m-d H:i:s')."</br>";
$t=(int)date("H");
if($t>=6&&$t<=12)	echo "����ã�";
if($t>=12&&$t<=18) echo "����ã�";
if($t>=18&&$t<=24||$t>=0&&$t<=6) echo "���Ϻã�";
?>