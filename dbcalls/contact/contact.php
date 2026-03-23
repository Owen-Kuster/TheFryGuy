<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact – The Fry Shack</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Oswald:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    /* ── HERO KLEIN ── */
    .hero-small {
      position: relative;
      width: 100%;
      height: 220px;
      overflow: hidden;
    }
    .hero-small img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center 60%;
      filter: brightness(0.45);
    }
    .hero-small-content {
      position: absolute;
      inset: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      gap: 10px;
    }
    .hero-small-content h1 {
      font-family: 'Playfair Display', serif;
      font-size: 2.8rem;
      font-weight: 900;
      color: #fff;
    }
    .hero-small-content p {
      font-family: 'Oswald', sans-serif;
      font-size: 0.95rem;
      color: rgba(255,255,255,0.75);
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }

    /* ── CONTACT LAYOUT ── */
    .contact-wrapper {
      max-width: 980px;
      margin: 0 auto;
      padding: 60px 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px;
      align-items: start;
    }

    /* ── FORMULIER ── */
    .contact-form-box {
      background: #fff;
      border-radius: 10px;
      padding: 36px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
    }
    .gold-line {
      width: 50px;
      height: 3px;
      background: var(--gold);
      margin-bottom: 14px;
    }
    .contact-form-box h2 {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      color: var(--dark-brown);
      margin-bottom: 6px;
    }
    .contact-form-box > p {
      font-family: 'Lato', sans-serif;
      font-size: 0.9rem;
      color: #888;
      margin-bottom: 28px;
      line-height: 1.6;
    }
    .form-group {
      display: flex;
      flex-direction: column;
      gap: 6px;
      margin-bottom: 18px;
    }
    .form-group label {
      font-family: 'Oswald', sans-serif;
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--dark-brown);
    }
    .form-group input,
    .form-group textarea {
      font-family: 'Lato', sans-serif;
      font-size: 0.9rem;
      color: var(--text-dark);
      background: #fafafa;
      border: 1px solid #e0d8cc;
      border-radius: 6px;
      padding: 10px 14px;
      outline: none;
      transition: border-color 0.2s;
      resize: none;
    }
    .form-group input:focus,
    .form-group textarea:focus {
      border-color: var(--gold);
      background: #fff;
    }
    .form-group textarea { height: 120px; }
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }
    .btn-verzend {
      width: 100%;
      background: var(--gold);
      color: var(--dark-brown);
      font-family: 'Oswald', sans-serif;
      font-size: 1rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 13px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.2s;
      margin-top: 4px;
    }
    .btn-verzend:hover { background: var(--gold-light); }
    .form-success {
      display: none;
      background: #f0faf4;
      border: 1px solid #b6e4c8;
      border-radius: 6px;
      padding: 14px 18px;
      font-family: 'Lato', sans-serif;
      font-size: 0.9rem;
      color: #2a7a4b;
      margin-top: 14px;
    }

    /* ── INFO + MAP ── */
    .contact-info-box {
      display: flex;
      flex-direction: column;
      gap: 24px;
    }
    .info-kaart {
      background: #fff;
      border-radius: 10px;
      padding: 28px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
    }
    .info-kaart h3 {
      font-family: 'Oswald', sans-serif;
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 16px;
    }
    .info-rij {
      display: flex;
      gap: 14px;
      align-items: flex-start;
      margin-bottom: 14px;
    }
    .info-rij:last-child { margin-bottom: 0; }
    .info-icon { font-size: 1.1rem; margin-top: 1px; flex-shrink: 0; }
    .info-rij-tekst {
      font-family: 'Lato', sans-serif;
      font-size: 0.9rem;
      color: #555;
      line-height: 1.55;
    }
    .info-rij-tekst strong {
      display: block;
      color: var(--text-dark);
      font-weight: 700;
      margin-bottom: 2px;
    }
    .tijden-tabel {
      width: 100%;
      border-collapse: collapse;
      font-family: 'Lato', sans-serif;
      font-size: 0.88rem;
    }
    .tijden-tabel tr { border-bottom: 1px solid #f0e8d8; }
    .tijden-tabel tr:last-child { border-bottom: none; }
    .tijden-tabel td { padding: 7px 0; color: #555; }
    .tijden-tabel td:last-child {
      text-align: right;
      font-weight: 700;
      color: var(--text-dark);
    }
    .tijden-tabel .gesloten td:last-child { color: #ccc; font-weight: 400; }
    .map-embed {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      height: 220px;
    }
    .map-embed iframe { width: 100%; height: 100%; border: none; display: block; }

    /* ── RESPONSIVE ── */
    @media (max-width: 800px) {
      .contact-wrapper { grid-template-columns: 1fr; }
      .hero-small-content h1 { font-size: 2rem; }
      .form-row { grid-template-columns: 1fr; }
    }
  </style>
</head>

<body>

  <!-- HEADER -->
  <header>
    <nav class="left">
      <a href="../../index.php">Home</a>
      <a href="../menukaart/menu.php">Menu</a>
      <a href="contact.php">Contact</a>
      <a href="over.php">Over ons</a>
    </nav>
    <div class="logo-center">
      <img src="assets/img/ChatGPT Image Feb 23, 2026, 03_57_53 PM.png" alt="The Fry Shack Logo" />
    </div>
    <nav class="right">
      <a href="dbcalls/login/admin.php" class="btn-account">Account</a>
    </nav>
  </header>

  <!-- HERO -->
  <div class="hero-small">
    <img src="assets/img/ondernemen-over-de-grens-frietboer-in-china.jpg" alt="Contact" />
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