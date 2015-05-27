<form action="" method="post" name="pdyear">
请输入年份：
<input name="year" size="12" type="text" value="<?php echo $_POST['year']?>"/>
<input name="OK" type="submit" value="判断"/>
</form>
<?php
if (isset($_POST["OK"])){
	$year=$_POST["year"];
	//if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0){
	if(($year% 4 == 0 && $year % 100 != 0)||($year % 400 == 0)){
	echo $year."是闰年"."</br>";
 }
	else {echo $year."不是闰年";}
}
?>
