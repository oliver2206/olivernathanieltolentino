<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juan Ilocos Sur</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="Slider.css">
  <link rel="stylesheet" href="basket.cs">
  <link rel="stylesheet" href="boxes.css">
  <link rel="stylesheet" href="./ADD TO CART.css">
  <link rel="stylesheet" href="dropdown.css">
  <link rel="stylesheet" href="dropdown 2.css">
  <link rel="stylesheet" href="categories.css">
  <link rel="stylesheet" href="./Juan Ilocos Sur Page Image.css">
  <link rel="stylesheet" href="./Gallery button.css">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="">
</head>
<body>
  <!-- Header Top Bar -->
  <div class="header-top">
    <span class="carousel-text"></span>
  </div>

  <!-- Main Header -->
  <header>
    <div class="logo">
      <a href="./index.php">
        <img src="juan.png" alt="Logo">
      </a>
    </div>
    <body>
      <div class="dropdown">
        <a href="#">Town Products</a>
        <div class="dropdown-menu">
            <a href="./Alilem.html">Alilem</a>
            <a href="#">Banayoyo</a>
            <a href="#">Bantay</a>
            <a href="#">Burgos</a>
            <a href="#">Cabugao</a>
            <a href="#">Caoayan</a>
            <a href="#">Cervantes</a>
            <a href="#">Galimuyod</a>
            <a href="#">Gregorio del Pilar (Concepcion)</a>
            <a href="#">Lidlidda</a>
            <a href="#">Magsingal</a>
            <a href="#">Nagbukel</a>
            <a href="#">Narvacan</a>
            <a href="#">Quirino (Angkaki)</a>
            <a href="#">Salcedo (Baugen)</a>
            <a href="#">San Emilio</a>
            <a href="#">San Esteban</a>
            <a href="#">San Ildefonso</a>
            <a href="#">San Juan (Lapog)</a>
            <a href="#">San Vicente</a>
            <a href="#">Santa</a>
            <a href="#">Santa Catalina</a>
            <a href="#">Santa Cruz</a>
            <a href="#">Santa Lucia</a>
            <a href="#">Santa Maria</a>
            <a href="#">Santiago</a>
            <a href="#">Santo Domingo</a>
            <a href="#">Sigay</a>
            <a href="#">Sinait</a>
            <a href="#">Sugpon</a>
            <a href="#">Suyo</a>
            <a href="#">Tagudin</a>
            
          
        </div>
    </div>
    <body>
      <div class="dropdown">
          <a href="#">Categories</a>
          <div class="dropdown-menu">
              <a href="#">Alcohol</a>
              <a href="#">Snacks</a>
              <a href="#">HandCrafts</a>
              <a href="#">Dr</a>
          </div>
      </div>
      <body>
        <div class="dropdown">
            <a href="#">Contacts</a>
            <div class="dropdown-menu">
                <a href="#">Alilem</a>
                <a href="#">Banayoyo</a>
                <a href="#">Servantes</a>
                <a href="#">Other Towns</a>
            </div>
        </div>
    </nav>
    <!-- Search and Basket -->
    <nav>
      <div class="search-container">
        <input type="text" id="search-input" placeholder="Search" oninput="showSuggestions(this.value)">
        <button onclick="searchFunction()">Search</button>
        <div id="suggestions-box" class="suggestions"></div>
      </div>
      <button id="basket-button" onclick="toggleBasket()">Basket (<span id="basket-count">0</span>)</button>
    </nav>
  </header>
 
  <section class="hero">
  <video class="hero-video" autoplay loop muted id="hero-video">
    <source src="./ilocos.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <!-- Audio to play alongside the video -->
  <audio class="hero-audio" autoplay loop id="hero-audio">
    <source src="./juan.mp3" type="audio/mp3">
    <source src="." type="audio/ogg">
    Your browser does not support the audio element.
  </audio>
  
  <div class="hero-content" style="display: none;">
    <h1 id="hero-title"></h1>
    <p id="hero-paragraph"></p>
    <a href="#gallery-container" class="gallery-btn" id="shop-now-btn" style="display: none;">Shop Now</a> <!-- Initially hidden -->
  </div>
</section>

<script>
  // Get the video and audio elements by their IDs
  const videoElement = document.getElementById('hero-video');
  const audioElement = document.getElementById('hero-audio');
  const heroContent = document.querySelector('.hero-content');
  const heroTitle = document.getElementById('hero-title'); // h1 element for typewriter effect
  const heroParagraph = document.getElementById('hero-paragraph'); // p element for typewriter effect
  const shopNowButton = document.getElementById('shop-now-btn'); // Shop Now button

  // Variable to store the last scroll position
  let lastScrollY = window.scrollY;

  // Function to play or pause the video and audio based on scroll direction
  function controlVideoAudioOnScroll() {
    window.addEventListener('scroll', () => {
      const currentScrollY = window.scrollY;
      
      if (currentScrollY > lastScrollY) {
        // User is scrolling down, pause video and audio
        videoElement.pause();
        audioElement.pause();
      } else if (currentScrollY < lastScrollY || currentScrollY === 0) {
        // User is scrolling up or at the top of the page, play video and audio
        if (videoElement.paused) {
          videoElement.play();
        }
        if (audioElement.paused) {
          audioElement.play();
        }
      }

      // Update the last scroll position
      lastScrollY = currentScrollY;
    });
  }

  // Call the function to add the scroll event listener
  controlVideoAudioOnScroll();

  // Typewriter effect for the title text (h1)
  const titleText = "JuanTatakIlocos";
  let i = 0;
  
  // Function to type the title
  function typeWriterTitle() {
    if (i < titleText.length) {
      heroTitle.innerHTML += titleText.charAt(i);
      i++;
      setTimeout(typeWriterTitle, 100); // Delay between characters (adjust as needed)
    } else {
      // Once title is done, reveal the paragraph
      typeWriterParagraph();
    }
  }

  // Typewriter effect for the paragraph text (p)
  const paragraphText = '"Savor the Tradition, Wear the Culture – The Essence of Ilocano Craft."';
  let j = 0;

  // Function to type the paragraph
  function typeWriterParagraph() {
    if (j < paragraphText.length) {
      heroParagraph.innerHTML += paragraphText.charAt(j);
      j++;
      setTimeout(typeWriterParagraph, 60); // Delay between characters (adjust as needed)
    } else {
      // Once the paragraph is typed, reveal the button
      revealButton();
    }
  }

  // Function to reveal the "Shop Now" button
  function revealButton() {
    shopNowButton.style.display = 'inline-block'; // Show the button
  }

  // Start the typewriter effect when the video plays
  videoElement.addEventListener('play', () => {
    // Wait for 5 seconds (or adjust as needed)
    setTimeout(() => {
      heroContent.style.display = 'block'; // Reveal the content after delay
      typeWriterTitle(); // Start the typewriter effect for the title
    }, 10); // 5000 milliseconds = 5 seconds
  });

  // Optionally, reveal hero content when the video ends (if you want it at the end of the video)
  videoElement.addEventListener('ended', () => {
    heroContent.style.display = 'block'; // Reveal content when video ends
    typeWriterTitle(); // Start the typewriter effect for the title
  });
