<?php
$i=1;
$sum=0;
do {//无论条件是否成立，先执行一次循环体；
	$sum+=$i;
	$i++;
}while ($i<=100);//判断条件是否成立
echo "1+2+3+...+99+100=".$sum;
?>