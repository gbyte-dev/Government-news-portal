<div class="container">
  <!-- Header Section -->
  <div class="contact-header" style="text-align: center; margin-bottom: 3rem;">
    <div style="font-size: 3rem; margin-bottom: 1rem;">📨</div>
    <h1 style="font-size: 2.5rem; margin-bottom: 1rem; color: #1a365d;">Contact Us</h1>
    <p style="max-width: 700px; margin: 0 auto; color: #4a5568; line-height: 1.6; font-size: 1.1rem;">
      Have questions about recruitment? Need clarification on exam patterns? 
      Reach out to our team - we typically respond within 24 hours.
    </p>
  </div>

  <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
    <!-- Contact Form -->
	<div class="contact-form" style="background: white; border-radius: 8px; padding: 2rem; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
		<!-- Add this above your form -->
	<div id="form-response" 
		 style="margin-bottom: 20px;
				padding: 12px 16px;
				border-radius: 6px;
				display: none;">
		<p id="response-message" style="margin: 0;"></p>
	</div>
	<!-- End Responce div -->
	
      <h2 style="color: #2b6cb0; margin-top: 0; margin-bottom: 1.5rem;">Send us a message</h2>
      
      <form id="contactForm">
        <div style="margin-bottom: 1.5rem;">
          <label for="name" style="display: block; margin-bottom: 0.5rem; color: #4a5568; font-weight: 500;">Full Name*</label>
          <input type="text" id="name" name="name" required 
                 style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 4px; font-size: 1rem;">
        </div>
        
        <div style="margin-bottom: 1.5rem;">
          <label for="email" style="display: block; margin-bottom: 0.5rem; color: #4a5568; font-weight: 500;">Email*</label>
          <input type="email" id="email" name="email" required 
                 style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 4px; font-size: 1rem;">
        </div>
        
        <div style="margin-bottom: 1.5rem;">
          <label for="subject" style="display: block; margin-bottom: 0.5rem; color: #4a5568; font-weight: 500;">Subject*</label>
          <select id="subject" name="subject" required 
                  style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 4px; font-size: 1rem; color: #4a5568;">
            <option value="" disabled selected>Select an option</option>
            <option value="recruitment">Recruitment Query</option>
            <option value="exams">Exam Pattern</option>
            <option value="application">Application Status</option>
            <option value="other">Other</option>
          </select>
        </div>
        
        <div style="margin-bottom: 1.5rem;">
          <label for="message" style="display: block; margin-bottom: 0.5rem; color: #4a5568; font-weight: 500;">Message*</label>
          <textarea id="message" name="message" rows="5" required 
                    style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 4px; font-size: 1rem;"></textarea>
        </div>
        
        <button type="submit" 
                style="background: #4299e1; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 4px; font-size: 1rem; cursor: pointer; transition: background 0.3s;">
          Send Message
        </button>
      </form>
    </div>

    <!-- Contact Info -->
    <div class="contact-info" style="background: #f8f9fa; border-radius: 8px; padding: 2rem;">
      <h2 style="color: #2b6cb0; margin-top: 0; margin-bottom: 1.5rem;">Other ways to reach us</h2>
      
      <div style="margin-bottom: 2rem;">
        <h3 style="color: #2d3748; margin-bottom: 1rem; font-size: 1.25rem;">📞 Phone Support</h3>
        <p style="color: #4a5568; margin: 0.5rem 0;">
          <strong>Helpline:</strong> <a href="tel:+91-9876543210" style="color: #2b6cb0; text-decoration: none;">+91 12345 67890</a>
        </p>
        <p style="color: #718096; font-size: 0.9rem;">Monday-Friday, 9AM-6PM IST</p>
      </div>
      
      <div style="margin-bottom: 2rem;">
        <h3 style="color: #2d3748; margin-bottom: 1rem; font-size: 1.25rem;">✉️ Email</h3>
        <p style="color: #4a5568; margin: 0.5rem 0;">
          <strong>General:</strong> <a href="mailto:info@govtdesk.com" style="color: #2b6cb0; text-decoration: none;">info@govtdesk.com</a>
        </p>
      </div>
      
      <div>
        <h3 style="color: #2d3748; margin-bottom: 1rem; font-size: 1.25rem;">🏢 Office Address</h3>
        <p style="color: #4a5568; margin: 0.5rem 0; line-height: 1.6;">
          Recruitment Portal India Pvt. Ltd.<br>
          12th Floor, Tower B<br>
          Cyber City, Gurugram<br>
          Haryana 122002
        </p>
        <a href="#" style="display: inline-block; margin-top: 1rem; color: #2b6cb0; text-decoration: none; font-weight: 500;">
          View on Map →
        </a>
      </div>
    </div>
  </div>

  <!-- FAQ CTA 
  <div style="margin-top: 4rem; text-align: center; background: #f8f9fa; border-radius: 8px; padding: 2rem;">
    <h2 style="color: #2b6cb0; margin-top: 0;">Need immediate help?</h2>
    <p style="color: #4a5568; max-width: 600px; margin: 0 auto 1.5rem; line-height: 1.6;">
      Check our <a href="#" style="color: #2b6cb0; font-weight: 500;">FAQs</a> for quick answers to common questions about applications, exams, and results.
    </p>
    <a href="#" style="display: inline-block; padding: 0.75rem 1.5rem; background: #4299e1; color: white; text-decoration: none; border-radius: 4px;">
      Visit Help Center
    </a>
  </div>-->
</div>

<script>
function showResponse(type, message) {
    const response = document.getElementById('form-response');
    const msg = document.getElementById('response-message');
    
    // Clear previous classes
    response.className = '';
    
    // Set styles based on type
    if(type === 'success') {
        response.style.display = 'block';
        response.style.backgroundColor = '#f0fff4';
        response.style.borderLeft = '4px solid #38a169';
        msg.style.color = '#2f855a';
    } else {
        response.style.display = 'block';
        response.style.backgroundColor = '#fff5f5';
        response.style.borderLeft = '4px solid #e53e3e';
        msg.style.color = '#c53030';
    }
    
    msg.textContent = message;
    
    // Auto-hide after 5 seconds (optional)
    setTimeout(() => {
        response.style.display = 'none';
    }, 5000);
}

document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.innerHTML = 'Sending...';
    submitBtn.disabled = true;
    
    fetch('<?= base_url("welcome/submit_contact") ?>', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            showResponse('success', data.message);
            form.reset();
        } else {
            showResponse('error', data.message || 'Submission failed');
        }
    })
    .catch(() => {
        showResponse('error', 'Something went wrong. Please try again.');
    })
    .finally(() => {
        submitBtn.innerHTML = originalBtnText;
        submitBtn.disabled = false;
    });
});
</script>