</script>



<!-- Gallery Container Section -->
<div id="gallery-container" class="gallery-container">
  <!-- Gallery content goes here -->
</div>
<div class="container">
    <p class="categories-title">Categories</p>
    <div class="categories">
        <div class="category">
            <a href="Hand Crafts.html">
                <div class="category-content">
                    <img src="https://via.placeholder.com/50" alt="Hand Crafts">
                    <p>Hand Crafts</p>
                </div>
            </a>
        </div>
        <div class="category">
            <a href="Beverages.html">
                <div class="category-content">
                    <img src="https://via.placeholder.com/50" alt="Beverages">
                    <p>Beverages</p>
                </div>
            </a>
        </div>
        <div class="category">
            <a href="food.html">
                <div class="category-content">
                    <img src="https://via.placeholder.com/50" alt="Food">
                    <p>Food</p>
                </div>
            </a>
        </div>
        <div class="category">
            <a href="home-living.html">
                <div class="category-content">
                    <img src="https://via.placeholder.com/50" alt="Home & Living">
                    <p>Home & Living</p>
                </div>
            </a>
        </div>
        <div class="category">
            <a href="health.html">
                <div class="category-content">
                    <img src="https://via.placeholder.com/50" alt="Health">
                    <p>Health</p>
                </div>
            </a>
        </div>
    </div>
</div>



  <div class="banner-container">
    <div class="slider" style="background-image: url('https://t3.ftcdn.net/jpg/08/88/03/80/360_F_888038041_zNVaUTvBlyqPGMEYnZq0Uaw8Nea4zXjV.jpg'); background-size: cover; background-position: center;">
        <div class="slider-content">
            <div class="slider-item">
                <span class="text"></span>"Savor the Tradition, Wear the Culture – The Essence of Ilocano Craft."</a>
            </div>
        </div>
    </div>
  </div>
  
  <div class="gallery-container">
  <div class="product-row">
    <!-- Product Card 1 -->
    <div class="product-card">
      <a href="./Untitled-1.php" target="_blank">
        <img src="./Vigan/tisue round.png" alt="Canevinegar of Alilem">
      </a>
      <div class="product-details">
        <h3 class="product-title">Handwoven rattan/labtang tissue holder</h3>
        <p class="product-price">₱ 575</p>
        <span class="highlight">Sulit Deal</span>
        <p class="product-rating">⭐ 4.8 | 1.2K sold</p>
        <p class="product-delivery">📍 3-5 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Handwoven rattan/labtang tissue holder', 575, './Vigan/tisue round.png')">Add to Cart</button>
      </div>
    </div>

    <!-- Product Card 2 -->
    <div class="product-card">
      <a href="" target="_blank">
        <img src="./Bananayoyo/Untitled-1.png" alt="Banana Chips of Banayoyo">
      </a>
      <div class="product-details">
        <h3 class="product-title">Banana Chips of Banayoyo</h3>
        <p class="product-price">₱ 25</p>
        <span class="highlight">Sulit Deal</span>
        <p class="product-rating">⭐ 4.5 | 3.5K sold</p>
        <p class="product-delivery">📍 2-4 Days | Banayoyo, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Banana Chips of Banayoyo', 25, './Bananayoyo/Untitled-1.png')">Add to Cart</button>
      </div>
    </div>

    <!-- Product Card 3 -->
    <div class="product-card">
      <a href="" target="_blank">
        <img src="./Bantay/Untitled-2.png" alt="Abel Cloth of Bantay">
      </a>
      <div class="product-details">
        <h3 class="product-title">Abel Cloth of Bantay</h3>
        <p class="product-price">₱ 250</p>
        <span class="highlight">Sulit Deal</span>
        <p class="product-rating">⭐ 4.7 | 1.8K sold</p>
        <p class="product-delivery">📍 3-6 Days | Bantay, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Abel Cloth of Bantay', 250, './Bantay/Untitled-2.png')">Add to Cart</button>
      </div>
    </div>

    <!-- Product Card 4 -->
    <div class="product-card">
      <a href="" target="_blank">
        <img src="./Vigan/pastillas.png" alt="Vigan Pastillas">
      </a>
      <div class="product-details">
        <h3 class="product-title">Vigan Pastillas</h3>
        <p class="product-price">₱ 75</p>
        <span class="highlight">Sulit Deal</span>
        <p class="product-rating">⭐ 4.6 | 2.3K sold</p>
        <p class="product-delivery">📍 3-5 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Vigan Pastillas', 75, './Vigan/pastillas.png')">Add to Cart</button>
      </div>
    </div>

    <!-- Product Card 5 -->
    <div class="product-card">
      <a href="calamay-details.html" target="_blank">
        <img src="./Candon/cs.png" alt="Calamay of Candon">
      </a>
      <div class="product-details">
        <h3 class="product-title">Calamay of Candon</h3>
        <p class="product-price">₱ 50</p>
        <span class="highlight">Sulit Deal</span>
        <p class="product-rating">⭐ 4.8 | 2.5K sold</p>
        <p class="product-delivery">📍 2-4 Days | Candon, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Calamay of Candon', 50, './Candon/cs.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>


