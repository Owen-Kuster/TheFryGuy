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
      <a href="index.html">Home</a>
      <a href="menu.html">Menu</a>
      <a href="bestel.html">Bestel bij ons</a>
      <a href="over.html">Over ons</a>
    </nav>

    <div class="logo-center">
      <img src="assets/img/ChatGPT Image Feb 23, 2026, 03_57_53 PM.png" alt="The Fry Shack Logo" />
    </div>

    <nav class="right">
      <a href="account.html" class="btn-account">Account</a>
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
                <div class="card-name">Middel Friet</div>
                <div class="card-price">€3,00</div>
              </div>
              <img src="assets/img/Friet.png" alt="Middel Friet" class="card-img" />
            </div>
            <div class="card-description">Een ruime portie goudgele friet, perfect bij een saus naar keuze.</div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag">Gluten</span>
            </div>
            <a href="cart.php?add=middel-friet" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name">Grote Friet</div>
                <div class="card-price">€3,65</div>
              </div>
              <img src="assets/img/Friet.png" alt="Grote Friet" class="card-img" />
            </div>
            <div class="card-description">Een flinke grote portie verse friet — voor de echte frietliefhebber.</div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag">Gluten</span>
            </div>
            <a href="cart.php?add=grote-friet" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name">Kleine Gezinszak</div>
                <div class="card-price">€6,50</div>
              </div>
              <img src="assets/img/Gezinsfriet.png" alt="Kleine Gezinszak" class="card-img" />
            </div>
            <div class="card-description">Gezellig samen genieten! Een kleine zak verse friet voor 2–3 personen.</div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag">Gluten</span>
            </div>
            <a href="cart.php?add=kleine-gezinszak" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name">Middel Gezinszak</div>
                <div class="card-price">€8,50</div>
              </div>
              <img src="assets/img/Gezinsfriet.png" alt="Middel Gezinszak" class="card-img" />
            </div>
            <div class="card-description">Perfecte middelmaat voor het hele gezin — verse friet voor 3–4 personen.</div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag">Gluten</span>
            </div>
            <a href="cart.php?add=middel-gezinszak" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name">Grote Gezinszak</div>
                <div class="card-price">€10,00</div>
              </div>
              <img src="assets/img/Gezinsfriet.png" alt="Grote Gezinszak" class="card-img" />
            </div>
            <div class="card-description">De ultieme gezinsportie verse friet — meer dan genoeg voor 4–5 personen.</div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-label">Allergenen:</span>
              <span class="allergen-tag">Gluten</span>
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
                <div class="card-name">Coca Cola</div>
                <div class="card-price">€1,15</div>
              </div>
              <img src="assets/img/cola.png" alt="Coca Cola" class="card-img" />
            </div>
            <div class="card-description">Het klassieke bruisende frisdrank — ijskoud geserveerd. Ideale begeleider bij verse friet.</div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-none">Geen allergenen</span>
            </div>
            <a href="cart.php?add=coca-cola" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name">Sprite</div>
                <div class="card-price">€1,15</div>
              </div>
              <img src="assets/img/sprite.png" alt="Sprite" class="card-img" />
            </div>
            <div class="card-description">Fris en citrusachtig bruiswater voor een verfrissende dorstlesser.</div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-none">Geen allergenen</span>
            </div>
            <a href="cart.php?add=sprite" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name">Fanta Orange</div>
                <div class="card-price">€1,15</div>
              </div>
              <img src="assets/img/fanta.png" alt="Fanta Orange" class="card-img" />
            </div>
            <div class="card-description">Zoet en fruitig met een lekkere sinaasappelsmaak — favoriet bij jong en oud.</div>
            <hr class="card-divider" />
            <div class="card-allergens">
              <span class="allergen-none">Geen allergenen</span>
            </div>
            <a href="cart.php?add=fanta-orange" class="btn-voeg">Voeg toe</a>
          </div>

          <div class="card">
            <div class="card-top">
              <div class="card-info">
                <div class="card-name">Water</div>
                <div class="card-price">€0,60</div>
              </div>
              <img src="assets/img/water.png" alt="Water" class="card-img" />
            </div>
            <div class="card-description">Stil bronwater — puur, fris en altijd een goede keuze.</div>
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