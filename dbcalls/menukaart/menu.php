<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Fry Shack</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Oswald:wght@400;600;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css"/>
</head>

<body>

  <!-- HEADER -->
  <header>
    <nav class="left">
      <a href="index.php">Home</a>
      <a href="menu.html">Menu</a>
      <a href="bestel.html">Bestel bij ons</a>
      <a href="over.html">Over ons</a>
    </nav>

    <div class="logo-center">
      <img src="assets/img/ChatGPT Image Feb 23, 2026, 03_57_53 PM.png" alt="The Fry Shack Logo" />
    </div>

    <nav class="right">
      <a href="dbcalls/login/admin.php" class="btn-account">Account</a>
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

      <!-- VERSE FRIET -->
      <section>
        <div class="section-title">Verse Friet</div>
        <div class="grid-2">

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[0]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[0]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[0]['afbeeldingen']; ?>" alt="Kleine Friet" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[0]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag"><?php echo $result[0]['allergenen']; ?></span>
            </div>
            <a href="cart.php?add=kleine-friet" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[1]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[1]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[1]['afbeeldingen']; ?>" alt="Middel Friet" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[1]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag"><?php echo $result[1]['allergenen']; ?></span>
            </div>
            <a href="cart.php?add=middel-friet" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[2]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[2]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[2]['afbeeldingen']; ?>" alt="Grote Friet" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[2]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag"><?php echo $result[2]['allergenen']; ?></span>
            </div>
            <a href="cart.php?add=grote-friet" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[3]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[3]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[3]['afbeeldingen']; ?>" alt="Kleine Gezinszak" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[3]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag"><?php echo $result[3]['allergenen']; ?></span>
            </div>
            <a href="cart.php?add=kleine-gezinszak" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[4]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[4]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[4]['afbeeldingen']; ?>" alt="Middel Gezinszak" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[4]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag"><?php echo $result[4]['allergenen']; ?></span>
            </div>
            <a href="cart.php?add=middel-gezinszak" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[5]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[5]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[5]['afbeeldingen']; ?>" alt="Grote Gezinszak" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[5]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag"><?php echo $result[5]['allergenen']; ?></span>
            </div>
            <a href="cart.php?add=grote-gezinszak" class="btn-voeg">Voeg toe</a>
          </div>

        </div>
      </section>

      <!-- DRANKJES -->
      <section>
        <div class="section-title">Drankjes</div>
        <div class="grid-2">

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[6]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[6]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[6]['afbeeldingen']; ?>" alt="Coca Cola" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[6]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-none">Geen allergenen</span>
            </div>
            <a href="cart.php?add=coca-cola" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[7]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[7]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[7]['afbeeldingen']; ?>" alt="Sprite" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[7]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-none">Geen allergenen</span>
            </div>
            <a href="cart.php?add=sprite" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[8]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[8]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[8]['afbeeldingen']; ?>" alt="Fanta Orange" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[8]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-none">Geen allergenen</span>
            </div>
            <a href="cart.php?add=fanta-orange" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name"><?php echo $result[9]['naam']; ?></div>
                <div class="card-price">€<?php echo $result[9]['prijs']; ?>,00</div>
              </div>
              <img src="<?php echo $result[9]['afbeeldingen']; ?>" alt="Water" class="card-img" />
            </div>
            <div class="card-description"><?php echo $result[9]['beschrijving']; ?></div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-none">Geen allergenen</span>
            </div>
            <a href="cart.php?add=water" class="btn-voeg">Voeg toe</a>
          </div>

        </div>
      </section>

    </main>

    <!-- SIDEBAR: ORDER BOX -->
    <aside class="sidebar">
      <div class="order-box">
        <div class="totaal-row">
          <span class="totaal-label">Totaal</span>
          <span class="totaal-amount">€ 0,00</span>
        </div>
        <a href="afrekenen.php" class="btn-afrekenen">Afrekenen</a>
      </div>
    </aside>

  </div>

  <!-- FOOTER -->
  <footer>
    <a href="bestel.html">Bestel bij ons</a>
    <a href="over.html">Over ons</a>
  </footer>

</body>

</html>