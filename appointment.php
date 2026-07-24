<?php
$page_title = "Book an Appointment | Bonas Medicals";
$current_page = "appointment";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Header -->
<section style="background: linear-gradient(135deg, var(--primary-navy), var(--primary-dark)); color:#fff; padding: 4rem 0;">
    <div class="container text-center">
        <span class="badge-pill">Patient Registration</span>
        <h1 style="color:#fff; font-size: 3rem; margin-bottom:0.5rem;">Schedule Your Orthopedic Visit</h1>
        <p style="color:#d1d5db; max-width:650px; margin: 0 auto;">Select your preferred date, specialty clinic, and orthopedic surgeon.</p>
    </div>
</section>

<!-- Form Container -->
<section class="section-padding">
    <div class="container" style="max-width: 900px;">
        <div class="form-card">
            <form action="process-appointment.php" method="POST">
                <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--primary-navy);">
                    <i class="fa-solid fa-user-pen text-teal"></i> Patient & Consultation Details
                </h3>

                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="patient_name">Full Name *</label>
                        <input type="text" id="patient_name" name="patient_name" class="form-control" placeholder="e.g. Jane Smith" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="jane@example.com" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Mobile Phone Number *</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+254 7XX XXX XXX" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="specialty">Orthopedic Specialty *</label>
                        <select id="specialty" name="specialty" class="form-control" required>
                            <option value="">-- Choose Clinic --</option>
                            <option value="Joint Replacement">Total Knee & Hip Replacement Clinic</option>
                            <option value="Spine Surgery">Spine & Scoliosis Clinic</option>
                            <option value="Sports Medicine">Sports Injury & Arthroscopy Clinic</option>
                            <option value="Trauma Care">Fracture & Trauma Emergency</option>
                            <option value="Pediatric Orthopedics">Pediatric Orthopedics Clinic</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="doctor_preference">Surgeon Preference (Optional)</label>
                        <select id="doctor_preference" name="doctor_preference" class="form-control">
                            <option value="No Preference">No Preference (First Available Specialist)</option>
                            <option value="Dr. Bonaventure K.">Dr. Bonaventure K. (Joints)</option>
                            <option value="Dr. Sarah Jenkins">Dr. Sarah Jenkins (Spine)</option>
                            <option value="Dr. Michael Owino">Dr. Michael Owino (Sports)</option>
                            <option value="Dr. Claire Mwangi">Dr. Claire Mwangi (Pediatrics)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="preferred_date">Preferred Visit Date *</label>
                        <input type="date" id="preferred_date" name="preferred_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="preferred_time">Preferred Time Slot *</label>
                        <select id="preferred_time" name="preferred_time" class="form-control" required>
                            <option value="">-- Select Time Slot --</option>
                            <option value="Morning (08:30 AM - 11:30 AM)">Morning (08:30 AM - 11:30 AM)</option>
                            <option value="Afternoon (12:00 PM - 03:30 PM)">Afternoon (12:00 PM - 03:30 PM)</option>
                            <option value="Evening (04:00 PM - 07:00 PM)">Evening (04:00 PM - 07:00 PM)</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="notes">Brief Description of Symptoms / Medical History</label>
                        <textarea id="notes" name="notes" class="form-control" placeholder="Please mention duration of joint pain, swelling, previous surgeries, or MRI results..."></textarea>
                    </div>
                </div>

                <div style="margin-top: 2rem; text-align: center;">
                    <button type="submit" class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1.1rem;">
                        <i class="fa-solid fa-paper-plane"></i> Confirm & Book Appointment
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
