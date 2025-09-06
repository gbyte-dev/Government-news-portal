   <div class="container">
            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Latest Updates -->
                <div class="latest-updates">
					<div class="flex" style="display: flex; align-items: center; justify-content: space-between;">
                            <h2 class="section-title">🔥 Latest Parliament & Secretariat Jobs</h2> 
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
					<div class="update-item" data-searchable="BPSC LDC Lower Division Clerk Online Form 2025">
						 <a href="<?= base_url('bpsc-jobs'); ?>"> 
                            <div class="update-date">29 Jul</div>
                            <div class="update-text">
                                BPSC LDC Lower Division Clerk Online Form 2025
                            </div>
						</a>
                        </div>
                    <div class="update-item" data-searchable="Bihar BPSC Special School Teacher Recruitment 2025">
                         <a href="<?= base_url('bihar-bpsc-special-school-teacher-online-form-2025'); ?>"> 
                            <div class="update-date">28 Jul</div>
                            <div class="update-text">
                             Bihar BPSC Special School Teacher Recruitment 2025
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