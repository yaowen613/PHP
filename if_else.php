<form action="" method="post" name="pdyear">
��������ݣ�
<input name="year" size="12" type="text" value="<?php echo $_POST['year']?>"/>
<input name="OK" type="submit" value="�ж�"/>
</form>
<?php
if (isset($_POST["OK"])){
	$year=$_POST["year"];
	//if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0){
	if(($year% 4 == 0 && $year % 100 != 0)||($year % 400 == 0)){
	echo $year."������"."</br>";
 }
	else {echo $year."��������";}
}
?>
