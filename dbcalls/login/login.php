<?php
session_start();

if(isset($_SESSION["loggedin"])){
  header("Location: admin.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login – The Fry Shack</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Oswald:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="../../assets/css/login.css" />
</head>

<body>

  <div style="display: flex; flex-direction: column; min-height: 100vh;">

    <!-- HEADER -->
    <header>
      <nav class="left">
        <a href="../../index.php">Home</a>
      </nav>
      <div class="logo-center">
        <img src="../../assets/img/ChatGPT Image Feb 23, 2026, 03_57_53 PM.png" alt="The Fry Shack Logo" />
      </div>
      <nav class="right">
      </nav>
    </header>

    <!-- LOGIN BOX -->
    <div class="login-wrapper">
      <div class="login-box">
        <h1>Admin Login</h1>
        <p>Log in met je gegevens</p>

        <?php
          // Voeg hier je login logica in
        ?>

        <form method="POST" action="admin.php">
          <div class="form-group">
            <label for="username">Gebruikersnaam</label>
            <input type="text" id="username" name="username" placeholder="admin" required />
          </div>

          <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input type="password" id="password" name="password" placeholder="••••••••" required />
          </div>

          <button type="submit" class="btn-login">Inloggen</button>
        </form>
      </div>
    </div>

    <!-- FOOTER -->
    <footer>
      <a href="../../index.php">Home</a>
    </footer>

  </div>

  <script>
    // Leuke animatie voor de login box
    const loginBox = document.querySelector('.login-box');
    loginBox.style.opacity = '0';
    loginBox.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
      loginBox.style.transition = 'all 0.5s ease';
      loginBox.style.opacity = '1';
      loginBox.style.transform = 'translateY(0)';
    }, 100);
  </script>

</body>

</html>