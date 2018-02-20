<?php
require_once 'autoload.inc.php';
require_once 'lib/html5lib/Parser.php';
require_once 'lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'lib/php-svg-lib/src/autoload.php';
require_once 'src/Autoloader.php';
Dompdf\Autoloader::register();
use Dompdf\Dompdf;
$servername = "localhost";
$username = "root";
$password = "";


$dbname="certificate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function showDate($date){
	$arr=explode("-",$date);
	return $arr[1]."-".	$arr[2]."-".$arr[0];
	
}

if(isset($_REQUEST['id']) && $_REQUEST['id'] != ''){
	$stu_id=base64_decode($_REQUEST['id']);
	$query="select * from certificate_data where id ='$stu_id'";
	$stu_result=mysqli_query($conn,$query);
	$stu_data=mysqli_fetch_array($stu_result);
	
	/*$content='<h5 style="float:left; display:inline; margin-top:30px;margin-left:10px;">SR NO. '.$stu_data['sr_no'].'</h5>
	
	<h5 style="float:right; display:inline;margin-top:30px;margin-right: 10px;">ROLL NO '.$stu_data['rollno'].'</h5>
	
	<img style="height:200px;width:250px;margin-top:70px; margin-left:-150px; float:left; z-index:1;" src="images/logo.png">
	
	<h1>ACME SKILL LLP</h1>
	
	<h6>(REGD NO. AAI-9849)<br>FORMERLY KNOWN AS
	
	<br>AICE(ARORA INSTITUTE OF COMPUTER EDUCATION)</h6><h2>CERTIFICATE</h2>
	
	<p class="form_detail">This is to Certified that <input class="hh" type="text" name="name" value=" '.$stu_data['name'].' "> &nbsp;
	
	S/o / D/o / W/o <input type="text" name="father_name" value=" '.$stu_data['father_name'].'"> 
	
	has sucessfully completed a Course Titled <input type="text" name="course_name" value=" '.$stu_data['course_name'].' ">  consisting of  <input type="text" name="duration" value="'.$stu_data['duration'].'">
	
	from <input type="text" name="start_date" value="'.showDate($stu_data['start_date']).'"> at <input type="text" name="end_date" value="'.showDate($stu_data['end_date']).'"> center.<br> 
	
	HE/She Secured<input type="text" name="grade" value=" '.$stu_data['grade'].' ">grade.<br>
	
	 </p><div class="lower-secction">
	
	 <h5 style="margin-left:20px";>DATE '.date('d-m-Y').'</h5>
	
	 <h5 style="float:right; display:inline; margin-top:-60px;margin-left:-30px;">Signature</h5>
	 <div><img src="images/signature.png"></div>
	 
	 </div>';*/
	 
	 $content='
	<style>
.form_detail input{
	
	border:none;
	border-bottom:#000 solid 1px;
}
.signature-box{
	display:block;
	padding:3px;
}
.signature-box img{
	display: block;
     width: 160px;

}
*body{
	
}
*body > img{
	height:200px;
	width:200px;
}

.certificate-box p{
	
	margin:0px;}
</style>
		
		<div class="main" style="border: 10px double blue; border-radius: 0px;">
       <div width="100%" class="certificate-box">
		  
			<h5 style="float:right; margin-left:450px;">SR NO'.$stu_data['sr_no'].'</h5>
			<h5">ROLL NO '.$stu_data['rollno'].'</h5>
			 
				<img style=" width: 90%;margin-left:50px;" src="capture1.jpg">
				<img style=" width: 150px; height:180px; margin-top: -130px;margin-left: 400px;" src="logonew.jpg">
			
			   <div class="form_detail" style="line-height:2;">
					<p>This is to certify that <input class="hh" type="text" name="firstname" value="'.ucwords($stu_data['name']).'">
			
					S/o / D/o / W/o  Sh. <input type="text" name="firstname" value="'.ucwords($stu_data['father_name']).'"> 
					having qualified in final examination as a regular course trainee from our authorized training centre
					 <input type="text" name="firstname" value="'.ucwords($stu_data['course_name']).'"> under the management of <strong >Acme Skills Llp. Regd. By Ministry of Corporate Affairs, Govt. of India,</strong> has successfully completed with proficiency 
<strong>DIPLOMA IN COMPUTER APPLICATION(DCA) of ONE YEAR </strong> duration with grade <input type="text" name="firstname" value="'.ucwords($stu_data['duration']).'">
					from <input type="text" name="firstname" value="'.showDate($stu_data['start_date']).'">
					at <input type="text" name="firstname" value="'.ucwords($stu_data['study_center']).'">center.</p>
					<p> HE/She Secured <input type="text" name="firstname" value="'.ucwords($stu_data['grade']).'">grade.</p><br>
					
		     <h5 style="margin-left:20px";> DATE '.date('m-d-Y').'</h5>
			
			  <div class="signature-box"><img src="images/signature.png"></div>
			<p> Signature </p>
			
		   </div>
		  </div>
		  </div>
		
		

		 ';
	
	//echo $content; exit;
	
	
	// instantiate and use the dompdf class
	$dompdf = new DOMPDF();
	//echo $dompdf->get('enable_remote'); 
	//exit;
	$dompdf->set_option('enable_remote', TRUE);
	
	$dompdf->loadHtml($content);
	
	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');
	$customPaper = array(0,0,736,1000);
	$dompdf->set_paper($customPaper);
	// Render the HTML as PDF
	$dompdf->render();
	
	// Output the generated PDF to Browser
	$dompdf->stream('certificate.pdf',array('enable_remote',true));
	
}
?>
<!--search data students for certificate-->
<html>
<head>
<title>search</title>
</head>
<form action="search_form.php" method="post">
<input type="text" name="search" placeholder="search by rollno" />
<input type="submit" name="submit" />
</form> 
</html>
<?php

$output='';
$result='';
//$set=$_POST['search'];
if(isset($_REQUEST['search'])){
	if(isset($_REQUEST['search']) && isset($_REQUEST['id'])){
		$searchq=base64_decode($_REQUEST['search']);
	}else{
		$searchq=$_REQUEST['search'];
	}
	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
	$query="select * from certificate_data where rollno ='$searchq'";
	$result=mysqli_query($conn,$query);
}
	
		while($row=mysqli_fetch_array($result))
		{
			$id=$row['id'];
			 $sr_no=$row['sr_no'];
			$rollno= $row['rollno'];
		   $name= $row['name'];
			$father_name= $row['father_name'];
			$course_name= $row['course_name'];
			$start_date= $row['start_date'];
			$end_date= $row['end_date'];
			
		
		
	$output.= '<div>'.$sr_no.''.$rollno.''.$name.''.$father_name.''.$course_name.''.$start_date.''.$end_date.'&nbsp;&nbsp;&nbsp;<a href="search_form.php?search='.base64_encode($searchq).'&id='.base64_encode($id).'">Generate PDF</a></div>';

	
		//$conn->close();
		echo $output;
		}
?>
<html>
<head>
<title>search</title>
</head>
<form action="certificate.php" method="post">
<input type="text" name="search" placeholder="search by rollno" />
<input type="button" name="show form" />
</form> 
</html>