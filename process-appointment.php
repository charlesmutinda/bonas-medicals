<?php
// Process Appointment & Inquiry Submission
$page_title = "Booking Confirmation | Bonas Medicals";
$current_page = "appointment";

include 'includes/header.php';
include 'includes/navbar.php';

// Helper to sanitize input data
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$is_submitted = ($_SERVER["REQUEST_METHOD"] == "POST");
$patient_name = isset($_POST['patient_name']) ? clean_input($_POST['patient_name']) : '';
$email        = isset($_POST['email']) ? clean_input($_POST['email']) : '';
$phone        = isset($_POST['phone']) ? clean_input($_POST['phone']) : '';
$specialty    = isset($_POST['specialty']) ? clean_input($_POST['specialty']) : 'General Orthopedics';
$doctor_pref  = isset($_POST['doctor_preference']) ? clean_input($_POST['doctor_preference']) : 'First Available Specialist';
$pref_date    = isset($_POST['preferred_date']) ? clean_input($_POST['preferred_date']) : date('Y-m-d', strtotime('+1 day'));
$pref_time    = isset($_POST['preferred_time']) ? clean_input($_POST['preferred_time']) : 'Morning (08:30 AM - 11:30 AM)';
$notes        = isset($_POST['notes']) ? clean_input($_POST['notes']) : '';

// Generate unique tracking reference number
$booking_ref  = "BM-" . strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));
?>

<section class="section-padding">
    <div class="container" style="max-width:750px;">
        <?php if ($is_submitted && !empty($patient_name)): ?>
            <div class="form-card text-center" style="border-top: 6px solid var(--teal-accent);">
                <div style="width:80px; height:80px; background:var(--teal-light); color:var(--teal-accent); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:2.5rem; margin: 0 auto 1.5rem auto;">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                
                <span class="badge-pill">Reservation Confirmed</span>
                <h2 class="section-title" style="font-size:2rem; margin-bottom:0.5rem;">Thank You, <?php echo $patient_name; ?>!</h2>
                <p style="color:var(--text-muted); font-size:1.05rem; margin-bottom:2rem;">Your appointment request has been successfully registered at Bonas Medicals. Our desk team will contact you shortly via phone to confirm doctor availability.</p>

                <div style="background:var(--slate-bg); border-radius:var(--radius-md); padding:1.5rem; text-align:left; margin-bottom:2rem;">
                    <h4 style="margin-bottom:1rem; color:var(--primary-navy); border-bottom:1px solid var(--border-color); padding-bottom:0.5rem;">
                        <i class="fa-solid fa-receipt text-teal"></i> Booking Summary
                    </h4>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; font-size:0.95rem;">
                        <div><strong>Reference Number:</strong> <span style="color:var(--teal-accent); font-weight:700;"><?php echo $booking_ref; ?></span></div>
                        <div><strong>Specialty Clinic:</strong> <?php echo $specialty; ?></div>
                        <div><strong>Doctor Preference:</strong> <?php echo $doctor_pref; ?></div>
                        <div><strong>Preferred Date:</strong> <?php echo $pref_date; ?></div>
                        <div><strong>Time Slot:</strong> <?php echo $pref_time; ?></div>
                        <div><strong>Contact Phone:</strong> <?php echo $phone; ?></div>
                    </div>
                </div>

                <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                    <a href="index.php" class="btn btn-navy"><i class="fa-solid fa-house"></i> Return to Home</a>
                    <a href="javascript:window.print()" class="btn btn-outline"><i class="fa-solid fa-print"></i> Print Confirmation</a>
                </div>
            </div>
        <?php else: ?>
            <div class="form-card text-center">
                <i class="fa-solid fa-triangle-exclamation" style="font-size:3rem; color:var(--emergency-red); margin-bottom:1rem;"></i>
                <h2>No Submission Received</h2>
                <p style="color:var(--text-muted); margin-bottom:1.5rem;">Please fill out the appointment form to schedule your consultation.</p>
                <a href="appointment.php" class="btn btn-primary">Go to Appointment Form</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
