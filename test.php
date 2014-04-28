<?php 
require_once("./include/db_info.inc.php");
require_once("./include/my_func.inc.php");
$user_id=$_GET['user_id'];
$err_str = "";
if (!is_valid_user_name_team($user_id)){
	$err_str=$err_str."一个更可能的team号应该以小写team开始，后接一个没有前导0的非负整数。为了避免可能的困惑\n你输入的用户名为$user_id,请再次核实，如有问题，请联系我们，谢谢！\nSSSTA OJ 维护团队\\n";
}
echo $err_str;
?>
