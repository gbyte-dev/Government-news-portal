<link rel="stylesheet" href="<?php echo base_url('assets/css/details.css'); ?>">
<div class="details-container">
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
    
      <h2 style="color: #2b6cb0; margin-top: 0; margin-bottom: 1.5rem;">Sent Job Alert</h2>
      
      <form id="contactForm" method="POST" action="<?= base_url('update-jobs'); ?>">
        <div style="margin-bottom: 1.5rem;">
          <label for="name" style="display: block; margin-bottom: 0.5rem; color: #4a5568; font-weight: 500;">Job Title</label>
          <input type="text" id="title" name="title" 
                 style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 4px; font-size: 1rem;">
        </div>
        <div style="margin-bottom: 1.5rem;">
          <label for="name" style="display: block; margin-bottom: 0.5rem; color: #4a5568; font-weight: 500;">Job Url</label>
          <input type="text" id="url" name="url"  
                 style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 4px; font-size: 1rem;">
        </div>
        
        <button type="submit" 
                style="background: #4299e1; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 4px; font-size: 1rem; cursor: pointer; transition: background 0.3s;">
          Submit
        </button>
      </form>
    </div>
</div>