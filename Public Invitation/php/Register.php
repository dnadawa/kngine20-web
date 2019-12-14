<?php
$sclname = "";
$principal = "";
$micname = "";
$micemail="";
$micconno = "";
$p1name = "";
$p2name = "";
$p3name = "";
$p4name = "";
$p1conno= "";
$p2conno = "";
$p3conno = "";
$p4conno = "";

if(isset($_POST['regbtn'])) {

if(isset($_POST['sclname'])) {
	$sclname = $_POST['sclname'];
}
if(isset($_POST['principal'])) {
	$principal = $_POST['principal'];
}
if(isset($_POST['micname'])) {
	$micname = $_POST['micname'];
}

if(isset($_POST['micemail'])) {
	$micemail = $_POST['micemail'];
}
if(isset($_POST['micconno'])) {
	$micconno = $_POST['micconno'];
}
if(isset($_POST['player1name'])) {
	$p1name = $_POST['player1name'];
}
if(isset($_POST['player1conno'])) {
	$p1conno = $_POST['player1conno'];
}
if(isset($_POST['player2name'])) {
	$p2name = $_POST['player2name'];
}
if(isset($_POST['player2conno'])) {
	$p2conno = $_POST['player2conno'];
}
if(isset($_POST['player3name'])) {
	$p3name = $_POST['player3name'];
}
if(isset($_POST['player3conno'])) {
	$p3conno = $_POST['player3conno'];
}
if(isset($_POST['player4name'])) {
	$p4name = $_POST['player4name'];
}
if(isset($_POST['player4conno'])) {
	$p4conno = $_POST['player4conno'];
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kngine19";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO eventreg VALUES ('$sclname','$principal','$micname','$micemail','$micconno','$p1name','$p1conno','$p2name','$p2conno','$p3name','$p3conno','$p4name','$p4conno')";
// Check connection
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";

        $to = $micemail;
        $subject = "Kngine 20";
        $txt = "Thank You For Register Kngine'20";
        //$headers = "From: kngine19@gmail.com"; // change your email address

        //mail($to,$subject,$txt,$headers); //after changing email address uncomment mail function
        header("Location: ../thanking/Confirmation.html");
    } else {
        header("Location: ../thanking/Confirm Wrong.html");
       // echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();












}	 

?>
