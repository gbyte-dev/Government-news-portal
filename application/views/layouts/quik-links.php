<div class="sidebar">
    <div class="sidebar-section glow">
        <h3 class="section-title">⚡ Quick Links</h3>
        <ul class="quick-links">
            <li><a href="<?= base_url('results');?>">📋 Result Status</a></li>
            <li><a href="<?= base_url('application-status');?>">📝 Application Status</a></li>
            <li><a href="<?= base_url('cutt-off-marks');?>">🎯 Cut-off Marks</a></li>
            <li><a href="<?= base_url('previous-paper');?>">📚 Previous Papers</a></li>
            <li><a href="<?= base_url('study-material');?>">📖 Study Material</a></li>
            <li><a href="<?= base_url('job-alerts');?>">💼 Job Alerts</a></li>
        </ul>
    </div>

    <div class="sidebar-section">
        <h3 class="section-title">🏆 Popular Exams</h3>
        <ul class="quick-links">
            <li><a href="<?= base_url('ssc-cgl');?>">🎓 SSC CGL</a></li>
            <li><a href="<?= base_url('IBPS-PO');?>">🏛️ IBPS PO</a></li>
            <li><a href="<?= base_url('rrb-ntpc');?>">🚂 RRB NTPC</a></li>
            <!-- <li><a href="<?= base_url('upsc-cse');?>">⚖️ UPSC CSE</a></li>
            <li><a href="<?= base_url('sbi-c');?>">🏦 SBI Clerk</a></li> -->
        </ul>
    </div>

    <div class="sidebar-section">
        <h3 class="section-title">📊 Live Statistics</h3>
        <p><strong>Total Jobs:</strong> <span class="stat-number" id="totalJobss">96</span></p>
        <p><strong>Active Users:</strong> <span class="stat-number" id="activeUserss"><?= rand(20, 30);?></span></p>
        <p><strong>All Results:</strong> <span class="stat-number" id="resultsTodays">69</span></p>
        <p><strong>Admit-Cart:</strong> <span class="stat-number" id="admit_cart">77</span></p>
        <p><strong>Syllabus:</strong> <span class="stat-number" id="syllabus">4</span></p>
        <div class="loading-spinner" style="display: none;" id="loadingSpinner"></div>
    </div>
</div>

