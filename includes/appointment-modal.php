<!-- Quick Appointment Pop-Up Modal -->
<div class="modal-backdrop" id="appointmentModal">
    <div class="modal-container">
        <div class="modal-header">
            <h3><i class="fa-regular fa-calendar-check text-teal"></i> Fast Appointment Booking</h3>
            <button class="modal-close" aria-label="Close Modal">&times;</button>
        </div>
        <div class="modal-body">
            <form action="process-appointment.php" method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="modal_patient_name">Full Name *</label>
                        <input type="text" id="modal_patient_name" name="patient_name" class="form-control" placeholder="e.g. John Doe" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="modal_phone">Phone Number *</label>
                        <input type="tel" id="modal_phone" name="phone" class="form-control" placeholder="+254 7XX XXX XXX" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="modal_specialty">Select Orthopedic Specialty *</label>
                        <select id="modal_specialty" name="specialty" class="form-control" required>
                            <option value="">-- Choose Speciality --</option>
                            <option value="Joint Replacement">Total Joint Replacement (Knee / Hip)</option>
                            <option value="Spine Surgery">Spine & Scoliosis Surgery</option>
                            <option value="Sports Medicine">Sports Medicine & Arthroscopy</option>
                            <option value="Trauma Care">Fracture & Trauma Surgery</option>
                            <option value="Pediatric Orthopedics">Pediatric Orthopedics</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="modal_date">Preferred Date *</label>
                        <input type="date" id="modal_date" name="preferred_date" class="form-control" required>
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label" for="modal_notes">Brief Medical Symptoms or Notes</label>
                        <textarea id="modal_notes" name="notes" class="form-control" placeholder="Describe joint pain, injury duration, or past diagnostic results..."></textarea>
                    </div>
                </div>

                <div style="margin-top: 1.5rem; text-align: right;">
                    <button type="button" class="btn btn-outline modal-close">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa-paper-plane"></i> Submit Reservation</button>
                </div>
            </form>
        </div>
    </div>
</div>
