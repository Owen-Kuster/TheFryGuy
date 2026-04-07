<?php
session_start();

if(!isset($_SESSION["loggedin"])){
  header("Location: ../login/login.php");
}

include '../conn.php';

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
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/css/admin.css" />
</head>

<body>

  <header class="admin-header">
    <span class="badge">Panel</span>
    <h1>Admin</h1>
    <div style="display: flex; gap: 20px;">
      <a href="../../index.php" class="back-link">Terug naar site</a>
      <a href="../login/sessionLogout.php" class="back-link" style="color: #d9534f;">Uitloggen</a>
    </div>
  </header>

  <div class="admin-wrapper">

    <div>
      <div class="section-title">Product bewerken</div>
      <div class="card">
        <div class="card-body">

          <div class="form-group" style="margin-bottom: 24px;">
            <label for="productKiezer">Kies een product</label>
            <select id="productKiezer" onchange="laadProduct(this)">
              <option value="">-- Selecteer een product --</option>
              <?php foreach ($producten as $product) { ?>
                <option value="<?php echo $product['id']; ?>" data-naam="<?php echo $product['naam']; ?>"
                  data-prijs="<?php echo $product['prijs']; ?>" data-categorie="<?php echo $product['categorie']; ?>"
                  data-allergenen="<?php echo $product['allergenen']; ?>"
                  data-beschrijving="<?php echo $product['beschrijving']; ?>"
                  data-afbeeldingen="<?php echo $product['afbeeldingen']; ?>">
                  <?php echo ($product['naam']); ?>
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
                <input type="text" name="naam" id="edit-naam" placeholder="Kies eerst een product"
                  value="<?php echo $product['naam']; ?>">
              </div>
              <div class="form-group">
                <label>Prijs (€)</label>
                <input type="number" name="prijs" id="edit-prijs" placeholder="Prijs"
                  value="<?php echo $product['prijs']; ?>">
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
                <input type="text" name="allergenen" id="edit-allergenen" placeholder="Allergenen"
                  value="<?php echo $product['allergenen']; ?>">
              </div>
              <div class="form-group full">
                <label>Beschrijving</label>
                <textarea name="beschrijving" id="edit-beschrijving"
                  placeholder="Beschrijving"><?php echo $product['beschrijving']; ?></textarea>
              </div>
              <div class="form-group full">
                <label>Afbeelding pad</label>
                <input type="text" name="afbeeldingen" id="edit-afbeeldingen" placeholder="assets/img/friet.png"
                  value="<?php echo $product['afbeeldingen']; ?>" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-brown">Update</button>
              <button type="button" class="btn btn-red" id="deleteBtn" onclick="verwijder()"
                style="display:none;">Verwijder</button>
            </div>
          </form>
        </div>
      </div>
    </div>

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

  </div>

  <script>
    function laadProduct(select) {
      const opt = select.options[select.selectedIndex];
      document.getElementById('edit-id').value = opt.value;
      document.getElementById('edit-naam').value = opt.dataset.naam;
      document.getElementById('edit-prijs').value = opt.dataset.prijs;
      document.getElementById('edit-allergenen').value = opt.dataset.allergenen;
      document.getElementById('edit-beschrijving').value = opt.dataset.beschrijving;
      document.getElementById('edit-afbeeldingen').value = opt.dataset.afbeeldingen;
      document.getElementById('edit-categorie').value = opt.dataset.categorie;
      document.getElementById('deleteBtn').style.display = opt.value ? "inline-block" : "none";
    }

    function verwijder() {
      if (confirm("Zeker weten?")) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../menukaart/delete.php';
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'id';
        input.value = document.getElementById('edit-id').value;
        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
      }
    }
  </script>

</body>

</html>