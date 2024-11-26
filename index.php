<?php

$conn = new mysqli("127.0.0.1", "root", "", "stars");

// "SELECT * from stars";
$results = $conn->query("SELECT * FROM users");
$data = $results->fetch_assoc();

var_dump($data);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["password"]; 

    $sql = "INSERT INTO users 
    (username, pass)
    VALUES 
    ('$username', '$pass')";
    $conn->query($sql); }




echo "<form method='POST'>";
    echo "<label>username:<input name='username'> </label>  <br>";
    echo "<label>password:<input name='password' type='password'> </label>  <br>";
    echo "<input type='submit' value='Register'>";
echo "</form>";

echo "<br>";










$masivs = [6,8,10];
print_r($masivs); // parasts masiivs
echo "<br>";
$assoc_masivs = ["vecums"=> 6,"videja_atzime"=> 8,"ids"=> 10];
print_r($assoc_masivs); // asocioatiivais masiivs

echo "<br>";





?>

