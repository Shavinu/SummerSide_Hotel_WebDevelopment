<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/servicestyle.css">
	

	<title>Contact</title>
</head>
<body>
<div id="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="service.html">Service</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="final.php">Reservations</a></li>
            </ul>
        </div> </br> </br> </br> </br>

    <div class="intro">   

  	<p align="center"><b>your response request has been succesfully recorded. Our staff will reply soon as possible with nessasary information that you want.</b></p>

  	<p align="center"><b>If below message says <i>"data not inserted"</i> Cause of somthing happened, Please try again for submit your response.</b></p>

  	<h2 align="center">Thankyou visiting our web site!</h2>

  	<p align="center"><b>If You want to more details about our hotel, you can surf our web site using above tabs.</br>
  	   Or <a href="service.html">Back to our services</a></b> </p>
  	</div> 
 </body>
 </html>

<?php

	$conn=mysqli_connect('localhost','root','','registrationform');
	if (!$conn) {
		echo "not connected";
	}
	if (!mysqli_select_db($conn,'registrationform')) {
		echo "database not selected";
	}

	$name =$_POST['name'];
	$email =$_POST['email'];
	$subject =$_POST['subject'];
	$message =$_POST['message'];

	$sql = "INSERT INTO response(Name,email,Subject,Message) VALUES ('$name','$email','$subject','$message')";

	if (!mysqli_query($conn,$sql)) {
		echo "<p style='color:white;'>data not inserted </br> </br> </p>";
	}
	else{
		echo "<p style='color:white;'>data inserted sucsessfuly </br> </br> </p>";
	}
?>
