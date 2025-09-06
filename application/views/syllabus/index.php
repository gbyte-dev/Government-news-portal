  <div class="container">
            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Latest Updates -->
                <div class="latest-updates">
					<div class="flex" style="display: flex; align-items: center; justify-content: space-between;">
                    <h2 class="section-title">🔥 Latest Syllabus 2025</h2>
					<button id="searchIconBtn" class="search-icon-btn" title="Search" style="font-size: 20px; cursor: pointer; background: none; border: none;">
                            🔍
                        </button>
					</div>
					<div id="searchBarContainer" class="search-bar-container">
                        <input 
                            type="text" 
                            id="pageSearchInput" 
                            placeholder="Search this page..." 
                            oninput="liveSearch()" 
                        />
                    </div>
                    <div id="updatesList">
						<div class="update-item" data-searchable="UPSC CBI Assistant Programmer Online Form 2024">
						<a href="<?= base_url('syllabus/UPSC-CBI-Assistant-Programmer-Online-Form-2024'); ?>"> 
                            <div class="update-date">14 Jul</div>
                            <div class="update-text">
                                UPSC CBI Assistant Programmer Online Form 2024
                                <span class="new-badge">NEW</span>
                            </div>
						</a>
                        </div>
						<div class="update-item" data-searchable="Railway RRB ALP Exam Syllabus 2024">
						<a href="<?= base_url('syllabus/Railway-RRB-ALP-Exam-Syllabus-2024'); ?>"> 
                            <div class="update-date">14 Jul</div>
                            <div class="update-text">
                                Railway RRB ALP Exam Syllabus 2024
                                <span class="new-badge">NEW</span>
                            </div>
						</a>
                        </div>
						<div class="update-item" data-searchable="Railway RPF SI Exam Syllabus 2024">
						<a href="<?= base_url('syllabus/Railway-RPF-SI-Exam-Syllabus-2024'); ?>"> 
                            <div class="update-date">14 Jul</div>
                            <div class="update-text">
                                Railway RPF SI Exam Syllabus 2024
                                <span class="new-badge">NEW</span>
                            </div>
						</a>
                        </div>
						<div class="update-item" data-searchable="SSC GD Constable Exam Syllabus 2024">
						<a href="<?= base_url('syllabus/SSC-GD-Constable-Exam-Syllabus-2024'); ?>"> 
                            <div class="update-date">14 Jul</div>
                            <div class="update-text">
                                SSC GD Constable Exam Syllabus 2024 
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