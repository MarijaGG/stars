<?php

$conn = new mysqli("127.0.0.1", "root", "", "stars");

// "SELECT * from stars";
$results = $conn->query("SELECT * FROM users");
$data = $results->fetch_assoc();

var_dump($data);


echo "<form>";
    echo "username: <input name='username'> <br>";
    echo "password: <input name='password' type='password'> <br>";
    echo "<input type='submit' value='Register'>";
echo "</form>";




?>

