<?php
$page_title = "Orthopedic Services & Procedures | Bonas Medicals";
$current_page = "services";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Header Hero -->
<section style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-dark)); color:#fff; padding: 4.5rem 0;">
    <div class="container text-center">
        <span class="badge-pill">Clinical Specialties</span>
        <h1 style="color:#fff; font-size: 3.2rem; margin-bottom:0.5rem;">Orthopedic Procedures & Care</h1>
        <p style="color:#d1d5db; max-width:700px; margin: 0 auto; font-size:1.15rem;">Explore our comprehensive range of sub-specialized orthopedic, spinal, and reconstructive surgical services.</p>
    </div>
</section>

<!-- Detailed Services Section -->
<section class="section-padding">
    <div class="container">
        
        <!-- Joint Replacement -->
        <div id="joint" class="form-card" style="margin-bottom: 3.5rem; display:grid; grid-template-columns: 1fr 1.4fr; gap:3rem; align-items:center;">
            <div style="border-radius: var(--radius-md); overflow:hidden; height:100%; min-height:280px;">
                <img src="assets/images/joint-replacement.jpg" alt="Joint Replacement" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <div>
                <span class="badge-pill">Center of Excellence</span>
                <h2 style="font-size:2.2rem; margin-bottom:1rem; color:var(--primary-navy);">Total Joint Replacement (Knee & Hip)</h2>
                <p style="color:var(--text-muted); margin-bottom:1.25rem; line-height:1.7;">We specialize in primary and revision joint replacement surgeries. Utilizing computer navigation and tissue-sparing techniques, our patients experience significantly reduced post-operative pain and accelerated recovery times.</p>
                <ul style="margin-bottom:1.75rem; color:var(--text-dark);">
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> Minimally Invasive Total Knee Arthroplasty (TKA)</li>
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> Direct Anterior Approach Total Hip Replacement</li>
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> Custom Patient-Specific Implant Alignment</li>
                </ul>
                <button class="btn btn-primary open-appointment-modal"><i class="fa-regular fa-calendar-check"></i> Schedule Joint Evaluation</button>
            </div>
        </div>

        <!-- Spine Care -->
        <div id="spine" class="form-card" style="margin-bottom: 3.5rem; display:grid; grid-template-columns: 1.4fr 1fr; gap:3rem; align-items:center;">
            <div>
                <span class="badge-pill">Spinal Care Clinic</span>
                <h2 style="font-size:2.2rem; margin-bottom:1rem; color:var(--primary-navy);">Spine Care & Deformity Correction</h2>
                <p style="color:var(--text-muted); margin-bottom:1.25rem; line-height:1.7;">Our dedicated spine surgery team offers non-surgical therapies alongside state-of-the-art microsurgical and endoscopic spine procedures for chronic disc disease, stenosis, and spinal alignment disorders.</p>
                <ul style="margin-bottom:1.75rem; color:var(--text-dark);">
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> Microdiscectomy & Lumbar Decompression</li>
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> Cervical Artificial Disc Replacement</li>
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> Scoliosis & Complex Spinal Fusion Correction</li>
                </ul>
                <button class="btn btn-primary open-appointment-modal"><i class="fa-regular fa-calendar-check"></i> Book Spine Consultation</button>
            </div>
            <div style="border-radius: var(--radius-md); overflow:hidden; height:100%; min-height:280px;">
                <img src="assets/images/spine-surgery.jpg" alt="Spine Surgery" style="width:100%; height:100%; object-fit:cover;">
            </div>
        </div>

        <!-- Sports Medicine -->
        <div id="sports" class="form-card" style="display:grid; grid-template-columns: 1fr 1.4fr; gap:3rem; align-items:center;">
            <div style="border-radius: var(--radius-md); overflow:hidden; height:100%; min-height:280px;">
                <img src="assets/images/sports-medicine.jpg" alt="Sports Injury Care" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <div>
                <span class="badge-pill">Athlete Recovery</span>
                <h2 style="font-size:2.2rem; margin-bottom:1rem; color:var(--primary-navy);">Sports Medicine & Keyhole Arthroscopy</h2>
                <p style="color:var(--text-muted); margin-bottom:1.25rem; line-height:1.7;">From professional athletes to active individuals, our sports medicine division focuses on rapid recovery from ligament, tendon, and joint capsule injuries using advanced arthroscopic surgery.</p>
                <ul style="margin-bottom:1.75rem; color:var(--text-dark);">
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> ACL / PCL Knee Ligament Reconstruction</li>
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> Rotator Cuff & Shoulder Instability Repair</li>
                    <li style="margin-bottom:0.6rem;"><i class="fa-solid fa-circle-check text-teal"></i> Platelet-Rich Plasma (PRP) & Regenerative Therapy</li>
                </ul>
                <button class="btn btn-primary open-appointment-modal"><i class="fa-regular fa-calendar-check"></i> Book Sports Injury Assessment</button>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
