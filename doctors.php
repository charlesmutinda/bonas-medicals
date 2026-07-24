<?php
$page_title = "Find an Orthopedic Surgeon | Bonas Medicals";
$current_page = "doctors";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Header Banner -->
<section style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-dark)); color:#fff; padding: 4rem 0;">
    <div class="container text-center">
        <span class="badge-pill">Expert Clinical Faculty</span>
        <h1 style="color:#fff; font-size: 3rem; margin-bottom:0.5rem;">Orthopedic Surgeons & Consultants</h1>
        <p style="color:#d1d5db; max-width:650px; margin: 0 auto;">Select your specialist by sub-specialty or clinic availability.</p>
    </div>
</section>

<!-- Filterable Directory Section -->
<section class="section-padding">
    <div class="container">
        
        <!-- Filter Tabs -->
        <div class="doctor-filter-bar">
            <button class="filter-btn active" data-filter="all">All Specialists</button>
            <button class="filter-btn" data-filter="joint">Joint Replacement</button>
            <button class="filter-btn" data-filter="spine">Spine Surgery</button>
            <button class="filter-btn" data-filter="sports">Sports Medicine</button>
            <button class="filter-btn" data-filter="pediatric">Pediatric Care</button>
        </div>

        <!-- Doctors Cards Grid -->
        <div class="doctors-grid">
            <!-- Doctor 1 -->
            <div class="doctor-card" data-category="joint">
                <div class="doctor-photo">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=500&q=80" alt="Dr. Bonaventure">
                </div>
                <div class="doctor-info">
                    <div class="doctor-specialty">Joint Replacement Specialist</div>
                    <h3 class="doctor-name">Dr. Bonaventure K.</h3>
                    <p class="doctor-meta">MBChB, MMed Ortho (UK) • 18+ Yrs Exp</p>
                    <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:1rem;">Knee & Hip Arthroplasty, Revision Joint Procedures.</p>
                    <button class="btn btn-primary open-appointment-modal" style="width:100%;"><i class="fa-regular fa-calendar"></i> Book Appointment</button>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="doctor-card" data-category="spine">
                <div class="doctor-photo">
                    <img src="https://images.unsplash.com/photo-1594824813566-888557790665?auto=format&fit=crop&w=500&q=80" alt="Dr. Sarah Jenkins">
                </div>
                <div class="doctor-info">
                    <div class="doctor-specialty">Spine & Scoliosis Specialist</div>
                    <h3 class="doctor-name">Dr. Sarah Jenkins</h3>
                    <p class="doctor-meta">MD, Fellowship Spinal Surgery • 14+ Yrs Exp</p>
                    <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:1rem;">Endoscopic Discectomy, Decompression & Spinal Fusion.</p>
                    <button class="btn btn-primary open-appointment-modal" style="width:100%;"><i class="fa-regular fa-calendar"></i> Book Appointment</button>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="doctor-card" data-category="sports">
                <div class="doctor-photo">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=500&q=80" alt="Dr. Michael Owino">
                </div>
                <div class="doctor-info">
                    <div class="doctor-specialty">Sports Medicine & Arthroscopy</div>
                    <h3 class="doctor-name">Dr. Michael Owino</h3>
                    <p class="doctor-meta">MBChB, Dip Sports Med • 12+ Yrs Exp</p>
                    <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:1rem;">ACL Ligament Reconstruction, Rotator Cuff Repair.</p>
                    <button class="btn btn-primary open-appointment-modal" style="width:100%;"><i class="fa-regular fa-calendar"></i> Book Appointment</button>
                </div>
            </div>

            <!-- Doctor 4 -->
            <div class="doctor-card" data-category="pediatric">
                <div class="doctor-photo">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=500&q=80" alt="Dr. Claire Mwangi">
                </div>
                <div class="doctor-info">
                    <div class="doctor-specialty">Pediatric Orthopedic Surgeon</div>
                    <h3 class="doctor-name">Dr. Claire Mwangi</h3>
                    <p class="doctor-meta">MBChB, FC Orth (SA) • 10+ Yrs Exp</p>
                    <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:1rem;">Clubfoot Correction, Limb Lengthening, Pediatric Fractures.</p>
                    <button class="btn btn-primary open-appointment-modal" style="width:100%;"><i class="fa-regular fa-calendar"></i> Book Appointment</button>
                </div>
            </div>

            <!-- Doctor 5 -->
            <div class="doctor-card" data-category="joint">
                <div class="doctor-photo">
                    <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?auto=format&fit=crop&w=500&q=80" alt="Dr. Anthony Vance">
                </div>
                <div class="doctor-info">
                    <div class="doctor-specialty">Hip Reconstruction & Trauma</div>
                    <h3 class="doctor-name">Dr. Anthony Vance</h3>
                    <p class="doctor-meta">MD, FRCS (Tr & Orth) • 16+ Yrs Exp</p>
                    <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:1rem;">Pelvic Fracture Reconstruction, Revision Hip Implant.</p>
                    <button class="btn btn-primary open-appointment-modal" style="width:100%;"><i class="fa-regular fa-calendar"></i> Book Appointment</button>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
