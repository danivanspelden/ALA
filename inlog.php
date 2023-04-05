<?php include './connection.php'; 

if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
    $username = $_POST['gebruikersnaam'];
    $password = $_POST['wachtwoord'];

    $stmt = $conn->prepare("SELECT * FROM gebruikers WHERE username = :username AND passwords = :passwords");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':passwords', $password);
    $stmt->execute();
    $user = $stmt->fetch();

   
    if ($user) {
     
      session_start();
      $_SESSION["username"] = $user['username'];
      $_SESSION['rights'] = $user['admin'];

     
      header("Location: index.php?test=1");
      exit;
  } else {

      die(var_dump($user));
    // $error = "ongeldig'>Ongeldige gebruikersnaam en/of wachtwoord.";

    header("Location: inlog.php");
      exit;

      // echo "<p id='ongeldig'>Ongeldige gebruikersnaam en/of wachtwoord.</p>";
  }
// } else {
//     // Als de gebruikersnaam en/of het wachtwoord niet zijn ingevuld, toon dan een melding
//     echo "Vul a.u.b. uw gebruikersnaam en wachtwoord in.";
// }
}

try {
  $stmt = $conn->prepare("INSERT INTO gebruikers (username, passwords) VALUES (:username, :passwords)");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':passwords', $password);

  $username = "admin";
  $password = "admin";
  $stmt->execute();

} catch(PDOException $e) {
  
  if ($e->getCode() != 23000) {
      throw $e;
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rijksoverheid</title>
  <link rel="stylesheet" href="css/main.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="js/inlog.js" defer></script>
</head>

<style>
body{
  height: 50vh;
}

#verkeerd{
    color: red;
    
}
</style>

<body>
  <header>
    <nav id='navbar'>
      <img id='logo' src="img/Logo_rijksoverheid.svg.png">
      <li> <a class="navi" href="index.php?test=1">Home</a></li>
      <li> <a class="navi" href="vragen.php?test=1">Vragen</a></li>
      <li> <a class="navi" href="contact.php">Contact</a></li>
      <li> <a class="navi" href="edit.php">Edit</a></li>
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
            <p id="verkeerd">Vekeerde inlogegevens</p>
            
            <button class="enter" type="submit">Login</button>

            </form>
          </article>
        </article>
      </article>
    </nav>
  </header>
  
</body>
</html>