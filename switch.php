<?php
switch (date("D")){
	case "Mon":echo "周一";break;
	case "Tue":echo "周二";break;
	case "Web":echo "周三";break;
	case "Thu":echo "周四";break;
	case "Fri":echo "周五";break;
	case "Sat":echo "周六";break;
	case "Sun":echo "周日";break;
	default:echo "输入有误！";break;		
}
?>
