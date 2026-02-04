<?php 
include 'config.php'; 
include 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo getCurrentLang() == 'hi' ? 'रॉयल बीकानेरी मसाला - बीकानेर से प्रामाणिक मसाले | Royal Bikaneri Masale' : 'Royal Bikaneri Masale - Authentic Spices from Bikaner | Premium Rajasthani Masala'; ?></title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="<?php echo getCurrentLang() == 'hi' ? 'रॉयल बीकानेरी मसाला ऑनलाइन खरीदें। शुद्ध, पारंपरिक राजस्थानी मसाले जो शाही स्वाद और सुगंध के साथ बनाए गए हैं।' : 'Buy authentic Royal Bikaneri Masale online. Pure, traditional Rajasthani spices made with royal taste and aroma. Premium quality spices from Bikaner.'; ?>">
  <meta name="keywords" content="Royal Bikaneri Masale, Bikaner spices, authentic Rajasthani masala, traditional Indian spices, premium spices, Bikaneri masale online, royal taste spices, pure spices India">
  <meta name="author" content="Royal Bikaneri Masale">
  <meta name="robots" content="index, follow">
  <meta name="language" content="English, Hindi">
  <meta name="geo.region" content="IN-RJ">
  <meta name="geo.placename" content="Bikaner, Rajasthan, India">
  
  <!-- Open Graph Meta Tags for Social Media -->
  <meta property="og:title" content="Royal Bikaneri Masale - Authentic Spices from Bikaner">
  <meta property="og:description" content="Buy authentic Royal Bikaneri Masale online. Pure, traditional Rajasthani spices made with royal taste and aroma.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:image" content="<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>/uploads/royal_bikaneri_logo.jpg">
  <meta property="og:site_name" content="Royal Bikaneri Masale">
  <meta property="og:locale" content="en_US">
  
  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Royal Bikaneri Masale - Authentic Spices from Bikaner">
  <meta name="twitter:description" content="Buy authentic Royal Bikaneri Masale online. Pure, traditional Rajasthani spices made with royal taste and aroma.">
  <meta name="twitter:image" content="<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>/uploads/royal_bikaneri_logo.jpg">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/jpeg" href="uploads/royal_bikaneri_logo.jpg">
  <link rel="apple-touch-icon" href="uploads/royal_bikaneri_logo.jpg">
  
  <!-- JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Royal Bikaneri Masale",
    "description": "Authentic spices from Bikaner, Rajasthan. Premium quality traditional Indian spices with royal taste and aroma.",
    "url": "<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>",
    "logo": "<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>/uploads/royal_bikaneri_logo.jpg",
    "image": "<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>/uploads/royal_bikaneri_logo.jpg",
    "telephone": "+91-8824792829",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Bikaner",
      "addressRegion": "Rajasthan",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "28.0229",
      "longitude": "73.3119"
    },
    "openingHours": "Mo-Su 09:00-18:00",
    "priceRange": "₹₹",
    "servedCuisine": "Indian",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Royal Bikaneri Masale Products",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Product",
            "name": "Garam Masala",
            "description": "Traditional Indian spice blend"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Product",
            "name": "Biryani Masala",
            "description": "Premium biryani spice blend"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Product",
            "name": "Curry Powder",
            "description": "Authentic curry spice mix"
          }
        }
      ]
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.8",
      "reviewCount": "1000"
    },
    "sameAs": [
      "https://wa.me/918824792829"
    ]
  }
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
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
    
    
    
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }
    
    /* Hero Section */
    .hero-section {
      background: linear-gradient(135deg, #8B4513 0%, #A0522D 30%, #CD853F 60%, #D2691E 100%);
      color: white;
      padding: 100px 0;
      position: relative;
      overflow: hidden;
      min-height: 90vh;
      display: flex;
      align-items: center;
    }
    
    .hero-section::before {
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
      padding: 2rem 0;
    }
    
    .hero-title {
      font-size: 3.5rem;
      font-weight: 900;
      margin-bottom: 1.5rem;
      text-shadow: 4px 4px 8px rgba(0,0,0,0.6);
      background: linear-gradient(45deg, #FFD700, #FFA500, #FF8C00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: shimmer 3s ease-in-out infinite;
      line-height: 1.1;
    }
    
    @keyframes shimmer {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }
    
    .hero-subtitle {
      font-size: 1.3rem;
      margin-bottom: 2rem;
      opacity: 0.95;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
      line-height: 1.6;
      font-weight: 500;
    }
    
    .hero-slogan {
      background: rgba(0, 0, 0, 0.3);
      padding: 1.5rem;
      border-radius: 15px;
      margin-bottom: 2rem;
      border: 2px solid rgba(255, 215, 0, 0.5);
    }
    
    .hero-slogan h3 {
      font-size: 1.8rem;
      font-weight: 700;
      color: #FFD700;
      margin-bottom: 0.5rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    }
    
    .hero-slogan p {
      font-size: 1rem;
      opacity: 0.9;
      margin: 0;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }
    
    .hero-stats {
      display: flex;
      gap: 1.5rem;
      margin-top: 2rem;
    }
    
    .stat-item {
      text-align: center;
      background: rgba(0, 0, 0, 0.2);
      padding: 1rem;
      border-radius: 10px;
      border: 1px solid rgba(255, 215, 0, 0.3);
    }
    
    .stat-number {
      font-size: 2rem;
      font-weight: 900;
      color: #FFD700;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    }
    
    .stat-label {
      font-size: 0.8rem;
      opacity: 0.9;
      color: #FFFFFF;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.6);
      font-weight: 500;
    }
    
    .hero-image-container {
      position: relative;
      z-index: 2;
      text-align: center;
    }
    
    .hero-cta .btn {
      padding: 15px 30px;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 50px;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }
    
    .hero-cta .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
    }
    
    .hero-cta .btn-warning {
      background: linear-gradient(45deg, #ffd700, #ffed4e);
      border: none;
      color: #2c1810;
    }
    
    .hero-cta .btn-success {
      background: linear-gradient(45deg, #25d366, #128c7e);
      border: none;
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
    
    /* Features Section */
    .features-section {
      padding: 80px 0;
      background: white;
    }
    
    .feature-card {
      text-align: center;
      padding: 2rem;
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background: white;
      border: 1px solid #eee;
    }
    
    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .feature-icon {
      font-size: 3rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }
    
    .feature-title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--dark-color);
    }
    
    .feature-description {
      color: #666;
      line-height: 1.6;
    }
    
    /* Products Section */
    .products-section {
      padding: 80px 0;
      background: var(--light-color);
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 3rem;
    }
    
    .section-title h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--dark-color);
      margin-bottom: 1rem;
    }
    
    .section-title p {
      font-size: 1.1rem;
      color: #666;
      max-width: 600px;
      margin: 0 auto;
    }
    
    .product-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin-bottom: 2rem;
    }
    
    .product-card:hover {
      transform: translateY(-5px);
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
    }
    
    .product-body {
      padding: 1.5rem;
      text-align: center;
    }
    
    .product-name {
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--dark-color);
      margin-bottom: 0.5rem;
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
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }
    
    .original-price {
      text-decoration: line-through;
      color: #999;
      font-size: 1.2rem;
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
    }
    
    .btn-whatsapp:hover {
      background: #128c7e;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
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
    
    /* Bulk Orders Section */
    .bulk-orders-section {
      padding: 80px 0;
      background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
      position: relative;
    }
    
    .bulk-orders-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="spice-pattern" patternUnits="userSpaceOnUse" width="30" height="30"><circle cx="15" cy="15" r="2" fill="rgba(211,47,47,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23spice-pattern)"/></svg>');
      opacity: 0.3;
    }
    
    .bulk-orders-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--dark-color);
      margin-bottom: 1rem;
      position: relative;
      z-index: 2;
    }
    
    .bulk-orders-subtitle {
      font-size: 1.2rem;
      color: #666;
      margin-bottom: 0;
      position: relative;
      z-index: 2;
    }
    
    .bulk-orders-card {
      background: white;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      text-align: center;
      transition: all 0.3s ease;
      height: 100%;
      position: relative;
      z-index: 2;
    }
    
    .bulk-orders-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .bulk-orders-icon {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, #d32f2f 0%, #ff6b35 100%);
      border-radius: 50%;
      display: flex !important;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      font-size: 2rem;
      color: white !important;
      box-shadow: 0 10px 20px rgba(211, 47, 47, 0.3);
      position: relative;
      z-index: 10;
      min-height: 80px;
      min-width: 80px;
    }
    
    /* Force icon visibility - simple approach */
    .icon-text {
      font-size: 2rem;
      color: white;
      display: inline-block;
      font-family: Arial, sans-serif;
      line-height: 1;
      text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    /* If FontAwesome fails, show text fallback */
    .bulk-orders-icon i:before {
      content: attr(data-fallback) !important;
      font-family: Arial, sans-serif !important;
      font-size: 2rem !important;
      color: white !important;
    }
    
    /* Force show icons with fallback text */
    .bulk-orders-icon i[data-fallback="♥"]:before {
      content: "♥" !important;
      font-family: Arial, sans-serif !important;
    }
    
    .bulk-orders-icon i[data-fallback="📅"]:before {
      content: "📅" !important;
      font-family: Arial, sans-serif !important;
    }
    
    .bulk-orders-icon i[data-fallback="👥"]:before {
      content: "👥" !important;
      font-family: Arial, sans-serif !important;
    }
    
    .bulk-orders-icon i[data-fallback="🎁"]:before {
      content: "🎁" !important;
      font-family: Arial, sans-serif !important;
    }
    
    .bulk-orders-icon i {
      font-size: 2rem !important;
      color: white !important;
      display: inline-block !important;
    }
    
    .icon-fallback {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 2rem;
      color: white;
      z-index: 5;
      display: none;
    }
    
    /* Show fallback if FontAwesome fails */
    .bulk-orders-icon:not(.fa-loaded) .icon-fallback {
      display: block;
    }
    
    .bulk-orders-icon:not(.fa-loaded) i {
      display: none;
    }
    
    /* FontAwesome fallback for icons */
    .bulk-orders-icon i.fas.fa-heart::before {
      content: "♥" !important;
      font-family: Arial, sans-serif !important;
      font-size: 2rem !important;
    }
    
    .bulk-orders-icon i.fas.fa-calendar-alt::before {
      content: "📅" !important;
      font-family: Arial, sans-serif !important;
      font-size: 2rem !important;
    }
    
    .bulk-orders-icon i.fas.fa-users::before {
      content: "👥" !important;
      font-family: Arial, sans-serif !important;
      font-size: 2rem !important;
    }
    
    .bulk-orders-icon i.fas.fa-gift::before {
      content: "🎁" !important;
      font-family: Arial, sans-serif !important;
      font-size: 2rem !important;
    }
    
    .feature-item i.fas.fa-check-circle::before {
      content: "✓" !important;
      font-family: Arial, sans-serif !important;
      color: var(--primary-color) !important;
    }
    
    /* Force icon visibility */
    .bulk-orders-icon i:before {
      display: inline-block !important;
      visibility: visible !important;
      opacity: 1 !important;
    }
    
    .bulk-orders-card h4 {
      font-size: 1.3rem;
      font-weight: 600;
      color: var(--dark-color);
      margin-bottom: 1rem;
    }
    
    .bulk-orders-card p {
      color: #666;
      line-height: 1.6;
      margin: 0;
    }
    
    .bulk-orders-features {
      background: white;
      padding: 3rem 2rem;
      border-radius: 25px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      margin: 3rem 0;
      position: relative;
      z-index: 2;
    }
    
    .bulk-orders-features h3 {
      color: var(--dark-color);
      font-weight: 600;
      margin-bottom: 2rem;
    }
    
    .feature-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 0.5rem 0;
    }
    
    .check-icon {
      color: var(--primary-color);
      font-size: 1.2rem;
      font-weight: bold;
      margin-right: 10px;
    }
    
    .feature-item span {
      color: var(--dark-color);
      font-weight: 500;
    }
    
    .bulk-orders-description {
      font-size: 1.1rem;
      color: #666;
      line-height: 1.6;
      position: relative;
      z-index: 2;
    }
    
    .bulk-orders-btn {
      background: var(--gradient-primary);
      border: none;
      padding: 15px 30px;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 50px;
      transition: all 0.3s ease;
      position: relative;
      z-index: 2;
    }
    
    .bulk-orders-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(211, 47, 47, 0.4);
    }
    
    .bulk-orders-contact {
      color: #666;
      font-size: 1rem;
      position: relative;
      z-index: 2;
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
        font-size: 1.1rem;
      }
      
      .hero-slogan h3 {
        font-size: 1.5rem;
      }
      
      .hero-stats {
        flex-direction: column;
        gap: 1rem;
      }
      
      .stat-number {
        font-size: 1.8rem;
      }
      
      .section-title h2 {
        font-size: 2rem;
      }
      
      .feature-card {
        margin-bottom: 2rem;
      }
      
      .product-image {
        height: 250px;
      }
      
      .navbar-logo {
        height: 45px;
        width: 45px;
      }
      
      .brand-text {
        font-size: 1.5rem;
        letter-spacing: 0.3px;
      }
      
      .footer-logo {
        height: 65px;
        width: 65px;
      }
      
      .footer-brand-text {
        font-size: 1.8rem;
        letter-spacing: 0.8px;
      }
      
      .bulk-orders-section {
        padding: 40px 0;
      }
      
      .bulk-orders-title {
        font-size: 1.8rem;
      }
      
      .bulk-orders-subtitle {
        font-size: 1rem;
      }
      
      .bulk-orders-card {
        padding: 1.5rem;
        margin-bottom: 1rem;
      }
      
      .bulk-orders-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, #d32f2f 0%, #ff6b35 100%);
      }
      
      .bulk-orders-card h4 {
        font-size: 1.1rem;
      }
      
      .bulk-orders-features {
        padding: 2rem 1rem;
        margin: 2rem 0;
      }
      
      .bulk-orders-features h3 {
        font-size: 1.3rem;
      }
      
      .bulk-orders-btn {
        padding: 12px 25px;
        font-size: 1rem;
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
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="uploads/royal_bikaneri_logo.jpg" alt="Royal Bikaneri Masale Logo" class="navbar-logo">
        <span class="brand-text"><?php echo getCurrentLang() == 'hi' ? 'रॉयल बीकानेरी मसाला' : 'Royal Bikaneri Masale'; ?></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home"><?php echo __('nav_home'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php"><?php echo __('nav_products'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"><?php echo getCurrentLang() == 'hi' ? 'हमारे बारे में' : 'About Us'; ?></a>
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
  <section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-content">
            <h1 class="hero-title"><?php echo getCurrentLang() == 'hi' ? 'रॉयल बीकानेरी मसाला – राजस्थान का स्वाद' : 'Royal Bikaneri Masale – The Taste of Rajasthan'; ?></h1>
            <p class="hero-subtitle"><?php echo getCurrentLang() == 'hi' ? 'बीकानेर से प्रामाणिक मसाले - शाही स्वाद और सुगंध के साथ' : 'Authentic spices from Bikaner - Made with royal taste and aroma'; ?></p>
            <div class="hero-slogan">
              <h3>स्वाद का सच्चा तड़का</h3>
              <p>Experience the authentic flavors of Rajasthan with our premium collection of traditional spices</p>
            </div>
            <div class="hero-stats">
              <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Premium Products</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">1000+</div>
                <div class="stat-label">Happy Customers</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">25+</div>
                <div class="stat-label">Years Experience</div>
              </div>
            </div>
            <div class="hero-cta mt-4">
              <a href="#products" class="btn btn-warning btn-lg me-3">
                <i class="fas fa-shopping-cart"></i> <?php echo getCurrentLang() == 'hi' ? 'अभी खरीदें' : 'Shop Now'; ?>
              </a>
              <a href="https://wa.me/918824792829" class="btn btn-success btn-lg" target="_blank">
                <i class="fab fa-whatsapp"></i> <?php echo getCurrentLang() == 'hi' ? 'WhatsApp पर संपर्क करें' : 'Contact on WhatsApp'; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-image-container">
            <!-- 
            Image removed: uploads/royal_bikaneri_advertisement.jpg
            This banner image was removed from the hero section as requested.
            The image container is kept for potential future use or layout consistency.
            -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="products-section">
    <div class="container">
      <div class="section-title">
        <h2><?php echo __('products_title'); ?></h2>
        <p><?php echo __('products_subtitle'); ?></p>
      </div>
      <div class="row">
        <?php
        $res = $conn->query("SELECT * FROM products ORDER BY id DESC");
        $whatsappNumber = "918824792829"; // Lakhvinder Singh's WhatsApp number
        while ($row = $res->fetch_assoc()) {
            $weight = !empty($row['weight']) ? $row['weight'] : '';
            $description = !empty($row['description']) ? $row['description'] : '';
            $discount = !empty($row['discount']) ? $row['discount'] : 0;
            $originalPrice = $row['price'];
            $discountedPrice = $originalPrice - ($originalPrice * $discount / 100);
            
            echo "
            <div class='col-lg-4 col-md-6 mb-4'>
              <div class='product-card'>";
            if ($discount > 0) {
                echo "<div class='discount-badge'>{$discount}% OFF</div>";
            }
            echo "<img src='uploads/{$row['image']}' class='product-image' alt='{$row['name']}'>
                <div class='product-body'>
                  <h5 class='product-name'>{$row['name']}</h5>";
            if (!empty($weight)) {
                echo "<div class='product-weight'><i class='fas fa-weight-hanging'></i> {$weight}</div>";
            }
            if (!empty($description)) {
                echo "<div class='product-description'>{$description}</div>";
            }
            echo "<div class='product-price'>";
            if ($discount > 0) {
                echo "<span class='original-price'>₹{$originalPrice}</span> <span class='discounted-price'>₹" . number_format($discountedPrice, 2) . "</span>";
            } else {
                echo "₹{$originalPrice}";
            }
            echo "</div>
                  <a href='https://wa.me/{$whatsappNumber}?text=Hello, I want to purchase {$row['name']} (₹" . ($discount > 0 ? number_format($discountedPrice, 2) : $originalPrice) . ")' 
                     class='btn-whatsapp' target='_blank'>
                    <i class='fab fa-whatsapp'></i> " . __('buy_whatsapp') . "
                  </a>
                </div>
              </div>
            </div>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-leaf"></i>
            </div>
            <h3 class="feature-title"><?php echo __('feature_natural'); ?></h3>
            <p class="feature-description"><?php echo __('feature_natural_desc'); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-shipping-fast"></i>
            </div>
            <h3 class="feature-title"><?php echo __('feature_delivery'); ?></h3>
            <p class="feature-description"><?php echo __('feature_delivery_desc'); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-award"></i>
            </div>
            <h3 class="feature-title"><?php echo __('feature_quality'); ?></h3>
            <p class="feature-description"><?php echo __('feature_quality_desc'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bulk Orders Section -->
  <section class="bulk-orders-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="text-center mb-5">
            <h2 class="bulk-orders-title"><?php echo __('bulk_orders_title'); ?></h2>
            <p class="bulk-orders-subtitle"><?php echo __('bulk_orders_subtitle'); ?></p>
          </div>
          
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="bulk-orders-card">
                <div class="bulk-orders-icon">
                  <span class="icon-text">♥</span>
                </div>
                <h4><?php echo getCurrentLang() == 'hi' ? 'शादी और समारोह' : 'Weddings & Ceremonies'; ?></h4>
                <p><?php echo getCurrentLang() == 'hi' ? 'शादी, सगाई और अन्य धार्मिक समारोहों के लिए ताजे मसाले' : 'Fresh spices for weddings, engagements, and religious ceremonies'; ?></p>
              </div>
            </div>
            
            <div class="col-lg-6 mb-4">
              <div class="bulk-orders-card">
                <div class="bulk-orders-icon">
                  <span class="icon-text">📅</span>
                </div>
                <h4><?php echo getCurrentLang() == 'hi' ? 'त्योहार और उत्सव' : 'Festivals & Celebrations'; ?></h4>
                <p><?php echo getCurrentLang() == 'hi' ? 'दिवाली, होली, रक्षाबंधन और अन्य त्योहारों के लिए मसाले' : 'Spices for Diwali, Holi, Raksha Bandhan, and other festivals'; ?></p>
              </div>
            </div>
            
            <div class="col-lg-6 mb-4">
              <div class="bulk-orders-card">
                <div class="bulk-orders-icon">
                  <span class="icon-text">👥</span>
                </div>
                <h4><?php echo getCurrentLang() == 'hi' ? 'बड़े समारोह' : 'Large Gatherings'; ?></h4>
                <p><?php echo getCurrentLang() == 'hi' ? 'पारिवारिक समारोह, पार्टी और कॉर्पोरेट इवेंट्स के लिए' : 'For family gatherings, parties, and corporate events'; ?></p>
              </div>
            </div>
            
            <div class="col-lg-6 mb-4">
              <div class="bulk-orders-card">
                <div class="bulk-orders-icon">
                  <span class="icon-text">🎁</span>
                </div>
                <h4><?php echo getCurrentLang() == 'hi' ? 'कस्टम पैकेजिंग' : 'Custom Packaging'; ?></h4>
                <p><?php echo getCurrentLang() == 'hi' ? 'विशेष कार्यक्रमों के लिए कस्टम पैकेजिंग और गिफ्ट बॉक्स' : 'Custom packaging and gift boxes for special occasions'; ?></p>
              </div>
            </div>
          </div>
          
          <div class="bulk-orders-features">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h3 class="text-center mb-4"><?php echo getCurrentLang() == 'hi' ? 'हमारी सेवाएं' : 'Our Services'; ?></h3>
                <div class="row">
                  <?php 
                  $features = explode('|', __('bulk_orders_features'));
                  foreach($features as $feature): 
                  ?>
                  <div class="col-md-6 mb-3">
                    <div class="feature-item">
                      <span class="check-icon">✓</span>
                      <span><?php echo trim($feature); ?></span>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          
          <div class="text-center mt-5">
            <p class="bulk-orders-description mb-4"><?php echo __('bulk_orders_description'); ?></p>
            <a href="https://wa.me/918824792829" class="btn btn-primary btn-lg bulk-orders-btn" target="_blank">
              <i class="fab fa-whatsapp"></i> <?php echo __('bulk_orders_cta'); ?>
            </a>
            <p class="mt-3 bulk-orders-contact"><?php echo __('bulk_orders_contact'); ?></p>
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
          <small style="color: #999; font-size: 0.9rem;"><?php echo getCurrentLang() == 'hi' ? 'विकसित: ChamDumno Software Solutions' : 'Developed by: ChamDumno Software Solutions'; ?></small>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // FontAwesome fallback and debugging
    document.addEventListener('DOMContentLoaded', function() {
      console.log('Checking FontAwesome icons...');
      
      // Check if FontAwesome is loaded
      const testIcon = document.createElement('i');
      testIcon.className = 'fas fa-check';
      testIcon.style.display = 'none';
      document.body.appendChild(testIcon);
      
      const computedStyle = window.getComputedStyle(testIcon, ':before');
      const fontFamily = computedStyle.getPropertyValue('font-family');
      
      console.log('FontAwesome font-family:', fontFamily);
      
      if (!fontFamily.includes('Font Awesome')) {
        console.log('FontAwesome not loaded, adding fallback...');
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = 'https://use.fontawesome.com/releases/v6.4.0/css/all.css';
        document.head.appendChild(link);
      }
      
      document.body.removeChild(testIcon);
      
      // Check if icons are showing
      const iconTexts = document.querySelectorAll('.icon-text');
      console.log('Found icon texts:', iconTexts.length);
      
      iconTexts.forEach((text, index) => {
        console.log(`Icon text ${index}:`, text.textContent);
        text.style.fontSize = '2rem';
        text.style.color = 'white';
        text.style.display = 'inline-block';
      });
    });
  </script>
  <script>
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

    // Add animation on scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.feature-card, .product-card').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(30px)';
      el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      observer.observe(el);
    });
  </script>
</body>
</html>