<?php

$conn = mysqli_connect('localhost','root','','cityhospital') or die('connection failed');


if(isset($_POST['send'])){
	
	 echo "New Appointment";

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $service = mysqli_real_escape_string($conn, $_POST['service']);
   $branch = mysqli_real_escape_string($conn, $_POST['branch']);
   $date = mysqli_real_escape_string($conn, $_POST['date']);
   $time = mysqli_real_escape_string($conn, $_POST['time']);
   $message = mysqli_real_escape_string($conn, $_POST['message']);
   
   
  

   $select_message = mysqli_query($conn, "SELECT*FROM `bookings` WHERE name = '$name' AND email = '$email' AND phone = '$phone' 
                           AND service = '$service' AND branch = '$branch' AND date = '$date' AND time = '$time' AND message = '$message'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `bookings`(name, email, phone, service, branch, date, time, message) VALUES('$name', '$email', '$phone', '$service', '$branch', '$date', '$time', '$message')")
							or die('query failed');
      $message[] = 'message sent successfully!';
      echo "Data Added Successfully <br>";
   }
   


}
?>

