<?php 
include 'config.php'; 
include 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo getCurrentLang() == 'hi' ? 'हमारे उत्पाद - रॉयल बीकानेरी मसाला' : 'Our Products - Royal Bikaneri Masale'; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #d32f2f;
      --secondary-color: #ff6b35;
      --accent-color: #ffd700;
      --dark-color: #2c1810;
      --light-color: #f8f6f0;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: var(--light-color);
    }
    
    /* Navigation */
    .navbar {
      background: rgba(44, 24, 16, 0.95) !important;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
    }
    
    .navbar-brand {
      font-size: 1.5rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .navbar-logo {
      height: 60px;
      width: 60px;
      object-fit: contain;
      border-radius: 50%;
      border: 2px solid rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
    }
    
    .navbar-logo:hover {
      transform: scale(1.1);
      border-color: var(--accent-color);
      box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
    }
    
    .brand-text {
      font-size: 1.8rem;
      font-weight: 700;
      background: linear-gradient(135deg, #ffffff 0%, #ffd700 50%, #ffffff 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
    }
    
    .brand-text:hover {
      background: linear-gradient(135deg, #ffd700 0%, #ffffff 50%, #ffd700 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      transform: scale(1.05);
    }
    
    .nav-link {
      color: white !important;
      font-weight: 500;
      transition: color 0.3s ease;
    }
    
    .nav-link:hover {
      color: var(--accent-color) !important;
    }
    
    .nav-link.active {
      color: var(--accent-color) !important;
    }
    
    /* Hero Section */
    .products-hero {
      background: linear-gradient(135deg, #8B4513 0%, #A0522D 30%, #CD853F 60%, #D2691E 100%);
      color: white;
      padding: 120px 0 100px;
      position: relative;
      overflow: hidden;
    }
    
    .products-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="spice" patternUnits="userSpaceOnUse" width="20" height="20"><circle cx="10" cy="10" r="2" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23spice)"/></svg>');
      opacity: 0.3;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
    }
    
    .hero-title {
      font-size: 4rem;
      font-weight: 800;
      margin-bottom: 1.5rem;
      text-shadow: 3px 3px 6px rgba(0,0,0,0.4);
      background: linear-gradient(45deg, #FFD700, #FFA500, #FF8C00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: shimmer 3s ease-in-out infinite;
    }
    
    @keyframes shimmer {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }
    
    .hero-subtitle {
      font-size: 1.4rem;
      opacity: 0.95;
      max-width: 700px;
      margin: 0 auto;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
      line-height: 1.6;
    }
    
    /* Search and Filter Section */
    .search-section {
      padding: 40px 0;
      background: white;
      border-bottom: 1px solid #eee;
    }
    
    .search-container {
      max-width: 800px;
      margin: 0 auto;
    }
    
    .search-box {
      position: relative;
      margin-bottom: 2rem;
    }
    
    .search-input {
      width: 100%;
      padding: 15px 50px 15px 20px;
      border: 2px solid #eee;
      border-radius: 25px;
      font-size: 1.1rem;
      transition: all 0.3s ease;
    }
    
    .search-input:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.2rem rgba(211, 47, 47, 0.25);
      outline: none;
    }
    
    .search-icon {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
      font-size: 1.2rem;
    }
    
    
    /* Products Section */
    .products-section {
      padding: 60px 0;
      background: var(--light-color);
    }
    
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 2rem;
      margin-top: 2rem;
    }
    
    .product-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      position: relative;
    }
    
    .product-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .product-card {
      position: relative;
    }
    
    .discount-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: var(--secondary-color);
      color: white;
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 0.8rem;
      font-weight: 600;
      z-index: 2;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }
    
    .product-image {
      height: 280px;
      object-fit: contain;
      width: 100%;
      background: #f8f9fa;
      border-radius: 10px;
      padding: 10px;
      transition: transform 0.3s ease;
    }
    
    .product-card:hover .product-image {
      transform: scale(1.02);
    }
    
    .product-body {
      padding: 1.5rem;
      text-align: center;
    }
    
    .product-name {
      font-size: 1.3rem;
      font-weight: 600;
      color: var(--dark-color);
      margin-bottom: 0.5rem;
      line-height: 1.3;
    }
    
    .product-weight {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
    }
    
    .product-weight i {
      color: var(--secondary-color);
    }
    
    .product-description {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 1rem;
      line-height: 1.4;
      max-height: 3.6rem;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
    }
    
    .product-price {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }
    
    .original-price {
      text-decoration: line-through;
      color: #999;
      font-size: 1.4rem;
      margin-right: 8px;
    }
    
    .discounted-price {
      color: var(--primary-color);
      font-weight: 700;
    }
    
    .btn-whatsapp {
      background: #25d366;
      border: none;
      color: white;
      padding: 12px 24px;
      border-radius: 25px;
      font-weight: 600;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
      width: 100%;
      justify-content: center;
    }
    
    .btn-whatsapp:hover {
      background: #128c7e;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
    }
    
    /* No Products Message */
    .no-products {
      text-align: center;
      padding: 4rem 2rem;
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .no-products-icon {
      font-size: 4rem;
      color: #ccc;
      margin-bottom: 1rem;
    }
    
    .no-products h3 {
      color: var(--dark-color);
      margin-bottom: 1rem;
    }
    
    .no-products p {
      color: #666;
      font-size: 1.1rem;
    }
    
    /* Loading Animation */
    .loading {
      text-align: center;
      padding: 2rem;
    }
    
    .spinner {
      width: 40px;
      height: 40px;
      border: 4px solid #f3f3f3;
      border-top: 4px solid var(--primary-color);
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: 0 auto;
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    
    /* Product Count */
    .product-count {
      text-align: center;
      margin-bottom: 2rem;
      color: #666;
      font-size: 1.1rem;
    }
    
    .product-count strong {
      color: var(--primary-color);
      font-weight: 600;
    }
    
    /* Footer */
    .footer {
      background: var(--dark-color);
      color: white;
      padding: 3rem 0 1rem;
    }
    
    .footer-content {
      text-align: center;
    }
    
    .footer-brand {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--accent-color);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }
    
    .footer-logo {
      height: 80px;
      width: 80px;
      object-fit: contain;
      border-radius: 50%;
      border: 3px solid var(--accent-color);
      transition: all 0.4s ease;
      box-shadow: 0 4px 20px rgba(255, 215, 0, 0.4);
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(15px);
    }
    
    .footer-logo:hover {
      transform: scale(1.15) rotate(5deg);
      box-shadow: 0 8px 30px rgba(255, 215, 0, 0.6);
      border-color: var(--primary-color);
    }
    
    .footer-brand-text {
      font-size: 2.2rem;
      font-weight: 700;
      background: linear-gradient(135deg, #ffd700 0%, #ffffff 30%, #ffd700 70%, #ffffff 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
      letter-spacing: 1px;
      transition: all 0.4s ease;
      text-transform: uppercase;
    }
    
    .footer-brand-text:hover {
      background: linear-gradient(135deg, #ffffff 0%, #ffd700 30%, #ffffff 70%, #ffd700 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      transform: scale(1.08);
      letter-spacing: 1.5px;
    }
    
    .footer-description {
      margin-bottom: 2rem;
      opacity: 0.8;
    }
    
    .social-links {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 2rem;
    }
    
    .social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 18px;
    }
    
    .social-link.facebook {
      background: #1877F2;
    }
    
    .social-link.facebook:hover {
      background: #166FE5;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(24, 119, 242, 0.4);
    }
    
    .social-link.instagram {
      background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
    }
    
    .social-link.instagram:hover {
      background: linear-gradient(45deg, #e0852e 0%,#d55a31 25%,#d01e38 50%,#c01a5b 75%,#b0137d 100%);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(225, 48, 108, 0.4);
    }
    
    .social-link.youtube {
      background: #FF0000;
    }
    
    .social-link.youtube:hover {
      background: #E60000;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
    }
    
    .social-link.whatsapp {
      background: #25D366;
    }
    
    .social-link.whatsapp:hover {
      background: #128C7E;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(37, 211, 102, 0.4);
    }
    
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 1rem;
      text-align: center;
      opacity: 0.7;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }
      
      .hero-subtitle {
        font-size: 1rem;
      }
      
      .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
      }
      
      .product-image {
        height: 250px;
      }
      
      .navbar-logo {
        height: 45px;
        width: 45px;
      }
      
      .footer-logo {
        height: 65px;
        width: 65px;
      }
      
    }
    
    /* Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .fade-in-up {
      animation: fadeInUp 0.8s ease-out;
    }
    
    .product-card {
      animation: fadeInUp 0.6s ease-out;
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="uploads/royal_bikaneri_logo.jpg" alt="Royal Bikaneri Masale Logo" class="navbar-logo">
        <span class="brand-text"><?php echo getCurrentLang() == 'hi' ? 'रॉयल बीकानेरी मसाला' : 'Royal Bikaneri Masale'; ?></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><?php echo __('nav_home'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="products.php"><?php echo __('nav_products'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><?php echo __('nav_contact'); ?></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown">
              <i class="fas fa-globe"></i> <?php echo __('nav_language'); ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item <?php echo getCurrentLang() == 'en' ? 'active' : ''; ?>" href="?lang=en">English</a></li>
              <li><a class="dropdown-item <?php echo getCurrentLang() == 'hi' ? 'active' : ''; ?>" href="?lang=hi">हिंदी</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="products-hero">
    <div class="container">
      <div class="hero-content fade-in-up">
        <h1 class="hero-title"><?php echo __('products_hero_title'); ?></h1>
        <p class="hero-subtitle"><?php echo __('products_hero_subtitle'); ?></p>
      </div>
    </div>
  </section>

  <!-- Search and Filter Section -->
  <section class="search-section">
    <div class="container">
      <div class="search-container">
        <div class="search-box">
          <input type="text" class="search-input" id="searchInput" placeholder="<?php echo __('search_placeholder'); ?>">
          <i class="fas fa-search search-icon"></i>
        </div>
        
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section class="products-section">
    <div class="container">
      <div class="product-count" id="productCount">
        <?php echo __('showing_products'); ?> <strong id="countNumber">0</strong> <?php echo __('products_count'); ?>
      </div>
      
      <div id="productsContainer">
        <div class="loading">
          <div class="spinner"></div>
          <p><?php echo __('loading_products'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-brand">
          <img src="uploads/royal_bikaneri_logo.jpg" alt="Royal Bikaneri Masale Logo" class="footer-logo">
          <span class="footer-brand-text"><?php echo getCurrentLang() == 'hi' ? 'रॉयल बीकानेरी मसाला' : 'Royal Bikaneri Masale'; ?></span>
        </div>
        <p class="footer-description">
          <?php echo __('footer_description'); ?>
        </p>
        <div class="social-links">
          <a href="https://www.facebook.com/share/1Mtre9NWsa/?mibextid=wwXIfr" class="social-link facebook" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/royalbikanerimasale?igsh=MTlmYml0YWJocTFybA%3D%3D&utm_source=qr" class="social-link instagram" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://wa.me/918824792829" class="social-link whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="https://whatsapp.com/channel/0029Vb60rm9G8l5KxwDkGM20" class="social-link whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="https://youtube.com/@royalbikanerimasale?si=5fGSyz3iRTGjSQ-m" class="social-link youtube" target="_blank">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
        <div class="footer-bottom">
          © <?= date("Y") ?> <?php echo getCurrentLang() == 'hi' ? 'रॉयल बीकानेरी मसाला' : 'Royal Bikaneri Masale'; ?>. <?php echo __('footer_rights'); ?><br>
          <small style="color: #999; font-size: 0.9rem;"><?php echo getCurrentLang() == 'hi' ? 'विकसित: ChamDumno Software Solutions' : 'Developed by: ChamDumno Software Solutions'; ?></small>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Products data
    let allProducts = [];
    let filteredProducts = [];
    const whatsappNumber = "918824792829"; // Lakhvinder Singh's WhatsApp number
    
    // Load products on page load
    document.addEventListener('DOMContentLoaded', function() {
      loadProducts();
      setupEventListeners();
    });
    
    function loadProducts() {
      // Simulate loading delay for better UX
      setTimeout(() => {
        <?php
        $res = $conn->query("SELECT * FROM products ORDER BY id DESC");
        $products = [];
        while ($row = $res->fetch_assoc()) {
            $discount = !empty($row['discount']) ? $row['discount'] : 0;
            $originalPrice = $row['price'];
            $discountedPrice = $originalPrice - ($originalPrice * $discount / 100);
            
            $products[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'price' => $row['price'],
                'image' => $row['image'],
                'weight' => $row['weight'] ?? '',
                'description' => $row['description'] ?? '',
                'discount' => $discount,
                'discountedPrice' => $discountedPrice
            ];
        }
        echo 'allProducts = ' . json_encode($products) . ';';
        ?>
        
        filteredProducts = [...allProducts];
        displayProducts();
        updateProductCount();
      }, 1000);
    }
    
    function displayProducts() {
      const container = document.getElementById('productsContainer');
      
      if (filteredProducts.length === 0) {
        container.innerHTML = `
          <div class="no-products">
            <div class="no-products-icon">
              <i class="fas fa-search"></i>
            </div>
            <h3><?php echo __('no_products'); ?></h3>
            <p><?php echo __('no_products_desc'); ?></p>
          </div>
        `;
        return;
      }
      
      const productsHTML = filteredProducts.map(product => `
        <div class="product-card" data-product-id="${product.id}">
          ${product.discount > 0 ? `<div class="discount-badge">${product.discount}% OFF</div>` : ''}
          <img src="uploads/${product.image}" class="product-image" alt="${product.name}" loading="lazy">
          <div class="product-body">
            <h5 class="product-name">${product.name}</h5>
            ${product.weight ? `<div class="product-weight"><i class="fas fa-weight-hanging"></i> ${product.weight}</div>` : ''}
            ${product.description ? `<div class="product-description">${product.description}</div>` : ''}
            <div class="product-price">
              ${product.discount > 0 ? 
                `<span class="original-price">₹${product.price}</span> <span class="discounted-price">₹${product.discountedPrice.toFixed(2)}</span>` : 
                `₹${product.price}`
              }
            </div>
            <a href="https://wa.me/${whatsappNumber}?text=Hello, I want to purchase ${encodeURIComponent(product.name)} (₹${product.discount > 0 ? product.discountedPrice.toFixed(2) : product.price})" 
               class="btn-whatsapp" target="_blank">
              <i class="fab fa-whatsapp"></i> <?php echo __('buy_whatsapp'); ?>
            </a>
          </div>
        </div>
      `).join('');
      
      container.innerHTML = `<div class="products-grid">${productsHTML}</div>`;
    }
    
    function updateProductCount() {
      const countElement = document.getElementById('countNumber');
      countElement.textContent = filteredProducts.length;
    }
    
    function setupEventListeners() {
      // Search functionality
      const searchInput = document.getElementById('searchInput');
      searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        filterProducts(searchTerm);
      });
      
    }
    
    function filterProducts(searchTerm = '') {
      filteredProducts = allProducts.filter(product => {
        const matchesSearch = product.name.toLowerCase().includes(searchTerm);
        return matchesSearch;
      });
      
      displayProducts();
      updateProductCount();
    }
    
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
    
    // Navbar background change on scroll
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.style.background = 'rgba(44, 24, 16, 0.98)';
      } else {
        navbar.style.background = 'rgba(44, 24, 16, 0.95)';
      }
    });
  </script>
</body>
</html>
