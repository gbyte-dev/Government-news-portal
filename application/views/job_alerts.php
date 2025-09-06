<link rel="stylesheet" href="<?php echo base_url('assets/css/details.css'); ?>">
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<style>
    .detail-containers {
    max-width: 1200px;
    width: 400px;
    margin: 0 auto;
    justify-content: center;
    display: table;
    background: white;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    animation: fadeInUp 0.8s ease-out;
}

    .form-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 100%;
      max-width: 500px;
      text-align: left;
      justify-content: center;
      align-items: center;
    } 
.coming-soon-box {
    background: #fff5cc;
    border: 2px dashed #f1c40f;
    padding: 40px;
    margin: 30px auto;
    text-align: center;
    border-radius: 10px;
    color: #7a5b00;
}
.coming-soon-box h2 {
    font-size: 2rem;
    margin-bottom: 10px;
}
</style>
<div class="detail-containers">
    <!-- <div class="coming-soon-box">
        <div class="form-container">
        <h2 class="text-center mb-4">Sign Up</h2>
        <form method="POST" action="<?= base_url('job_alerts/submit'); ?>">
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" id="email"  required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div> -->

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
    
      <h2 style="color: #2b6cb0; margin-top: 0; margin-bottom: 1.5rem;">Sign Up</h2>
      
      <form id="contactForm" method="POST" action="<?= base_url('job_alerts/submit'); ?>">
        <div style="margin-bottom: 1.5rem;">
          <label for="name" style="display: block; margin-bottom: 0.5rem; color: #4a5568; font-weight: 500;">Email*</label>
          <input type="text" id="email" name="email" required placeholder="Enter the your Email" 
                 style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 4px; font-size: 1rem;">
        </div>
         <label for="name" style="display: block; margin-bottom: 0.5rem; color: #e9851f; font-weight: 500;">Enter your email for regular job updates*</label>
        <button type="submit" 
                style="background: #4299e1; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 4px; font-size: 1rem; cursor: pointer; transition: background 0.3s;">
          Submit
        </button>
      </form>
    </div>

</div>


 
