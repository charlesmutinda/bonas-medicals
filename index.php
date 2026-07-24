<?php
$page_title = "Bonas Medicals | Center for Advanced Orthopedic Care";
$current_page = "home";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section with Background Banner Image (Nairobi Hospital Style) -->
<section class="hero-section">
    <div class="container hero-grid">
        <!-- Hero Text Content -->
        <div class="hero-content">
            <span class="badge-pill" style="background:rgba(0, 168, 150, 0.2); color:#52b788;"><i class="fa-solid fa-award"></i> Premier Orthopedic Specialty Center</span>
            <h1>Restoring Mobility, <span>Transforming Lives.</span></h1>
            <p>Bonas Medicals is a leading orthopedic sub-specialty hospital dedicated to total joint replacements, minimally invasive spine surgery, sports injury rehabilitation, and 24-hour trauma emergency care.</p>
            <div class="hero-buttons">
                <button class="btn btn-primary open-appointment-modal"><i class="fa-regular fa-calendar-check"></i> Book Consultation</button>
                <a href="services.php" class="btn btn-outline-light"><i class="fa-solid fa-stethoscope"></i> Explore Clinical Specialties</a>
            </div>
        </div>

        <!-- Hero Featured Card with Doctor Image -->
        <div class="hero-doctor-card">
            <div class="hero-doctor-img">
                <img src="assets/images/hero-doctor.jpg" alt="Orthopedic Consultation">
                <span class="hero-doctor-badge">Expert Care</span>
            </div>
            <div class="hero-doctor-body">
                <h3>Sub-Specialized Orthopedic Faculty</h3>
                <p>Our fellowship-trained surgeons utilize cutting-edge robotic alignment and tissue-preserving surgical techniques for faster patient recovery.</p>
                <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid var(--border-color); padding-top:1rem;">
                    <div>
                        <strong style="color:var(--primary-navy); font-size:1.1rem;">24/7 Trauma Unit</strong>
                        <div style="font-size:0.85rem; color:var(--text-muted);">Direct Ambulance Dispatch</div>
                    </div>
                    <a href="tel:+254700000999" class="btn btn-emergency" style="padding:0.5rem 1rem; font-size:0.85rem;"><i class="fa-solid fa-phone"></i> Call Emergency</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating Quick Action Strip (Nairobi Hospital Style) -->
<div class="container">
    <div class="quick-action-strip">
        <div class="quick-action-grid">
            <!-- Item 1 -->
            <a href="doctors.php" class="quick-item">
                <div class="quick-icon"><i class="fa-solid fa-user-doctor"></i></div>
                <div class="quick-content">
                    <h4>Find a Specialist</h4>
                    <p>Search orthopedic surgeons & clinics</p>
                </div>
            </a>
            <!-- Item 2 -->
            <div class="quick-item open-appointment-modal" style="cursor:pointer;">
                <div class="quick-icon" style="background:var(--teal-accent);"><i class="fa-regular fa-calendar-check"></i></div>
                <div class="quick-content">
                    <h4>Book Visit Online</h4>
                    <p>Instant consultation slot reservation</p>
                </div>
            </div>
            <!-- Item 3 -->
            <a href="tel:+254700000999" class="quick-item" style="border-color:rgba(230, 57, 70, 0.3);">
                <div class="quick-icon" style="background:var(--emergency-red);"><i class="fa-solid fa-phone-volume"></i></div>
                <div class="quick-content">
                    <h4 style="color:var(--emergency-red);">24/7 Fracture Emergency</h4>
                    <p style="font-weight:600; color:var(--text-dark);">Hotline: +254 700 000 999</p>
                </div>
            </a>
            <!-- Item 4 -->
            <a href="services.php#rehab" class="quick-item">
                <div class="quick-icon"><i class="fa-solid fa-dumbbell"></i></div>
                <div class="quick-content">
                    <h4>Physical Therapy</h4>
                    <p>Personalized joint & post-op rehab</p>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Key Hospital Statistics -->
<section class="section-padding">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">15,000+</div>
                <div class="stat-label">Successful Joint Replacements</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">25+</div>
                <div class="stat-label">Orthopedic Specialists & Faculty</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">99.2%</div>
                <div class="stat-label">Patient Satisfaction Score</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">24 / 7</div>
                <div class="stat-label">Emergency & Ambulance Coverage</div>
            </div>
        </div>
    </div>
</section>

