<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Counter</title>
    <script src="script.js"></script>
</head>
<body>

<?php

$conn = new mysqli("127.0.0.1", "root", "", "stars");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["result"]) && is_numeric($_POST["result"])) {
        $result = (int) $_POST["result"];

        $sql = "INSERT INTO clicks (clickers) VALUES ('$result')";
        if (!$conn->query($sql)) {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<form method="POST">
    <p><input type="button" value="Click me!" onclick="clickCounter()"></p>
    <label>The button has been clicked <span id="result">0</span> times.</label>
    <input type="hidden" name="result" id="hiddenResult" value="0">
    <p><input type="submit" value="Save count"></p>
</form>


</body>
</html>
