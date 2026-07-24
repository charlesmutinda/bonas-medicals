<?php
// Active link helper
if (!isset($current_page)) {
    $current_page = 'home';
}
?>
<!-- Main Navbar Header -->
<header class="main-navbar">
    <div class="container navbar-inner">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-logo">
            <div class="brand-icon">
                <i class="fa-solid fa-bone"></i>
            </div>
            <div class="brand-text">
                <h1>BONAS <span>Medicals</span></h1>
                <span>Orthopedic & Spine Care</span>
            </div>
        </a>

        <!-- Main Navigation Links -->
        <nav class="nav-menu" id="navMenu">
            <a href="index.php" class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>">Home</a>
            <a href="services.php" class="nav-link <?php echo ($current_page == 'services') ? 'active' : ''; ?>">Specialties & Procedures</a>
            <a href="doctors.php" class="nav-link <?php echo ($current_page == 'doctors') ? 'active' : ''; ?>">Our Surgeons</a>
            <a href="appointment.php" class="nav-link <?php echo ($current_page == 'appointment') ? 'active' : ''; ?>">Book Visit</a>
            <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contact Us</a>
        </nav>

        <!-- Navbar Action Buttons -->
        <div class="nav-actions">
            <a href="tel:+254700000999" class="btn btn-emergency"><i class="fa-solid fa-phone"></i> Emergency 24/7</a>
            <button class="btn btn-primary open-appointment-modal"><i class="fa-regular fa-calendar-check"></i> Book Appointment</button>
            
            <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>
