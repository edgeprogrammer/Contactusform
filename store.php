<?php
$conn =new mysqli("localhost","root","","contactedge");
if (isset($_POST['submit']))
 {
	$fistname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$msg=$_POST['message'];
	$sql="INSERT INTO `contact`(`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$fistname','$lastname','$email','$subject','$msg')";
	mysqli_Query($conn,$sql);
	echo "<script>alert('Your details send successfully')</script>";
}
?>