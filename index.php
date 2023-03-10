<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BZK Vragenboom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">
        <article>
            <input type="submit" value="Behouden" name="vraag1a" id="vraag1_1a"/><label for="vraag1_1a"></label>
            <input type="submit" value="Weggooien" name="vraag1b" id="vraag1_1b"/><label for="vraag1_1b"></label> <br>
            <input type="submit" value="Ja" name="vraag1a" id="vraag1_1a"/><label for="vraag1_1a"></label>
            <input type="submit" value="Nee " name="vraag1b" id="vraag1_1b"/><label for="vraag1_1b"></label>
        </article>
    </table>
</form>

<script src="java.js"></script>
</body>
</html>


<!-- PHP -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ala";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, question FROM nodes;";
$results = $conn->query($sql);

foreach($results as $result) {
    echo $result['id'] . " " . $result['question'] . "<br>";
}

$conn->close();

// alternatief

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ala";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT nodes FROM nodes;";

// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }

// $conn->close();

?>