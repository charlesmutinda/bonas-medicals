<?php
// Default page title if not set
if (!isset($page_title)) {
    $page_title = "Bonas Medicals - Specialist Orthopedic Hospital";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bonas Medicals is a premier orthopedic specialty center providing advanced joint replacement, spine surgery, sports medicine, and trauma care.">
    <meta name="keywords" content="Orthopedic Hospital, Joint Replacement, Spine Surgery, Sports Medicine, Bonas Medicals, Emergency Trauma Care">
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Style Sheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Top Emergency & Utility Bar (Nairobi Hospital Style) -->
<div class="top-utility-bar">
    <div class="container top-utility-inner">
        <div class="top-contact-info">
            <span class="emergency-tag">
                <i class="fa-solid fa-truck-medical"></i> 24/7 Trauma Hotline:
            </span>
            <a href="tel:+254700000999" class="phone-link"><strong>+254 700 000 999</strong></a>
            <span class="divider">|</span>
            <a href="mailto:emergency@bonasmedicals.org"><i class="fa-regular fa-envelope"></i> care@bonasmedicals.org</a>
        </div>
        <div class="top-right-links">
            <span><i class="fa-regular fa-clock"></i> OPD: Mon - Sat (8:00 AM - 8:00 PM)</span>
            <a href="#" class="patient-portal-btn"><i class="fa-solid fa-user-lock"></i> Patient Portal</a>
        </div>
    </div>
</div>
