   <div class="container">
            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Latest Updates -->
                <div class="latest-updates">
				<div class="flex" style="display: flex; align-items: center; justify-content: space-between;">
                            <h2 class="section-title">🔥 Latest Police & Paramilitary Jobs</h2>
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
                   
                    <div class="update-item" data-searchable="BSF HC RO / RM Recruitment 2025">
                        <a href="<?= base_url('bsf-hc-ro-rm-recruitment-2025'); ?>">
                            <div class="update-date">13 Aug</div>
                            <div class="update-text">
                                BSF HC RO / RM Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>

                    <div class="update-item" data-searchable="UP Police SI Recruitment 2025">
                            <a href="<?= base_url('up-police-si-recruitment-2025'); ?>">
                                <div class="update-date">13 Aug</div>
                                <div class="update-text">
                                    UP Police SI Recruitment 2025
                                    <span class="new-badge">NEW</span>
                                </div>
                            </a>
                        </div>
                     <div class="update-item" data-searchable="RPSC SI / Platoon Commander Online Form 2025">
                        <a href="<?= base_url('rpsc-si-platoon-commander-recruitment'); ?>">
                            <div class="update-date">11 Aug</div>
                            <div class="update-text">
                                RPSC SI / Platoon Commander Online Form 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                     </div>
                    <div class="update-item" data-searchable="IB Security Assistant Recruitment 2025">
                        <a href="<?= base_url('ib-security-assistant-recruitment-2025'); ?>"> 
                            <div class="update-date">8 Aug</div>
                            <div class="update-text">
                                IB Security Assistant Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div> 
                        </a>
                    </div>
                    <div class="update-item" data-searchable="BSF Constable Tradesman Recruitment 2025">
                        <a href="<?= base_url('bsf-constable-tradesman-recruitment-2025'); ?>"> 
                            <div class="update-date">8 Aug</div>
                            <div class="update-text">
                                BSF Constable Tradesman Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div> 
                        </a>
                    </div>
                    <div class="update-item" data-searchable="IB ACIO Grade-II / Executive Recruitment 2025">
                        <a href="<?= base_url('ib-acio-grade-ii-executive-recruitment-2025'); ?>">
                            <div class="update-date">8 Aug</div>
                            <div class="update-text">
                                IB ACIO Grade-II / Executive Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="Bihar Police CBSC Driver Constable Recruitment 2025">
                        <a href="<?= base_url('csbc-bihar-police-driver-constable-recruitment-2025'); ?>">
                            <div class="update-date">8 Aug</div> 
                            <div class="update-text">
                                Bihar Police CBSC Driver Constable Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="DSSSB Group B, C Various Post Recruitment 2025">
                         <a href="<?= base_url('dsssb-group-b-c-various-post-recruitment-2025'); ?>"> 
                            <div class="update-date">7 Aug</div>
                            <div class="update-text">
                             DSSSB Group B, C Various Post Recruitment 2025
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="UP Police OTR Registration 2025">
                            <a href="<?= base_url('up-police-upprpb-one-time-registration-otr-online-form-2025'); ?>"> 
                                <div class="update-date">5 Aug</div>
                                <div class="update-text">
                                    UP Police OTR Registration 2025
                                    <span class="new-badge">NEW</span>
                                </div>
                            </a>
                        </div>
                    <div class="update-item" data-searchable="DSSSB Non-Teaching Various Post Recruitment 2025">
                        <a href="<?= base_url('dsssb-non-teaching-various-post-recruitment-2025'); ?>">
                            <div class="update-date">4 Aug</div>
                            <div class="update-text">
                                DSSSB Non-Teaching Various Post Recruitment 2025
                                <span class="new-badge">NEW</span>
                            </div>
                        </a>
                    </div>
                    <div class="update-item" data-searchable="RSSB Platoon Commander Recruitment 2025">
                        <a href="<?= base_url('rssb-platoon-commander-recruitment'); ?>">
                            <div class="update-date">23 Jul</div>
                            <div class="update-text">
                                RSSB Platoon Commander Recruitment 2025
                                
                            </div>
                        </a>
                    </div>
					
                    <div class="update-item" data-searchable="CSBC Bihar Police Driver Constable Recruitment 2025">
                        <a href="<?= base_url('csbc-bihar-police-driver-constable-recruitment-2025'); ?>">
                            <div class="update-date">21 Jul</div>
                            <div class="update-text">
                                CSBC Bihar Police Driver Constable Recruitment 2025
                            </div>
                        </a>
                    </div>
                   
                    <div class="update-item"  data-searchable="DSSSB Various Post Online Form 2025 - Check Now">
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