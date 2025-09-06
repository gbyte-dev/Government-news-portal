
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= isset($title) ? $title : 'Govt Desk - Govtdesk' ?></title>

    <!-- Basic Meta -->
    <meta name="description" content="<?= isset($meta_description) ? $meta_description : 'India\'s #1 Sarkari Job Portal. Get latest updates on Government Jobs, Railway, Bank, SSC, UPSC, Defense, Police, Teaching & State-wise jobs. Free job alerts and online form links.' ?>" />
    <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Govtdesk, Govt Jobs, Sarkari Naukri, SSC, UPSC, Railway Jobs, Banking Jobs, Teaching Jobs, Police Jobs, Govtdesk, सरकारी नौकरी' ?>" />
    <meta name="author" content="Govt Desk - Govtdesk" />
    <meta name="robots" content="index, follow" />

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= current_url(); ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="Govt Desk - Govtdesk" />
    <meta property="og:title" content="<?= isset($title) ? $title : 'Govt Desk - Govtdesk' ?>" />
    <meta property="og:description" content="<?= isset($meta_description) ? $meta_description : 'India\'s #1 Sarkari Job Portal. Latest Govt Jobs and Free Online Forms.' ?>" />
    <meta property="og:url" content="<?= current_url(); ?>" />
    <meta property="og:image" content="<?= base_url('assets/img/seo-banner.jpg'); ?>" />
    <meta property="og:image:alt" content="Govt Desk - Govtdesk - India's #1 Govtdesk Portal" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= isset($title) ? $title : 'Govt Desk - Govtdesk' ?>" />
    <meta name="twitter:description" content="<?= isset($meta_description) ? $meta_description : 'Free job alerts and online forms for Govt Jobs in India.' ?>" />
    <meta name="twitter:image" content="<?= base_url('assets/img/seo-banner.jpg'); ?>" />
    <meta name="twitter:site" content="@govtdesk" />
    <meta name="twitter:creator" content="@govtdesk" />

    <!-- Favicon and CSS -->
    <link rel="icon" href="<?= base_url('assets/img/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet';">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>

    <script>
    window.addEventListener('load', () => {
        setTimeout(() => {
        const gtagScript = document.createElement('script');
        gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-R771KJNQT5';
        gtagScript.async = true;
        document.head.appendChild(gtagScript);

        gtagScript.onload = function () {
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'G-R771KJNQT5');
        };
        }, 2500);
    });
    </script>

    <!-- JS -->
	<script>
    window.addEventListener('scroll', () => {
        const adScript = document.createElement('script');
        adScript.src = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7308783330381845';
        adScript.setAttribute('async', '');
        adScript.setAttribute('crossorigin', 'anonymous');
        document.body.appendChild(adScript);
    }, { once: true });
    </script>

    <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>" defer></script>
    <script>
        // Load only once on scroll or interaction
        const loadGoogleTranslate = () => {
            if (window._gt_loaded) return; // Prevent multiple loads
            window._gt_loaded = true;

            const s = document.createElement('script');
            s.src = '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
            document.body.appendChild(s);
        };

        // Define the init callback globally
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        // Load on scroll or user click
        window.addEventListener('scroll', loadGoogleTranslate, { once: true });
        document.addEventListener('click', loadGoogleTranslate, { once: true });
    </script>

</head>

<body>


<!-- Email/IP Popup -->
 <div id="ipPopup" class="ep-overlay" aria-hidden="true" style="display:none;">
  <div class="ep-modal" role="dialog" aria-modal="true" aria-labelledby="epTitle"
       style="background:#fff; padding:20px; border-radius:10px; max-width:400px; margin:auto;">
    <button type="button" class="ep-close" id="epCloseBtn" aria-label="Close">&times;</button>

    <h3 id="epTitle">Get Updates</h3>
    <p>Enter your IP address</p>

    <form id="epForm" method="post" action="<?= base_url('success-add-ip'); ?>" novalidate>
      <input type="text" name="ipaddress" id="ipaddress" required 
             placeholder="Enter your IP address" style="width:100%; padding:10px; margin-bottom:10px;" />
      <button type="submit" id="epSubmit" style="padding:10px 20px;">Submit</button>
    </form>

    <div id="epMsg" class="ep-msg" style="display:none; margin-top:10px;"></div>
  </div>
</div>

<script>
(function () {
    const overlay = document.getElementById('ipPopup');
    const closeBtn = document.getElementById('epCloseBtn');
    const form = document.getElementById('epForm');
    const ipInput = document.getElementById('ipaddress');
    const submitBtn = document.getElementById('epSubmit');
    const msg = document.getElementById('epMsg');

    function openPopup() {
        overlay.style.display = 'flex';
        overlay.setAttribute('aria-hidden', 'false');
    }
    function closePopup() {
        overlay.style.display = 'none';
        overlay.setAttribute('aria-hidden', 'true');
    }

    document.addEventListener('DOMContentLoaded', function() {
        if (!localStorage.getItem('ipSaved')) {
            openPopup();
        }
    });

    // Close button
    closeBtn.addEventListener('click', closePopup);
    overlay.addEventListener('click', (e) => { if (e.target === overlay) closePopup(); });

    // Submit -> AJAX
    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        msg.style.display = 'none';
        const ip = ipInput.value.trim();
        if (!ip) { showMsg('Please enter IP address', true); return; }

        submitBtn.disabled = true;
        submitBtn.textContent = 'Saving...';

        try {
            const res = await fetch(form.action, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ ipaddress: ip })
            });
            const data = await res.text();

            if (data.trim() === 'success') {
                showMsg('IP already exists. Popup will not show again.', false);
                localStorage.setItem('ipSaved', '1');
                closePopup();
            } else if (data.trim() === 'inserted') {
                showMsg('New IP saved successfully.', false);
                localStorage.setItem('ipSaved', '1');
                closePopup();
            } else {
                showMsg('Unexpected response: ' + data, true);
            }
        } catch (err) {
            showMsg('Network error. Try again.', true);
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit';
        }
    });

    function showMsg(text, isError) {
        msg.textContent = text;
        msg.style.color = isError ? '#b00020' : '#0a7d00';
        msg.style.display = 'block';
    }
})();
</script>

