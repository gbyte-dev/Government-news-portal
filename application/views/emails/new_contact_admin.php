<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
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
            <h1>New Contact Form Submission</h1>
        </div>
        
        <div class="content">
            <p>You have received a new contact request:</p>
            
            <div class="details">
                <p><strong>Name:</strong> <?= $name ?></p>
                <p><strong>Email:</strong> <a href="mailto:<?= $email ?>"><?= $email ?></a></p>
                <p><strong>Subject:</strong> <?= $subject ?></p>
                <p><strong>Message:</strong></p>
                <div style="background-color: #f0f0f0; padding: 10px; border-left: 3px solid #1a365d;">
                    <?= $message ?>
                </div>
            </div>
            
            <a href="mailto:<?= $email ?>?subject=Re: <?= rawurlencode($subject) ?>" class="btn">Reply to User</a>
        </div>
        
        <div class="footer">
            <p>This email was generated automatically from the contact form on SarkariJobs.</p>
            <p>© <?= $current_year ?> SarkariJobs. All rights reserved.</p>
        </div>
    </div>
</body>
</html>