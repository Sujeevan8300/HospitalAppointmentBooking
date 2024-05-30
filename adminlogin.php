<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
	$password = $_POST['password'];
	
	
	if($name=="admin" && $password=="1234"){
		
    header("Location: http://localhost/Hospital/viewbook.php");
    exit();
		
	}
	else{
		
		echo "Invalid UserName and Password";
	}

	
	

    // $login = $values['login'];
    // ...
}
?>