<html>
<head>
  
  <link rel="stylesheet" href="style3.css" />
  
</head>
<body>





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

      //execute the SQL query and return records
     $sql = "SELECT id ,staffid, staffname, position ,phone FROM staffs";
      $result = mysqli_query($conn, $sql);
	  
      ?>

 
  <header class="header">
    <div class="logo">
      <a href="#">City Hospital</a>
      
    </div>

    <div class="logo">
        
        <a href="viewbooking.php">Booking</a>
		<a href="queries.php">Queries</a>
        <a href="staff.php">Staff</a>
      </div>
  </header>
  
  
  
  
  <div class="container">
	
		 <div id="staff" class="list2">
          <div class="row">
            <i><h3>Staff List </h3></i>
          </div>
          <table>
            <thead>
              <tr>
                <th>staff Id</th>
                <th>Staff Name</th>
                <th>Position</th>
                <th>staff phone</th>
				<th>Action</th>
              </tr>
            </thead>
            <tbody>
			
			
 <?php
		
	
		
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
              <td> {$row["staffid"]}</td>
              <td> {$row["staffname"]}</td>
              <td> {$row["position"]}</td>
              <td> {$row["phone"]}</td>
               
			  <td> <a href=staffdelete.php?id=",$row["id"],">Delete</a> </td>
			  
			 
            </tr>\n";
    }
} else {
    echo "0 results";
}
          
?>
		
            </tbody>
          </table>
		  </div>
		  <div class="container4"> 
		  
  <form   action="addstaff.php" id="contact" action="" method="post">
    <h3>City Hospital</h3>
    <h4>Add your staffs here....</h4>
    <fieldset>
      <input name="staffid" placeholder="Staff Id" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="staffname" placeholder="staff Name" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input  name="staffposition" placeholder="Position" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input name="staffphone"  placeholder="Phone" type="tel" tabindex="4" required>
    </fieldset>
    <fieldset>
      <button name="send" type="submit" id="contact-submit" data-submit="...Sending">Add</button>
    </fieldset>
  </form>
 
  
</div>
  
		  
        </div>
      </div>
    </div>
      
  </div>
</body>
</html>
