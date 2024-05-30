<?php

$conn = mysqli_connect('localhost','root','','cityhospital') or die('connection failed');

    if(isset($_POST['send'])){
	
	 echo "";

   $staffid = mysqli_real_escape_string($conn, $_POST['staffid']);
   $staffname = mysqli_real_escape_string($conn, $_POST['staffname']);
   $staffposition = mysqli_real_escape_string($conn, $_POST['staffposition']);
   $staffphone = mysqli_real_escape_string($conn, $_POST['staffphone']);
   
   
  

   $select_message = mysqli_query($conn, "SELECT * FROM `staffs` WHERE staffid = '$staffid' AND staffname = '$staffname' AND position = '$staffposition' AND phone = '$staffphone'")
                              or die('query failed');
   
   	 echo $staffid;
	 echo $staffname ;
	 echo $staffposition;
	 echo $staffphone;
	 echo "successfully";
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
    mysqli_query($conn, "INSERT INTO `staffs`(staffid, staffname, position, phone) 
			VALUES('$staffid', '$staffname', '$staffposition','$staffphone')") or die('query failed');      $message[] = 'message sent successfully!';
      echo "Data Added Successfully <br>";
   }

}

?>