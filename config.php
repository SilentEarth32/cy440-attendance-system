<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cy440_database";

$tbl_name="request_quote"; //table name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
/*
$sql = "INSERT INTO student (name)
VALUES ('Tyler')";

if ($conn->query($sql) === TRUE) {
  echo " New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$checkbox1=$_POST['attendanceRecord'];
$chk="";
foreach($checkbox1 as $chk1)
   {
      $chk .= $chk1.",";
   }
$in_ch=mysqli_query($conn,"insert into student (name) values ('$chk')");
if($in_ch==1)
   {
      echo'<script>alert("Inserted Successfully")</script>';
   }
else
   {
      echo'<script>alert("Failed To Insert")</script>';
   }


$conn->close();
?>
