   <div class="container">
            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Latest Updates -->
                <div class="latest-updates">
				<div class="flex" style="display: flex; align-items: center; justify-content: space-between;">
                          <h2 class="section-title">🔥 Latest Court Jobs</h2>
                        <!-- Search Toggle Button -->
                        <button id="searchIconBtn" class="search-icon-btn" title="Search" style="font-size: 20px; cursor: pointer; background: none; border: none;">
                            🔍
                        </button>
                    </div>

                    <!-- ✅ Hidden Search Input Box -->
                    <div id="searchBarContainer" class="search-bar-container">
                        <input 
                            type="text" 
                            id="pageSearchInput" 
                            placeholder="Search this page..." 
                            oninput="liveSearch()" 
                        />
                    </div>
                   
                    <div id="updatesList">
                    <div class="update-item" data-searchable="Supreme Court SCI Court Master Recruitment 2025">
                         <a href="<?= base_url('supreme-court-sci-court-master-recruitment-2025'); ?>"> 
                            <div class="update-date">1 Aug</div>
                            <div class="update-text">
                                Supreme Court SCI Court Master Recruitment 2025
                            </div>
                        </a>
                      </div>
                    <div class="update-item" data-searchable="Rajasthan High Court Class IV Employees Peon Recruitment 2025">
                         <a href="<?= base_url('rajasthan-high-court-class-iv-employees-peon-recruitment-2025'); ?>"> 
                            <div class="update-date">22 Jul</div>
                            <div class="update-text">
                             Rajasthan High Court Class IV Employees Peon Recruitment 2025
                            </div>
                        </a>
                        </div>
					<div class="update-item" data-searchable="DSSSB Group B, C Various Post Recruitment 2025">
						 <a href="<?= base_url('dsssb-group-b-c-various-post-recruitment-2025'); ?>"> 
                            <div class="update-date">22 Jul</div>
                            <div class="update-text">
                             DSSSB Group B, C Various Post Recruitment 2025
                            </div>
						</a>
                        </div>
                        <div class="update-item" data-searchable="DSSSB Various Post Online Form 2025 - Check Now">
						<a href="<?= base_url('dsssb-jobs'); ?>"> 
                            <div class="update-date">09 Jul</div>
                            <div class="update-text">
                                DSSSB Various Post Online Form 2025 - Check Now
                            </div>
						</a>
                        </div>
                        
                    </div>
                </div>

                <!-- Sidebar -->
                <?php $this->load->view('layouts/quik-links'); ?>
            </div>
            <!-- Categories -->
			<?php $this->load->view('latest-jobs'); ?>
        </div>
