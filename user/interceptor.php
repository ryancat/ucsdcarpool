<?php session_start();?>
<?php
require_once '../lib/db.php';

//开启一个会话
session_start();

$error_msg = "";
//如果用户未登录，即未设置$_SESSION['user_id']时，执行以下代码
if(!isset($_SESSION['id'])){
	echo "<script>window.location.href='../user/login_form.php'</script>";
//exit;
}
?>
