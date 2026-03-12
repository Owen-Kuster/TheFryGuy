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
         ALLE PRODUCTEN + BEWERK / VERWIJDER
    ══════════════════════════════════ -->
    <div>
      <div class="section-title">Alle producten</div>
      <div class="card">
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Naam</th>
                <th>Categorie</th>
                <th>Prijs</th>
                <th>Allergenen</th>
                <th>Acties</th>
              </tr>
            </thead>
            <tbody>

              <!-- PHP: foreach ($producten as $product) { -->
              <!-- PHP: $isEdit = isset($_GET['edit']) && $_GET['edit'] == $product['id']; -->

              <!-- ── Normale rij ── -->
              <tr>
                <td><!-- PHP: $product['id'] --></td>
                <td><!-- PHP: $product['naam'] --></td>
                <td><span class="badge-cat"><!-- PHP: $product['categorie'] --></span></td>
                <td>€<!-- PHP: $product['prijs'] -->,00</td>
                <td><span class="allergen-tag"><!-- PHP: $product['allergenen'] --></span></td>
                <td>
                  <div class="row-actions">
                    <!-- Bewerk knop: stuurt naar zelfde pagina met ?edit=ID -->
                    <!-- PHP: <a href="admin.php?edit=<?php echo $product['id']; ?>" class="btn btn-brown btn-sm">Bewerk</a> -->
                    <a href="#" class="btn btn-brown btn-sm">Bewerk</a>

                    <!-- Verwijder knop: eigen mini-form met POST -->
                    <!-- PHP: action="admin.php" method="POST" -->
                    <form action="" method="POST" class="inline-form">
                      <!-- PHP: <input type="hidden" name="action" value="verwijderen"> -->
                      <!-- PHP: <input type="hidden" name="id" value="<?php echo $product['id']; ?>"> -->
                      <input type="hidden" name="action" value="verwijderen" />
                      <input type="hidden" name="id" value="" />
                      <button type="submit" class="btn btn-red btn-sm">Verwijder</button>
                    </form>
                  </div>
                </td>
              </tr>

              <!-- ── Bewerkrij (klapt open onder het product als ?edit=ID actief is) ── -->
              <!-- PHP: if ($isEdit) { -->
              <tr class="edit-row">
                <td colspan="6">
                  <!-- PHP: action="admin.php" method="POST" -->
                  <form action="" method="POST" class="edit-form">

                    <!-- PHP: <input type="hidden" name="action" value="bewerken"> -->
                    <!-- PHP: <input type="hidden" name="id" value="<?php echo $product['id']; ?>"> -->
                    <input type="hidden" name="action" value="bewerken" />
                    <input type="hidden" name="id" value="" />

                    <div class="form-grid">
                      <div class="form-group">
                        <label>Naam</label>
                        <!-- PHP: value="<?php echo $product['naam']; ?>" -->
                        <input type="text" name="naam" placeholder="Naam" />
                      </div>
                      <div class="form-group">
                        <label>Prijs (€)</label>
                        <!-- PHP: value="<?php echo $product['prijs']; ?>" -->
                        <input type="number" name="prijs" placeholder="Prijs" />
                      </div>
                      <div class="form-group">
                        <label>Categorie</label>
                        <select name="categorie">
                          <option value="friet">Verse Friet</option>
                          <option value="drankjes">Drankjes</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Allergenen</label>
                        <!-- PHP: value="<?php echo $product['allergenen']; ?>" -->
                        <input type="text" name="allergenen" placeholder="Allergenen" />
                      </div>
                      <div class="form-group full">
                        <label>Beschrijving</label>
                        <!-- PHP: <?php echo $product['beschrijving']; ?> tussen de textarea tags -->
                        <textarea name="beschrijving" placeholder="Beschrijving"></textarea>
                      </div>
                      <div class="form-group full">
                        <label>Afbeelding pad</label>
                        <!-- PHP: value="<?php echo $product['afbeeldingen']; ?>" -->
                        <input type="text" name="afbeeldingen" placeholder="assets/img/friet.png" />
                      </div>
                    </div>

                    <div class="form-actions">
                      <button type="submit" class="btn btn-brown">Opslaan</button>
                      <!-- PHP: <a href="admin.php" class="btn btn-outline">Annuleren</a> -->
                      <a href="#" class="btn btn-outline">Annuleren</a>
                    </div>

                  </form>
                </td>
              </tr>
              <!-- PHP: } -->

              <!-- PHP: } -->

            </tbody>
          </table>
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
          <!-- PHP: action="admin.php" method="POST" -->
          <form action="dbcalls/menukaart/create.php" method="POST">

            <!-- PHP: <input type="hidden" name="action" value="toevoegen"> -->

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
                  <option value="drankjes">Drankjes</option>
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

</body>
</html>