<style>
  .ep-overlay {
    position: fixed; inset: 0;
    background: rgba(0,0,0,.5);
    display: flex; align-items: center; justify-content: center;
    z-index: 9999;
  }
  .ep-modal {
    position: relative;
    width: 90%; max-width: 420px;
    background: #fff; border-radius: 14px;
    padding: 22px; box-shadow: 0 10px 30px rgba(0,0,0,.15);
    font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial;
  }
  .ep-close {
    position: absolute; top: 10px; right: 12px;
    border: none; background: transparent;
    font-size: 28px; font-weight: bold;
    color: #444; cursor: pointer;
    line-height: 1;
  }
  .ep-close:hover { color: #e00000; }

  #epForm { display:flex; gap:10px; margin-top:12px }
  #ipaddress { flex:1; padding:10px 12px; border:1px solid #ddd; border-radius:10px; font-size:15px }
  #epSubmit { padding:10px 16px; border:none; border-radius:10px; background:#111; color:#fff; font-weight:600; cursor:pointer }
  .ep-msg { margin-top:10px; font-size:14px }
</style> 

    <!-- Animated Background -->
    <!-- <div class="bg-animation"></div> -->
    
    <!-- Floating Shapes -->
    <div class="floating-shapes"> 
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Notification Bar -->
    <div class="notification-bar" id="notifyBar">
        🔔 नवीनतम अपडेट: रेलवे आरआरसी सीआर अपरेंटिस भर्ती 2025 ऑनलाइन फॉर्म जारी! <a target="_blank" href="<?= base_url('railway-rrc-cr-apprentice-recruitment-2025')?>"> अभी आवेदन करें </a> ✨
    </div>

    <!-- Header -->
	<?php //$this->load->view('layouts/header'); ?> 

    <!-- Navigation -->
	<?php $this->load->view('layouts/nav'); ?>

    <!-- Main Content -->
    <main>
      <?= isset($content) ? $content : '' ?>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>🏛️ About Us</h3>
                    <p>Govt Desk provides you with information on all government jobs, results, and admit cards. Our goal is to deliver the fastest and most accurate updates to you.</p>
                </div>
                <div class="footer-section">
                    <h3>🔗 Quick Links</h3>
                    <ul>
                        <li><a href="<?= base_url('/') ?>">Latest Jobs</a></li>
                        <li><a href="<?= base_url('results') ?>">Results</a></li>
                        <li><a href="<?= base_url('admit-cards') ?>">Admit Cards</a></li>
                        <li><a href="<?= base_url('syllabus') ?>">Syllabus</a></li>
                        <li><a href="#">Previous Papers</a></li>
                    </ul> 
                </div>
                <div class="footer-section">
                    <h3>📂 Categories</h3>
                    <ul>
                        <li><a href="<?= base_url('railway-jobs'); ?>">Railway Jobs</a></li>
                        <li><a href="<?= base_url('ssc-jobs'); ?>">SSC Jobs</a></li>
                        <li><a href="<?= base_url('banking-jobs'); ?>">Banking Jobs</a></li>
                        <li><a href="<?= base_url('upsc-jobs'); ?>">UPSC Jobs</a></li>
                        <li><a href="<?= base_url('defense-jobs'); ?>">Defense Jobs</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>📞 Contact</h3>
                    <ul>
                        <li>📧 info@govtdesk.com</li>
                        <li>📞 +91-7309277237</li>
                        <li>📍 New Delhi, India</li>
                        <li>🌐 www.govtdesk.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Govt Desk. All rights reserved. | <a style="color:white;" href="<?= base_url('privacy-policy');?>" target="_blank">🔒 Privacy Policy</a> | <a style="color:white;" href="<?= base_url('disclaimer');?>" target="_blank">Disclaimer</a></p>
            </div>
        </div>
    </footer>
    <script>
     const BASE_URL = "<?= base_url() ?>";
	</script>
	<script src="<?= base_url('assets/js/script.min.js') ?>" defer></script>

<div class="floating-icons">
  <a href="https://api.whatsapp.com/send?phone=+917309277237&text=Hi" target="_blank" class="whatsapp-icon" title="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i> 
</a>

   <!--  <a href="#" target="_blank" class="telegram-icon" title="Join on Telegram">
        <i class="fab fa-telegram-plane"></i>
    </a> -->
</div>


</body>


</html> 
