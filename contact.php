<?php include './connection.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $vraagstellen = $_POST['vraag'];

    if (!empty($voornaam) && !empty($achternaam) && !empty($email) && !empty($vraagstellen)) {
        $stmt = $conn->prepare("INSERT INTO vraag (voornaam, tussenvoegsel, achternaam, email, vraag) VALUES (:voornaam, :tussenvoegsel, :achternaam, :email, :vraagstellen)");
        $stmt->bindParam(":voornaam", $voornaam);
        $stmt->bindParam(":tussenvoegsel", $tussenvoegsel);
        $stmt->bindParam(":achternaam", $achternaam);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":vraagstellen", $vraagstellen);
        $stmt->execute();

        echo 'Vraag verzonden!';
        header("Location: contact.php");
        
    } else {
        echo "<p id='verplicht'>Alle velden behalve tussenvoegsel zijn verplicht.</p>";
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
  <script src="js/main.js" defer></script>
  <style>
  <?php include 'C:/xampp/htdocs/ALA/CSS/main.css'; ?>
  </style>
</head>
<body>
  <header>
    <nav id='navbar'>
      <img id='logo' src="img/Logo_rijksoverheid.svg.png">
      <li> <a class="navi" href="index.php?test=1">Home</a></li>
      <li> <a class="navi" href="vragen.php">Vragen</a></li>
      <li> <a class="navi" href="contact.php">Contact</a></li>
      <?php if(isset($_SESSION['rights']) && $_SESSION['rights'] == 1){ ?>
      <li> <a class="navi" href="edit.php">Edit</a></li>
      <?php } ?>
      <button class='bx bx-user' class="open-button" id="myBtn" onclick="openForm()"></button>

      <article style="color: white; text-align:center;">
      <?php  if (isset($_SESSION['username'])) : ?>
      <p>
      Welkom
      <strong>
          <?php echo $_SESSION['username']; ?>
          !
      </strong>
      </p>  
      <p>
      <a href="index.php?" style="color: red;" text-decoration="none">
          Klik om uit te loggen
      </a>
      </p>
      <?php endif ?>
      </article>

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
<body>
    <id class="h1">Heeft u nog vragen? Vul dit formulier in.</id>
<form id="form" method="POST">
    <label for="voornaam">Voornaam:</label>
    <input type="text" name="voornaam" id="voornaam"> <br>

    <label for="tussenvoegsel">Tussenvoegsel:</label>
    <input type="text" name="tussenvoegsel" id="tussenvoegsel"> <br>

    <label for="achternaam">Achternaam:</label>
    <input type="text" name="achternaam" id="achternaam"> <br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email"> <br>

    <label for="vraagstellen">Vraag:</label>
    <input type="text" name="vraagstellen" id="vraagstellen"> <br>

    <button type="submit">Versturen</button>
</form>
<footer id="footer">
    <section id="footerContainer">
      <article id="leftFooter">
        <p>De Rijksoverheid. Voor Nederland</p>
      </article>
      <article id="rightFooter">
        <article id="footerService">
          <p class="footerTitle">Service</p>
          <a href="https://www.rijksoverheid.nl/contact">Contact</a>
          <a href="https://www.rijksoverheid.nl/abonneren">Abonneren</a>
          <a href="https://www.rijksoverheid.nl/rss">RSS</a>
          <a href="https://www.rijksoverheid.nl/vacatures">Vacatures</a>
          <a href="https://www.rijksoverheid.nl/sitemap">Sitemap</a>
          <a href="https://www.rijksoverheid.nl/help">Help</a>
          <a href="https://www.rijksoverheid.nl/archief">Archief</a>
        </article>
        <article id="footerOver">
          <p class="footerTitle">Over deze site</p>
          <a href="https://www.rijksoverheid.nl/over-rijksoverheid-nl">Over Rijksoverheid.nl</a>
          <a href="https://www.rijksoverheid.nl/wetten-en-regelingen">Wetten en regelingen</a>
          <a href="https://www.rijksoverheid.nl/copyright">Copyright</a>
          <a href="https://www.rijksoverheid.nl/privacy">Privacy</a>
          <a href="https://www.rijksoverheid.nl/cookies">Cookies</a>
          <a href="https://www.rijksoverheid.nl/toegankelijkheid">Toegankelijkheid</a>
          <a href="https://www.rijksoverheid.nl/opendata">Open data</a>
          <a href="https://www.rijksoverheid.nl/kwetsbaarheid-melden">Kwetsbaarheid melden</a>
        </article>
      </article>
    </section>
  </footer>
</body>
</html>