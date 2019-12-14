<?php
$sclname = "";
$projname = "";
$competitorname = "";
$competitoremail = "";
$competitorconno = "";
$projfile="";


if(isset($_POST['regbtn'])) {

if(isset($_POST['sclname'])) {
	$sclname = $_POST['sclname'];
}
if(isset($_POST['projectname'])) {
	$projname = $_POST['projectname'];
}
if(isset($_POST['competitorname'])) {
	$competitorname = $_POST['competitorname'];
}

if(isset($_POST['email'])) {
	$competitoremaila = $_POST['email'];
}
if(isset($_POST['competitorconno'])) {
	$competitorconno = $_POST['competitorconno'];
}

if(isset($_POST['projfile'])) {
	$projfile = $_POST['projfile'];
}
$db =mysqli_connect("localhost", "root", "", "kngine19");
$msg="";

  	$proj = $_FILES['projfile']['name'];
    $FileType = pathinfo(basename($proj),PATHINFO_EXTENSION);
  	$target = "projects/".$sclname.'.'.$projname.'.'.$FileType;
	$sql = "INSERT INTO dexigner VALUES ('$sclname','$projname','$competitorname','$competitoremaila','$competitorconno','$sclname.$projname.$FileType')";


	  // execute query
	 $res=mysqli_query($db, $sql);


  	if ((move_uploaded_file($_FILES['projfile']['tmp_name'], $target)) && $res){

//echo 'done';
		$to = $competitoremaila;
		$subject = "Kngine 20";
		$txt = "Thank You For Register Code_Com 2020";
//		$headers = "From: kngine19@gmail.com";
//
//		mail($to,$subject,$txt,$headers);

        header("Location: ../thanking/Confirmation.html");
	} 
			
  	else{
		header("Location: ../thanking/Confirm Wrong.html");
		//echo 'error';
	  }

}	 

?>
