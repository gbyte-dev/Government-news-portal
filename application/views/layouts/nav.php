

<!-- ✅ Navbar -->
<nav>
    <div class="nav-container">
        <a href="<?= base_url('/'); ?>" class="logo">
        <img src="https://govtdesk.com/assets/img/govt_desk.webp" alt="Govt Desk" width="180" height="60" fetchpriority="high">
        </a>

        <!-- Hamburger Menu Icon -->
        <button class="menu-toggle" id="menu-toggle" aria-label="Toggle navigation">
            ☰
        </button>

        <!-- Navigation Links -->
        <ul class="nav-links" id="nav-links">
            <li><a href="<?= base_url('/') ?>">🏠 Latest Jobs</a></li>
            <li><a href="<?= base_url('results');?>">📊 Results</a></li>
            <li><a href="<?= base_url('admit-cards');?>">🎫 Admit Cards</a></li>
            <li><a href="<?= base_url('answer-keys');?>">🔑 Answer Keys</a></li>
            <li><a href="<?= base_url('syllabus');?>">📚 Syllabus</a></li>
            <li><a href="<?= base_url('/contact-us') ?>">📞 Contact</a></li>
        </ul>

        <!-- Language Dropdown -->
        <div id="google_translate_element" class="custom-gtranslate"></div>

        
    </div>

</nav>


<div>
<ul class="mobile-nav-links" id="mobile-nav">
    <li><a href="<?= base_url('/') ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">Latest Jobs</a></li>
    <li><a href="<?= base_url('results');?>" class="<?= ($this->uri->segment(1) == 'results') ? 'active' : '' ?>">Results</a></li>
    <li><a href="<?= base_url('admit-cards');?>" class="<?= ($this->uri->segment(1) == 'admit-cards') ? 'active' : '' ?>">Admit Cards</a></li>
    <li><a href="<?= base_url('answer-keys');?>" class="<?= ($this->uri->segment(1) == 'answer-keys') ? 'active' : '' ?>">Answer Keys</a></li>
</ul>

</div>

