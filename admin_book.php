   <html>
    <head>
  <title>City Hospital</title>
  <link rel="stylesheet" href="style3.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
    <body>
	
	<header class="header">
		<div class="logo">
		  <a href="homepage.html">City Hospital</a>
		  <div class="search_box">
			<input type="text" placeholder="Search City Hospital">
			<i class="fa-sharp fa-solid fa-magnifying-glass"></i>
		  </div>
		</div>
	</header>
  <div class="container">
    <nav>
      <div class="side_navbar">
        <span></span>
        <a href="admin_book.php" class="active">Booking</a>
        <a href="staff.html">Staff</a>
      </div>
    </nav>
	
	</div>

  </header>
  
  
  <div class="container1">
  
   
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
		   <td>DELETE</td>
		   <td>Update</td>
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
			    <td> <a href=updateprocess.php?id=",$row["id"],">update</a> </td>
			  </tr> <br>
	     \n";
			
    }
} else {
    echo "0 results";
}
          
        ?>
		
		
      </tbody>
    </table>
	</div>
      </div>
	  </div>
	  </div>
     
    </body>
    </html>
	
	
	
