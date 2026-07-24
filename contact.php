<?php
$page_title = "Contact & Location | Bonas Medicals";
$current_page = "contact";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Header -->
<section style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-dark)); color:#fff; padding: 4rem 0;">
    <div class="container text-center">
        <span class="badge-pill">24/7 Access</span>
        <h1 style="color:#fff; font-size: 3rem; margin-bottom:0.5rem;">Contact Bonas Medicals</h1>
        <p style="color:#d1d5db; max-width:650px; margin: 0 auto;">Reach out to our patient care desk or contact our emergency unit immediately.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div style="display:grid; grid-template-columns: 1fr 1.2fr; gap:3rem;">
            
            <!-- Contact Info Sidebar -->
            <div>
                <div class="form-card" style="margin-bottom: 2rem;">
                    <h3 style="font-size:1.4rem; margin-bottom:1.25rem;"><i class="fa-solid fa-hospital text-teal"></i> Hospital Contact Desk</h3>
                    
                    <div style="display:flex; gap:1rem; margin-bottom:1.5rem;">
                        <div class="quick-icon" style="background:var(--teal-light); color:var(--teal-accent);"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <strong>Physical Address</strong>
                            <p style="color:var(--text-muted); font-size:0.95rem;">Hospital Road, Upper Hill<br>P.O. Box 40100, Nairobi, Kenya</p>
                        </div>
                    </div>

                    <div style="display:flex; gap:1rem; margin-bottom:1.5rem;">
                        <div class="quick-icon" style="background:rgba(230, 57, 70, 0.1); color:var(--emergency-red);"><i class="fa-solid fa-phone-volume"></i></div>
                        <div>
                            <strong>24/7 Emergency Line</strong>
                            <p style="color:var(--emergency-red); font-weight:700; font-size:1.1rem;">+254 700 000 999</p>
                            <p style="color:var(--text-muted); font-size:0.85rem;">For fractures, acute spinal injuries & ambulance dispatch</p>
                        </div>
                    </div>

                    <div style="display:flex; gap:1rem; margin-bottom:1.5rem;">
                        <div class="quick-icon" style="background:var(--teal-light); color:var(--teal-accent);"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <strong>Email Inquiries</strong>
                            <p style="color:var(--text-muted); font-size:0.95rem;">info@bonasmedicals.org<br>appointments@bonasmedicals.org</p>
                        </div>
                    </div>

                    <div style="display:flex; gap:1rem;">
                        <div class="quick-icon" style="background:var(--teal-light); color:var(--teal-accent);"><i class="fa-regular fa-clock"></i></div>
                        <div>
                            <strong>OPD Working Hours</strong>
                            <p style="color:var(--text-muted); font-size:0.95rem;">Mon - Fri: 8:00 AM - 7:00 PM<br>Sat: 8:00 AM - 4:00 PM<br>Emergency: 24 Hours / 7 Days</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- General Inquiry Form -->
            <div>
                <div class="form-card">
                    <h3 style="font-size:1.4rem; margin-bottom:1.5rem;"><i class="fa-solid fa-paper-plane text-teal"></i> Send an Inquiry</h3>
                    <form action="process-appointment.php" method="POST">
                        <input type="hidden" name="form_type" value="contact_inquiry">
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label class="form-label" for="contact_name">Your Name *</label>
                            <input type="text" id="contact_name" name="patient_name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label class="form-label" for="contact_email">Email Address *</label>
                            <input type="email" id="contact_email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label class="form-label" for="contact_subject">Subject</label>
                            <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="e.g. Joint Consultation Fee Inquiry">
                        </div>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label class="form-label" for="contact_message">Your Message *</label>
                            <textarea id="contact_message" name="notes" class="form-control" placeholder="Type your inquiry here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
