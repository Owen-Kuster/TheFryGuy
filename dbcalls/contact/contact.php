<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact – The Fry Shack</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Oswald:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/css/contact.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
</head>

<body>
<script>
  console.log('Script laadt');
</script>
  <!-- HEADER -->
  <header>
    <nav class="left">
      <a href="../../index.php">Home</a>
      <a href="../../../menu.php">Menu</a>
      <a href="contact.php">Contact</a>
      <a href="over.php">Over ons</a>
    </nav>
    <div class="logo-center">
      <img src="../../assets/img/ChatGPT Image Feb 23, 2026, 03_57_53 PM.png" alt="The Fry Shack Logo" />
    </div>
    <nav class="right">
      <a href="../../dbcalls/login/login.php" class="btn-account">Account</a>
    </nav>
  </header>

  <!-- HERO -->
  <div class="hero-small">
    <img src="../../assets/img/ondernemen-over-de-grens-frietboer-in-china.jpg" alt="Contact" />
    <div class="hero-small-content">
      <h1>Contact</h1>
      <p>Wij horen graag van je</p>
    </div>
  </div>

  <!-- CONTACT CONTENT -->
  <div class="contact-wrapper">

    <!-- FORMULIER -->
    <div class="contact-form-box">
      <div class="gold-line"></div>
      <h2>Stuur ons een bericht</h2>
      <p>Heb je een vraag of opmerking? Vul het formulier in en we reageren zo snel mogelijk.</p>

      <form id="contactForm" onsubmit="verzendForm(event)">
        <div class="form-row">
          <div class="form-group">
            <label for="voornaam">Voornaam</label>
            <input type="text" id="voornaam" placeholder="Jan" required />
          </div>
          <div class="form-group">
            <label for="achternaam">Achternaam</label>
            <input type="text" id="achternaam" placeholder="Jansen" required />
          </div>
        </div>
        <div class="form-group">
          <label for="email">E-mailadres</label>
          <input type="email" id="email" placeholder="jan@voorbeeld.nl" required />
        </div>
        <div class="form-group">
          <label for="telefoon">Telefoonnummer (optioneel)</label>
          <input type="tel" id="telefoon" placeholder="06 – 12 34 56 78" />
        </div>
        <div class="form-group">
          <label for="bericht">Bericht</label>
          <textarea id="bericht" placeholder="Schrijf hier je bericht..." required></textarea>
        </div>
        <button type="submit" class="btn-verzend">Verstuur bericht</button>
        <div class="form-success" id="formSuccess">
          ✓ Bedankt! We nemen zo snel mogelijk contact met je op.
        </div>
      </form>
    </div>

    <!-- INFO + MAP -->
    <div class="contact-info-box">

      <div class="info-kaart">
        <h3>Onze gegevens</h3>
        <div class="info-rij">
          <span class="info-icon">📍</span>
          <div class="info-rij-tekst">
            <strong>Adres</strong>
            Frietstraat 1<br />6511 AB Nijmegen
          </div>
        </div>
        <div class="info-rij">
          <span class="info-icon">📞</span>
          <div class="info-rij-tekst">
            <strong>Telefoon</strong>
            024 – 123 45 67
          </div>
        </div>
        <div class="info-rij">
          <span class="info-icon">✉️</span>
          <div class="info-rij-tekst">
            <strong>E-mail</strong>
            info@thefryshack.nl
          </div>
        </div>
      </div>

      <div class="info-kaart">
        <h3>Openingstijden</h3>
        <table class="tijden-tabel">
          <tr><td>Maandag</td><td>11:00 – 21:00</td></tr>
          <tr><td>Dinsdag</td><td>11:00 – 21:00</td></tr>
          <tr><td>Woensdag</td><td>11:00 – 21:00</td></tr>
          <tr><td>Donderdag</td><td>11:00 – 21:00</td></tr>
          <tr><td>Vrijdag</td><td>11:00 – 22:00</td></tr>
          <tr><td>Zaterdag</td><td>11:00 – 22:00</td></tr>
          <tr class="gesloten"><td>Zondag</td><td>Gesloten</td></tr>
        </table>
      </div>

      <div class="map-embed">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39661.27!2d5.8652!3d51.8126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c70674dac0b5e9%3A0xa9458b0c2c7a5d8f!2sNijmegen!5e0!3m2!1snl!2snl!4v1700000000000"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    <a href="menu.php">Menu</a>
    <a href="contact.php">Contact</a>
    <a href="over.php">Over ons</a>
  </footer>

  <script>
    function verzendForm(e) {
      e.preventDefault();
      document.getElementById('formSuccess').style.display = 'block';
      document.getElementById('contactForm').reset();
      setTimeout(() => {
        document.getElementById('formSuccess').style.display = 'none';
      }, 5000);
    }
  </script>

</body>
</html>