<!-- Clinical Centers of Excellence Grid -->
<section class="section-padding" style="background:#ffffff;">
    <div class="container">
        <div class="text-center">
            <span class="badge-pill">Clinical Centers of Excellence</span>
            <h2 class="section-title">Specialized Orthopedic Services</h2>
            <p class="section-subtitle">We treat complex musculoskeletal conditions using evidence-based surgical techniques and advanced rehabilitation protocols.</p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-image">
                    <img src="assets/images/joint-replacement.jpg" alt="Total Joint Replacement">
                    <div class="service-icon-floating"><i class="fa-solid fa-bone"></i></div>
                </div>
                <div class="service-body">
                    <h3 class="service-title">Total Joint Replacement</h3>
                    <p class="service-desc">Computer-assisted primary & revision knee and hip replacements engineered to eliminate joint pain and restore long-term mobility.</p>
                    <a href="services.php#joint" class="service-link">Read Procedure Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-image">
                    <img src="assets/images/spine-surgery.jpg" alt="Spine Care & Surgery">
                    <div class="service-icon-floating"><i class="fa-solid fa-align-center"></i></div>
                </div>
                <div class="service-body">
                    <h3 class="service-title">Spine Care & Deformity Surgery</h3>
                    <p class="service-desc">Minimally invasive keyhole procedures and microdiscectomy for herniated discs, spinal stenosis, scoliosis, and back pain.</p>
                    <a href="services.php#spine" class="service-link">Read Procedure Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-image">
                    <img src="assets/images/sports-medicine.jpg" alt="Sports Medicine">
                    <div class="service-icon-floating"><i class="fa-solid fa-person-running"></i></div>
                </div>
                <div class="service-body">
                    <h3 class="service-title">Sports Medicine & Arthroscopy</h3>
                    <p class="service-desc">Keyhole reconstruction for ACL/MCL ligament tears, rotator cuff tears, meniscus repairs, and accelerated athlete rehabilitation.</p>
                    <a href="services.php#sports" class="service-link">Read Procedure Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Surgeons Directory Preview -->
<section class="section-padding">
    <div class="container">
        <div class="text-center">
            <span class="badge-pill">World-Class Faculty</span>
            <h2 class="section-title">Meet Our Lead Orthopedic Specialists</h2>
            <p class="section-subtitle">Board-certified fellowship surgeons dedicated to individual patient care and optimal surgical outcomes.</p>
        </div>

        <div class="doctors-grid">
            <!-- Doctor 1 -->
            <div class="doctor-card">
                <div class="doctor-photo">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=500&q=80" alt="Dr. Bonaventure">
                </div>
                <div class="doctor-info">
                    <div class="doctor-specialty">Chief Joint Replacement Specialist</div>
                    <h3 class="doctor-name">Dr. Bonaventure K.</h3>
                    <p class="doctor-meta">MBChB, MMed Ortho (UK) • 18+ Yrs Exp</p>
                    <button class="btn btn-outline-light open-appointment-modal" style="width:100%; color:var(--teal-accent); border-color:var(--teal-accent);"><i class="fa-regular fa-calendar"></i> Book Visit</button>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="doctor-card">
                <div class="doctor-photo">
                    <img src="https://images.unsplash.com/photo-1594824813566-888557790665?auto=format&fit=crop&w=500&q=80" alt="Dr. Sarah Jenkins">
                </div>
                <div class="doctor-info">
                    <div class="doctor-specialty">Spine & Scoliosis Specialist</div>
                    <h3 class="doctor-name">Dr. Sarah Jenkins</h3>
                    <p class="doctor-meta">MD, Fellowship Spinal Surgery • 14+ Yrs Exp</p>
                    <button class="btn btn-outline-light open-appointment-modal" style="width:100%; color:var(--teal-accent); border-color:var(--teal-accent);"><i class="fa-regular fa-calendar"></i> Book Visit</button>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="doctor-card">
                <div class="doctor-photo">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=500&q=80" alt="Dr. Michael Owino">
                </div>
                <div class="doctor-info">
                    <div class="doctor-specialty">Sports Medicine & Arthroscopy</div>
                    <h3 class="doctor-name">Dr. Michael Owino</h3>
                    <p class="doctor-meta">MBChB, Dip Sports Med • 12+ Yrs Exp</p>
                    <button class="btn btn-outline-light open-appointment-modal" style="width:100%; color:var(--teal-accent); border-color:var(--teal-accent);"><i class="fa-regular fa-calendar"></i> Book Visit</button>
                </div>
            </div>
        </div>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="doctors.php" class="btn btn-navy"><i class="fa-solid fa-user-group"></i> View All Surgeons & Specialty Clinics</a>
        </div>
    </div>
</section>

<!-- Emergency Banner -->
<section class="container" style="margin-bottom: 5rem;">
    <div class="emergency-banner">
        <div class="emergency-banner-text">
            <h3><i class="fa-solid fa-truck-medical"></i> Need Immediate Trauma Assistance?</h3>
            <p>Our 24-Hour Emergency & Accident Center is fully equipped for immediate musculoskeletal trauma care.</p>
        </div>
        <div>
            <a href="tel:+254700000999" class="btn btn-navy" style="background:#ffffff; color:var(--emergency-red); font-size:1.1rem;">
                <i class="fa-solid fa-phone-volume"></i> Call Hotline: +254 700 000 999
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
