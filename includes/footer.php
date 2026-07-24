<!-- Newsletter Subscription Banner (Windand Style) -->
<div class="container">
    <div class="footer-newsletter-box">
        <div class="newsletter-text">
            <h3>Subscribe to Health Insights & Alerts</h3>
            <p>Get orthopedic wellness tips, joint care advice, and specialist availability updates directly in your inbox.</p>
        </div>
        <form class="newsletter-form" onsubmit="alert('Thank you for subscribing to Bonas Medicals newsletter!'); return false;">
            <input type="email" class="newsletter-input" placeholder="Enter your email address..." required>
            <button type="submit" class="newsletter-btn"><i class="fa-paper-plane"></i> Subscribe Now</button>
        </form>
    </div>
</div>

<!-- Main Footer (Windand Developers Inspired Design Style) -->
<footer class="main-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Column 1: Brand & Socials -->
            <div class="footer-brand">
                <a href="index.php" class="brand-logo" style="margin-bottom: 1.25rem;">
                    <div class="brand-icon">
                        <i class="fa-solid fa-bone"></i>
                    </div>
                    <div class="brand-text">
                        <h1 style="color:#ffffff; font-size:1.5rem;">BONAS <span style="color:var(--teal-accent);">Medicals</span></h1>
                        <span style="color:#94a3b8; font-size:0.75rem;">Orthopedic Hospital</span>
                    </div>
                </a>
                <p>Bonas Medicals is a leading center of excellence in joint reconstruction, spine rehabilitation, sports trauma, and emergency musculoskeletal care.</p>
                
                <div class="social-header-label">WE ARE SOCIAL</div>
                <div class="footer-socials">
                    <a href="#" class="social-icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-icon" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-icon" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Column 2: Orthopedic Services -->
            <div>
                <h4 class="footer-heading">Specialty Services</h4>
                <ul class="footer-links">
                    <li><a href="services.php#joint"><i class="fa-solid fa-angle-right"></i> Total Knee & Hip Replacement</a></li>
                    <li><a href="services.php#spine"><i class="fa-solid fa-angle-right"></i> Minimal Access Spine Surgery</a></li>
                    <li><a href="services.php#sports"><i class="fa-solid fa-angle-right"></i> Arthroscopic Knee & Shoulder Repair</a></li>
                    <li><a href="services.php#trauma"><i class="fa-solid fa-angle-right"></i> Complex Fracture & Trauma Unit</a></li>
                    <li><a href="services.php#pediatric"><i class="fa-solid fa-angle-right"></i> Pediatric Orthopedic Care</a></li>
                    <li><a href="services.php#rehab"><i class="fa-solid fa-angle-right"></i> Physical Therapy & Rehab</a></li>
                </ul>
            </div>

            <!-- Column 3: Patient Resources -->
            <div>
                <h4 class="footer-heading">Patient Care</h4>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fa-solid fa-angle-right"></i> Home Portal</a></li>
                    <li><a href="doctors.php"><i class="fa-solid fa-angle-right"></i> Find a Surgeon</a></li>
                    <li><a href="appointment.php"><i class="fa-solid fa-angle-right"></i> Book Appointment</a></li>
                    <li><a href="contact.php"><i class="fa-solid fa-angle-right"></i> Emergency Hotline</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Patient Rights & Responsibilities</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Insurance & Billing Portal</a></li>
                </ul>
            </div>

            <!-- Column 4: Hospital Contact Desks & Branches -->
            <div>
                <h4 class="footer-heading">Hospital Location & Desks</h4>
                
                <div class="footer-contact-block">
                    <strong>Main Emergency Desk (24/7):</strong>
                    <p><i class="fa-solid fa-phone text-teal"></i> +254 700 000 999</p>
                </div>

                <div class="footer-contact-block">
                    <strong>Appointments & Consultations:</strong>
                    <p><i class="fa-solid fa-phone text-teal"></i> +254 711 000 888</p>
                </div>

                <div class="footer-contact-block">
                    <strong>Physical Address:</strong>
                    <p><i class="fa-solid fa-location-dot text-teal"></i> Hospital Road, Upper Hill, Nairobi, Kenya</p>
                </div>

                <div class="footer-contact-block">
                    <strong>Email Enquiries:</strong>
                    <p><i class="fa-solid fa-envelope text-teal"></i> care@bonasmedicals.org</p>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar (Windand Style) -->
        <div class="footer-bottom">
            <div>
                <p>&copy; <?php echo date('Y'); ?> Bonas Medicals. All Rights Reserved.</p>
            </div>
            <div class="footer-legal-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Patient Rights</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<!-- Include Quick Appointment Modal -->
<?php include 'includes/appointment-modal.php'; ?>

<!-- Main JavaScript File -->
<script src="assets/js/main.js"></script>
</body>
</html>
