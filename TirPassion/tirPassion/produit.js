// Gestion des quantités
const quantityElement = document.getElementById('quantity');
const decreaseBtn = document.getElementById('decrease-qty');
const increaseBtn = document.getElementById('increase-qty');

let quantity = 1;

// Décrémentation
decreaseBtn.addEventListener('click', () => {
    if (quantity > 1) {
        quantity--;
        quantityElement.textContent = quantity;
    }
});

// Incrémentation
increaseBtn.addEventListener('click', () => {
    quantity++;
    quantityElement.textContent = quantity;
});
