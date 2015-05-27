<form action="" method="post" name="pdyear">
请输入成绩：
<input name="score" size="12" type="text" value="<?php echo $_POST['score'] ?>"/>
<input name="OK" type="submit" value="判断"/>
</form>
<?php
if(isset($_POST["OK"])){
	$score=$_POST["score"];
	if ($score==null) echo "傻逼,你还没有输入成绩呢！";
	elseif($score>100||$score<0)  echo "你没戴眼镜吗？输入的成绩不合法！";
	elseif($score>90&&$score<=100) echo "优秀，棒棒的";
	elseif($score>75&&$score<=90) echo "良好，麻麻地";
	elseif($score>60&&$score<=75) echo "合格,不想揍你；";
	else echo "不合格，拖出去打靶；";
}
?>