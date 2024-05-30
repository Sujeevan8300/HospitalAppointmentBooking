<?php

      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityhospital";
     // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(count($_POST)>0) {
mysqli_query($conn,"UPDATE bookings set name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', service='" . $_POST['service'] . "', date='" . $_POST['date'] . "' ,time='" . $_POST['time'] . "'  ,message='" . $_POST['message'] . "' WHERE id='" . $_GET['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM bookings WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>


<html>
<head>
<title>Update Details</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="viewbooking.php">Booking List</a>
</div>
Name : <br>

<input type="text" name="name"  value="<?php echo $row['name']; ?>">
<br>
Email : <br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
 Phone : <br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
Service :<br>
<input type="text" name="service" class="txtField" value="<?php echo $row['service']; ?>">
<br>
Date :<br>
<input type="text" name="date" class="txtField" value="<?php echo $row['date']; ?>">
<br>
Time :<br>
<input type="text" name="time" class="txtField" value="<?php echo $row['time']; ?>">
<br>
Message :<br>
<input type="text" name="message" class="txtField" value="<?php echo $row['message']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>