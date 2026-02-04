<?php
session_start();

// Language configuration
$languages = [
    'en' => 'English',
    'hi' => 'हिंदी'
];

// Set default language
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'en';
}

// Handle language switching
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $languages)) {
    $_SESSION['language'] = $_GET['lang'];
    // Redirect to same page without lang parameter
    $redirect_url = strtok($_SERVER["REQUEST_URI"], '?');
    header("Location: $redirect_url");
    exit();
}

$current_lang = $_SESSION['language'];

// Language strings
$lang = [
    'en' => [
        // Navigation
        'nav_home' => 'Home',
        'nav_products' => 'Products',
        'nav_contact' => 'Contact',
        'nav_language' => 'Language',
        
        // Home Page
        'hero_title' => 'Authentic Royal Bikaneri Masale',
        'hero_subtitle' => 'Experience the rich flavors of Rajasthan with our premium collection of traditional spices and masalas, crafted with love and authenticity.',
        'feature_natural' => '100% Natural',
        'feature_natural_desc' => 'All our spices are sourced from the finest natural ingredients, ensuring purity and authentic taste in every product.',
        'feature_delivery' => 'Fast Delivery',
        'feature_delivery_desc' => 'Quick and reliable delivery across India. Your favorite spices will reach you fresh and on time, every time.',
        'feature_quality' => 'Premium Quality',
        'feature_quality_desc' => 'Handpicked spices with traditional grinding methods to preserve the authentic flavors and aromas of Rajasthan.',
        'products_title' => 'Our Premium Collection',
        'products_subtitle' => 'Discover our handcrafted range of authentic Bikaneri masalas and spices that bring the royal flavors of Rajasthan to your kitchen.',
        'buy_whatsapp' => 'Buy on WhatsApp',
        'footer_description' => 'Bringing you the authentic taste of Rajasthan with premium quality spices and masalas. Experience the royal flavors that have been cherished for generations.',
        'footer_rights' => 'All rights reserved. Made with ❤️ in Rajasthan',
        
        // Products Page
        'products_hero_title' => 'Our Premium Collection',
        'products_hero_subtitle' => 'Discover our handcrafted range of authentic Bikaneri masalas and spices that bring the royal flavors of Rajasthan to your kitchen.',
        'search_placeholder' => 'Search for spices, masalas, or products...',
        'filter_all' => 'All Products',
        'filter_masala' => 'Masalas',
        'filter_spice' => 'Spices',
        'filter_powder' => 'Powders',
        'filter_mix' => 'Mixes',
        'showing_products' => 'Showing',
        'products_count' => 'products',
        'no_products' => 'No Products Found',
        'no_products_desc' => 'Sorry, no products match your search criteria. Try adjusting your search or filter.',
        'loading_products' => 'Loading products...',
        
        // Contact Page
        'contact_hero_title' => 'Contact Us',
        'contact_hero_subtitle' => 'Connect with us! Send us a message for your questions and suggestions. We will respond to you as soon as possible.',
        'contact_info_title' => 'Contact Information',
        'contact_address' => 'Address',
        'contact_address_value' => 'Hanumangarh, Rajasthan, India',
        'contact_phone' => 'Phone',
        'contact_email' => 'Email',
        'contact_hours' => 'Business Hours',
        'contact_hours_value' => 'Mon - Sat: 9:00 AM - 7:00 PM<br>Sunday: 10:00 AM - 5:00 PM',
        'contact_form_title' => 'Send us a Message',
        'form_name' => 'Full Name',
        'form_name_placeholder' => 'Enter your full name',
        'form_email' => 'Email Address',
        'form_email_placeholder' => 'example@email.com',
        'form_phone' => 'Phone Number',
        'form_phone_placeholder' => '+91 98765 43210',
        'form_subject' => 'Subject',
        'form_subject_placeholder' => 'Select a subject',
        'form_subject_general' => 'General Inquiry',
        'form_subject_product' => 'Product Information',
        'form_subject_bulk' => 'Bulk Orders',
        'form_subject_delivery' => 'Delivery Query',
        'form_subject_complaint' => 'Complaint',
        'form_subject_other' => 'Other',
        'form_message' => 'Message',
        'form_message_placeholder' => 'Please describe your inquiry in detail...',
        'form_submit' => 'Send Message',
        'form_required' => 'Please fill in all required fields.',
        'form_success' => 'Thank you for your message! We will get back to you soon.',
        'form_error' => 'Sorry, there was an error sending your message. Please try again later.',
        'map_title' => 'Find Us',
        'map_subtitle' => 'Visit our store in Hanumangarh, Rajasthan',
        'map_location' => 'Hanumangarh, Rajasthan, India',
        'map_address' => 'Royal Bikaneri Masale Store<br>Hanumangarh, Rajasthan, India',
        'map_note' => 'Interactive map showing our exact location',
        'bulk_orders_title' => 'Bulk Orders & Special Events',
        'bulk_orders_subtitle' => 'Perfect for weddings, festivals, and large gatherings',
        'bulk_orders_description' => 'We provide bulk orders for weddings, festivals, and special events. Get fresh, authentic spices delivered to your doorstep.',
        'bulk_orders_features' => 'Fresh & Authentic Spices|Custom Packaging|Bulk Discounts|Free Delivery|Special Event Support',
        'bulk_orders_cta' => 'Order Now for Your Special Event',
        'bulk_orders_contact' => 'Contact us for bulk orders and special pricing'
    ],
    
    'hi' => [
        // Navigation
        'nav_home' => 'होम',
        'nav_products' => 'उत्पाद',
        'nav_contact' => 'संपर्क',
        'nav_language' => 'भाषा',
        
        // Home Page
        'hero_title' => 'प्रामाणिक रॉयल बीकानेरी मसाला',
        'hero_subtitle' => 'राजस्थान के समृद्ध स्वादों का अनुभव करें हमारे प्रीमियम पारंपरिक मसालों और मसालों के संग्रह के साथ, प्रेम और प्रामाणिकता के साथ तैयार किया गया।',
        'feature_natural' => '100% प्राकृतिक',
        'feature_natural_desc' => 'हमारे सभी मसाले सबसे अच्छे प्राकृतिक सामग्री से प्राप्त किए जाते हैं, हर उत्पाद में शुद्धता और प्रामाणिक स्वाद सुनिश्चित करते हैं।',
        'feature_delivery' => 'तेज़ डिलीवरी',
        'feature_delivery_desc' => 'भारत भर में त्वरित और विश्वसनीय डिलीवरी। आपके पसंदीदा मसाले ताज़े और समय पर हर बार आप तक पहुंचेंगे।',
        'feature_quality' => 'प्रीमियम गुणवत्ता',
        'feature_quality_desc' => 'राजस्थान के प्रामाणिक स्वादों और सुगंधों को संरक्षित करने के लिए पारंपरिक पीसने की विधियों के साथ हाथ से चुने गए मसाले।',
        'products_title' => 'हमारा प्रीमियम संग्रह',
        'products_subtitle' => 'हमारे हस्तनिर्मित प्रामाणिक बीकानेरी मसालों और मसालों की श्रृंखला की खोज करें जो राजस्थान के शाही स्वादों को आपके रसोई में लाते हैं।',
        'buy_whatsapp' => 'WhatsApp पर खरीदें',
        'footer_description' => 'प्रीमियम गुणवत्ता के मसालों और मसालों के साथ राजस्थान के प्रामाणिक स्वाद को आपके पास ला रहे हैं। उन शाही स्वादों का अनुभव करें जो पीढ़ियों से संजोए गए हैं।',
        'footer_rights' => 'सभी अधिकार सुरक्षित। राजस्थान में ❤️ के साथ बनाया गया',
        
        // Products Page
        'products_hero_title' => 'हमारा प्रीमियम संग्रह',
        'products_hero_subtitle' => 'हमारे हस्तनिर्मित प्रामाणिक बीकानेरी मसालों और मसालों की श्रृंखला की खोज करें जो राजस्थान के शाही स्वादों को आपके रसोई में लाते हैं।',
        'search_placeholder' => 'मसालों, मसालों या उत्पादों की खोज करें...',
        'filter_all' => 'सभी उत्पाद',
        'filter_masala' => 'मसाले',
        'filter_spice' => 'मसाले',
        'filter_powder' => 'पाउडर',
        'filter_mix' => 'मिश्रण',
        'showing_products' => 'दिखा रहे हैं',
        'products_count' => 'उत्पाद',
        'no_products' => 'कोई उत्पाद नहीं मिला',
        'no_products_desc' => 'क्षमा करें, आपकी खोज मानदंड से मेल खाने वाला कोई उत्पाद नहीं मिला। अपनी खोज या फ़िल्टर को समायोजित करने का प्रयास करें।',
        'loading_products' => 'उत्पाद लोड हो रहे हैं...',
        
        // Contact Page
        'contact_hero_title' => 'संपर्क करें',
        'contact_hero_subtitle' => 'हमसे जुड़ें! अपने सवालों और सुझावों के लिए हमें संदेश भेजें। हम जल्द से जल्द आपको जवाब देंगे।',
        'contact_info_title' => 'संपर्क जानकारी',
        'contact_address' => 'पता',
        'contact_address_value' => 'हनुमानगढ़, राजस्थान, भारत',
        'contact_phone' => 'फोन',
        'contact_email' => 'ईमेल',
        'contact_hours' => 'कार्य समय',
        'contact_hours_value' => 'सोम - शनि: सुबह 9:00 - शाम 7:00<br>रविवार: सुबह 10:00 - शाम 5:00',
        'contact_form_title' => 'हमें संदेश भेजें',
        'form_name' => 'पूरा नाम',
        'form_name_placeholder' => 'अपना पूरा नाम लिखें',
        'form_email' => 'ईमेल पता',
        'form_email_placeholder' => 'example@email.com',
        'form_phone' => 'फोन नंबर',
        'form_phone_placeholder' => '+91 98765 43210',
        'form_subject' => 'विषय',
        'form_subject_placeholder' => 'विषय चुनें',
        'form_subject_general' => 'सामान्य पूछताछ',
        'form_subject_product' => 'उत्पाद जानकारी',
        'form_subject_bulk' => 'बड़े ऑर्डर',
        'form_subject_delivery' => 'डिलीवरी संबंधी',
        'form_subject_complaint' => 'शिकायत',
        'form_subject_other' => 'अन्य',
        'form_message' => 'संदेश',
        'form_message_placeholder' => 'अपनी पूछताछ को विस्तार से लिखें...',
        'form_submit' => 'संदेश भेजें',
        'form_required' => 'कृपया सभी आवश्यक फ़ील्ड भरें।',
        'form_success' => 'आपके संदेश के लिए धन्यवाद! हम जल्द ही आपसे संपर्क करेंगे।',
        'form_error' => 'क्षमा करें, आपका संदेश भेजने में त्रुटि हुई। कृपया बाद में पुनः प्रयास करें।',
        'map_title' => 'हमें ढूंढें',
        'map_subtitle' => 'हनुमानगढ़, राजस्थान में हमारी दुकान पर आएं',
        'map_location' => 'हनुमानगढ़, राजस्थान, भारत',
        'map_address' => 'रॉयल बीकानेरी मसाला स्टोर<br>हनुमानगढ़, राजस्थान, भारत',
        'map_note' => 'हमारी सटीक स्थिति दिखाने वाला इंटरैक्टिव मैप',
        'bulk_orders_title' => 'बल्क ऑर्डर और विशेष कार्यक्रम',
        'bulk_orders_subtitle' => 'शादी, त्योहार और बड़े समारोहों के लिए बिल्कुल सही',
        'bulk_orders_description' => 'हम शादी, त्योहार और विशेष कार्यक्रमों के लिए बल्क ऑर्डर प्रदान करते हैं। ताजे, प्रामाणिक मसाले आपके दरवाजे तक पहुंचाएं।',
        'bulk_orders_features' => 'ताजे और प्रामाणिक मसाले|कस्टम पैकेजिंग|बल्क डिस्काउंट|मुफ्त डिलीवरी|विशेष कार्यक्रम सहायता',
        'bulk_orders_cta' => 'अपने विशेष कार्यक्रम के लिए अभी ऑर्डर करें',
        'bulk_orders_contact' => 'बल्क ऑर्डर और विशेष मूल्य के लिए हमसे संपर्क करें'
    ]
];

// Function to get language string
function __($key) {
    global $lang, $current_lang;
    return isset($lang[$current_lang][$key]) ? $lang[$current_lang][$key] : $key;
}

// Function to get current language
function getCurrentLang() {
    global $current_lang;
    return $current_lang;
}

// Function to get language name
function getLangName($code) {
    global $languages;
    return isset($languages[$code]) ? $languages[$code] : $code;
}
?>
