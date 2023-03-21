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
      <a href="index.html"><img id='logo' src="img/Logo_rijksoverheid.svg.png"></a>
      <li> <a class="navi" href="index.html">Home</a></li>
      <li> <a class="navi" href="index (test).html">Vragen</a></li>
      <li> <a class="navi" href="#contact">Contact</a></li>
      <li> <a class="navi" href="#edit">Edit</a></li>
      <button class='bx bx-user' class="open-button" id="myBtn" onclick="openForm()"></button>

      <article id="myModal" class="modal">
        <article class="modal-content container">
          <article class="card">
            <span class="close">&times;</span>
            <a class="login">Log in</a>
            <article class="inputBox">
              <form>
                <input type="text" required="required">
                <span class="user">Username</span>
              </article>

            <article class="inputBox">
              <input type="password" required="required">
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