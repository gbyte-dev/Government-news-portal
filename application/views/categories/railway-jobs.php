   <div class="container">
            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Latest Updates -->
                <div class="latest-updates">
				<div class="flex" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="section-title">🔥 Latest Railway Jobs</h2>
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
                    <div class="update-item" data-searchable="RRC Eastern Railway Apprentice Recruitment 2025">
                         <a href="<?= base_url('rrc-eastern-railway-apprentice-recruitment-2025-chk'); ?>"> 
                             <div class="update-date">14 Aug</div>
                            <div class="update-text">
                               RRC Eastern Railway Apprentice Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="Railway RRC CR Apprentice Recruitment 2025">
                        <a href="<?= base_url('railway-rrc-cr-apprentice-recruitment-2025'); ?>">
                            <div class="update-date">14 Aug</div>
                            <div class="update-text">
                                Railway RRC CR Apprentice Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="Railway SWR Apprentice Recruitment 2025">
                        <a href="<?= base_url('Railway-SWR-Apprentice-Recruitment-2025'); ?>">
                            <div class="update-date">13 Aug</div>
                            <div class="update-text">
                                Railway SWR Apprentice Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="Railway ICF Trade Apprentice Recruitment 2025">
                        <a href="<?= base_url('railway-icf-trade-apprentice-recruitment-2025'); ?>">
                            <div class="update-date">11 Aug</div>
                            <div class="update-text">
                                Railway ICF Trade Apprentice Recruitment 2025
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="Railway RRB Paramedical Staff Recruitment 2025">
                        <a href="<?= base_url('rrb-paramedical-staff-recruitment-2025'); ?>">
                            <div class="update-date">9 Aug</div>
                            <div class="update-text">
                                Railway RRB Paramedical Staff Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="Railway RRB Technician CEN.No 02/2025 Recruitment 2025">
                        <a href="<?= base_url('railway-rrb-technician-cen-no-02-2025-recruitment'); ?>">
                            <div class="update-date">7 Aug</div>
                            <div class="update-text">
                                Railway RRB Technician CEN.No 02/2025 Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>
                        
                       <div class="update-item" data-searchable="RRB Ministerial and Isolated Categories Application Status 2025">
							<a href="<?= base_url('RRB-Ministerial-and-Isolated-Categories-Application-Status-2025'); ?>">
								<div class="update-date">18 Jul</div>
								<div class="update-text">
									RRB Ministerial and Isolated Categories Application Status 2025
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
