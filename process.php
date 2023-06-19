<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "services";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form field values
	$namalengkap = $_POST["fullname"];
	$notelepon = $_POST["telp"];
	$pesan = $_POST["message"];

	// Insert data into the database
	$sql = "INSERT INTO formulir (fullname, no_telp, pesan) VALUES ('$namalengkap', '$notelepon', '$pesan')";

	if (mysqli_query($conn, $sql)) {
		echo "Data saved successfully.";
		echo "<br/>";
		echo "<a href='index.html'>Kembali ke halaman utama</a>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
