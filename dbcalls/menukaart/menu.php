<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Fry Shack</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Oswald:wght@400;600;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <!-- HEADER -->
  <header>
    <nav class="left">
      <a href="index.php">Home</a>
      <a href="menu.php">Menu</a>
      <a href="../contact/contact.php">Contact</a>
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
  <div class="hero">
    <img src="assets/img/ondernemen-over-de-grens-frietboer-in-china.jpg" alt="Verse friet" />
    <div class="hero-text">
      Welkom bij de beste frietboer van Gelderland!<br />
      Ons menu vind u hieronder!
    </div>
  </div>

  <!-- PAGE WRAPPER -->
  <div class="page-wrapper">

    <!-- SEARCH -->
    <div class="search-wrap">
      <div class="search-bar">
        <img src="assets/img/search-icon.svg" alt="zoek" />
        <input type="text" placeholder="Zoek naar menu items" />
      </div>
    </div>

    <!-- MENU -->
    <main class="menu-content">
<?php //opdracht: Ik wil 1 foreach opdeze pagina zien, los dit op.?>
      <!-- VERSE FRIET -->
      <section>
        <div class="section-title">Verse Friet</div>
        <div class="grid-2">
          <?php foreach ($result as $product) {
            if ($product["categorie"] == "friet") { ?>
              <div class="card">
                <div class="card-top">
                  <div class="card-info">
                    <div class="card-name"><?php echo $product['naam']; ?></div>
                    <div class="card-price">€<?php echo $product['prijs']; ?>,00</div>
                  </div>
                  <img src="<?php echo $product['afbeeldingen']; ?>" alt="Kleine Friet" class="card-img" />
                </div>
                <div class="card-description"><?php echo $product['beschrijving']; ?></div>
                <hr class="card-divider" />
                <div class="card-allergens">
                  <span class="allergen-label">Allergenen:</span>
                  <span class="allergen-tag"><?php echo $product['allergenen']; ?></span>
                </div>
                <button
                  class="btn-voeg"
                  data-naam="<?php echo $product['naam']; ?>"
                  data-prijs="<?php echo $product['prijs']; ?>">
                  Voeg toe
                </button>
              </div>
            <?php }
          } ?>
        </div>
      </section>

      <!-- DRANKJES -->
      <section>
        <div class="section-title">Drankjes</div>
        <div class="grid-2">
          <?php foreach ($result as $product) {
            if ($product["categorie"] == "drinken") { ?>
              <div class="card">
                <div class="card-top">
                  <div class="card-info">
                    <div class="card-name"><?php echo $product['naam']; ?></div>
                    <div class="card-price">€<?php echo $product['prijs']; ?>,00</div>
                  </div>
                  <img src="<?php echo $product['afbeeldingen']; ?>" alt="Coca Cola" class="card-img" />
                </div>
                <div class="card-description"><?php echo $product['beschrijving']; ?></div>
                <hr class="card-divider" />
                <div class="card-allergens">
                  <span class="allergen-none">Geen allergenen</span>
                </div>
                <button
                  class="btn-voeg"
                  data-naam="<?php echo htmlspecialchars($product['naam']); ?>"
                  data-prijs="<?php echo $product['prijs']; ?>">
                  Voeg toe
                </button>
              </div>
            <?php }
          } ?>
        </div>
      </section>

    </main>

    <!-- SIDEBAR: ORDER BOX -->
    <aside class="sidebar">
      <div class="order-box">
        <div class="order-title">Jouw bestelling</div>
        <ul class="order-items" id="orderItems">
          <li class="order-empty">Nog niets toegevoegd</li>
        </ul>
        <div class="totaal-row">
          <span class="totaal-label">Totaal</span>
          <span class="totaal-amount" id="totaalBedrag">€ 0,00</span>
        </div>
        <a href="afrekenen.php" class="btn-afrekenen">Afrekenen</a>
      </div>
    </aside>

  </div>

  <!-- FOOTER -->
  <footer>
    <a href="index.php">Home</a>
    <a href="contact.php">Contact</a>
    <a href="over.php">Over ons</a>
  </footer>

  <script src="assets/js/java.js"></script>
</body>

</html>