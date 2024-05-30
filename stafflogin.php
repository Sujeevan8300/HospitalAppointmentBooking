<?php
   $staffid = $_POST['staffid'];
   $staffname = $_POST['password'];
   
   $con = new mysqli("localhost", "root", "", "cityhospital");
   if($con->connect_error){
      die("Failed to connect : ".$con->connect_error);
	  } else{
	    $stmt = $con->prepare("select*from staffs where staffid = ?");
		$stmt->bind_param("s",$staffid);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
		      $data = $stmt_result->fetch_assoc();
			    if($data['password'] === $staffname){
				    echo "<h2>Login Successfully</h2>";
					header("Location: http://localhost/Hospital/viewbook.php");
    exit();
			    }else{
				    echo "<h2>Invalid StaffID or Password</h2>";
				}
		} else{
		   echo "<h2>Invalid StaffID or Password</h2>";
		}
	  }
?>