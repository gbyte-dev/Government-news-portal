   <div class="container">
            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Latest Updates -->
                <div class="latest-updates">
				<div class="flex" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="section-title">🔥 Latest UPSC Jobs</h2>
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
                    <div class="update-item" data-searchable="UPPSC GIC Lecturer Recruitment 2025">
                            <a href="<?= base_url('uppsc-gic-lecturer-recruitment-2025'); ?>">
                                <div class="update-date">12 Aug</div>
                                <div class="update-text">
                                    UPPSC GIC Lecturer Recruitment 2025
                                    <span class="new-badge">NEW</span>
                                </div> 
                            </a>
                        </div>
                    <div class="update-item" data-searchable="UPSC IES / ISS DAF Online Form 2025">
                            <a href="<?= base_url('upsc-ies-iss-daf-online-form-2025'); ?>">
                                <div class="update-date">6 Aug</div>
                                <div class="update-text">
                                    UPSC IES / ISS DAF Online Form 2025
                                    <span class="new-badge">NEW</span>
                                </div> 
                            </a>
                        </div>
                    <div class="update-item" data-searchable="UPSC EPFO EO / AO / APFC Recruitment 2025">
                            <a href="<?= base_url('upsc-epfo-eo-ao-apfc-recruitment-2025'); ?>">
                                <div class="update-date">1 Aug</div> 
                                <div class="update-text">
                                    UPSC EPFO EO / AO / APFC Recruitment 2025
                                    <span class="new-badge">NEW</span>
                                </div>
                            </a>
                      </div>
                        <div class="update-item" data-searchable="UPPSC Assistant Teacher TGT Recruitment 2025">
							<a href="<?= base_url('uppsc-tgt-recruitment-2025'); ?>">
								<div class="update-date">1 Aug</div>
								<div class="update-text">
									UPPSC Assistant Teacher TGT Recruitment 2025
									<span class="new-badge">NEW</span>
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
