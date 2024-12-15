const suggestionsList = [
  'Alilem', 'Aringay', 'Bantay', 'Burgos', 'Cabugao', 'Candon', 'Caoyan', 'Cervantes',
  'Galimuyod', 'Gregorio Del Pilar', 'Lidlidda', 'Magsingal', 'Nagbukel', 'Narvacan',
  'Quirino', 'Salcedo', 'San Emilio', 'San Esteban', 'San Juan', 'San Vicente',
  'Santa', 'Santa Catalina', 'Santa Cruz', 'Santa Lucia', 'Santa Maria', 'Santiago',
  'Suyo', 'Tagudin', 'Vigan'
];

function showSuggestions(query) {
  const suggestionsBox = document.getElementById('suggestions-box');
  suggestionsBox.innerHTML = '';
  if (query) {
    const filteredSuggestions = suggestionsList.filter(item => item.toLowerCase().includes(query.toLowerCase()));
    filteredSuggestions.forEach(suggestion => {
      const suggestionDiv = document.createElement('div');
      suggestionDiv.textContent = suggestion;
      suggestionDiv.onclick = () => {
        document.getElementById('search-input').value = suggestion;
        suggestionsBox.innerHTML = '';
        searchFunction();
      };
      suggestionsBox.appendChild(suggestionDiv);
    });
  }
}

function searchFunction() {
  const searchTerm = document.getElementById('search-input').value.toLowerCase().replace(/\s+/g, '-');
  if (searchTerm) {
    window.location.href = `${searchTerm}.html`;
  } else {
    alert("Please enter a search term.");
  }
}

// Get all carousels
const carousels = document.querySelectorAll('.carousel-container');

// Function to initialize carousel
function initializeCarousel(carousel) {
const track = carousel.querySelector('.carousel-track');
const prevBtn = carousel.querySelector('#prevBtn');
const nextBtn = carousel.querySelector('#nextBtn');
const totalItems = track.children.length;
const itemsPerPage = 5;  // Number of products to show per slide
let currentIndex = 0;

// Update the position of the carousel track
function updateCarouselPosition() {
const offset = - (currentIndex * (100 / (totalItems / itemsPerPage))) + '%';
track.style.transform = `translateX(${offset})`;
}

// Move to the next set of products
nextBtn.addEventListener('click', () => {
if (currentIndex < (totalItems / itemsPerPage) - 1) {
  currentIndex++;
} else {
  currentIndex = 0;  // Loop back to the start
}
updateCarouselPosition();
});

// Move to the previous set of products
prevBtn.addEventListener('click', () => {
if (currentIndex > 0) {
  currentIndex--;
} else {
  currentIndex = (totalItems / itemsPerPage) - 1;  // Loop back to the last set
}
updateCarouselPosition();
});

// Initialize carousel position
updateCarouselPosition();
}

// Initialize all carousels
carousels.forEach(initializeCarousel);

let basketCount = 0; // Tracks the number of items in the basket

// Function to add an item to the basket
function addToBasket() {
basketCount++;
updateBasketDisplay();
}

// Update the basket count in the header
function updateBasketDisplay() {
document.getElementById('basket-count').textContent = basketCount;
}

// Attach event listeners to "Add to Cart" buttons
const addToCartButtons = document.querySelectorAll('.product-card button');
addToCartButtons.forEach(button => {
button.addEventListener('click', addToBasket);
});