<style>
.categories {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
  justify-content: center;
  margin-top: 40px;
}

.category-card {
  
  border-radius: 8px;
  padding: 16px;
  text-align: center;
  width: calc(50% - 16px); /* 2 per row for mobile */
  align-content: center;
  
}

/* Tablet and up */
@media (min-width: 768px) {
  .category-card {
    width: calc(33.333% - 16px); /* 3 per row for tablets */
  }
}

/* Desktop and up */
@media (min-width: 1024px) {
  .category-card {
    width: calc(20% - 16px); /* 5 per row for desktops */
  }
}
</style>
<div class="categories">
			  <div class="category-card" data-category="upsc-jobs">
			  <a href="<?= base_url('upsc-jobs'); ?>">
				<!-- <div class="category-icon">🎯</div> -->
				<div class="category-text"><h3>UPSC Jobs</h3></div>
				</a>
			  </div>

			  <div class="category-card" data-category="ssc-jobs">
			  <a href="<?= base_url('ssc-jobs'); ?>">
				<!-- <div class="category-icon">📋</div> -->
				<div class="category-text"><h3>SSC Jobs</h3></div>
			  </a>
			  </div>

			  <div class="category-card" data-category="railway-jobs">
			   <a href="<?= base_url('railway-jobs'); ?>">
				<!-- <div class="category-icon">🚂</div> -->
				<div class="category-text"><h3>Railway Jobs</h3></div>
			   </a>
			  </div>

			  <div class="category-card" data-category="banking-jobs">
			  <a href="<?= base_url('banking-jobs'); ?>">
				<!-- <div class="category-icon">🏦</div> -->
				<div class="category-text"><h3>Banking Jobs</h3></div>
			  </a>
			  </div>

			  <div class="category-card" data-category="defense-jobs">
			  <a href="<?= base_url('defense-jobs'); ?>">
				<!-- <div class="category-icon">🛡️</div> -->
				<div class="category-text"><h3>Defense Jobs</h3></div>
			  </a>
			  </div>

			  <div class="category-card" data-category="teaching-jobs">
			  <a href="<?= base_url('teaching-jobs'); ?>">
				<!-- <div class="category-icon">📚</div> -->
				<div class="category-text"><h3>Teaching Jobs</h3></div>
			  </a>
			  </div>

			  <div class="category-card" data-category="police-paramilitary">
			  <a href="<?= base_url('police-paramilitary'); ?>">
				<!-- <div class="category-icon">👮</div> -->
				<div class="category-text"><h3>Police & Paramilitary</h3></div>
			  </a>
			  </div>

			  <div class="category-card" data-category="psu-jobs">
			  <a href="<?= base_url('psu-jobs'); ?>">
				<!-- <div class="category-icon">⚙️</div> -->
				<div class="category-text"><h3>PSU Jobs</h3></div>
			  </a>
			  </div>

			  <div class="category-card" data-category="court-jobs">
			  <a href="<?= base_url('court-jobs'); ?>">
				<!-- <div class="category-icon">⚖️</div> -->
				<div class="category-text"><h3>Court Jobs</h3></div>
			  </a>
			  </div>

			  <div class="category-card" data-category="parliament-secretariat">
			  <a href="<?= base_url('parliament-secretariat'); ?>">
				<!-- <div class="category-icon">🏛️</div> -->
				<div class="category-text"><h3>Parliament & Secretariat</h3></div>
			  </a>
			  </div>
</div>
