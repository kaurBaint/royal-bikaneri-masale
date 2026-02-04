<?php 
include 'config.php'; 
include 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo getCurrentLang() == 'hi' ? 'हमारे बारे में - रॉयल बीकानेरी मसाला | About Royal Bikaneri Masale' : 'About Us - Royal Bikaneri Masale | Authentic Spices from Bikaner'; ?></title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="<?php echo getCurrentLang() == 'hi' ? 'रॉयल बीकानेरी मसाला के बारे में जानें। बीकानेर से प्रामाणिक मसालों की हमारी कहानी, परंपरा और गुणवत्ता।' : 'Learn about Royal Bikaneri Masale. Our story, tradition, and quality of authentic spices from Bikaner, Rajasthan.'; ?>">
  <meta name="keywords" content="about Royal Bikaneri Masale, Bikaner spices history, authentic masala company, traditional spice makers, Rajasthan spices">
  <meta name="author" content="Royal Bikaneri Masale">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="About Royal Bikaneri Masale - Authentic Spices from Bikaner">
  <meta property="og:description" content="Learn about Royal Bikaneri Masale. Our story, tradition, and quality of authentic spices from Bikaner, Rajasthan.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:image" content="<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>/uploads/royal_bikaneri_logo.jpg">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/jpeg" href="uploads/royal_bikaneri_logo.jpg">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
      color: var(--accent-color) !important;
    }
    
    .navbar-brand img {
      height: 40px;
      margin-right: 10px;
    }
    
    .nav-link {
      color: white !important;
      font-weight: 500;
      transition: color 0.3s ease;
    }
    
    .nav-link:hover {
      color: var(--accent-color) !important;
    }
    
    /* Hero Section */
    .about-hero {
      background: linear-gradient(135deg, #8B4513 0%, #A0522D 30%, #CD853F 60%, #D2691E 100%);
      color: white;
      padding: 100px 0 80px;
      text-align: center;
    }
    
    .about-hero h1 {
      font-size: 3rem;
      font-weight: 900;
      margin-bottom: 1rem;
      text-shadow: 4px 4px 8px rgba(0,0,0,0.6);
    }
    
    .about-hero p {
      font-size: 1.3rem;
      opacity: 0.95;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    
    /* SEO Content Section */
    .seo-content-section {
      background: #f8f9fa;
      border-top: 3px solid var(--primary-color);
    }
    
    .seo-content {
      background: white;
      padding: 3rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      line-height: 1.8;
    }
    
    .seo-content h2 {
      color: var(--primary-color);
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      text-align: center;
      border-bottom: 3px solid var(--accent-color);
      padding-bottom: 1rem;
    }
    
    .seo-content h3 {
      color: var(--dark-color);
      font-size: 1.8rem;
      font-weight: 600;
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      border-left: 4px solid var(--secondary-color);
      padding-left: 1rem;
    }
    
    .seo-content h4 {
      color: var(--primary-color);
      font-size: 1.4rem;
      font-weight: 600;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }
    
    .seo-content p {
      color: #555;
      font-size: 1.1rem;
      margin-bottom: 1.5rem;
      text-align: justify;
    }
    
    .seo-content .lead {
      font-size: 1.3rem;
      font-weight: 500;
      color: var(--dark-color);
      text-align: center;
      margin-bottom: 2rem;
      padding: 1.5rem;
      background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%);
      border-radius: 10px;
      border-left: 5px solid var(--accent-color);
    }
    
    .seo-content ul {
      margin-bottom: 1.5rem;
      padding-left: 2rem;
    }
    
    .seo-content li {
      margin-bottom: 0.8rem;
      color: #555;
      font-size: 1.05rem;
    }
    
    .seo-content strong {
      color: var(--primary-color);
      font-weight: 600;
    }
    
    .seo-content .conclusion {
      background: linear-gradient(135deg, #e8f5e8 0%, #f1f8e9 100%);
      padding: 2rem;
      border-radius: 10px;
      border-left: 5px solid #4caf50;
      font-size: 1.2rem;
      font-weight: 500;
      color: var(--dark-color);
      text-align: center;
      margin-top: 2rem;
    }
    
    @media (max-width: 768px) {
      .about-hero h1 {
        font-size: 2rem;
      }
      
      .seo-content {
        padding: 2rem 1.5rem;
      }
      
      .seo-content h2 {
        font-size: 2rem;
      }
      
      .seo-content h3 {
        font-size: 1.5rem;
      }
      
      .seo-content .lead {
        font-size: 1.1rem;
        padding: 1rem;
      }
    }

    /* Footer (synced with homepage) */
    .footer {
      background: var(--dark-color);
      color: white;
      padding: 3rem 0 1rem;
    }
    .footer-content { text-align: center; }
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
    .footer-description { margin-bottom: 2rem; opacity: 0.8; }
    .social-links { display: flex; justify-content: center; gap: 1rem; margin-bottom: 2rem; }
    .social-link {
      width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
      color: white; text-decoration: none; transition: all 0.3s ease; font-size: 18px;
    }
    .social-link.facebook { background: #1877F2; }
    .social-link.facebook:hover { background: #166FE5; transform: translateY(-3px); box-shadow: 0 5px 15px rgba(24,119,242,0.4); }
    .social-link.instagram { background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); }
    .social-link.instagram:hover { background: linear-gradient(45deg, #e0852e 0%,#d55a31 25%,#d01e38 50%,#c01a5b 75%,#b0137d 100%); transform: translateY(-3px); box-shadow: 0 5px 15px rgba(225,48,108,0.4); }
    .social-link.youtube { background: #FF0000; }
    .social-link.youtube:hover { background: #E60000; transform: translateY(-3px); box-shadow: 0 5px 15px rgba(255,0,0,0.4); }
    .social-link.whatsapp { background: #25D366; }
    .social-link.whatsapp:hover { background: #128C7E; transform: translateY(-3px); box-shadow: 0 5px 15px rgba(37,211,102,0.4); }
    .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; text-align: center; opacity: 0.7; }

    @media (max-width: 768px) {
      .footer-logo { height: 65px; width: 65px; }
      .footer-brand-text { font-size: 1.8rem; letter-spacing: 0.8px; }
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="uploads/royal_bikaneri_logo.jpg" alt="Royal Bikaneri Masale Logo">
        Royal Bikaneri Masale
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
            <a class="nav-link" href="products.php"><?php echo __('nav_products'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php"><?php echo getCurrentLang() == 'hi' ? 'हमारे बारे में' : 'About Us'; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><?php echo __('nav_contact'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?lang=<?php echo getCurrentLang() == 'hi' ? 'en' : 'hi'; ?>">
              <?php echo getCurrentLang() == 'hi' ? 'English' : 'हिंदी'; ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- About Hero Section -->
  <section class="about-hero">
    <div class="container">
      <h1><?php echo getCurrentLang() == 'hi' ? 'हमारे बारे में' : 'About Royal Bikaneri Masale'; ?></h1>
      <p><?php echo getCurrentLang() == 'hi' ? 'बीकानेर से प्रामाणिक मसालों की हमारी कहानी' : 'Our Story of Authentic Spices from Bikaner'; ?></p>
    </div>
  </section>

  <!-- SEO Content Section -->
  <section class="seo-content-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="seo-content">
            <h2>Royal Bikaneri Masale - Premium Authentic Spices from Bikaner, Rajasthan</h2>
            <p class="lead">Welcome to Royal Bikaneri Masale, your trusted source for authentic, premium-quality spices from the royal city of Bikaner, Rajasthan. Our traditional spices are crafted with centuries-old recipes passed down through generations, ensuring the authentic taste and aroma that makes Royal Bikaneri Masale the preferred choice for food lovers across India and beyond.</p>
            
            <h3>The Origin of Bikaneri Masala - A Royal Legacy</h3>
            <p>Bikaner, the royal city of Rajasthan, has been renowned for its exceptional spices for over 500 years. The arid climate and unique soil composition of this region create the perfect conditions for growing and processing spices with intense flavors and aromas. Royal Bikaneri Masale continues this legacy by sourcing the finest ingredients and using traditional methods to create our signature spice blends.</p>
            
            <h3>Why Royal Bikaneri Masale is Different</h3>
            <p>What sets Royal Bikaneri Masale apart from other spice brands is our commitment to authenticity and quality:</p>
            <ul>
              <li><strong>Traditional Recipes:</strong> Our spices are made using time-tested recipes that have been perfected over generations</li>
              <li><strong>Premium Quality Ingredients:</strong> We source only the finest, freshest spices from trusted suppliers</li>
              <li><strong>Authentic Processing:</strong> Our spices are processed using traditional methods to preserve their natural flavors</li>
              <li><strong>No Artificial Additives:</strong> All our products are free from artificial colors, flavors, and preservatives</li>
              <li><strong>Royal Taste Guarantee:</strong> Every product carries our promise of authentic royal taste and aroma</li>
            </ul>
            
            <h3>Health Benefits of Our Premium Spices</h3>
            <p>Royal Bikaneri Masale not only enhances the taste of your food but also provides numerous health benefits:</p>
            <ul>
              <li><strong>Antioxidant Properties:</strong> Our spices are rich in antioxidants that help fight free radicals</li>
              <li><strong>Digestive Health:</strong> Traditional spices like cumin, coriander, and turmeric aid in digestion</li>
              <li><strong>Immune System Support:</strong> Many of our spices contain natural compounds that boost immunity</li>
              <li><strong>Anti-inflammatory Benefits:</strong> Spices like turmeric and ginger have natural anti-inflammatory properties</li>
              <li><strong>Rich in Vitamins and Minerals:</strong> Our spice blends provide essential nutrients for overall health</li>
            </ul>
            
            <h3>Popular Recipes Using Royal Bikaneri Masale</h3>
            <p>Our authentic spices can transform any dish into a culinary masterpiece. Here are some popular ways to use Royal Bikaneri Masale:</p>
            
            <h4>Traditional Rajasthani Dishes</h4>
            <ul>
              <li><strong>Dal Baati Churma:</strong> Use our special masala blend for authentic Rajasthani dal</li>
              <li><strong>Gatte Ki Sabzi:</strong> Our traditional spice mix enhances the flavor of this classic dish</li>
              <li><strong>Ker Sangri:</strong> Perfect spice blend for this traditional Rajasthani vegetable dish</li>
            </ul>
            
            <h4>North Indian Cuisine</h4>
            <ul>
              <li><strong>Biryani Masala:</strong> Our premium biryani masala creates aromatic and flavorful rice dishes</li>
              <li><strong>Curry Powder:</strong> Perfect for making rich and flavorful curries</li>
              <li><strong>Garam Masala:</strong> Essential for authentic North Indian cooking</li>
            </ul>
            
            <h3>Our Product Range</h3>
            <p>Royal Bikaneri Masale offers a comprehensive range of authentic spices including:</p>
            <ul>
              <li>Traditional Garam Masala</li>
              <li>Premium Biryani Masala</li>
              <li>Authentic Curry Powder</li>
              <li>Special Rajasthani Masala</li>
              <li>Pure Turmeric Powder</li>
              <li>Premium Red Chili Powder</li>
              <li>Cumin Powder</li>
              <li>Coriander Powder</li>
              <li>And many more traditional spice blends</li>
            </ul>
            
            <h3>Quality Assurance and Packaging</h3>
            <p>At Royal Bikaneri Masale, we maintain the highest standards of quality control. Our spices are:</p>
            <ul>
              <li>Carefully tested for purity and quality</li>
              <li>Packaged in hygienic, airtight containers</li>
              <li>Labeled with clear manufacturing and expiry dates</li>
              <li>Stored in optimal conditions to maintain freshness</li>
            </ul>
            
            <h3>Why Choose Royal Bikaneri Masale?</h3>
            <p>When you choose Royal Bikaneri Masale, you're not just buying spices - you're investing in:</p>
            <ul>
              <li><strong>Authentic Taste:</strong> Experience the true flavors of Rajasthan</li>
              <li><strong>Premium Quality:</strong> Only the finest ingredients make it to our products</li>
              <li><strong>Traditional Heritage:</strong> Centuries-old recipes and methods</li>
              <li><strong>Customer Satisfaction:</strong> Over 1000+ happy customers across India</li>
              <li><strong>25+ Years Experience:</strong> Trusted by families for generations</li>
            </ul>
            
            <p class="conclusion">Royal Bikaneri Masale brings you the authentic taste of Rajasthan right to your kitchen. Whether you're cooking traditional Indian dishes or experimenting with fusion cuisine, our premium spices will elevate your culinary experience. Order now and taste the difference that authentic, premium-quality spices can make in your cooking.</p>
          </div>
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
          <small style="color: #999; font-size: 0.9rem;">&nbsp;<?php echo getCurrentLang() == 'hi' ? 'विकसित: ChamDumno Software Solutions' : 'Developed by: ChamDumno Software Solutions'; ?></small>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
