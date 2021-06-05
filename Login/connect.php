<?php

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(username,password) values(?, ?)");
		$stmt->bind_param("vv", $username,$password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration success";
        <a href="/Dashboard/Home/index.html">Dassboard</a>
		$stmt->close();
		$conn->close();
	}
?>