<!-- Product Section 2 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="canevinegar-details.html" target="_blank">
        <img src="./alilem/alilem.CANEVINEGAR.jpg.png" alt="Canevinegar of Alilem">
      </a>
      <div class="product-details">
        <h3 class="product-title">Canevinegar of Alilem</h3>
        <p class="product-price">₱ 80</p>
        <span class="highlight">Best Price</span>
        <p class="product-rating">⭐ 4.5 | 1K sold</p>
        <p class="product-delivery">📍 2-4 Days | Alilem, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Canevinegar of Alilem', 80, './alilem/alilem.CANEVINEGAR.jpg.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="sesame-seeds-cabugao-details.html" target="_blank">
        <img src="./Vigan/cabugao.png" alt="Sesame Seeds of Cabugao">
      </a>
      <div class="product-details">
        <h3 class="product-title">Sesame Seeds of Cabugao</h3>
        <p class="product-price">₱ 100</p>
        <span class="highlight">Great Choice</span>
        <p class="product-rating">⭐ 4.7 | 900 sold</p>
        <p class="product-delivery">📍 3-5 Days | Cabugao, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Sesame Seeds of Cabugao', 100, './Vigan/cabugao.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="kangkong-chips-details.html" target="_blank">
        <img src="./Vigan/kangkong chips.png" alt="Kangkong Chips Snacks Food Vegetable Dried">
      </a>
      <div class="product-details">
        <h3 class="product-title">Kangkong Chips Snacks Food Vegetable Dried</h3>
        <p class="product-price">₱ 120</p>
        <span class="highlight">Healthy Snack</span>
        <p class="product-rating">⭐ 4.6 | 1.2K sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Kangkong Chips Snacks Food Vegetable Dried', 120, './Vigan/kangkong chips.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="puto-seko-details.html" target="_blank">
        <img src="./Vigan/Puto Seko.png" alt="Puto Seko">
      </a>
      <div class="product-details">
        <h3 class="product-title">Puto Seko</h3>
        <p class="product-price">₱ 300</p>
        <span class="highlight">Classic Delicacy</span>
        <p class="product-rating">⭐ 4.8 | 1K sold</p>
        <p class="product-delivery">📍 3-5 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Puto Seko', 300, './Vigan/Puto Seko.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="adobo-garlic-chickacorn-details.html" target="_blank">
        <img src="./Vigan/adobo garlic.png" alt="Adobo Garlic Chickacorn">
      </a>
      <div class="product-details">
        <h3 class="product-title">Adobo Garlic Chickacorn</h3>
        <p class="product-price">₱ 125</p>
        <span class="highlight">Savory Snack</span>
        <p class="product-rating">⭐ 4.9 | 1.5K sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Adobo Garlic Chickacorn', 125, './Vigan/adobo garlic.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>


<!-- Product Section 3 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="balikutsa-details.html" target="_blank">
        <img src="./Vigan/balikutsa.png" alt="Balikutsa De Vigan">
      </a>
      <div class="product-details">
        <h3 class="product-title">Balikutsa De Vigan</h3>
        <p class="product-price">₱ 100</p>
        <span class="highlight">Authentic Delicacy</span>
        <p class="product-rating">⭐ 4.5 | 800 sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Balikutsa De Vigan', 100, './Vigan/balikutsa.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="native-bamboo-wall-decor-details.html" target="_blank">
        <img src="./Vigan/labtang.png" alt="Native Bamboo Handwoven Wall Decor">
      </a>
      <div class="product-details">
        <h3 class="product-title">Native Bamboo Handwoven Wall Decor</h3>
        <p class="product-price">₱ 399</p>
        <span class="highlight">Handmade Craft</span>
        <p class="product-rating">⭐ 4.8 | 1.2K sold</p>
        <p class="product-delivery">📍 3-5 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Native Bamboo Handwoven Wall Decor', 399, './Vigan/labtang.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="bamboo-handwoven-planter-details.html" target="_blank">
        <img src="./Vigan/labtang 1.png" alt="Bamboo Handwoven Hanging Planter">
      </a>
      <div class="product-details">
        <h3 class="product-title">Bamboo Handwoven Hanging Planter</h3>
        <p class="product-price">₱ 350</p>
        <span class="highlight">Eco-Friendly</span>
        <p class="product-rating">⭐ 4.7 | 950 sold</p>
        <p class="product-delivery">📍 3-5 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Bamboo Handwoven Hanging Planter', 350, './Vigan/labtang 1.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="cabisilan-rice-coffee-details.html" target="_blank">
        <img src="./Galimuyod/Untitled-2.png" alt="Cabisilan Rice Coffee Of Galimuyod">
      </a>
      <div class="product-details">
        <h3 class="product-title">Cabisilan Rice Coffee Of Galimuyod</h3>
        <p class="product-price">₱ 75</p>
        <span class="highlight">Taste of Galimuyod</span>
        <p class="product-rating">⭐ 4.5 | 600 sold</p>
        <p class="product-delivery">📍 2-4 Days | Galimuyod, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Cabisilan Rice Coffee Of Galimuyod', 75, './Galimuyod/Untitled-2.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="sukang-de-ilocos-details.html" target="_blank">
        <img src="./Vigan/Sukang Iloco.png" alt="Sukang De Ilocos">
      </a>
      <div class="product-details">
        <h3 class="product-title">Sukang De Ilocos</h3>
        <p class="product-price">₱ 149</p>
        <span class="highlight">Authentic Vinegar</span>
        <p class="product-rating">⭐ 4.6 | 1.1K sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Sukang De Ilocos', 149, './Vigan/Sukang Iloco.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

  
    <!-- Product Section 4 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="abel-caoayan-details.html" target="_blank">
        <img src="./Caoayan/Untitled-2.png" alt="Abel of Caoayan">
      </a>
      <div class="product-details">
        <h3 class="product-title">Abel of Caoayan</h3>
        <p class="product-price">₱ 99</p>
        <span class="highlight">Handwoven Textile</span>
        <p class="product-rating">⭐ 4.6 | 700 sold</p>
        <p class="product-delivery">📍 2-4 Days | Caoayan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Abel of Caoayan', 99, './Caoayan/Untitled-2.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="ginger-tea-cervantes-details.html" target="_blank">
        <img src="./Cervantes/Cer.png" alt="Ginger Tea of Cervantes">
      </a>
      <div class="product-details">
        <h3 class="product-title">Ginger Tea of Cervantes</h3>
        <p class="product-price">₱ 89</p>
        <span class="highlight">Herbal Wellness</span>
        <p class="product-rating">⭐ 4.7 | 800 sold</p>
        <p class="product-delivery">📍 3-5 Days | Cervantes, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Ginger Tea of Cervantes', 89, './Cervantes/Cer.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="veggie-noodles-cervantes-details.html" target="_blank">
        <img src="./Cervantes/cervantes.png" alt="Veggie Noodles of Cervantes">
      </a>
      <div class="product-details">
        <h3 class="product-title">Veggie Noodles of Cervantes</h3>
        <p class="product-price">₱ 99</p>
        <span class="highlight">Healthy Noodles</span>
        <p class="product-rating">⭐ 4.5 | 1.1K sold</p>
        <p class="product-delivery">📍 3-5 Days | Cervantes, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Veggie Noodles of Cervantes', 99, './Cervantes/cervantes.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="pickles-garlic-ilocos-radish-details.html" target="_blank">
        <img src="./Vigan/radish.png" alt="Pickles Garlic Ilocos Radish">
      </a>
      <div class="product-details">
        <h3 class="product-title">Pickles Garlic Ilocos Radish</h3>
        <p class="product-price">₱ 175</p>
        <span class="highlight">Tangy and Crunchy</span>
        <p class="product-rating">⭐ 4.6 | 600 sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Pickles Garlic Ilocos Radish', 175, './Vigan/radish.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="chichacorn-de-ilocos-details.html" target="_blank">
        <img src="./Ilocos sur/chicacorn.png" alt="Chichacorn of De Ilocos">
      </a>
      <div class="product-details">
        <h3 class="product-title">Chichacorn of De Ilocos</h3>
        <p class="product-price">₱ 99</p>
        <span class="highlight">Crunchy Snack</span>
        <p class="product-rating">⭐ 4.5 | 950 sold</p>
        <p class="product-delivery">📍 2-4 Days | Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Chichacorn of De Ilocos', 99, './Ilocos sur/chicacorn.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

  
