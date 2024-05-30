<html lang="en">
<head>
  
  <link rel="stylesheet" href="style3.css" />
  
</head>
<body>
  <header class="header">
    <div class="logo">
      <a href="#">City Hospital</a>
      
    </div>

    
	
      <div class="logo">
        
        <a href="viewbook.php">Booking</a>
        <a href="staff.php">Staff</a>
      </div>
    </nav>
  </header>
  
  <div class="container">
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
     $sql = "SELECT id, name, email , phone , service , date , time, message FROM bookings";
      $result = mysqli_query($conn, $sql);
	  
      ?>
    

    <div class="main-body">
      
	  
          <div class="row">
            <h4>booking</h4>
          </div>
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>service</th>
                <th>date</th>
				<th>time</th>
				<th>message</th>
				<th> Action </th>
              </tr>
            </thead>
            <tbody>
			
			
              <?php
		
		
		
		
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
              <td>{$row["id"]}</td>
              <td> {$row["name"]}</td>
              <td> {$row["email"]}</td>
             <td> {$row["phone"]}</td>
              <td> {$row["service"]}</td>
               <td> {$row["date"]}</td>
              <td> {$row["time"]}</td>
              <td> {$row["message"]}</td>
			  <td> <a href=deleteprocess.php?id=",$row["id"],">Delete</a> </td>
			  
			 
            </tr>\n";
    }
} else {
    echo "0 results";
}
          
        ?>
              
              
            </tbody>
          </table>
        </div>
</body>
</html>