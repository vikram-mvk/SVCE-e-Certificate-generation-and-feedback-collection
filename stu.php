<?php
include("config.php");
  session_start();
if (empty($_SESSION['name'])){
	header("Location:index.php");
}
if(isset($_POST['feed']))
{ 
	   $q1 = mysqli_real_escape_string($db,$_POST['1']);

	  	   $q2 = mysqli_real_escape_string($db,$_POST['2']);
	   $q3 = mysqli_real_escape_string($db,$_POST['3']);
	   $q4 = mysqli_real_escape_string($db,$_POST['4']);
	   	   $q5 = mysqli_real_escape_string($db,$_POST['5']);
		   	$q6 = mysqli_real_escape_string($db,$_POST['6']);
	   	   $q7 = mysqli_real_escape_string($db,$_POST['7']);
	   	   $q8 = mysqli_real_escape_string($db,$_POST['sug']);

		   
		 
   $u=mysqli_real_escape_string($db,$_SESSION['num']);
   
   $r=mysqli_real_escape_string($db,$_SESSION['name']); 
		   
		        $sql="INSERT INTO feedback VALUES('$u','$r','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8')";
mysqli_query($db,$sql);

echo "<script type='text/javascript'>alert('THANK YOU !');
window.location.href='/svce/certificate.php'
</script>";

				}


?>

<!DOCTYPE html>
<!-- saved from url=(0047)http://p.w3layouts.com/demos/entrar_shadow/web/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>SVCE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

		
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--webfonts-->
		<link href="./files/css" rel="stylesheet" type="text/css">
		<!--//webfonts-->
<body style="">




	 <!-----start-main---->
	 <div class="main">
	 <!---728x90--->
<div style="margin: 0 auto;text-align: left;margin-top: 5px;">
		<div class="wrap">
		<h3 class="table-title" style="color:black;font-family:Arial Black;text-align:center";> INDUCTION PROGRAMME EVALUATION FORM </h3> <br>
<h3 class="table-title" style="color:black;font-family:Monaco;text-align:justified">In order to enable us to deliver the Induction Programme in a more effective way to the next batch of students and to improve the programme please take a few minutes to complete this evaluation form and on completing this you can print your Participation Certificate for the Induction Programme. <br>
<br></h3>
<h2 style="color:black;font-family:Trebuchet MS;text-align:justified">
 NAME: &nbsp; <?php echo $_SESSION['name'];?> <br><br>
 ADMISSION NUMBER:&nbsp; <?php echo $_SESSION['num'];?><br><br>
DEPARTMENT :&nbsp; <?php echo $_SESSION['dpt'];?>
</h2>



    <h3 class="table-title">Please rate the following subjects on a scale of 1-5 , Where :<br>
<br>
5 – Excellent,	<br>  4 – Very Good	,   <br>     3 – Good,	   <br>  2 – Satisfactory, <br>	1 – Needs Improvement.
</h3>
<form method="post">

    <table class="comparison-table">
        <thead>
            <tr>
                <td></td>
                <td class="marker">5</td>
                <td class="marker">4</td>
                <td class="marker">3</td>
				                <td class="marker">2</td>

								                <td class="marker">1</td>

				
				
            </tr>
        </thead>
        <tr>
            <td>Quality of Bridge Course conducted. </td>
            		   <td class="marker">  <input type="radio" name="1" value="5"> <br>
		   <td class="marker">  <input type="radio" name="1" value="4" required> <br>
		   <td class="marker">  <input type="radio" name="1" value="3" required> <br>
		   <td class="marker">  <input type="radio" name="1" value="2" required> <br>
		   <td class="marker">  <input type="radio" name="1"  value="1" required> <br>


        </tr>
        <tr>
            <td>Talk by eminent speakers on Human Values, Technology, Industry, Environment etc., </td>
            											   <td class="marker">  <input type="radio" name="2" value="5"> <br>
		   <td class="marker">  <input type="radio" required name="2" value="4"> <br>
		   <td class="marker">  <input type="radio" required name="2" value="3"> <br>
		   <td class="marker">  <input type="radio" required name="2" value="2"> <br>
		   <td class="marker">  <input type="radio" required name="2" value="1"> <br>


        </tr>
        <tr>
            <td>Rate the Extracurricular Activities (NSS, NCC, Sports).    </td>
            		   <td class="marker">  <input type="radio" name="3" value="5" required> <br>
		   <td class="marker">  <input type="radio" name="3" value="4" required> <br>
		   <td class="marker">  <input type="radio" name="3" value="3" required> <br>
		   <td class="marker">  <input type="radio" name="3" value="2" required> <br>
		   <td class="marker">  <input type="radio" name="3" value="1" required> <br>


        </tr>
        <tr>
            <td>Rate the conduction of Induction Programme in helping you to get along with your peer groups and new college atmosphere.</td>

					   <td class="marker">  <input type="radio" name="4" value="5" required> <br>
		   <td class="marker">  <input type="radio" name="4" value="4" required> <br>
		   <td class="marker">  <input type="radio" name="4" value="3" required> <br>
		   <td class="marker">  <input type="radio" name="4" value="2" required> <br>
		   <td class="marker">  <input type="radio" name="4" value="1" required> <br>


        </tr>
        <tr>
            <td>Rate the Conduction of Calibration events to bring out your talents.</td>
           
		   		   <td class="marker">  <input type="radio" name="5" value="5" required> <br>
		   <td class="marker">  <input type="radio" name="5" value="4" required> <br>
		   <td class="marker">  <input type="radio" name="5" value="3" required> <br>
		   <td class="marker">  <input type="radio" name="5" value="2" required> <br>
		   <td class="marker">  <input type="radio" name="5" value="1" required> <br>


        </tr>
		<tr>
            <td>Rate the Conduction of Training on Yoga and Meditation.</td>
           
		   		   <td class="marker">  <input type="radio" name="6" value="5" required> <br>
		   <td class="marker">  <input type="radio" name="6" value="4" required> <br>
		   <td class="marker">  <input type="radio" name="6" value="3" required> <br>
		   <td class="marker">  <input type="radio" name="6" value="2" required> <br>
		   <td class="marker">  <input type="radio" name="6" value="1" required> <br>


        </tr>
		<tr>
            <td>Overall rating of the conduction of 3 weeks Induction Programme</td>
           
		   		   <td class="marker">  <input type="radio" name="7" value="5" required> <br>
		   <td class="marker">  <input type="radio" name="7" value="4" required> <br>
		   <td class="marker">  <input type="radio" name="7" value="3" required> <br>
		   <td class="marker">  <input type="radio" name="7" value="2" required> <br>
		   <td class="marker">  <input type="radio" name="7" value="1" required> <br>


        </tr>
		    </table>

		
           <h3 class="table-title"> Suggestions : <br><br>
           
		   		   <textarea name="sug" required placeholder="Please Tell us how can we improve !" rows="5" cols="80%"> </textarea>
		   
</td>

        </tr>
        
       
        
       


  <input type="image" src="sub.png" name="feed" value="Submit"  align="right" width="158" height="148" ></input>

</form></div>
	

					<p><a href="http://p.w3layouts.com/demos/entrar_shadow/web/#"></a></p>
				
			</div>
			<!--//End-login-form-->
			<!---728x90--->
<div style="margin: 0 auto;text-align: center;margin-top: 5px;"></div>
			 <!-----start-copyright---->
   					<div class="copy-right">
					</div>
				<!-----//end-copyright---->
		</div>
		<!---728x90--->

<div style="margin: 0 auto;text-align: center;margin-top: 5px;"></div>
			 <!-----//end-main---->
		 		

</body></html>