<!-- Product Section 5 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="ilocos-cornik-details.html" target="_blank">
        <img src="./Vigan/ilocos cornink.png" alt="Ilocos Cornik">
      </a>
      <div class="product-details">
        <h3 class="product-title">Ilocos Cornik</h3>
        <p class="product-price">₱ 115</p>
        <span class="highlight">Crunchy Snack</span>
        <p class="product-rating">⭐ 4.6 | 450 sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Ilocos Cornik', 115, './Vigan/ilocos cornink.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="sukang-de-ilocos-details.html" target="_blank">
        <img src="./Vigan/sukang ilocos.png" alt="Sukang de Ilocos">
      </a>
      <div class="product-details">
        <h3 class="product-title">Sukang de Ilocos</h3>
        <p class="product-price">₱ 120</p>
        <span class="highlight">Traditional Vinegar</span>
        <p class="product-rating">⭐ 4.7 | 650 sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Sukang de Ilocos', 120, './Vigan/sukang ilocos.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="processed-papaya-nagbukel-details.html" target="_blank">
        <img src="./Nagbukel/papaya.png" alt="Processed Papaya of Nagbukel">
      </a>
      <div class="product-details">
        <h3 class="product-title">Processed Papaya of Nagbukel</h3>
        <p class="product-price">₱ 80</p>
        <span class="highlight">Fresh and Natural</span>
        <p class="product-rating">⭐ 4.4 | 300 sold</p>
        <p class="product-delivery">📍 2-4 Days | Nagbukel, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Processed Papaya of Nagbukel', 80, './Nagbukel/papaya.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="bugnay-wine-emillio-details.html" target="_blank">
        <img src="./San emillio/bugnay of emillio.png" alt="Bugnay Wine of San Emillio">
      </a>
      <div class="product-details">
        <h3 class="product-title">Bugnay Wine of San Emillio</h3>
        <p class="product-price">₱ 120</p>
        <span class="highlight">Fruit Wine</span>
        <p class="product-rating">⭐ 4.8 | 700 sold</p>
        <p class="product-delivery">📍 3-5 Days | San Emillio, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Bugnay Wine of San Emillio', 120, './San emillio/bugnay of emillio.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="tapey-wine-emillio-details.html" target="_blank">
        <img src="./San emillio/tapey-san-emilio.jpg" alt="Tapey Wine of San Emillio">
      </a>
      <div class="product-details">
        <h3 class="product-title">Tapey Wine of San Emillio</h3>
        <p class="product-price">₱ 120</p>
        <span class="highlight">Traditional Tapey</span>
        <p class="product-rating">⭐ 4.7 | 550 sold</p>
        <p class="product-delivery">📍 3-5 Days | San Emillio, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Tapey Wine of San Emillio', 120, './San emillio/tapey-san-emilio.jpg')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>


