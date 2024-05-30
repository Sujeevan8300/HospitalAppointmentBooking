<?php
$conn = mysqli_connect('localhost','root','','cityhospital') or die('connection failed');


    if(isset($_POST['send'])){
	
	 echo "";

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $messages = mysqli_real_escape_string($conn, $_POST['message']);
   
   
   
  

   $select_message = mysqli_query($conn, "SELECT * FROM `contactus` WHERE name = '$name' AND email = '$email' AND message = '$messages'")
                              or die('query failed');
   
   	 echo $name;
	 echo $email ;
	 echo $messages;
	 echo "successfully";
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
    mysqli_query($conn, "INSERT INTO `contactus`(name, email, message) 
			VALUES('$name', '$email', '$messages')") or die('query failed');      $message[] = 'message sent successfully!';
      echo "Data Added Successfully <br>";
   }

}

?>