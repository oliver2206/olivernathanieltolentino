let basket = [];
const basketOverlay = document.getElementById('basket-overlay');
const basketItemsContainer = document.getElementById('basket-items');
const basketTotalDisplay = document.getElementById('basket-total');
const basketCountDisplay = document.getElementById('basket-count');

// Delivery Option and Voucher Code Elements
const deliveryOptionSelect = document.getElementById('delivery-option');
const voucherCodeInput = document.getElementById('voucher-code');
const applyVoucherButton = document.getElementById('apply-voucher');
const voucherMessage = document.getElementById('voucher-message');

// Adding items to the basket
function addToBasket(name, price, image) {
  const existingItem = basket.find(item => item.name === name);
  if (existingItem) {
    existingItem.quantity++;
  } else {
    basket.push({ name, price, image, quantity: 1 });
  }
  updateBasketDisplay();
}

// Updating basket display (including total cost)
function updateBasketDisplay() {
  basketItemsContainer.innerHTML = '';
  let total = 0;
  basket.forEach(item => {
    total += item.price * item.quantity;
    basketItemsContainer.innerHTML += `
      <div class="basket-item">
        <img src="${item.image}" alt="${item.name}">
        <span>${item.name} (x${item.quantity})</span>
        <span>Php ${item.price * item.quantity}</span>
      </div>
    `;
  });

  // Get the delivery fee based on the selected option
  const deliveryFee = getDeliveryFee();

  // Get the voucher discount
  const voucherDiscount = getVoucherDiscount();

  // Calculate total with delivery fee and voucher discount
  total += deliveryFee;
  total -= voucherDiscount;

  // Update the total cost and basket item count
  basketTotalDisplay.textContent = `Total: Php ${total.toFixed(2)}`;
  basketCountDisplay.textContent = basket.reduce((acc, item) => acc + item.quantity, 0);
}

// Get the delivery fee based on the selected delivery option
function getDeliveryFee() {
  const selectedOption = deliveryOptionSelect.value;
  let fee = 0;
  if (selectedOption === 'express') {
    fee = 50; // Express delivery costs Php 50
  }
  return fee;
}

// Get the voucher discount based on the entered voucher code
function getVoucherDiscount() {
  const voucherCode = voucherCodeInput.value;
  let discount = 0;

  // Check if the voucher code is valid and apply the corresponding discount
  if (voucherCode === 'DISCOUNT20') {
    discount = 20; // Apply Php 20 discount for the voucher code
    voucherMessage.textContent = 'Voucher applied! Discount of Php 20.';
  } else if (voucherCode === 'DISCOUNT50') {
    discount = 50; // Apply Php 50 discount for the voucher code
    voucherMessage.textContent = 'Voucher applied! Discount of Php 50.';
  } else if (voucherCode === 'DISCOUNT10') {
    discount = 0.10; // Apply 10% discount for the voucher code
    voucherMessage.textContent = 'Voucher applied! Discount of 10%.';
  } else if (voucherCode === 'VOUCHERCODE100') {
    discount = 100; // Apply Php 50 discount for free delivery
    voucherMessage.textContent = 'Voucher applied! Free Delivery (Php 100 discount).';
  } else {
    voucherMessage.textContent = ''; // Clear voucher message if invalid
  }
  
  return discount;
}


// Event listener for the apply voucher button
applyVoucherButton.addEventListener('click', function() {
  updateBasketDisplay();
});

// Event listener for the delivery option change
deliveryOptionSelect.addEventListener('change', function() {
  updateBasketDisplay();
});

// Event listener for voucher code input (to update as the user types)
voucherCodeInput.addEventListener('input', function() {
  updateBasketDisplay();
});

// Function to toggle the basket overlay visibility
function toggleBasket() {
  basketOverlay.classList.toggle('open');
}

// Example function to add items to the basket for testing purposes
;
