const orderItems = document.getElementById('orderItems');
const totaalBedrag = document.getElementById('totaalBedrag');
let totaal = 0;
let winkelwagen = {};

document.querySelectorAll('.btn-voeg').forEach(btn => {
  btn.addEventListener('click', () => {
    const naam = btn.dataset.naam;
    const prijs = parseFloat(btn.dataset.prijs);

    if (winkelwagen[naam]) {
      winkelwagen[naam].aantal += 1;
    } else {
      winkelwagen[naam] = { prijs, aantal: 1 };
    }

    totaal += prijs;
    renderWinkelwagen();
  });
});

function renderWinkelwagen() {
  orderItems.innerHTML = '';

  Object.entries(winkelwagen).forEach(([naam, item]) => {
    const li = document.createElement('li');
    li.className = 'order-item';
    li.innerHTML = `
      <span class="order-item-naam">${naam}</span>
      <span class="order-item-rechts">
        <button class="btn-min" data-naam="${naam}">−</button>
        <span class="order-item-aantal">${item.aantal}x</span>
        <button class="btn-plus" data-naam="${naam}">+</button>
        <span class="order-item-prijs">€ ${(item.prijs * item.aantal).toFixed(2).replace('.', ',')}</span>
      </span>
    `;
    orderItems.appendChild(li);
  });

  document.querySelectorAll('.btn-plus').forEach(btn => {
    btn.addEventListener('click', () => wijzigAantal(btn.dataset.naam, 1));
  });
  document.querySelectorAll('.btn-min').forEach(btn => {
    btn.addEventListener('click', () => wijzigAantal(btn.dataset.naam, -1));
  });

  totaalBedrag.textContent = `€ ${totaal.toFixed(2).replace('.', ',')}`;
}

function wijzigAantal(naam, delta) {
  if (!winkelwagen[naam]) return;
  totaal += delta * winkelwagen[naam].prijs;
  winkelwagen[naam].aantal += delta;

  if (winkelwagen[naam].aantal <= 0) {
    delete winkelwagen[naam];
  }

  if (Object.keys(winkelwagen).length === 0) {
    orderItems.innerHTML = '<li class="order-empty">Nog niets toegevoegd</li>';
    totaalBedrag.textContent = '€ 0,00';
    totaal = 0;
  } else {
    renderWinkelwagen();
  }
}