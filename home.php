<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Fry Shack – Beste frietboer van Gelderland</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Oswald:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    /* ── HERO ── */
    .hero-home {
      position: relative;
      width: 100%;
      height: 520px;
      overflow: hidden;
    }
    .hero-home img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center 60%;
      filter: brightness(0.45);
    }
    .hero-home-content {
      position: absolute;
      inset: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      gap: 20px;
      padding: 0 20px;
    }
    .hero-home-content h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.6rem;
      font-weight: 900;
      color: #fff;
      line-height: 1.15;
      text-shadow: 0 2px 20px rgba(0,0,0,0.5);
    }
    .hero-home-content h1 span { color: var(--gold-light); }
    .hero-home-content p {
      font-family: 'Oswald', sans-serif;
      font-size: 1.1rem;
      color: rgba(255,255,255,0.85);
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }
    .hero-btns { display: flex; gap: 14px; margin-top: 8px; }
    .btn-primary {
      background: var(--gold);
      color: var(--dark-brown);
      font-family: 'Oswald', sans-serif;
      font-weight: 700;
      font-size: 1rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 14px 32px;
      border-radius: 4px;
      text-decoration: none;
      display: inline-block;
      transition: background 0.2s;
    }
    .btn-primary:hover { background: var(--gold-light); }
    .btn-outline-white {
      background: transparent;
      color: #fff;
      font-family: 'Oswald', sans-serif;
      font-weight: 600;
      font-size: 1rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 13px 32px;
      border-radius: 4px;
      border: 2px solid rgba(255,255,255,0.7);
      text-decoration: none;
      transition: border-color 0.2s;
    }
    .btn-outline-white:hover { border-color: #fff; }

    /* ── USP BALK ── */
    .usp-balk {
      background: var(--dark-brown);
      display: flex;
      justify-content: center;
      gap: 60px;
      padding: 20px 40px;
      flex-wrap: wrap;
    }
    .usp-item {
      display: flex;
      align-items: center;
      gap: 10px;
      color: var(--gold-light);
      font-family: 'Oswald', sans-serif;
      font-size: 0.9rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    /* ── SECTIES ── */
    .home-section {
      max-width: 980px;
      margin: 0 auto;
      padding: 64px 20px;
    }
    .home-section-title {
      font-family: 'Playfair Display', serif;
      font-size: 2.2rem;
      font-weight: 700;
      color: var(--dark-brown);
      margin-bottom: 8px;
    }
    .home-section-sub {
      font-family: 'Lato', sans-serif;
      font-size: 1rem;
      color: #888;
      margin-bottom: 36px;
    }
    .gold-line {
      width: 60px;
      height: 3px;
      background: var(--gold);
      margin-bottom: 16px;
    }

    /* ── POPULAIRE PRODUCTEN ── */
    .producten-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }
    .product-card-home {
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.07);
      transition: transform 0.2s, box-shadow 0.2s;
      text-decoration: none;
      color: inherit;
      display: block;
    }
    .product-card-home:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 24px rgba(0,0,0,0.13);
    }
    .product-card-home img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }
    .product-card-home-body { padding: 16px; }
    .product-card-home-name {
      font-family: 'Oswald', sans-serif;
      font-weight: 700;
      font-size: 1rem;
      text-transform: uppercase;
      color: var(--dark-brown);
      margin-bottom: 4px;
    }
    .product-card-home-desc {
      font-size: 0.8rem;
      color: #888;
      line-height: 1.45;
      margin-bottom: 10px;
    }
    .product-card-home-price {
      font-family: 'Oswald', sans-serif;
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--gold);
    }

    /* ── OVER ONS ── */
    .over-ons-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px;
      align-items: center;
    }
    .over-ons-img {
      width: 100%;
      height: 340px;
      object-fit: cover;
      border-radius: 10px;
    }
    .over-ons-tekst p {
      font-family: 'Lato', sans-serif;
      font-size: 1rem;
      color: #555;
      line-height: 1.75;
      margin-bottom: 16px;
    }

    /* ── CONTACT STRIP ── */
    .contact-strip {
      background: var(--dark-brown);
      padding: 64px 20px;
      text-align: center;
    }
    .contact-strip h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #fff;
      margin-bottom: 10px;
    }
    .contact-strip > p {
      font-family: 'Lato', sans-serif;
      color: rgba(255,255,255,0.65);
      font-size: 1rem;
      margin-bottom: 28px;
    }
    .contact-info-row {
      display: flex;
      justify-content: center;
      gap: 48px;
      flex-wrap: wrap;
      margin-bottom: 32px;
    }
    .contact-info-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
    }
    .contact-info-label {
      font-family: 'Oswald', sans-serif;
      font-size: 0.75rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--gold);
    }
    .contact-info-value {
      font-family: 'Lato', sans-serif;
      font-size: 1rem;
      color: #fff;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .hero-home-content h1 { font-size: 2.4rem; }
      .producten-grid { grid-template-columns: 1fr 1fr; }
      .over-ons-grid { grid-template-columns: 1fr; }
      .over-ons-img { height: 240px; }
      .usp-balk { gap: 24px; }
    }
    @media (max-width: 600px) {
      .hero-home { height: 380px; }
      .hero-home-content h1 { font-size: 1.8rem; }
      .producten-grid { grid-template-columns: 1fr; }
      .hero-btns { flex-direction: column; align-items: center; }
    }
  </style>
