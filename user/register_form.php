<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php 
include_once '../lib/common.php';
include_once '../lib/db.php';
include_once '../lib/functions.php';
include_once '../lib/user.php';

//include_once 'interceptor2.php';

/*
session_start();
$conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(empty($conn))
{
   die("数据库连接失败");
}
//$zh_name=$_POST['zh_name'];
//$gender=$_POST['gender'];
//$grade=$_POST['grade'];
//$type=$_POST['type'];
//$drive_age=$_POST['drive_age'];
//$mobile=$_POST['mobile'];
//$email=$_POST['email'];
//$password=$_POST['password'];
//$credit=$_POST['credit'];
//$code=strtolower($_POST["code"]);
   $result1=$conn->query("select * from users where email='".$email."'");
   $row=$result1->fetch_row();
if($row)
{ 
"邮箱已使用，请更换邮箱重试！"; 
echo $temp;
echo"<a href=register_form.php>返回</a>";
} 
else {
//if( $_SESSION['sname']==$code)
//{
//   echo $temp="认证码成功";
   $sql="INSERT INTO cp_user (`zh_name`, `gender`, `grade`, `type`, `drive_age`, `mobile`, `email`, `password`, `credit`) VALUES('$zh_name', '$gender', '$grade', '$type', '$drive_age', '$mobile', '$email', '$password', '$credit')";
   $result=$conn->query($sql);
   if($result==true)
      {
      $_SESSION['mail']="注册成功,请登陆";
      //echo "<script>window.location.href='login.php'</script>";
      }
      else {echo "注册失败".mysql_error();}
//} 
//else {echo "认证码错误";}
//}
*/
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>用户注册</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/> 
		<script src="../js/reg_verify.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../css/register_form.css" />
		<link rel="stylesheet" type="text/css" href="../css/header.css" />
		<link rel="stylesheet" type="text/css" href="../css/footer.css" />

	</head>
	<body>
		<div class="header">
	<?php
		include_once '../lib/header.php';?>
		</div>
		
		<div id="registerForm">
			<form name="reg" method="post" action="register_db.php?register" id="">
				<h2>
					以下带*均为必填项
				</h2>
				<table class="" >

					<!--name-->
					<tr>
						<td valign="top" class="w1">
							请填写您的中文姓名*：
						</td>
						<td>
							<input name="reg_name" type="text" id="reg_name"/>
									<span id="" style="color:red"></span>
						</td>
					</tr>


					<!--gender-->
					<tr>
						<td valign="top" class="w1">
							性别*：
						</td>
						<td>
								<input name="reg_gender" type="radio" value="Male" class="gender"/>男
								<input name="reg_gender" type="radio" value="Female" class="gender"/>女
						</td>
					</tr>

					<!--grade-->
					<tr>
						<td valign="top" class="w1">
							选择您的年级*：
						</td>
						<td>
							<select name="reg_grade" id="reg_grade">
								<option selected="selected">--选择年级--</option>
								<option value ="freshman">大一</option>
								<option value ="sophermore">大二</option>
								<option value ="junior">大三</option>
								<option value ="senior">大四</option>
								<option value ="master">硕士</option>
								<option value ="Phd">博士</option>
								<!--<option value ="o">其他</option>-->
							</select>
						</td>
					</tr>

					<!--user type-->
					<tr>
						<td valign="top" class="w1">
							我要*：
						</td>
						<td>
							<input name="reg_type" type="radio" value="rider"/>提供ride
							<input name="reg_type" type="radio" value="passenger"/>寻找ride
									<span id="" style="color:red"></span>
						</td>
					</tr>


					<!--drive age-->
					<tr>
						<td valign="top" class="w1">
							请填写您的驾龄：
						</td>
						<td>
							<input name="reg_dr_age" type="text" id="reg_dr_age" class=""/>
									<span id="" style="color:red"></span>
						</td>
					</tr>

					<!--mobile number-->
					<tr>
						<td valign="top" class="w1">
							请填写您的手机号码*<!-- Ex.(858)123-4567：-->
						</td>
						<td>
							<input name="reg_mobile" type="text" id="reg_mobile" class=""/>
									<span id="" style="color:red">格式为XXX-XXX-XXXX</span>
						</td>
					</tr>


					<!--user id-->
					<tr>
						<td valign="top" class="">
							 请填写您的UCSD Email*：
						</td>
						<td>
							<input name="reg_email" type="text" id="email" class=""/> @ucsd.edu
									<span id="" style="color:red"></span>
						</td>
					</tr>

					<!--password-->
					<tr>
						<td valign="top" class="w1">
							设置密码*：
						</td>
						<td>
							<input name="reg_password" type="password" id="password" class="text_input" />								
							<span id="password.info" style="color:red"></span>
						</td>
					</tr>

					<!--password repeat-->
					<tr>
						<td valign="top" class="w1">
							请再次输入密码*：
						</td>
						<td>
							<input name="reg_repeat" type="password" id="reg_repeat"
								class="text_input"/>
							<span id="password1.info" style="color:red"></span>
						</td>
					</tr>
				</table>

				<div class="login_in">
					<input id="reg_submit" class="" name="reg_submit"  type="submit" value="注 册"/>
					<!--<input type="reset" value="重置">--> 
				</div> 
			</form>
		</div>
		
		<div class="footer">
			<?php
				include_once '../lib/footer.php';?>
		</div>
	</body>
</html>

