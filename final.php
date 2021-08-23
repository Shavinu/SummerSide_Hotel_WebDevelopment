
<html>

<!doctype html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrationform";
try
{
	$conn = mysqli_connect($servername,
	$username,$password,$dbname);
	echo("Connected!");
}
catch(MySQLi_Sql_Exception $ex)
{
	echo("error in connection");
}
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$ID=$_POST['ID'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$room=$_POST['room'];
	$checking_date=$_POST['checking_date'];
	$checkout_date=$_POST['checkout_date'];
	$Pre=$_POST['Pre'];
	
	$register_query="INSERT INTO `form`(`fname`, `mname`, `lname`, `address`, `ID`, `gender`, `phone`, `email`, `room`, `checking_date`, `checkout_date`, `Pre`) VALUES ('$fname','$mname','$lname','$address','$ID','$gender','$phone','$email','$room', '$checking_date', '$checkout_date', '$Pre')";
	
	try
	{
		$register_result = mysqli_query($conn,$register_query);
		if($register_result)
		{
			if(mysqli_affected_rows($conn)>0)
			{
				
				echo("Received Inquiry Successfully!!");
				echo "<script type='text/javascript'>alert(\"Received Successfully!\");</script>";
			}
			else
			{
			echo("Error in registration!");	
			}
		}
	}
	catch(Excetption $er)
	{
		echo("Error".$er->getMessage());
	}
}
?>
		<script type="text/javascript" >
            function disable() 
            {
                document.getElementById("mySelect").disabled=true;
            }
            function enable() 
            {
                document.getElementById("mySelect").disabled=false;
            }

        </script>
		<title>&nbsp;
		Summer Side Reservation
		</title>

		<link rel="stylesheet" type="text/css" href="css/contactstyle.css">
		<link rel="stylesheet" type="text/css" href="qu.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	</head>
	<title>Reservation</title>
	<link rel="stylesheet" href="css/animate.css">
	
<body background="slide.jpg">
<div id="menu" class="wow slideInRight">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="service.html">Service</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="final.php">Reservations</a></li>
            </ul>
        </div>

	<div class="loginbox wow fadeInUp">
	<img src="c.ico" class="avatar">
		<h3 style="color:grey;text-align:center;font-family:Lucida Console;font-size:160%;">SummerSide Reservation Request</h3>
		
				<form action ="" method="post">
	<table align="center">
		<tr>
			
		<td>Name--: </td>
		<td><input type="text" name="fname" placeholder="First name"></td>	
			
		<td><input type="text" name="mname" placeholder="Second name"></td>
		
		<td><input type="text" name="lname" placeholder="Last name"></td>
		</tr>

		<tr>
			<td>Identification Number--: </td>
			<td><input type="text" name="ID" placeholder="NIC/PASSPORT"></td>
		</tr>
		<tr>
		<td>Address--:</td>
		<td><input type="text" name="address" placeholder="Enter your address"></td>
		</tr>
			
		<tr>
		<td>Customer Type--:</td>
		<td><input type = "radio" name="gender" value="Local customer">Local customer</td>
		<td><input type = "radio" name="gender" value="Foreigner">Foriegner</td>
		</tr>
			
		<tr>
		<td>Phone--:</td>
		<td><input type="tel" name="phone" placeholder="Phone number"></td>
		</tr>
		
		<tr>
			<td>Email--:</td>
			<td><input type="email" name="email" placeholder="someone@123.com"></td>
		</tr>

		<tr>
		<td>Room Type--:</td>
		<td><input type = "radio" name="room" value="Delux">Delux</td>	
		<td><input type = "radio" name="room" value="Coast View">Coast View</td>	
		<td><input type = "radio" name="room" value="City View">City View</td>
		<td><input type = "radio" name="room" value="Park View">Park View</td>
		</tr>
		<tr>
			<td>Checking Date --: </td>
			<td>  <input type="date" name="checking_date"> </td>
		</tr>
		<tr>
			<td>Checkout Date --: </td>
			<td>  <input type="date" name="checkout_date"> </td>
		</tr>
		<tr>
		<td>Meal Preferences --: </td>
				<td><input type="radio" name="Pre" value="Vegitatian">Vegitarian</td>
				<td><input type="radio" name="Pre" value="Fish">Fish</td>
				<td><input type="radio" name="Pre" value="Chicken">Chicken</td>
				<td><input type="radio" name="Pre" value="Select Later">Choose Later</td>
		</tr>
		<tr>
			<td></td>
			<td> <br><p align="center"><input type="submit" name="submit" value="Submit Inquery"></p></td>
		</tr>
			</table>
	</form>
</div>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

</body>
</html>