</head>

<body>

  <!-- HEADER -->
  <header>
    <nav class="left">
      <a href="index.php">Home</a>
      <a href="menu.php">Menu</a>
      <a href="dbcalls/contact/contact.php">Contact</a>
      <a href="over.php">Over ons</a>
    </nav>
    <div class="logo-center">
      <img src="assets/img/ChatGPT Image Feb 23, 2026, 03_57_53 PM.png" alt="The Fry Shack Logo" />
    </div>
    <nav class="right">
      <a href="dbcalls/login/login.php" class="btn-account">Account</a>
    </nav>
  </header>

  <!-- HERO -->
  <div class="hero-home">
    <img src="assets/img/ondernemen-over-de-grens-frietboer-in-china.jpg" alt="Verse friet" />
    <div class="hero-home-content">
      <h1>De beste <span>friet</span><br />van Gelderland</h1>
      <p>Vers gebakken, elke dag — met liefde gemaakt</p>
      <div class="hero-btns">
        <a href="menu.php" class="btn-primary">Bekijk ons menu</a>
        <a href="dbcalls/contact/contact.php" class="btn-outline-white">Contact</a>
      </div>
    </div>
  </div>

  <!-- USP BALK -->
  <div class="usp-balk">
    <div class="usp-item">Vers gebakken friet</div>
    <div class="usp-item">#1 in Gelderland</div>
    <div class="usp-item">Elke dag geopend</div>
    <div class="usp-item">Snel geleverd</div>
  </div>

  <!-- POPULAIRE PRODUCTEN -->
  <!-- De $result variabele komt beschikbaar via index.php -> read.php -->
  <div class="home-section">
    <div class="gold-line"></div>
    <h2 class="home-section-title">Onze favorieten</h2>
    <p class="home-section-sub">De meest bestelde items — altijd vers, altijd lekker</p>
    <div class="producten-grid">
      <?php
        $teller = 0;
        foreach ($result as $product) {
          if ($teller >= 3) break;
          ?>
          <a href="menu.php" class="product-card-home">
            <img src="<?php echo $product['afbeeldingen']; ?>" alt="<?php echo htmlspecialchars($product['naam']); ?>" />
            <div class="product-card-home-body">
              <div class="product-card-home-name"><?php echo htmlspecialchars($product['naam']); ?></div>
              <div class="product-card-home-desc"><?php echo htmlspecialchars($product['beschrijving']); ?></div>
              <div class="product-card-home-price">€ <?php echo number_format($product['prijs'], 2, ',', '.'); ?></div>
            </div>
          </a>
          <?php
          $teller++;
        }
      ?>
    </div>
  </div>

  <!-- OVER ONS -->
  <div style="background: #fff;">
    <div class="home-section">
      <div class="over-ons-grid">
        <img src="assets/img/ondernemen-over-de-grens-frietboer-in-china.jpg" alt="Over ons" class="over-ons-img" />
        <div class="over-ons-tekst">
          <div class="gold-line"></div>
          <h2 class="home-section-title">Over The Fry Shack</h2>
          <p>Al jaren lang staat The Fry Shack bekend als dé frietboer van Gelderland. Wij geloven dat goede friet begint bij verse aardappelen en de juiste bereiding — niet meer, niet minder.</p>
          <p>Ons team staat elke dag voor je klaar met een glimlach en een zak heerlijke friet. Van klein tot groot, van klassiek tot speciaal — bij ons vind je altijd wat je zoekt.</p>
          <a href="over.php" class="btn-primary" style="margin-top: 8px;">Lees meer over ons</a>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTACT STRIP -->
  <div class="contact-strip">
    <h2>Kom langs of neem contact op</h2>
    <p>We staan altijd voor je klaar — online of in de winkel</p>
    <div class="contact-info-row">
      <div class="contact-info-item">
        <span class="contact-info-label">Adres</span>
        <span class="contact-info-value">Frietstraat 1, Nijmegen</span>
      </div>
      <div class="contact-info-item">
        <span class="contact-info-label">Openingstijden</span>
        <span class="contact-info-value">Ma–Za: 11:00 – 21:00</span>
      </div>
      <div class="contact-info-item">
        <span class="contact-info-label">Telefoon</span>
        <span class="contact-info-value">024 – 123 45 67</span>
      </div>
    </div>
    <a href="dbcalls/contact/contact.php" class="btn-primary">Stuur een bericht</a>
  </div>

  <!-- FOOTER -->
  <footer>
    <a href="menu.php">Menu</a>
    <a href="dbcalls/contact/contact.php">Contact</a>
    <a href="dbcalls/over/over.php">Over ons</a>
  </footer>

</body>
</html>