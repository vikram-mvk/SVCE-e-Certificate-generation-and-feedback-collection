<?php
include("config.php");
session_start();
if (empty($_SESSION['name'])){
	header("Location:index.php");
}
if(isset($_POST['download']))
{ 
	if($_POST['download']=="DOWNLOAD YOUR e-cerficiate")
	{
		$path = 'svce.jpg';
$im = imagecreatefromjpeg($path);

$color = imagecolorallocate($im, 0, 0, 255);

// write on the image
//imagestring($image, $fontSize, $x, $y, $string, $color);
//imagestring($image, 15, 100,100, 'Hello world!', $color);
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);

// The text to draw

// Replace path by your own font path
$font = 'fonts/LHANDW.TTF';
$text=$_SESSION['name'];
$dpt=$_SESSION['dpt'];
// Add some shadow to the text
imagettftext($im, 65, 0, 1441, 1037, $grey, $font, $text);
imagettftext($im, 48, 0, 741, 1177, $grey, $font, $dpt);


// Add the text
imagettftext($im, 65, 0, 1441, 1037, $black, $font, $text);
imagettftext($im, 48, 0, 741, 1177, $black, $font, $dpt);



// save the image
imagejpeg($im,  $fileName = 'certificate.jpeg', $quality = 100);
header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename('certificate.jpeg').'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('certificate.jpeg'));
    readfile('certificate.jpeg');

session_destroy();

	}

elseif($_POST['download']=="LOGOUT"){
		header("Location:index.php");

	
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
				

						<div class="submit">
				

						  <input type="submit" name="download" onclick="myFunction()" value="DOWNLOAD YOUR e-cerficiate">
						  <br>
						  <br>
						  
						  <input type="submit" name="download" onclick="myFunction()" value="LOGOUT">
						  


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