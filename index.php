<?php
include("config.php");
session_start();
if(isset($_POST['download']))
{ 
	if($_POST['download']=="LOGIN")
	{
		
if ( ! empty($_POST['usr'])){
	
    $NUM=$_POST['usr'];
	$qnum=mysqli_real_escape_string($db,$NUM);
	
$sql="SELECT NAME,DPT from STUDENTS WHERE NO ='$qnum'";
if ($result=mysqli_query($db,$sql))
{ 
while ($row=mysqli_fetch_row($result))
	{
	$name=$row[0];
	$dept=$row[1];
	}
}   




if(!empty($name)){
$_SESSION['name']=$name;
$_SESSION['dpt']=$dept;
$_SESSION['num']=$NUM;

		
}




if(!empty($name)){
header("Location:stu.php");}
else{
	echo "<script type='text/javascript'>alert('Incorrect Login!');
</script>";
}
		   
}
	}
}

?>


<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>SVCE</title>
		
		<link href="./files/style.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--webfonts-->
		<link href="./files/css" rel="stylesheet" type="text/css">
		<!--//webfonts-->
<body style="">



	 <!-----start-main---->
	 <div class="main">
	 <!---728x90--->
<div style="margin: 0 auto;text-align: center;margin-top: 5px;">
		
		<div class="login-form">
			<h1>Student Login</h1>
					<div class="head">
						<img src="./files/user.png" alt="">
					</div>
				<form method="POST"  >
				<br>
				
						<input type="text" class="text" required name="usr" placeholder="ADMISSION NUMBER" onfocus="this.value = &#39;&#39;;" onblur="if (this.value == &#39;&#39;) {this.value = &#39;&#39;;}">
						<p style="text-align:left; text-color:grey ; font-family:verdana";> As in your id card. (ex: 2018IT001) </p> <br>

						<div class="submit">
				

						  <input type="submit" name="download" onclick="myFunction()" value="LOGIN">

</form>

					</div>	

					<p><a href="http://p.w3layouts.com/demos/entrar_shadow/web/#"></a></p>
				
			</div>
			<!--//End-login-form-->
			<!---728x90--->
			 <!-----start-copyright---->
   					<div class="copy-right">
						<p><a href="http://www.svce.ac.in/">HOME</a>| Sri Venkateswara College of Engineering  </p>
					</div>
				<!-----//end-copyright---->
		</div>
		<!---728x90--->

</body></html>