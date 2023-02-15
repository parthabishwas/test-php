<?php
// Set up database connection
$servername = "localhost";
$username = "testuser";
$password = "Password@123456";
$dbname = "example_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];

// Insert data into database
$sql = "INSERT INTO users (name, mobile, email) VALUES ('$name', '$mobile', '$email')";

if (mysqli_query($conn, $sql)) {
	// Display success message
	echo "<div class='success'>Data successfully saved to database.</div>";
} else {
	// Display failure message
	echo "<div class='failure'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
}

// Close database connection
mysqli_close($conn);
?>