<!-- Product Section 6 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="hand-crafts-flower-magsingal-details.html" target="_blank">
        <img src="./Magsingal/Hand Crafts of Magsingal.png" alt="Hand Crafts Flower of Magsingal">
      </a>
      <div class="product-details">
        <h3 class="product-title">Hand Crafts Flower of Magsingal</h3>
        <p class="product-price">₱ 80</p>
        <span class="highlight">Artisan Craft</span>
        <p class="product-rating">⭐ 4.3 | 320 sold</p>
        <p class="product-delivery">📍 2-4 Days | Magsingal, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Hand Crafts Flower of Magsingal', 80, './Magsingal/Hand Crafts of Magsingal.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="tinubong-de-magsingal-details.html" target="_blank">
        <img src="./Magsingal/tinubong.png" alt="Tinubong De Magsingal">
      </a>
      <div class="product-details">
        <h3 class="product-title">Tinubong De Magsingal</h3>
        <p class="product-price">₱ 100</p>
        <span class="highlight">Sweet Rice Delicacy</span>
        <p class="product-rating">⭐ 4.5 | 450 sold</p>
        <p class="product-delivery">📍 2-4 Days | Magsingal, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Tinubong De Magsingal', 100, './Magsingal/tinubong.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="ilocos-sweet-dilis-details.html" target="_blank">
        <img src="./Vigan/dilis.png" alt="ILOCOSSWEET DILIS">
      </a>
      <div class="product-details">
        <h3 class="product-title">ILOCOSSWEET DILIS</h3>
        <p class="product-price">₱ 150</p>
        <span class="highlight">Sweet Dilis</span>
        <p class="product-rating">⭐ 4.7 | 500 sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('ILOCOSSWEET DILIS', 150, './Vigan/dilis.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="abel-inabel-ilocos-details.html" target="_blank">
        <img src="./Vigan/abel branket.png" alt="Abel Inabel Ilocos">
      </a>
      <div class="product-details">
        <h3 class="product-title">Abel Inabel Ilocos</h3>
        <p class="product-price">₱ 1200</p>
        <span class="highlight">Handwoven Blanket</span>
        <p class="product-rating">⭐ 5.0 | 250 sold</p>
        <p class="product-delivery">📍 3-5 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Abel Inabel Ilocos', 1200, './Vigan/abel branket.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="ilocos-abel-hand-towel-details.html" target="_blank">
        <img src="./Vigan/abel.png" alt="Ilocos Abel Hand Towel">
      </a>
      <div class="product-details">
        <h3 class="product-title">Ilocos Abel Hand Towel (3 Pcs)</h3>
        <p class="product-price">₱ 380</p>
        <span class="highlight">Handwoven Towel Set</span>
        <p class="product-rating">⭐ 4.6 | 400 sold</p>
        <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Ilocos Abel Hand Towel', 380, './Vigan/abel.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

    
<!-- Product Section 7 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="almiris-of-san-esteban-details.html" target="_blank">
        <img src="./San Esteban/Untitled-2.png" alt="Almiris of San Esteban">
      </a>
      <div class="product-details">
        <h3 class="product-title">Almiris of San Esteban</h3>
        <p class="product-price">₱ 300</p>
        <span class="highlight">Traditional Snack</span>
        <p class="product-rating">⭐ 4.6 | 350 sold</p>
        <p class="product-delivery">📍 2-4 Days | San Esteban, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Almiris of San Esteban', 300, './San Esteban/Untitled-2.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="nata-de-coco-san-esteban-details.html" target="_blank">
        <img src="./San Esteban/san esteban.png" alt="Nata de Coco Of San Esteban">
      </a>
      <div class="product-details">
        <h3 class="product-title">Nata de Coco Of San Esteban</h3>
        <p class="product-price">₱ 75</p>
        <span class="highlight">Sweet Coconut Treat</span>
        <p class="product-rating">⭐ 4.3 | 420 sold</p>
        <p class="product-delivery">📍 2-4 Days | San Esteban, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Nata de Coco Of San Esteban', 75, './San Esteban/san esteban.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="gongong-basi-de-san-ildefonso-details.html" target="_blank">
        <img src="./san ildefonso/Untitled-2.png" alt="Gongong Basi de San ildefonso">
      </a>
      <div class="product-details">
        <h3 class="product-title">Gongong Basi de San ildefonso</h3>
        <p class="product-price">₱ 100</p>
        <span class="highlight">Fermented Rice Wine</span>
        <p class="product-rating">⭐ 4.8 | 350 sold</p>
        <p class="product-delivery">📍 2-4 Days | San Ildefonso, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Gongong Basi de San ildefonso', 100, './san ildefonso/Untitled-2.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="bambo-bag-by-san-juan-details.html" target="_blank">
        <img src="./San juan/Untitled-2.png" alt="Bambo Bag by San Juan">
      </a>
      <div class="product-details">
        <h3 class="product-title">Bambo Bag by San Juan</h3>
        <p class="product-price">₱ 150</p>
        <span class="highlight">Handwoven Bamboo Bag</span>
        <p class="product-rating">⭐ 4.5 | 420 sold</p>
        <p class="product-delivery">📍 2-4 Days | San Juan, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Bambo Bag by San Juan', 150, './San juan/Untitled-2.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="garden-set-tools-by-santa-details.html" target="_blank">
        <img src="./Santa/Untitled-2.png" alt="Garden Set Tools by Santa">
      </a>
      <div class="product-details">
        <h3 class="product-title">Garden Set Tools by Santa</h3>
        <p class="product-price">₱ 250</p>
        <span class="highlight">Garden Tool Set</span>
        <p class="product-rating">⭐ 4.7 | 300 sold</p>
        <p class="product-delivery">📍 2-4 Days | Santa, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Garden set tools by Santa', 250, './Santa/Untitled-2.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<!-- Product Section 8 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="peanut-butter-of-santa-lucia-details.html" target="_blank">
        <img src="./Santa Lucia/Untitled-2.png" alt="Peanut Butter of Santa Lucia">
      </a>
      <div class="product-details">
        <h3 class="product-title">Peanut Butter of Santa Lucia</h3>
        <p class="product-price">₱ 80</p>
        <span class="highlight">Creamy Peanut Butter</span>
        <p class="product-rating">⭐ 4.5 | 500 sold</p>
        <p class="product-delivery">📍 2-4 Days | Santa Lucia, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Peanut Butter of Santa Lucia', 80, './Santa Lucia/Untitled-2.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="salted-peanut-garlic-of-santa-lucia-details.html" target="_blank">
        <img src="./Santa Lucia/5.png" alt="Salted Peanut Garlic of Santa Lucia">
      </a>
      <div class="product-details">
        <h3 class="product-title">Salted Peanut Garlic of Santa Lucia</h3>
        <p class="product-price">₱ 50</p>
        <span class="highlight">Salty & Garlic Flavor</span>
        <p class="product-rating">⭐ 4.7 | 320 sold</p>
        <p class="product-delivery">📍 2-4 Days | Santa Lucia, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Salted Peanut Garlic of Santa Lucia', 50, './Santa Lucia/5.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="salted-peanut-garlic-piolvoron-details.html" target="_blank">
        <img src="./Santa Lucia/4.png" alt="Salted Peanut Garlic Piolvoron">
      </a>
      <div class="product-details">
        <h3 class="product-title">Salted Peanut Garlic Piolvoron</h3>
        <h3 class="product-subtitle">One tray (10 pcs)</h3>
        <p class="product-price">₱ 100</p>
        <span class="highlight">Delicious Filipino Snack</span>
        <p class="product-rating">⭐ 4.6 | 280 sold</p>
        <p class="product-delivery">📍 2-4 Days | Santa Lucia, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Salted Peanut Garlic Piolvoron', 100, './Santa Lucia/4.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="crunchy-yeamy-nuts-of-sta-lucia-details.html" target="_blank">
        <img src="./Santa Lucia/sta lucia 6.png" alt="Crunchy Yeamy Nuts of Sta Lucia">
      </a>
      <div class="product-details">
        <h3 class="product-title">Crunchy Yeamy Nuts of Sta Lucia</h3>
        <p class="product-price">₱ 75</p>
        <span class="highlight">Crispy & Flavorful Nuts</span>
        <p class="product-rating">⭐ 4.4 | 350 sold</p>
        <p class="product-delivery">📍 2-4 Days | Santa Lucia, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Crunchy Yeamy Nuts of Sta Lucia', 75, './Santa Lucia/sta lucia 6.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="rice-coffee-and-cherry-wine-of-sigay-details.html" target="_blank">
        <img src="./Sigay/Untitled-2-Recovered-Recovered.png" alt="Rice Coffee and Cherry Wine of Sigay">
      </a>
      <div class="product-details">
        <h3 class="product-title">Rice Coffee and Cherry Wine of Sigay</h3>
        <p class="product-price">₱ 350</p>
        <span class="highlight">Rich Rice Coffee & Wine Blend</span>
        <p class="product-rating">⭐ 4.9 | 400 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sigay, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Rice Coffee and Cherry Wine of Sigay', 350, './Sigay/Untitled-2-Recovered-Recovered.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

  <!-- Product Section 9 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="minced-garlic-details.html" target="_blank">
        <img src="./Sinait/sinait1.png" alt="Minced Garlic">
      </a>
      <div class="product-details">
        <h3 class="product-title">Minced Garlic</h3>
        <p class="product-price">₱ 99</p>
        <span class="highlight">Freshly Minced Garlic</span>
        <p class="product-rating">⭐ 4.5 | 150 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sinait, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Minced Garlic', 99, './Sinait/sinait1.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="picked-garlic-details.html" target="_blank">
        <img src="./Sinait/sinait2.png" alt="Picked Garlic">
      </a>
      <div class="product-details">
        <h3 class="product-title">Picked Garlic</h3>
        <p class="product-price">₱ 99</p>
        <span class="highlight">Garlic Pickled for Extra Flavor</span>
        <p class="product-rating">⭐ 4.6 | 120 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sinait, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Picked Garlic', 99, './Sinait/sinait2.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="garlic-chili-oil-details.html" target="_blank">
        <img src="./Sinait/sinait3.png" alt="Garlic Chili Oil">
      </a>
      <div class="product-details">
        <h3 class="product-title">Garlic Chili Oil</h3>
        <p class="product-price">₱ 99</p>
        <span class="highlight">Perfect Blend of Garlic & Chili</span>
        <p class="product-rating">⭐ 4.7 | 200 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sinait, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Garlic Chili Oil', 99, './Sinait/sinait3.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="fried-garlic-details.html" target="_blank">
        <img src="./Sinait/sinait4.png" alt="Fried Garlic">
      </a>
      <div class="product-details">
        <h3 class="product-title">Fried Garlic</h3>
        <p class="product-price">₱ 99</p>
        <span class="highlight">Crispy & Golden Fried Garlic</span>
        <p class="product-rating">⭐ 4.8 | 250 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sinait, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Fried Garlic', 99, './Sinait/sinait4.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="pancit-canton-viggie-noodles-details.html" target="_blank">
        <img src="./sta cruz/pancit canton.png" alt="Pancit Canton Viggie Noodles">
      </a>
      <div class="product-details">
        <h3 class="product-title">Pancit Canton Veggie Noodles</h3>
        <p class="product-price">₱ 110</p>
        <span class="highlight">Healthy Veggie Noodles</span>
        <p class="product-rating">⭐ 4.4 | 180 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sta Cruz, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Pancit Canton Veggie Noodles', 110, './sta cruz/pancit canton.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

  
   <!-- Product Section 10 -->
<div class="gallery-container">
  <div class="product-row">
    <div class="product-card">
      <a href="goldas-canton-details.html" target="_blank">
        <img src="./Sto domingo/Untitled-2-Recovered-Recovered.png" alt="Goldas Canton of Sto Domingo">
      </a>
      <div class="product-details">
        <h3 class="product-title">Goldas Canton of Sto Domingo</h3>
        <p class="product-price">₱ 99</p>
        <span class="highlight">Delicious Canton Noodles</span>
        <p class="product-rating">⭐ 4.3 | 80 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sto Domingo, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Goldas Canton of Sto Domingo', 99, './Sto domingo/Untitled-2-Recovered-Recovered.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="ginger-luya-herbal-details.html" target="_blank">
        <img src="./Sugpon/Ginger luya.png" alt="Ginger Luya Herbal of Sugpon">
      </a>
      <div class="product-details">
        <h3 class="product-title">Ginger Luya Herbal of Sugpon</h3>
        <p class="product-price">₱ 120</p>
        <span class="highlight">Fresh and Spicy Ginger Herbal</span>
        <p class="product-rating">⭐ 4.6 | 95 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sugpon, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Ginger Luya Herbal of Sugpon', 120, './Sugpon/Ginger luya.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="rice-coffee-of-sugpon-details.html" target="_blank">
        <img src="./Sugpon/sugpon rice coffee.png" alt="Rice Coffee of Sugpon">
      </a>
      <div class="product-details">
        <h3 class="product-title">Rice Coffee of Sugpon</h3>
        <p class="product-price">₱ 100</p>
        <span class="highlight">Refreshing Rice Coffee</span>
        <p class="product-rating">⭐ 4.5 | 120 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sugpon, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Rice Coffee of Sugpon', 100, './Sugpon/sugpon rice coffee.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="robusta-coffee-of-sugpon-details.html" target="_blank">
        <img src="./Sugpon/sugpon Robusta coffee.png" alt="Robusta Coffee of Sugpon">
      </a>
      <div class="product-details">
        <h3 class="product-title">Robusta Coffee of Sugpon</h3>
        <p class="product-price">₱ 120</p>
        <span class="highlight">Rich Robusta Coffee</span>
        <p class="product-rating">⭐ 4.7 | 200 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sugpon, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Robusta Coffee of Sugpon', 120, './Sugpon/sugpon Robusta coffee.png')">Add to Cart</button>
      </div>
    </div>
    <div class="product-card">
      <a href="pure-turmeric-tea-of-sugpon-details.html" target="_blank">
        <img src="./Sugpon/Sugpon Turmeric tea.png" alt="Pure Turmeric Tea of Sugpon">
      </a>
      <div class="product-details">
        <h3 class="product-title">Pure Turmeric Tea of Sugpon</h3>
        <p class="product-price">₱ 110</p>
        <span class="highlight">Healthy and Flavorful Turmeric Tea</span>
        <p class="product-rating">⭐ 4.5 | 150 sold</p>
        <p class="product-delivery">📍 2-4 Days | Sugpon, Ilocos Sur</p>
        <span class="interest-badge">0% INTEREST</span>
        <button onclick="addToBasket('Pure Turmeric Tea of Sugpon', 110, './Sugpon/Sugpon Turmeric tea.png')">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

  
<div class="product-row">
  <div class="product-card">
    <a href="ube-powder-of-sugpon-details.html" target="_blank">
      <img src="./Sugpon/sugpon ube powder.png" alt="Ube Powder of Sugpon">
    </a>
    <div class="product-details">
      <h3 class="product-title">Ube Powder Of Sugpon</h3>
      <p class="product-price">₱ 110</p>
      <span class="highlight">Natural and Authentic Ube Flavor</span>
      <p class="product-rating">⭐ 4.7 | 200 sold</p>
      <p class="product-delivery">📍 2-4 Days | Sugpon, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('Ube Powder Of Sugpon', 110, './Sugpon/sugpon ube powder.png')">Add to Cart</button>
    </div>
  </div>

  <div class="product-card">
    <a href="ilocos-chichacorn-details.html" target="_blank">
      <img src="./Vigan/chicakorn.png" alt="Ilocos Chichacorn">
    </a>
    <div class="product-details">
      <h3 class="product-title">Ilocos Chichacorn</h3>
      <p class="product-price">₱ 110</p>
      <span class="highlight">Crunchy and Delicious Snack</span>
      <p class="product-rating">⭐ 4.6 | 300 sold</p>
      <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('Ilocos Chichacorn', 110, './Vigan/chicakorn.png')">Add to Cart</button>
    </div>
  </div>

  <div class="product-card">
    <a href="kabsat-vigan-longganisa-details.html" target="_blank">
      <img src="./Vigan/kabsat longganisa.png" alt="Kabsat Vigan Longganisa">
    </a>
    <div class="product-details">
      <h3 class="product-title">Kabsat Vigan Longganisa</h3>
      <p class="product-price">₱ 250</p>
      <span class="highlight">Authentic Vigan Longganisa</span>
      <p class="product-rating">⭐ 4.8 | 180 sold</p>
      <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('Kabsat Vigan Longganisa', 250, './Vigan/kabsat longganisa.png')">Add to Cart</button>
    </div>
  </div>

  <div class="product-card">
    <a href="goviva-vigan-details.html" target="_blank">
      <img src="./Vigan/sukang.png" alt="GoViva Vigan">
    </a>
    <div class="product-details">
      <h3 class="product-title">GoViva Vigan</h3>
      <p class="product-price">₱ 250</p>
      <span class="highlight">Premium Quality Vinegar</span>
      <p class="product-rating">⭐ 4.5 | 120 sold</p>
      <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('GoViva Vigan', 250, './Vigan/sukang.png')">Add to Cart</button>
    </div>
  </div>

  <div class="product-card">
    <a href="vigan-longganisa-details.html" target="_blank">
      <img src="./Vigan/OIP.jpg" alt="Vigan Longganisa">
    </a>
    <div class="product-details">
      <h3 class="product-title">Vigan Longganisa</h3>
      <p class="product-price">₱ 250</p>
      <span class="highlight">Traditional Vigan Flavor</span>
      <p class="product-rating">⭐ 4.9 | 500 sold</p>
      <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('Vigan Longganisa', 250, './Vigan/OIP.jpg')">Add to Cart</button>
    </div>
  </div>
</div>

  
<div class="product-row">
  <div class="product-card">
    <a href="ube-powder-of-sugpon-details.html" target="_blank">
      <img src="./Sugpon/sugpon ube powder.png" alt="Ube Powder of Sugpon">
    </a>
    <div class="product-details">
      <h3 class="product-title">Ube Powder Of Sugpon</h3>
      <p class="product-price">₱ 110</p>
      <span class="highlight">Natural and Authentic Ube Flavor</span>
      <p class="product-rating">⭐ 4.7 | 200 sold</p>
      <p class="product-delivery">📍 2-4 Days | Sugpon, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('Ube Powder Of Sugpon', 110, './Sugpon/sugpon ube powder.png')">Add to Cart</button>
    </div>
  </div>

  <div class="product-card">
    <a href="ilocos-chichacorn-details.html" target="_blank">
      <img src="./Vigan/chicakorn.png" alt="Ilocos Chichacorn">
    </a>
    <div class="product-details">
      <h3 class="product-title">Ilocos Chichacorn</h3>
      <p class="product-price">₱ 110</p>
      <span class="highlight">Crunchy and Delicious Snack</span>
      <p class="product-rating">⭐ 4.6 | 300 sold</p>
      <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('Ilocos Chichacorn', 110, './Vigan/chicakorn.png')">Add to Cart</button>
    </div>
  </div>

  <div class="product-card">
    <a href="kabsat-vigan-longganisa-details.html" target="_blank">
      <img src="./Vigan/kabsat longganisa.png" alt="Kabsat Vigan Longganisa">
    </a>
    <div class="product-details">
      <h3 class="product-title">Kabsat Vigan Longganisa</h3>
      <p class="product-price">₱ 250</p>
      <span class="highlight">Authentic Vigan Longganisa</span>
      <p class="product-rating">⭐ 4.8 | 180 sold</p>
      <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('Kabsat Vigan Longganisa', 250, './Vigan/kabsat longganisa.png')">Add to Cart</button>
    </div>
  </div>

  <div class="product-card">
    <a href="goviva-vigan-details.html" target="_blank">
      <img src="./Vigan/sukang.png" alt="GoViva Vigan">
    </a>
    <div class="product-details">
      <h3 class="product-title">GoViva Vigan</h3>
      <p class="product-price">₱ 250</p>
      <span class="highlight">Premium Quality Vinegar</span>
      <p class="product-rating">⭐ 4.5 | 120 sold</p>
      <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('GoViva Vigan', 250, './Vigan/sukang.png')">Add to Cart</button>
    </div>
  </div>

  <div class="product-card">
    <a href="vigan-longganisa-details.html" target="_blank">
      <img src="./Vigan/OIP.jpg" alt="Vigan Longganisa">
    </a>
    <div class="product-details">
      <h3 class="product-title">Vigan Longganisa</h3>
      <p class="product-price">₱ 250</p>
      <span class="highlight">Traditional Vigan Flavor</span>
      <p class="product-rating">⭐ 4.9 | 500 sold</p>
      <p class="product-delivery">📍 2-4 Days | Vigan, Ilocos Sur</p>
      <span class="interest-badge">0% INTEREST</span>
      <button onclick="addToBasket('Vigan Longganisa', 250, './Vigan/OIP.jpg')">Add to Cart</button>
    </div>
  </div>
</div>


  <!-- Basket Overlay --><div class="basket-overlay" id="basket-overlay">
    <div class="basket-header">Your Basket</div>
    
    <div class="basket-items" id="basket-items">
        <!-- Cart items will be dynamically added here -->
    </div>
    
    <div class="basket-total" id="basket-total">Total: Php 0</div>
    
    <!-- Payment Method, Delivery Address, Delivery Option, and Voucher Code Section -->
    <div class="basket-options">
        <!-- Payment Method -->
        <div class="payment-method">
            <label for="payment-method">Payment Method:</label>
            <select id="payment-method" class="payment-method">
                <option value="default">Select Payment Method</option>
                <option value="credit-card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="cash-on-delivery">Cash on Delivery</option>
            </select>
        </div>
        
        <!-- Delivery Address -->
        <div class="delivery-address">
            <label for="delivery-address">Delivery Address:</label>
            <select id="delivery-address" class="delivery-address">
                <option value="default">Select Delivery Address</option>
                <option value="home">Home Address</option>
                <option value="work">Work Address</option>
                <option value="other">Other Address</option>
            </select>
        </div>

        <!-- Delivery Option -->
        <div class="delivery-option">
            <label for="delivery-option">Delivery Option:</label>
            <select id="delivery-option" class="delivery-option">
                <option value="standard" data-price="0">Standard Delivery (Free)</option>
                <option value="express" data-price="50">Express Delivery (Php 50)</option>
            </select>
        </div>

        <!-- Voucher Code -->
        <div class="voucher-code">
            <label for="voucher-code">Voucher Code:</label>
            <input type="text" id="voucher-code" placeholder="Enter voucher code">
        
            <span id="voucher-message"></span>
        </div>
    </div>

    <div class="basket-buttons">
    <button id="apply-voucher">Apply</button>
      <button class="checkout">Checkout</button>
      <button class="close-icon" onclick="toggleBasket()">&times;</button>
    </div>
</div>

<script src="./FUNCTION 1.js"></script>
<script src="./FUNCTION 2.js"></script>
<script src="./FUCTION 3.js"></script> 
<!-- function 3 is search bar function 2 is the check out tc function 1 is basket function -->

  <style>
    .footer-container {
        background-color: #f1f1f1;
        padding: 20px;
    }
    .footer {
        text-align: center;
    }
    .footer .links a {
        color: #000;
        text-decoration: none;
        margin: 0 10px;
        font-size: 14px;
    }
    .footer .links a:hover {
        text-decoration: underline;
    }
    .footer .social-icons {
        margin: 10px 0;
    }
    .footer .social-icons img {
        width: 30px;
        margin: 0 5px;
    }
    .footer .payment-methods img {
        width: 50px;
        margin: 0 5px;
    }
    .footer .copyright {
        margin-top: 20px;
        font-size: 12px;
        color: #666;
    }
  </style>
</head>
<body>

  <!-- Banner -->
  <div class="banner-container">
    <div class="slider" style="background-image: url('https://t3.ftcdn.net/jpg/08/88/03/80/360_F_888038041_zNVaUTvBlyqPGMEYnZq0Uaw8Nea4zXjV.jpg'); background-size: cover; background-position: center;">
      <div class="slider-content">
        <div class="slider-item">
          <span class="text">Relish the Journey, Share the Memory – Ilocano Pasalubong from the Heart.</span>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-container">
    <div class="footer">
      
  
      
  
        <div class="payment-methods">
           
            <img src="./gcash.png" alt="GCASH">
            <img src="./pnb.png" alt="PNB">
            <img src="./bpi.png" alt="BPI">
            <img src="./SEABANK.png" alt="Shop">
            <img src="./LANDBANK.png" alt="Visa">
            <img src="./MASTERCARD.png" alt="MasterCard">
            <img src="./UNION PAY.png" alt="UnionPay">
        </div>
  
        <div class="copyright">
            &copy; Juan Ilocos Sur  <br>
            Powered by Juan De Ilocos 
        </div>
    </div>
  </div>
  
  <style>
    .footer-container {
        background-color: #f1f1f1;
        padding: 20px;
    }
    .footer {
        text-align: center;
    }
    .footer .links a {
        color: #000;
        text-decoration: none;
        margin: 0 10px;
        font-size: 14px;
    }
    .footer .links a:hover {
        text-decoration: underline;
    }
    .footer .social-icons {
        margin: 10px 0;
    }
    .footer .social-icons img {
        width: 30px;
        margin: 0 5px;
    }
    .footer .payment-methods img {
        width: 50px;
        margin: 0 5px;
    }
    .footer .copyright {
        margin-top: 20px;
        font-size: 12px;
        color: #666;
    }
  </style>
  </html>
  
</body>
</html>
