<?php 
include 'config.php'; 
include 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo getCurrentLang() == 'hi' ? 'संपर्क करें - रॉयल बीकानेरी मसाला' : 'Contact Us - Royal Bikaneri Masale'; ?></title>
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
      --gradient-primary: linear-gradient(135deg, #d32f2f 0%, #ff6b35 100%);
      --gradient-secondary: linear-gradient(135deg, #2c1810 0%, #3d2817 100%);
      --shadow-light: 0 10px 30px rgba(0,0,0,0.1);
      --shadow-medium: 0 20px 40px rgba(0,0,0,0.15);
      --shadow-heavy: 0 30px 60px rgba(0,0,0,0.2);
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
      background: linear-gradient(135deg, #f8f6f0 0%, #f0ede5 100%);
      min-height: 100vh;
      font-size: 16px;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    
    /* Better text rendering */
    h1, h2, h3, h4, h5, h6 {
      font-weight: 600;
      line-height: 1.3;
      margin-bottom: 0.5rem;
    }
    
    p {
      margin-bottom: 1rem;
      line-height: 1.6;
    }
    
    /* Hindi text support */
    .hindi-text {
      font-family: 'Poppins', 'Noto Sans Devanagari', sans-serif;
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
    
    /* Hero Section */
    .contact-hero {
      background: linear-gradient(135deg, #8B4513 0%, #A0522D 30%, #CD853F 60%, #D2691E 100%);
      color: white;
      padding: 140px 0 100px;
      position: relative;
      overflow: hidden;
    }
    
    .contact-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="spice" patternUnits="userSpaceOnUse" width="20" height="20"><circle cx="10" cy="10" r="2" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23spice)"/></svg>');
      opacity: 0.3;
      animation: float 20s ease-in-out infinite;
    }
    
    .contact-hero::after {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
      animation: rotate 30s linear infinite;
    }
    
    .hero-content {
      position: relative;
      z-index: 3;
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
      animation: slideInUp 1s ease-out 0.3s both;
    }
    
    .hero-icon {
      font-size: 4rem;
      margin-top: 2rem;
      opacity: 0.8;
      animation: bounce 2s ease-in-out infinite;
    }
    
    /* Contact Section */
    .contact-section {
      padding: 100px 0;
      background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
      position: relative;
    }
    
    .contact-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" patternUnits="userSpaceOnUse" width="20" height="20"><circle cx="10" cy="10" r="1" fill="rgba(211,47,47,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
      opacity: 0.5;
    }
    
    .contact-card {
      background: white;
      border-radius: 25px;
      box-shadow: var(--shadow-heavy);
      overflow: hidden;
      margin-bottom: 3rem;
      position: relative;
      z-index: 2;
      animation: slideInUp 1s ease-out 0.5s both;
      width: 100%;
      max-width: 100%;
    }
    
    .contact-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: var(--gradient-primary);
    }
    
    .contact-info {
      background: var(--gradient-secondary);
      color: white;
      padding: 3.5rem;
      position: relative;
      overflow: hidden;
      width: 100%;
      box-sizing: border-box;
    }
    
    .contact-info::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,215,0,0.1) 0%, transparent 70%);
      animation: pulse 4s ease-in-out infinite;
    }
    
    .contact-info h3 {
      color: var(--accent-color);
      margin-bottom: 2.5rem;
      font-size: 2rem;
      font-weight: 700;
      position: relative;
      z-index: 2;
    }
    
    .info-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 2rem;
      padding: 1.5rem;
      background: rgba(255,255,255,0.1);
      border-radius: 15px;
      transition: all 0.4s ease;
      position: relative;
      z-index: 2;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.2);
      overflow: hidden;
      word-wrap: break-word;
      overflow-wrap: break-word;
    }
    
    .info-item:hover {
      background: rgba(255,255,255,0.2);
      transform: translateX(10px) scale(1.02);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    
    .info-icon {
      width: 45px;
      height: 45px;
      background: var(--gradient-primary);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 1rem;
      font-size: 1.1rem;
      box-shadow: 0 5px 15px rgba(211, 47, 47, 0.3);
      transition: all 0.3s ease;
      flex-shrink: 0;
    }
    
    .info-item:hover .info-icon {
      transform: scale(1.1) rotate(5deg);
      box-shadow: 0 8px 20px rgba(211, 47, 47, 0.4);
    }
    
    .info-content h5 {
      margin-bottom: 0.5rem;
      font-weight: 600;
      font-size: 1rem;
      word-wrap: break-word;
      overflow-wrap: break-word;
      line-height: 1.3;
    }
    
    .info-content {
      flex: 1;
      min-width: 0;
    }
    
    .info-content p {
      margin: 0;
      opacity: 0.95;
      font-size: 0.9rem;
      line-height: 1.4;
      word-wrap: break-word;
      overflow-wrap: break-word;
      hyphens: auto;
      max-height: 2.8em;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
    }
    
    .contact-form {
      padding: 3.5rem;
      background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
      width: 100%;
      box-sizing: border-box;
      overflow: hidden;
    }
    
    .form-title {
      color: var(--dark-color);
      margin-bottom: 2.5rem;
      font-size: 2rem;
      font-weight: 700;
      position: relative;
    }
    
    .form-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--gradient-primary);
      border-radius: 2px;
    }
    
    .form-group {
      margin-bottom: 2rem;
      position: relative;
      width: 100%;
      overflow: hidden;
    }
    
    .form-label {
      font-weight: 600;
      color: var(--dark-color);
      margin-bottom: 0.8rem;
      font-size: 1.1rem;
      display: block;
    }
    
    .form-control {
      border: 2px solid #e9ecef;
      border-radius: 15px;
      padding: 15px 20px;
      font-size: 1rem;
      transition: all 0.4s ease;
      background: white;
      position: relative;
      z-index: 2;
      width: 100%;
      box-sizing: border-box;
      word-wrap: break-word;
      overflow-wrap: break-word;
    }
    
    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.3rem rgba(211, 47, 47, 0.15);
      transform: translateY(-2px);
      background: #fff;
    }
    
    .form-control:hover {
      border-color: var(--secondary-color);
      transform: translateY(-1px);
    }
    
    .form-control::placeholder {
      color: #adb5bd;
      font-style: italic;
      word-wrap: break-word;
      overflow-wrap: break-word;
    }
    
    textarea.form-control {
      resize: vertical;
      min-height: 120px;
      max-height: 300px;
    }
    
    .btn-submit {
      background: var(--gradient-primary);
      border: none;
      color: white;
      padding: 18px 40px;
      border-radius: 30px;
      font-weight: 700;
      font-size: 1.2rem;
      transition: all 0.4s ease;
      width: 100%;
      position: relative;
      overflow: hidden;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    
    .btn-submit::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }
    
    .btn-submit:hover::before {
      left: 100%;
    }
    
    .btn-submit:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(211, 47, 47, 0.4);
      color: white;
    }
    
    .btn-submit:active {
      transform: translateY(-1px);
    }
    
    .btn-submit:disabled {
      opacity: 0.7;
      cursor: not-allowed;
      transform: none;
    }
    
    /* Alert Messages */
    .alert {
      border-radius: 15px;
      border: none;
      padding: 20px 25px;
      margin-bottom: 2rem;
      position: relative;
      overflow: hidden;
      animation: slideInDown 0.5s ease-out;
      word-wrap: break-word;
      overflow-wrap: break-word;
      hyphens: auto;
    }
    
    .alert::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 5px;
      height: 100%;
    }
    
    .alert-success {
      background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
      color: #155724;
      border-left: 5px solid #28a745;
    }
    
    .alert-success::before {
      background: #28a745;
    }
    
    .alert-danger {
      background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
      color: #721c24;
      border-left: 5px solid #dc3545;
    }
    
    .alert-danger::before {
      background: #dc3545;
    }
    
    .alert i {
      margin-right: 10px;
      font-size: 1.2rem;
    }
    
    /* Map Section */
    .map-section {
      padding: 80px 0;
      background: var(--light-color);
    }
    
    .map-container {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .map-placeholder {
      height: 400px;
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.2rem;
    }
    
    .map-info {
      background: white;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      margin-top: 20px;
    }
    
    .map-detail {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 0;
    }
    
    .map-detail i {
      font-size: 1.2rem;
      width: 20px;
    }
    
    .map-detail strong {
      color: var(--dark-color);
      font-size: 1rem;
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
      background: var(--gradient-primary);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      font-size: 2rem;
      color: white;
      box-shadow: 0 10px 20px rgba(211, 47, 47, 0.3);
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
    
    .feature-item i {
      color: var(--primary-color);
      font-size: 1.2rem;
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
    @media (max-width: 1200px) {
      .contact-card {
        margin-bottom: 2rem;
      }
      
      .contact-info,
      .contact-form {
        padding: 2.5rem;
      }
    }
    
    @media (max-width: 992px) {
      .contact-hero {
        padding: 120px 0 80px;
      }
      
      .hero-title {
        font-size: 3rem;
      }
      
      .hero-subtitle {
        font-size: 1.1rem;
      }
      
      .contact-section {
        padding: 60px 0;
      }
      
      .contact-info,
      .contact-form {
        padding: 2rem;
      }
      
      .info-item {
        padding: 1.2rem;
        margin-bottom: 1.5rem;
      }
      
      .info-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
        margin-right: 0.8rem;
      }
      
      .form-title {
        font-size: 1.6rem;
        margin-bottom: 2rem;
      }
      
      .form-group {
        margin-bottom: 1.5rem;
      }
      
      .form-control {
        padding: 12px 15px;
        font-size: 0.95rem;
      }
      
      .btn-submit {
        padding: 15px 30px;
        font-size: 1.1rem;
      }
    }
    
    @media (max-width: 768px) {
      .contact-hero {
        padding: 100px 0 60px;
      }
      
      .hero-title {
        font-size: 2.5rem;
        margin-bottom: 1rem;
      }
      
      .hero-subtitle {
        font-size: 1rem;
        padding: 0 1rem;
      }
      
      .hero-icon {
        font-size: 3rem;
        margin-top: 1.5rem;
      }
      
      .contact-section {
        padding: 50px 0;
      }
      
      .contact-card {
        margin-bottom: 1.5rem;
        border-radius: 20px;
      }
      
      .contact-info {
        padding: 1.5rem;
      }
      
      .contact-info h3 {
        font-size: 1.6rem;
        margin-bottom: 2rem;
      }
      
      .info-item {
        flex-direction: column;
        text-align: center;
        padding: 1rem;
        margin-bottom: 1rem;
      }
      
      .info-item:hover {
        transform: translateY(-5px) scale(1.01);
      }
      
      .info-icon {
        width: 35px;
        height: 35px;
        font-size: 1rem;
        margin-right: 0;
        margin-bottom: 0.6rem;
      }
      
      .info-content h5 {
        font-size: 0.95rem;
        margin-bottom: 0.3rem;
        word-wrap: break-word;
        overflow-wrap: break-word;
        line-height: 1.2;
      }
      
      .info-content p {
        font-size: 0.85rem;
        line-height: 1.3;
        word-wrap: break-word;
        overflow-wrap: break-word;
        hyphens: auto;
        max-height: 2.6em;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
      }
      
      .contact-form {
        padding: 1.5rem;
      }
      
      .form-title {
        font-size: 1.4rem;
        margin-bottom: 1.5rem;
      }
      
      .form-label {
        font-size: 1rem;
        margin-bottom: 0.5rem;
      }
      
      .form-control {
        padding: 12px 15px;
        font-size: 0.9rem;
        border-radius: 12px;
      }
      
      .btn-submit {
        padding: 14px 25px;
        font-size: 1rem;
        border-radius: 25px;
      }
      
      .alert {
        padding: 15px 20px;
        margin-bottom: 1.5rem;
        font-size: 0.9rem;
      }
    }
    
    @media (max-width: 576px) {
      .contact-hero {
        padding: 80px 0 50px;
      }
      
      .hero-title {
        font-size: 2rem;
        margin-bottom: 0.8rem;
      }
      
      .hero-subtitle {
        font-size: 0.9rem;
        padding: 0 0.5rem;
      }
      
      .hero-icon {
        font-size: 2.5rem;
        margin-top: 1rem;
      }
      
      .contact-section {
        padding: 40px 0;
      }
      
      .contact-info {
        padding: 1.2rem;
      }
      
      .contact-info h3 {
        font-size: 1.4rem;
        margin-bottom: 1.5rem;
      }
      
      .info-item {
        padding: 0.8rem;
        margin-bottom: 0.8rem;
        border-radius: 12px;
      }
      
      .info-icon {
        width: 32px;
        height: 32px;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
      }
      
      .info-content h5 {
        font-size: 0.85rem;
        margin-bottom: 0.2rem;
        word-wrap: break-word;
        overflow-wrap: break-word;
        line-height: 1.2;
      }
      
      .info-content p {
        font-size: 0.75rem;
        line-height: 1.3;
        word-wrap: break-word;
        overflow-wrap: break-word;
        hyphens: auto;
        max-height: 2.6em;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
      }
      
      .contact-form {
        padding: 1.2rem;
      }
      
      .form-title {
        font-size: 1.2rem;
        margin-bottom: 1.2rem;
      }
      
      .form-label {
        font-size: 0.9rem;
        margin-bottom: 0.4rem;
      }
      
      .form-control {
        padding: 10px 12px;
        font-size: 0.85rem;
        border-radius: 10px;
      }
      
      .btn-submit {
        padding: 12px 20px;
        font-size: 0.9rem;
        border-radius: 20px;
      }
      
      .alert {
        padding: 12px 15px;
        margin-bottom: 1rem;
        font-size: 0.8rem;
      }
      
      .map-section {
        padding: 40px 0;
      }
      
      .map-placeholder {
        height: 250px;
        font-size: 1rem;
      }
      
      .map-placeholder i {
        font-size: 2rem;
        margin-bottom: 0.5rem;
      }
      
      .map-placeholder h4 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
      }
      
      .map-placeholder p {
        font-size: 0.9rem;
        margin-bottom: 0.3rem;
      }
      
      .map-placeholder small {
        font-size: 0.7rem;
      }
      
      .map-info {
        padding: 15px;
        margin-top: 15px;
      }
      
      .map-detail {
        padding: 8px 0;
        font-size: 0.9rem;
      }
      
      .map-detail i {
        font-size: 1rem;
      }
      
      .map-detail strong {
        font-size: 0.9rem;
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
    
    @media (max-width: 400px) {
      .hero-title {
        font-size: 1.8rem;
      }
      
      .hero-subtitle {
        font-size: 0.85rem;
      }
      
      .contact-info,
      .contact-form {
        padding: 1rem;
      }
      
      .info-item {
        padding: 0.6rem;
      }
      
      .info-icon {
        width: 30px;
        height: 30px;
        font-size: 0.8rem;
      }
      
      .form-control {
        padding: 8px 10px;
        font-size: 0.8rem;
      }
      
      .btn-submit {
        padding: 10px 15px;
        font-size: 0.85rem;
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
    
    /* Animations */
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
    
    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes slideInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-10px);
      }
      60% {
        transform: translateY(-5px);
      }
    }
    
    @keyframes float {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-20px);
      }
    }
    
    @keyframes rotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }
    
    @keyframes pulse {
      0%, 100% {
        opacity: 0.1;
      }
      50% {
        opacity: 0.3;
      }
    }
    
    .fade-in-up {
      animation: fadeInUp 0.8s ease-out;
    }
    
    /* Bootstrap overrides for text containment */
    .row {
      margin: 0;
      width: 100%;
      overflow: hidden;
    }
    
    .col-lg-4, .col-lg-8 {
      padding: 0;
      overflow: hidden;
    }
    
    .container {
      max-width: 100%;
      overflow: hidden;
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
            <a class="nav-link" href="products.php"><?php echo __('nav_products'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php"><?php echo __('nav_contact'); ?></a>
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
  <section class="contact-hero">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title"><?php echo __('contact_hero_title'); ?></h1>
        <p class="hero-subtitle"><?php echo __('contact_hero_subtitle'); ?></p>
        <div class="hero-icon">
          <i class="fas fa-envelope"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="contact-card">
            <div class="row g-0">
              <!-- Contact Info -->
              <div class="col-lg-4">
                <div class="contact-info">
                  <h3><?php echo __('contact_info_title'); ?></h3>
                  
                  <div class="info-item">
                    <div class="info-icon">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                      <h5><?php echo __('contact_address'); ?></h5>
                      <p><?php echo __('contact_address_value'); ?></p>
                    </div>
                  </div>
                  
                  <div class="info-item">
                    <div class="info-icon">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                      <h5><?php echo __('contact_phone'); ?></h5>
                      <p>+91 8824792829<br>+91 88243 51746</p>
                    </div>
                  </div>
                  
                  <div class="info-item">
                    <div class="info-icon">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                      <h5><?php echo __('contact_email'); ?></h5>
                      <p>royalbikanerimasale@gmail.com</p>
                    </div>
                  </div>
                  
                  <div class="info-item">
                    <div class="info-icon">
                      <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                      <h5><?php echo __('contact_hours'); ?></h5>
                      <p><?php echo __('contact_hours_value'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Contact Form -->
              <div class="col-lg-8">
                <div class="contact-form">
                  <h3 class="form-title"><?php echo __('contact_form_title'); ?></h3>
                  
                  <?php
                  $message = '';
                  $messageType = '';
                  
                  // Test mail function (uncomment to test)
                  function testMailFunction() {
                      $test_to = 'royalbikanerimasale@gmail.com';
                      $test_subject = 'Test Email from Royal Bikaneri Masale';
                      $test_body = 'This is a test email to check if mail function is working properly.';
                      $test_headers = "From: noreply@royalbikanerimasale.com\r\nContent-Type: text/plain; charset=UTF-8\r\n";
                      
                      return @mail($test_to, $test_subject, $test_body, $test_headers);
                  }
                  
                  // Debug server configuration
                  function debugMailConfiguration() {
                      $debug_info = [];
                      
                      // Check if mail function exists
                      $debug_info['mail_function'] = function_exists('mail') ? 'Available' : 'Not Available';
                      
                      // Check PHP version
                      $debug_info['php_version'] = phpversion();
                      
                      // Check sendmail path
                      $debug_info['sendmail_path'] = ini_get('sendmail_path');
                      
                      // Check SMTP settings
                      $debug_info['smtp'] = ini_get('SMTP');
                      $debug_info['smtp_port'] = ini_get('smtp_port');
                      
                      // Check mail log
                      $debug_info['mail_log'] = ini_get('mail.log');
                      
                      return $debug_info;
                  }
                  
                  // Uncomment to test mail function and debug configuration
                  // $debug_info = debugMailConfiguration();
                  // $message = 'Debug Info: ' . json_encode($debug_info, JSON_PRETTY_PRINT);
                  // $messageType = 'info';
                  
                  // if (testMailFunction()) {
                  //     $message = 'Mail function is working!';
                  //     $messageType = 'success';
                  // } else {
                  //     $message = 'Mail function is not working. Please check server configuration.';
                  //     $messageType = 'danger';
                  // }
                  
                  if ($_POST) {
                      $name = trim($_POST['name']);
                      $email = trim($_POST['email']);
                      $phone = trim($_POST['phone']);
                      $subject = trim($_POST['subject']);
                      $message_text = trim($_POST['message']);
                      
                      // Validation
                      if (empty($name) || empty($email) || empty($message_text)) {
                          $message = __('form_required');
                          $messageType = 'danger';
                      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                          $message = __('form_email_placeholder');
                          $messageType = 'danger';
                      } else {
                          // Send email
                          $to = 'royalbikanerimasale@gmail.com'; // Royal Bikaneri Masale email
                          $email_subject = 'New Contact Form Submission - ' . $subject;
                          $email_body = "
                          <html>
                          <head>
                              <title>Contact Form Submission</title>
                          </head>
                          <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
                              <div style='max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9; border-radius: 10px;'>
                                  <h2 style='color: #d32f2f; text-align: center; margin-bottom: 30px;'>Royal Bikaneri Masale - Contact Form</h2>
                                  
                                  <div style='background: white; padding: 20px; border-radius: 8px; margin-bottom: 20px;'>
                                      <h3 style='color: #2c1810; margin-bottom: 15px;'>Contact Details:</h3>
                                      <p><strong>Name:</strong> {$name}</p>
                                      <p><strong>Email:</strong> {$email}</p>
                                      <p><strong>Phone:</strong> {$phone}</p>
                                      <p><strong>Subject:</strong> {$subject}</p>
                                  </div>
                                  
                                  <div style='background: white; padding: 20px; border-radius: 8px;'>
                                      <h3 style='color: #2c1810; margin-bottom: 15px;'>Message:</h3>
                                      <p style='white-space: pre-wrap;'>{$message_text}</p>
                                  </div>
                                  
                                  <div style='text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee;'>
                                      <p style='color: #666; font-size: 14px;'>This message was sent from the Royal Bikaneri Masale website contact form.</p>
                                  </div>
                              </div>
                          </body>
                          </html>
                          ";
                          
                          $headers = "MIME-Version: 1.0" . "\r\n";
                          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                          $headers .= "From: Royal Bikaneri Masale <noreply@royalbikanerimasale.com>" . "\r\n";
                          $headers .= "Reply-To: {$email}" . "\r\n";
                          $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                          $headers .= "X-Priority: 3" . "\r\n";
                          $headers .= "Return-Path: noreply@royalbikanerimasale.com" . "\r\n";
                          
                          // Check if mail function is available
                          if (!function_exists('mail')) {
                              $message = 'Mail function is not available on this server. Please contact us directly at royalbikanerimasale@gmail.com';
                              $messageType = 'danger';
                          } else {
                              // Try to send email
                              $mail_sent = @mail($to, $email_subject, $email_body, $headers);
                              
                              if ($mail_sent) {
                              $message = __('form_success');
                              $messageType = 'success';
                                  
                                  // Save successful contact to log
                                  $contact_data = [
                                      'timestamp' => date('Y-m-d H:i:s'),
                                      'name' => $name,
                                      'email' => $email,
                                      'phone' => $phone,
                                      'subject' => $subject,
                                      'message' => $message_text,
                                      'status' => 'mail_sent'
                                  ];
                                  
                                  $log_file = 'contact_log.txt';
                                  file_put_contents($log_file, json_encode($contact_data) . "\n", FILE_APPEND | LOCK_EX);
                              
                              // Clear form data
                              $name = $email = $phone = $subject = $message_text = '';
                          } else {
                                  // Try alternative method with simpler headers
                                  $simple_headers = "From: {$email}\r\nReply-To: {$email}\r\nContent-Type: text/html; charset=UTF-8\r\n";
                                  $mail_sent = @mail($to, $email_subject, $email_body, $simple_headers);
                                  
                                  if ($mail_sent) {
                                      $message = __('form_success');
                                      $messageType = 'success';
                                      
                                      // Save successful contact to log
                                      $contact_data = [
                                          'timestamp' => date('Y-m-d H:i:s'),
                                          'name' => $name,
                                          'email' => $email,
                                          'phone' => $phone,
                                          'subject' => $subject,
                                          'message' => $message_text,
                                          'status' => 'mail_sent'
                                      ];
                                      
                                      $log_file = 'contact_log.txt';
                                      file_put_contents($log_file, json_encode($contact_data) . "\n", FILE_APPEND | LOCK_EX);
                                      
                                      $name = $email = $phone = $subject = $message_text = '';
                                  } else {
                                      // Try with plain text
                                      $plain_body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nSubject: {$subject}\n\nMessage:\n{$message_text}";
                                      $plain_headers = "From: {$email}\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8\r\n";
                                      $mail_sent = @mail($to, $email_subject, $plain_body, $plain_headers);
                                      
                                      if ($mail_sent) {
                                          $message = __('form_success');
                                          $messageType = 'success';
                                          
                                          // Save successful contact to log
                                          $contact_data = [
                                              'timestamp' => date('Y-m-d H:i:s'),
                                              'name' => $name,
                                              'email' => $email,
                                              'phone' => $phone,
                                              'subject' => $subject,
                                              'message' => $message_text,
                                              'status' => 'mail_sent'
                                          ];
                                          
                                          $log_file = 'contact_log.txt';
                                          file_put_contents($log_file, json_encode($contact_data) . "\n", FILE_APPEND | LOCK_EX);
                                          
                                          $name = $email = $phone = $subject = $message_text = '';
                                      } else {
                                          // Get detailed error information
                                          $error = error_get_last();
                                          $error_msg = $error ? $error['message'] : 'Unknown error';
                                          
                                          // Log the error for debugging
                                          error_log("Mail sending failed for: " . $email . " - " . $error_msg);
                                          
                                          // Save contact details to file as backup
                                          $contact_data = [
                                              'timestamp' => date('Y-m-d H:i:s'),
                                              'name' => $name,
                                              'email' => $email,
                                              'phone' => $phone,
                                              'subject' => $subject,
                                              'message' => $message_text,
                                              'status' => 'mail_failed'
                                          ];
                                          
                                          $log_file = 'contact_log.txt';
                                          file_put_contents($log_file, json_encode($contact_data) . "\n", FILE_APPEND | LOCK_EX);
                                          
                                          $message = 'Mail service is currently unavailable. Your message has been saved and we will contact you soon.<br>
                                          📧 Email: royalbikanerimasale@gmail.com<br>
                                          📱 WhatsApp: <a href="https://wa.me/918824792829" target="_blank">+91 8824792829</a><br>
                                          📞 Phone: +91 8824792829';
                                          $messageType = 'warning';
                                      }
                                  }
                              }
                          }
                      }
                  }
                  ?>
                  
                  <?php if ($message): ?>
                    <div class="alert alert-<?php echo $messageType; ?>">
                      <i class="fas fa-<?php echo $messageType == 'success' ? 'check-circle' : 'exclamation-triangle'; ?>"></i>
                      <?php echo $message; ?>
                    </div>
                  <?php endif; ?>
                  
                  <form method="POST" action="">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name" class="form-label"><?php echo __('form_name'); ?> *</label>
                          <input type="text" class="form-control" id="name" name="name" 
                                 value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" 
                                 placeholder="<?php echo __('form_name_placeholder'); ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email" class="form-label"><?php echo __('form_email'); ?> *</label>
                          <input type="email" class="form-control" id="email" name="email" 
                                 value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" 
                                 placeholder="<?php echo __('form_email_placeholder'); ?>" required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="phone" class="form-label"><?php echo __('form_phone'); ?></label>
                          <input type="tel" class="form-control" id="phone" name="phone" 
                                 value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>"
                                 placeholder="<?php echo __('form_phone_placeholder'); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="subject" class="form-label"><?php echo __('form_subject'); ?></label>
                          <select class="form-control" id="subject" name="subject">
                            <option value=""><?php echo __('form_subject_placeholder'); ?></option>
                            <option value="General Inquiry" <?php echo (isset($subject) && $subject == 'General Inquiry') ? 'selected' : ''; ?>><?php echo __('form_subject_general'); ?></option>
                            <option value="Product Information" <?php echo (isset($subject) && $subject == 'Product Information') ? 'selected' : ''; ?>><?php echo __('form_subject_product'); ?></option>
                            <option value="Bulk Orders" <?php echo (isset($subject) && $subject == 'Bulk Orders') ? 'selected' : ''; ?>><?php echo __('form_subject_bulk'); ?></option>
                            <option value="Delivery Query" <?php echo (isset($subject) && $subject == 'Delivery Query') ? 'selected' : ''; ?>><?php echo __('form_subject_delivery'); ?></option>
                            <option value="Complaint" <?php echo (isset($subject) && $subject == 'Complaint') ? 'selected' : ''; ?>><?php echo __('form_subject_complaint'); ?></option>
                            <option value="Other" <?php echo (isset($subject) && $subject == 'Other') ? 'selected' : ''; ?>><?php echo __('form_subject_other'); ?></option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="message" class="form-label"><?php echo __('form_message'); ?> *</label>
                      <textarea class="form-control" id="message" name="message" rows="5" 
                                placeholder="<?php echo __('form_message_placeholder'); ?>" required><?php echo isset($message_text) ? htmlspecialchars($message_text) : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-submit">
                      <i class="fas fa-paper-plane"></i> <?php echo __('form_submit'); ?>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="map-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="text-center mb-4">
            <h2 style="color: var(--dark-color); font-weight: 700; margin-bottom: 1rem;"><?php echo __('map_title'); ?></h2>
            <p style="color: #666; font-size: 1.1rem;"><?php echo __('map_subtitle'); ?></p>
          </div>
          <div class="map-container">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.1234567890!2d74.1234567890!3d29.1234567890!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDA3JzI0LjQiTiA3NMKwMDcnMjQuNCJF!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
              width="100%" 
              height="400" 
              style="border:0; border-radius: 20px;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="Royal Bikaneri Masale Location - Hanumangarh, Rajasthan">
            </iframe>
            <div class="map-info mt-3">
              <div class="row">
                <div class="col-md-6">
                  <div class="map-detail">
                    <i class="fas fa-map-marker-alt text-primary"></i>
                    <strong><?php echo __('map_location'); ?></strong>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="map-detail">
                    <i class="fas fa-clock text-primary"></i>
                    <strong><?php echo getCurrentLang() == 'hi' ? 'समय: सुबह 9:00 - शाम 8:00' : 'Timings: 9:00 AM - 8:00 PM'; ?></strong>
                  </div>
                </div>
              </div>
            </div>
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
                  <i class="fas fa-heart"></i>
                </div>
                <h4><?php echo getCurrentLang() == 'hi' ? 'शादी और समारोह' : 'Weddings & Ceremonies'; ?></h4>
                <p><?php echo getCurrentLang() == 'hi' ? 'शादी, सगाई और अन्य धार्मिक समारोहों के लिए ताजे मसाले' : 'Fresh spices for weddings, engagements, and religious ceremonies'; ?></p>
              </div>
            </div>
            
            <div class="col-lg-6 mb-4">
              <div class="bulk-orders-card">
                <div class="bulk-orders-icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <h4><?php echo getCurrentLang() == 'hi' ? 'त्योहार और उत्सव' : 'Festivals & Celebrations'; ?></h4>
                <p><?php echo getCurrentLang() == 'hi' ? 'दिवाली, होली, रक्षाबंधन और अन्य त्योहारों के लिए मसाले' : 'Spices for Diwali, Holi, Raksha Bandhan, and other festivals'; ?></p>
              </div>
            </div>
            
            <div class="col-lg-6 mb-4">
              <div class="bulk-orders-card">
                <div class="bulk-orders-icon">
                  <i class="fas fa-users"></i>
                </div>
                <h4><?php echo getCurrentLang() == 'hi' ? 'बड़े समारोह' : 'Large Gatherings'; ?></h4>
                <p><?php echo getCurrentLang() == 'hi' ? 'पारिवारिक समारोह, पार्टी और कॉर्पोरेट इवेंट्स के लिए' : 'For family gatherings, parties, and corporate events'; ?></p>
              </div>
            </div>
            
            <div class="col-lg-6 mb-4">
              <div class="bulk-orders-card">
                <div class="bulk-orders-icon">
                  <i class="fas fa-gift"></i>
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
                      <i class="fas fa-check-circle"></i>
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
    // Enhanced form validation and interactions
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      const submitBtn = document.querySelector('.btn-submit');
      const inputs = form.querySelectorAll('input, textarea, select');
      
      // Add floating label effect
      inputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
          if (!this.value.trim()) {
            this.parentElement.classList.remove('focused');
          }
        });
        
        // Check if field has value on load
        if (input.value.trim()) {
          input.parentElement.classList.add('focused');
        }
      });
      
      // Enhanced form submission
      form.addEventListener('submit', function(e) {
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
          if (!field.value.trim()) {
            isValid = false;
            field.style.borderColor = '#dc3545';
            field.style.transform = 'translateY(-2px)';
            
            // Add shake animation
            field.style.animation = 'shake 0.5s ease-in-out';
            setTimeout(() => {
              field.style.animation = '';
            }, 500);
          } else {
            field.style.borderColor = '#28a745';
            field.style.transform = 'translateY(-2px)';
          }
        });
        
        if (!isValid) {
          e.preventDefault();
          showNotification('<?php echo __('form_required'); ?>', 'error');
        } else {
          submitBtn.disabled = true;
          submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <?php echo __('form_submit'); ?>...';
          
          // Add loading animation to form
          form.style.opacity = '0.7';
          form.style.pointerEvents = 'none';
        }
      });
      
      // Real-time validation with enhanced feedback
      inputs.forEach(input => {
        input.addEventListener('blur', function() {
          validateField(this);
        });
        
        input.addEventListener('input', function() {
          if (this.value.trim()) {
            this.style.borderColor = '#28a745';
            this.style.transform = 'translateY(-1px)';
          } else {
            this.style.borderColor = '#e9ecef';
            this.style.transform = 'translateY(0)';
          }
        });
      });
      
      // Add typing effect to textarea
      const messageTextarea = document.getElementById('message');
      if (messageTextarea) {
        messageTextarea.addEventListener('input', function() {
          const charCount = this.value.length;
          const maxLength = 1000;
          
          if (charCount > maxLength * 0.8) {
            this.style.borderColor = '#ffc107';
          } else if (charCount > maxLength * 0.9) {
            this.style.borderColor = '#dc3545';
          }
        });
      }
      
      // Smooth scrolling for navigation
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
      
      // Add parallax effect to hero section
      window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.contact-hero');
        if (hero) {
          hero.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
      });
      
      // Add intersection observer for animations
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
      document.querySelectorAll('.info-item, .form-group').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
      });
    });
    
    function validateField(field) {
      const value = field.value.trim();
      const fieldType = field.type;
      const isRequired = field.hasAttribute('required');
      
      if (isRequired && !value) {
        field.style.borderColor = '#dc3545';
        field.style.transform = 'translateY(-2px)';
        return false;
      }
      
      if (fieldType === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
          field.style.borderColor = '#dc3545';
          field.style.transform = 'translateY(-2px)';
          return false;
        }
      }
      
      if (fieldType === 'tel' && value) {
        const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
        if (!phoneRegex.test(value)) {
          field.style.borderColor = '#ffc107';
          field.style.transform = 'translateY(-1px)';
          return false;
        }
      }
      
      field.style.borderColor = '#28a745';
      field.style.transform = 'translateY(-2px)';
      return true;
    }
    
    function showNotification(message, type = 'info') {
      const notification = document.createElement('div');
      notification.className = `alert alert-${type === 'error' ? 'danger' : 'success'} notification`;
      notification.innerHTML = `
        <i class="fas fa-${type === 'error' ? 'exclamation-triangle' : 'check-circle'}"></i>
        ${message}
      `;
      
      notification.style.position = 'fixed';
      notification.style.top = '20px';
      notification.style.right = '20px';
      notification.style.zIndex = '9999';
      notification.style.minWidth = '300px';
      notification.style.animation = 'slideInDown 0.5s ease-out';
      
      document.body.appendChild(notification);
      
      setTimeout(() => {
        notification.style.animation = 'slideInUp 0.5s ease-out reverse';
        setTimeout(() => {
          document.body.removeChild(notification);
        }, 500);
      }, 3000);
    }
  </script>
  
  <style>
    /* Additional animations for enhanced UI */
    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      75% { transform: translateX(5px); }
    }
    
    .notification {
      animation: slideInDown 0.5s ease-out;
    }
    
    .form-group.focused .form-label {
      color: var(--primary-color);
      transform: translateY(-5px);
    }
    
    .form-control:focus + .form-label {
      color: var(--primary-color);
    }
  </style>
</body>
</html>
