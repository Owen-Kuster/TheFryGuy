<?php
include '../conn.php';

// Alle producten ophalen
$sql = "SELECT * FROM menukaart";
$stmt = $conn->prepare($sql);
$stmt->execute();
$producten = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin – The Fry Shack</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/css/admin.css" />
</head>

<body>

  <!-- ADMIN HEADER -->
  <header class="admin-header">
    <span class="badge">Panel</span>
    <h1>Admin</h1>
    <a href="../../index.php" class="back-link">← Terug naar site</a>
  </header>

  <div class="admin-wrapper">

    <!-- ══════════════════════════════════
         PRODUCT BEWERKEN
    ══════════════════════════════════ -->
    <div>
      <div class="section-title">Product bewerken</div>
      <div class="card">
        <div class="card-body">

          <!-- DROPDOWN OM PRODUCT TE KIEZEN -->
          <div class="form-group" style="margin-bottom: 24px;">
            <label for="productKiezer">Kies een product</label>
            <select id="productKiezer" onchange="laadProduct(this)">
              <option value="">-- Selecteer een product --</option>
              <?php foreach ($producten as $product) { ?>
                <option
                  value="<?php echo $product['id']; ?>"
                  data-naam="<?php echo htmlspecialchars($product['naam']); ?>"
                  data-prijs="<?php echo $product['prijs']; ?>"
                  data-categorie="<?php echo $product['categorie']; ?>"
                  data-allergenen="<?php echo htmlspecialchars($product['allergenen']); ?>"
                  data-beschrijving="<?php echo htmlspecialchars($product['beschrijving']); ?>"
                  data-afbeeldingen="<?php echo htmlspecialchars($product['afbeeldingen']); ?>">
                  <?php echo htmlspecialchars($product['naam']); ?>
                </option>
              <?php } ?>
            </select>
          </div>

          <!-- BEWERKFORMULIER (begint leeg) -->
          <form action="../menukaart/update.php" method="POST" id="bewerkForm">
            <input type="hidden" name="id" id="edit-id" value="" />

            <div class="form-grid">
              <div class="form-group">
                <label>Naam</label>
                <input type="text" name="naam" id="edit-naam" placeholder="Kies eerst een product" />
              </div>
              <div class="form-group">
                <label>Prijs (€)</label>
                <input type="number" name="prijs" id="edit-prijs" placeholder="Prijs" />
              </div>
              <div class="form-group">
                <label>Categorie</label>
                <select name="categorie" id="edit-categorie">
                  <option value="friet">Verse Friet</option>
                  <option value="drinken">Drankjes</option>
                </select>
              </div>
              <div class="form-group">
                <label>Allergenen</label>
                <input type="text" name="allergenen" id="edit-allergenen" placeholder="Allergenen" />
              </div>
              <div class="form-group full">
                <label>Beschrijving</label>
                <textarea name="beschrijving" id="edit-beschrijving" placeholder="Beschrijving"></textarea>
              </div>
              <div class="form-group full">
                <label>Afbeelding pad</label>
                <input type="text" name="afbeeldingen" id="edit-afbeeldingen" placeholder="assets/img/friet.png" />
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-brown">Opslaan</button>

              <!-- VERWIJDER -->
              <form action="../menukaart/delete.php" method="POST" style="display:inline;">
                <input type="hidden" name="id" id="delete-id" value="" />
                <button type="submit" class="btn btn-red"
                  onclick="return confirm('Weet u zeker dat u dit product wilt verwijderen?')">
                  Verwijder
                </button>
              </form>
            </div>

          </form>
        </div>
      </div>
    </div>


    <!-- ══════════════════════
         NIEUW PRODUCT TOEVOEGEN
    ══════════════════════ -->
    <div>
      <div class="section-title">Product toevoegen</div>
      <div class="card">
        <div class="card-header green">
          <h2>+ Nieuw product</h2>
        </div>
        <div class="card-body">
          <form action="../menukaart/create.php" method="POST">
            <div class="form-grid">
              <div class="form-group">
                <label for="add-naam">Naam</label>
                <input type="text" id="add-naam" name="naam" placeholder="bijv. Kleine Friet" />
              </div>
              <div class="form-group">
                <label for="add-prijs">Prijs (€)</label>
                <input type="number" id="add-prijs" name="prijs" placeholder="bijv. 3" />
              </div>
              <div class="form-group">
                <label for="add-categorie">Categorie</label>
                <select id="add-categorie" name="categorie">
                  <option value="friet">Verse Friet</option>
                  <option value="drinken">Drankjes</option>
                </select>
              </div>
              <div class="form-group">
                <label for="add-allergenen">Allergenen</label>
                <input type="text" id="add-allergenen" name="allergenen" placeholder="bijv. Gluten, Lactose" />
              </div>
              <div class="form-group full">
                <label for="add-beschrijving">Beschrijving</label>
                <textarea id="add-beschrijving" name="beschrijving" placeholder="Korte omschrijving..."></textarea>
              </div>
              <div class="form-group full">
                <label for="add-afbeelding">Afbeelding pad</label>
                <input type="text" id="add-afbeelding" name="afbeeldingen" placeholder="assets/img/friet.png" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-green">Toevoegen</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div><!-- /admin-wrapper -->

  <script>
    function laadProduct(select) {
      const opt = select.options[select.selectedIndex];

      // Vul alle velden in met data van gekozen product
      document.getElementById('edit-id').value         = opt.value;
      document.getElementById('delete-id').value       = opt.value;
      document.getElementById('edit-naam').value       = opt.dataset.naam;
      document.getElementById('edit-prijs').value      = opt.dataset.prijs;
      document.getElementById('edit-allergenen').value = opt.dataset.allergenen;
      document.getElementById('edit-beschrijving').value = opt.dataset.beschrijving;
      document.getElementById('edit-afbeeldingen').value = opt.dataset.afbeeldingen;

      // Zet de juiste categorie in de dropdown
      const catSelect = document.getElementById('edit-categorie');
      for (let i = 0; i < catSelect.options.length; i++) {
        if (catSelect.options[i].value === opt.dataset.categorie) {
          catSelect.selectedIndex = i;
          break;
        }
      }
    }
  </script>

</body>
</html>