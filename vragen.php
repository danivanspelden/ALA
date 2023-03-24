<?php include 'C:/xampp/htdocs/ALA/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rijksoverheid</title>
  <link rel="stylesheet" href="css/main.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="js/main.js" defer></script>
</head>
<body>
  <header>
    <nav id='navbar'>
      <img id='logo' src="img/Logo_rijksoverheid.svg.png">
      <li> <a class="navi" href="index.php?test=1">Home</a></li>
      <li> <a class="navi" href="vragen.php?test=1">Vragen</a></li>
      <li> <a class="navi" href="#contact">Contact</a></li>
      <li> <a class="navi" href="#edit">Edit</a></li>
      <button class='bx bx-user' class="open-button" id="myBtn" onclick="openForm()"></button>


      <!-- form -->

      <article id="myModal" class="modal">
        <article class="modal-content container">
          <article class="card">

            <span class="close">&times;</span>
            <a class="login">Log in</a>
            <article class="inputBox">
            
            <form action="" method="POST">
              <input type="text" required="required" name="gebruikersnaam">
              <span class="user">Username</span>
            </article>

            <article class="inputBox">
              <input type="password" required="required" name="wachtwoord">
              <span>Password</span>
            </article>

            <button class="enter" type="submit">Login</button>

            </form>
          </article>
        </article>
      </article>
    </nav>
  </header>
</body>
</html>

<style><?php include 'C:/xampp/htdocs/ALA/CSS/vragenphp.css'; ?></style>

<?php

$test = $_GET['test'];

$query = "SELECT * FROM nodes JOIN edges ON nodes.id = edges.start_node WHERE nodes.id = '$test'";


$result = $conn->query($query);

if ($result->rowCount() > 0) {
  // output data of each row
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    

    echo "<div id='vraag'>" . $row["question"].  "</div><br>";
    ?> 


    <a id='janee' href="vragen.php?test=<?php echo $row['end_node'] ?>"> <?php echo $row['answer'] ?> </a>
    <?php
  }

} else {
  echo "0 results";
}

// db vragen ophalen

$nodes = array();

?>







