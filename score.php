<form action="" method="post" name="pdyear">
������ɼ���
<input name="score" size="12" type="text" value="<?php echo $_POST['score'] ?>"/>
<input name="OK" type="submit" value="�ж�"/>
</form>
<?php
if(isset($_POST["OK"])){
	$score=$_POST["score"];
	if ($score==null) echo "ɵ��,�㻹û������ɼ��أ�";
	elseif($score>100||$score<0)  echo "��û���۾�������ĳɼ����Ϸ���";
	elseif($score>90&&$score<=100) echo "���㣬������";
	elseif($score>75&&$score<=90) echo "���ã������";
	elseif($score>60&&$score<=75) echo "�ϸ�,�������㣻";
	else echo "���ϸ��ϳ�ȥ��У�";
}
?>