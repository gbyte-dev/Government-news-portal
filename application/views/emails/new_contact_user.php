<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank you for contacting us</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #1a365d; color: white; padding: 15px; text-align: center; }
        .content { padding: 20px; background-color: #f9f9f9; }
        .footer { margin-top: 20px; padding: 10px; text-align: center; font-size: 12px; color: #777; }
        .details { background-color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .btn { display: inline-block; padding: 10px 20px; background-color: #1a365d; color: white !important; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank you for contacting us</h1>
        </div>
        
        <div class="content">
            <p>Dear <?= $name ?>,</p>
            
            <p>We have received your message regarding <strong><?= $subject ?></strong> and our team will get back to you within 24-48 hours.</p>
            
            <div class="details">
                <p><strong>Your Message:</strong></p>
                <div style="background-color: #f0f0f0; padding: 10px; border-left: 3px solid #1a365d;">
                    <?= $message ?>
                </div>
            </div>
            
            <p>For immediate assistance, you may also:</p>
            <ul>
                <li>Call our helpline: +91 9876543210</li>
                <li>Visit our <a href="<?= base_url('/') ?>">FAQ page</a></li>
            </ul>
            
            <a href="<?= base_url('/') ?>" class="btn">Visit Our Website</a>
        </div>
        
        <div class="footer">
            <p>© <?= $current_year ?> SarkariJobs. All rights reserved.</p>
          
        </div>
    </div>
</body>
</html>