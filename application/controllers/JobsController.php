<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobsController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/jobscontroller
	 *	- or -
	 * 		http://example.com/index.php/jobscontroller/index
	 *	- or -
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 
	 public function __construct() {
        parent::__construct(); 
		date_default_timezone_set('Asia/Kolkata');
    }
		
    public function navy_jobs() {
        $data['title'] = 'Govt Desk - Indian Navy Civilian Recruitment 2025';
        $data['meta_description'] = 'Apply for Indian Navy Civilian Recruitment 2025. Check eligibility, salary, and online form details on Govt Desk.';
        $data['meta_keywords'] = 'Indian Navy Jobs, Civilian Navy Recruitment, Govt Jobs 2025, Navy 2025 Online Form';
        $data['content'] = $this->load->view('pages/navy-jobs', [], true);
        $this->load->view('main', $data);
    }

    public function dsssb() {
        $data['title'] = 'Govt Desk - DSSSB Various Post Online Form 2025 for 2119 Post Advt No 01/2025';
        $data['meta_description'] = 'DSSSB 2025 recruitment online form for 2119 posts. Apply now for teaching and non-teaching vacancies at Govt Desk.';
        $data['meta_keywords'] = 'DSSSB Jobs 2025, DSSSB 01/2025, Teaching Jobs, Delhi Govt Jobs';
        $data['content'] = $this->load->view('pages/dsssb-jobs', [], true);
        $this->load->view('main', $data);
    }
	public function mpesb_group_post_recruitment() {
    $data['title'] = 'MPESB Group 5 Post Recruitment 2025 – Apply for Teaching and Non-Teaching Vacancies';
    $data['meta_description'] = 'MPESB Group 5 Post Recruitment 2025. Apply now for teaching and non-teaching vacancies at Govt Desk.';
    $data['meta_keywords'] = 'MPESB Group 5 Post Recruitment 2025, MPESB Recruitment, MPESB Vacancies, Teaching Jobs MP';
    $data['content'] = $this->load->view('pages/mpesb_group_post_recruitment-jobs', [], true);
    $this->load->view('main', $data);
    }
	public function ib_security_assistant_recruitment() {
    $data['title'] = 'IB Security Assistant Recruitment 2025 – Apply for IB Security Assistant Jobs';
    $data['meta_description'] = 'IB Security Assistant Recruitment 2025. Apply now for IB Security Assistant posts in various security sectors.';
    $data['meta_keywords'] = 'IB Security Assistant Recruitment 2025, IB Security Jobs, Intelligence Bureau Assistant, IB Assistant 2025';
    $data['content'] = $this->load->view('pages/ib_security_assistant_recruitment-jobs', [], true);
    $this->load->view('main', $data);
    }
	public function bsf_constable_tradesman_recruitment() {
    $data['title'] = 'BSF Constable Tradesman Recruitment 2025 – Apply for BSF Tradesman Jobs';
    $data['meta_description'] = 'BSF Constable Tradesman Recruitment 2025. Apply now for the Border Security Force Constable Tradesman positions. Check eligibility and exam dates.';
    $data['meta_keywords'] = 'BSF Constable Tradesman Recruitment 2025, BSF Jobs, Constable Tradesman Vacancy, BSF Recruitment';
    $data['content'] = $this->load->view('pages/bsf_constable_tradesman_recruitment-jobs', [], true);
    $this->load->view('main', $data);
	}
    public function bpsc() {
    $data['title'] = 'BPSC LDC Recruitment 2025 – Apply Online for Bihar Lower Division Clerk Jobs';
    $data['meta_description'] = 'Apply for BPSC LDC 2025. Check eligibility, important dates, and apply online for Bihar Public Service Commission Lower Division Clerk vacancy.';
    $data['meta_keywords'] = 'BPSC LDC 2025, Bihar Lower Division Clerk, Bihar Government Jobs, BPSC Clerk 2025';
    $data['content'] = $this->load->view('pages/bpsc-jobs', [], true);
    $this->load->view('main', $data);
    }

    public function wbssc() {
        $data['title'] = 'Govt Desk - West Bengal WBSSC Assistant Teacher Online Form 2025 for 2nd SLST 35726 Post';
        $data['meta_description'] = 'WBSSC 2025 Assistant Teacher Online Form for 35726 Posts. Apply now through Govt Desk!';
        $data['meta_keywords'] = 'WBSSC Assistant Teacher, West Bengal Teaching Jobs, SLST 2025, WB Jobs';
        $data['content'] = $this->load->view('pages/wbssc-jobs', [], true);
        $this->load->view('main', $data);
    }


	public function rssb_agriculture_supervisor_recruitment() {
		$data['title'] = 'RSSB Agriculture Supervisor Recruitment 2025 – Apply Now for Agriculture Supervisor Jobs';
		$data['meta_description'] = 'RSSB Agriculture Supervisor Recruitment 2025. Apply online for Rajasthan Agriculture Supervisor posts. Check eligibility and dates.';
		$data['meta_keywords'] = 'RSSB Agriculture Supervisor Recruitment 2025, Agriculture Supervisor Jobs Rajasthan, RSSB Recruitment 2025';
		$data['content'] = $this->load->view('pages/rssb_agriculture_supervisor_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}
	public function rpsc_veterinary_officer_recruitment() {
		$data['title'] = 'RPSC Veterinary Officer Recruitment 2025 – Apply Online for Veterinary Officer Jobs';
		$data['meta_description'] = 'RPSC Veterinary Officer Recruitment 2025. Apply now for Veterinary Officer posts under Rajasthan Public Service Commission.';
		$data['meta_keywords'] = 'RPSC Veterinary Officer Recruitment 2025, Veterinary Officer Jobs Rajasthan, RPSC Recruitment 2025';
		$data['content'] = $this->load->view('pages/rpsc_veterinary_officer_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}
	public function rssb_forest_guard_forester_surveyor_recruitment() {
		$data['title'] = 'RSSB Forest Guard, Forester & Surveyor Recruitment 2025 – Apply for Rajasthan Forest Jobs';
		$data['meta_description'] = 'RSSB Forest Guard, Forester & Surveyor Recruitment 2025. Apply now for Forest Guard and Forester posts in Rajasthan.';
		$data['meta_keywords'] = 'RSSB Forest Guard, Forester & Surveyor Recruitment 2025, Rajasthan Forest Jobs, RSSB Recruitment 2025';
		$data['content'] = $this->load->view('pages/rssb_forest_guard_forester_surveyor_recruitment-jobs', [], true);
		$this->load->view('main', $data);
    }
    public function bank_of_baroda_bob_lbo_recruitment() {
		$data['title'] = 'Bank Of Baroda BOB LBO Recruitment 2025 – Apply for BOB LBO Jobs';
		$data['meta_description'] = 'Bank Of Baroda BOB LBO Recruitment 2025. Apply now for the Bank of Baroda LBO positions. Check eligibility and apply.';
		$data['meta_keywords'] = 'Bank Of Baroda BOB LBO Recruitment 2025, BOB Recruitment, Bank LBO Jobs, Bank Of Baroda Jobs 2025';
		$data['content'] = $this->load->view('pages/bank_of_baroda_bob_lbo_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rssb_platoon_commander_recruitment() {
		$data['title'] = 'RSSB Platoon Commander Recruitment 2025 – Apply Now for Platoon Commander Jobs';
		$data['meta_description'] = 'RSSB Platoon Commander Recruitment 2025. Apply now for the Platoon Commander posts in Rajasthan State.';
		$data['meta_keywords'] = 'RSSB Platoon Commander Recruitment 2025, Platoon Commander Jobs Rajasthan, RSSB Recruitment 2025';
		$data['content'] = $this->load->view('pages/rssb_platoon_commander_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function jpsc_assistant_public_prosecutor_app_recruitment() {
		$data['title'] = 'JPSC Assistant Public Prosecutor APP Recruitment 2025 – Apply Online';
		$data['meta_description'] = 'JPSC Assistant Public Prosecutor APP Recruitment 2025. Apply now for the Assistant Public Prosecutor position in Jharkhand.';
		$data['meta_keywords'] = 'JPSC APP Recruitment 2025, JPSC Public Prosecutor Jobs, Jharkhand APP Recruitment 2025';
		$data['content'] = $this->load->view('pages/jpsc_assistant_public_prosecutor_app_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}
	public function ssc_junior_engineer_je_recruitment() {
    $data['title'] = 'SSC Junior Engineer (JE) Recruitment 2025 – Apply Online for SSC JE Jobs';
    $data['meta_description'] = 'Apply online for SSC Junior Engineer JE Recruitment 2025. Check eligibility, exam pattern, and important dates for SSC JE.';
    $data['meta_keywords'] = 'SSC Junior Engineer JE Recruitment 2025, SSC JE Online Form, SSC Engineering Jobs, Junior Engineer 2025';
    $data['content'] = $this->load->view('pages/ssc_junior_engineer_je_recruitment-jobs', [], true);
    $this->load->view('main', $data);
	}

	public function ibps_probationary_officer_po_15th_online_form() {
		$data['title'] = 'IBPS PO 2025 – Apply Online for Probationary Officer Post';
		$data['meta_description'] = 'IBPS PO 15th Online Form 2025. Apply now for the Probationary Officer position in leading banks across India.';
		$data['meta_keywords'] = 'IBPS PO 2025, IBPS Probationary Officer Recruitment, Bank PO Jobs, IBPS Online Form';
		$data['content'] = $this->load->view('pages/ibps_probationary_officer_po_15th_online_form-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function ibps_specialist_officer_so_15th_online_form() {
		$data['title'] = 'IBPS SO 2025 – Apply for Specialist Officer Jobs';
		$data['meta_description'] = 'IBPS Specialist Officer 2025. Apply online for IBPS SO posts in various sectors including IT, HR, Marketing, and more.';
		$data['meta_keywords'] = 'IBPS Specialist Officer SO, IBPS SO 2025, Bank SO Jobs, IBPS Online Form 2025';
		$data['content'] = $this->load->view('pages/ibps_specialist_officer_so_15th_online_form-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function navyAgniveer() {
		$data['title'] = 'Govt Desk - Indian Navy Agniveer MR Musician 02/2025 Batch Recruitment 2025: Apply Online for 13 Post';
		$data['meta_description'] = 'Indian Navy Agniveer MR Musician 2025 Recruitment for 13 Posts. Register online at Govt Desk.';
		$data['meta_keywords'] = 'Navy Agniveer MR, Musician Recruitment 2025, Navy 02/2025 Jobs';
		$data['content'] = $this->load->view('pages/navyAgniveer-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function indianNavyBTech() {
		$data['title'] = 'Govt Desk - Indian Navy 10+2 B.Tech Cadet Entry Scheme January 2026 : Apply for 44 Post';
		$data['meta_description'] = 'Apply for Indian Navy 10+2 B.Tech Cadet Entry Scheme Jan 2026. 44 Vacancies available. Register now!';
		$data['meta_keywords'] = 'Navy BTech Cadet Entry, Indian Navy Jobs 2026, 10+2 Navy Recruitment';
		$data['content'] = $this->load->view('pages/indianNavyBTech-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function bscbCo_operativeBankAssistant() {
		$data['title'] = 'Govt Desk - Bihar BSCB Co-operative Bank Assistant Recruitment 2025 : Apply for 257 Post';
		$data['meta_description'] = 'Apply for Bihar BSCB Co-operative Bank Assistant Recruitment 2025. 257 Posts available. Register now!';
		$data['meta_keywords'] = 'Bihar BSCB Co-operative Bank Assistant, Bihar Bank Jobs 2025, graduation Recruitment';
		$data['content'] = $this->load->view('pages/bscbCo_operativeBankAssistant-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function drdo_scientist() {
		$data['title'] = 'Govt Desk - DRDO RAC Scientist B Recruitment 2025 : Apply for 152 Posts';
		$data['meta_description'] = 'Apply online for DRDO RAC Scientist B Recruitment 2025. 152 Posts available. Check eligibility, exam pattern and apply before 31 July 2025.';
		$data['meta_keywords'] = 'DRDO Scientist B Recruitment 2025, RAC Scientist Vacancy, DRDO Jobs, Engineering GATE Jobs';
		$data['content'] = $this->load->view('pages/drdo_scientist-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function scc_chsl_jobs() {
		$data['title'] = 'Govt Desk - SSC 10+2 CHSL Recruitment 2025 : Apply for 3131 Posts';
		$data['meta_description'] = 'Apply online for SSC 10+2 CHSL Recruitment 2025. 3131 posts available for LDC, PA/SA, DEO. Last date to apply is 18 July 2025.';
		$data['meta_keywords'] = 'SSC CHSL Recruitment 2025, 10+2 Jobs, LDC, PA, DEO, SSC CHSL Online Form 2025';
		$data['content'] = $this->load->view('pages/scc_chsl-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function indian_navy_civilian_jobs() {
		$data['title'] = 'Govt Desk - Indian Navy Civilian Recruitment 2025 : Apply for 1100+ Posts';
		$data['meta_description'] = 'Indian Navy Civilian Recruitment 2025. 1100+ posts available for LDC, PA/SA, DEO. Last date to apply is 18 July 2025.';
		$data['meta_keywords'] = 'Indian Navy Civilian Recruitment 2025';
		$data['content'] = $this->load->view('pages/indian_navy_civilian-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function wcdc_bihar_various_jobs() {
		$data['title'] = 'Govt Desk - WCDC Bihar Various Post Online Form 2025';
		$data['meta_description'] = 'WCDC Bihar Various Post Online Form 2025.';
		$data['meta_keywords'] = 'WCDC Bihar Various Post Online Form 2025';
		$data['content'] = $this->load->view('pages/wcdc_bihar_various-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rssb_village_development_jobs() {
		$data['title'] = 'Govt Desk - RSSB Village Development Officer VDO Online Form 2025';
		$data['meta_description'] = 'RSSB Village Development Officer VDO Online Form 2025.';
		$data['meta_keywords'] = 'RSSB Village Development Officer VDO Online Form 2025';
		$data['content'] = $this->load->view('pages/rssb_village_development-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rpsc_senior_teacher_grade_recruitment() {
		$data['title'] = 'Govt Desk - RPSC Senior Teacher Grade IV Recruitment 2025';
		$data['meta_description'] = 'RPSC Senior Teacher Grade IV Recruitment 2025.';
		$data['meta_keywords'] = 'RPSC Senior Teacher Grade IV Recruitment 2025';
		$data['content'] = $this->load->view('pages/rpsc_senior_teacher_grade_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function ib_acio_grade_recruitment() {
		$data['title'] = 'Govt Desk - IB ACIO Grade-II / Executive Recruitment 2025';
		$data['meta_description'] = 'IB ACIO Grade-II / Executive Recruitment 2025';
		$data['meta_keywords'] = 'IB ACIO Grade-II / Executive Recruitment 2025';
		$data['content'] = $this->load->view('pages/ib_acio_grade_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function railway_swr_apprentice_recruitment() {
		$data['title'] = 'Govt Desk - Railway SWR Apprentice Recruitment 2025';
		$data['meta_description'] = 'Railway SWR Apprentice Recruitment 2025';
		$data['meta_keywords'] = 'Railway SWR Apprentice Recruitment 2025';
		$data['content'] = $this->load->view('pages/railway_swr_apprentice_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}
	  public function rpsc_assistant_agriculture_engineer_recruitment() {
		$data['title'] = 'Govt Desk - RPSC Assistant Agriculture Engineer Recruitment 2025 | Latest Jobs';
		$data['meta_description'] = 'RPSC Assistant Agriculture Engineer Recruitment 2025. Apply for the latest Agriculture Engineer vacancies in RPSC.';
		$data['meta_keywords'] = 'RPSC Assistant Agriculture Engineer, RPSC 2025 Recruitment, RPSC Agriculture Engineer Jobs 2025';
		$data['content'] = $this->load->view('pages/rpsc_assistant_agriculture_engineer_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rpsc_si_platoon_commander_recruitment() {
		$data['title'] = 'Govt Desk - RPSC SI / Platoon Commander Recruitment 2025 | Apply Online';
		$data['meta_description'] = 'RPSC SI / Platoon Commander Recruitment 2025. Apply for 100+ vacancies in RPSC for Platoon Commander and Sub-Inspector.';
		$data['meta_keywords'] = 'RPSC SI Recruitment, Platoon Commander Recruitment 2025, RPSC 2025 Jobs';
		$data['content'] = $this->load->view('pages/rpsc_si_platoon_commander_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rpsc_school_lecturer_recruitment() {
		$data['title'] = 'Govt Desk - RPSC School Lecturer Recruitment 2025 | Apply Online for 500+ Posts';
		$data['meta_description'] = 'RPSC School Lecturer Recruitment 2025. Apply for the latest lecturer vacancies in Rajasthan PSC.';
		$data['meta_keywords'] = 'RPSC School Lecturer Jobs, RPSC 2025 Lecturer Recruitment, School Lecturer Rajasthan 2025';
		$data['content'] = $this->load->view('pages/rpsc_school_lecturer_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function indian_bank_apprentice_recruitment() {
		$data['title'] = 'Govt Desk - Indian Bank Apprentice Recruitment 2025 | 1000+ Vacancies';
		$data['meta_description'] = 'Indian Bank Apprentice Recruitment 2025. Apply now for Apprentice posts in Indian Bank, with 1000+ vacancies available.';
		$data['meta_keywords'] = 'Indian Bank Apprentice Recruitment, Bank Jobs 2025, Indian Bank 2025 Recruitment';
		$data['content'] = $this->load->view('pages/indian_bank_apprentice_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function mpesb_primary_school_teacher_pstst_recruitment() {
		$data['title'] = 'Govt Desk - MPESB Primary School Teacher PSTST Recruitment 2025 | Apply Now';
		$data['meta_description'] = 'MPESB Primary School Teacher PSTST Recruitment 2025. Apply online for Primary School Teacher posts in MPESB.';
		$data['meta_keywords'] = 'MPESB Primary Teacher Recruitment, MPESB PSTST Recruitment 2025, Teacher Jobs in Madhya Pradesh';
		$data['content'] = $this->load->view('pages/mpesb_primary_school_teacher_pstst_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function sgpgi_nursing_officer_teaching_recruitment() {
		$data['title'] = 'Govt Desk - SGPGI Nursing Officer and Non Teaching Post Recruitment 2025 | Apply Online';
		$data['meta_description'] = 'SGPGI Nursing Officer and Non Teaching Post Recruitment 2025. Apply for nursing and non-teaching posts in SGPGI.';
		$data['meta_keywords'] = 'SGPGI Nursing Officer Recruitment, SGPGI 2025 Recruitment, SGPGI Non-Teaching Jobs';
		$data['content'] = $this->load->view('pages/sgpgi_nursing_officer_teaching_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function sscCGLCorrectionEditForm() {
		$data['title'] = 'Govt Desk - SSC CGL Correction/ Edit Form 2025 | Apply for 14,582 Posts';
		$data['meta_description'] = 'Apply for SSC CGL Correction/ Edit Form 2025. 14,582 Posts available. Register now for CGL 2025.';
		$data['meta_keywords'] = 'SSC CGL Correction, SSC CGL 2025 Jobs, SSC 14,582 Posts Apply';
		$data['content'] = $this->load->view('pages/sscCGLCorrectionEditForm-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function indianNavySSCTechnicalAprilRecruitment() {
		$data['title'] = 'Govt Desk - Indian Navy SSC Technical April Recruitment 2025-26 | Apply for 300+ Posts';
		$data['meta_description'] = 'Apply for Indian Navy SSC Technical April Recruitment 2025-26. 300+ Posts available in Navy. Register Now!';
		$data['meta_keywords'] = 'Indian Navy SSC Technical Recruitment, Indian Navy Jobs, Indian Navy 2025-26';
		$data['content'] = $this->load->view('pages/indianNavySSCTechnicalAprilRecruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function indianCoastGuardAC012027() {
		$data['title'] = 'Govt Desk - Indian Coast Guard AC 01/2027 Batch Online Form | 170 Posts';
		$data['meta_description'] = 'Apply for Indian Coast Guard AC 01/2027 Batch Online Form. 170 Posts available for the 2027 Batch. Register now!';
		$data['meta_keywords'] = 'Indian Coast Guard Recruitment, Indian Coast Guard AC 01/2027, Indian Coast Guard Jobs';
		$data['content'] = $this->load->view('pages/indianCoastGuardAC012027-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function MPESBPrimarySchoolTeacherPSTSTRecruitment2025() {
		$data['title'] = 'Govt Desk - MPESB Primary School Teacher PSTST Recruitment 2025 | Apply Now';
		$data['meta_description'] = 'Apply for MPESB Primary School Teacher PSTST Recruitment 2025. Register now for the PSTST posts in Madhya Pradesh.';
		$data['meta_keywords'] = 'MPESB Primary School Teacher, MPESB 2025 Recruitment, Teacher Jobs MP';
		$data['content'] = $this->load->view('pages/MPESBPrimarySchoolTeacherPSTSTRecruitment2025-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function indian_air_force_agniveervayu() {
		$data['title'] = 'Govt Desk - Indian Air Force Agniveervayu Vayu Intake 02/2026 | Apply Now';
		$data['meta_description'] = 'Indian Air Force Agniveervayu Vayu Intake 02/2026 Online Form. Apply now for Vayu Intake in the Indian Air Force.';
		$data['meta_keywords'] = 'Indian Air Force Agniveervayu, Vayu Intake 02/2026, Indian Air Force Recruitment';
		$data['content'] = $this->load->view('pages/indian_air_force_agniveervayu-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rajasthan_rssb_lab_attendant() {
		$data['title'] = 'Govt Desk - Rajasthan RSSB Lab Attendant Online Form 2025 | Apply Now';
		$data['meta_description'] = 'Rajasthan RSSB Lab Attendant Online Form 2025. Apply for Lab Attendant posts with RSSB.';
		$data['meta_keywords'] = 'Rajasthan RSSB Lab Attendant, RSSB Recruitment 2025, Lab Attendant Jobs Rajasthan';
		$data['content'] = $this->load->view('pages/rajasthan_rssb_lab_attendant-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function indian_army_ssc_technical_april_recruitment() {
		$data['title'] = 'Govt Desk - Indian Army SSC Technical April Recruitment 2025-26 | Apply Online';
		$data['meta_description'] = 'Indian Army SSC Technical April Recruitment 2025-26. Apply for Technical posts in Indian Army for April intake.';
		$data['meta_keywords'] = 'Indian Army SSC Technical, Indian Army Recruitment, SSC Technical 2025-26';
		$data['content'] = $this->load->view('pages/indian_army_ssc_technical_april_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

		public function upsc_epfo_eo_ao_apfc_recruitment() {
		$data['title'] = 'Govt Desk - UPSC EPFO EO / AO / APFC Recruitment 2025 | Apply for 400+ Vacancies';
		$data['meta_description'] = 'UPSC EPFO EO / AO / APFC Recruitment 2025. Apply for 400+ vacancies in EPFO EO, AO, and APFC posts.';
		$data['meta_keywords'] = 'UPSC EPFO Recruitment 2025, EO AO APFC Jobs, UPSC EPFO 2025 Apply Online';
		$data['content'] = $this->load->view('pages/upsc_epfo_eo_ao_apfc_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rrc_eastern_railway_apprentice_recruitment() {
		$data['title'] = 'Govt Desk - RRC Eastern Railway Apprentice Recruitment 2025 | Apply for 1000+ Posts';
		$data['meta_description'] = 'RRC Eastern Railway Apprentice Recruitment 2025. Apply for 1000+ apprentice vacancies in the Eastern Railway.';
		$data['meta_keywords'] = 'RRC Eastern Railway Apprentice, Railway Recruitment 2025, Eastern Railway Jobs';
		$data['content'] = $this->load->view('pages/rrc_eastern_railway_apprentice_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function bihar_btsc_tutor_nursing_recruitment() {
		$data['title'] = 'Govt Desk - Bihar BTSC Tutor Nursing Recruitment 2025 | Apply Online';
		$data['meta_description'] = 'Bihar BTSC Tutor Nursing Recruitment 2025. Apply for Nursing Tutor vacancies in Bihar BTSC.';
		$data['meta_keywords'] = 'Bihar BTSC Nursing Tutor, BTSC Recruitment 2025, Bihar Nursing Jobs';
		$data['content'] = $this->load->view('pages/bihar_btsc_tutor_nursing_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rbi_bank_grade_a_b_recruitment() {
		$data['title'] = 'Govt Desk - RBI Bank Grade A & B Recruitment 2025 | Apply for 300+ Vacancies';
		$data['meta_description'] = 'RBI Bank Grade A & B Recruitment 2025. Apply for 300+ vacancies for Grade A and B posts in RBI.';
		$data['meta_keywords'] = 'RBI Grade A B Recruitment 2025, RBI Bank Jobs, RBI Grade A B Apply';
		$data['content'] = $this->load->view('pages/rbi_bank_grade_a_b_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function dsssb_group_b_c_various_post_recruitment() {
		$data['title'] = 'Govt Desk - DSSSB Group B & C Various Post Recruitment 2025 | Apply for 1500+ Posts';
		$data['meta_description'] = 'DSSSB Group B & C Various Post Recruitment 2025. Apply for 1500+ vacancies for Group B & C posts in Delhi.';
		$data['meta_keywords'] = 'DSSSB Recruitment 2025, Group B C Posts Delhi, DSSSB Jobs';
		$data['content'] = $this->load->view('pages/dsssb_group_b_c_various_post_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function jssc_madhyamik_acharya_jtmacce_recruitment() {
		$data['title'] = 'Govt Desk - JSSC Madhyamik Acharya JTMACCE Recruitment 2025 | Apply Now';
		$data['meta_description'] = 'JSSC Madhyamik Acharya JTMACCE Recruitment 2025. Apply for Madhyamik Acharya vacancies in Jharkhand.';
		$data['meta_keywords'] = 'JSSC Madhyamik Acharya, JTMACCE Recruitment, Jharkhand Teacher Jobs';
		$data['content'] = $this->load->view('pages/jssc_madhyamik_acharya_jtmacce_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function rajasthan_high_court_class_peon_recruitment() {
		$data['title'] = 'Govt Desk - Rajasthan High Court Class IV Peon Recruitment 2025 | Apply Online';
		$data['meta_description'] = 'Rajasthan High Court Class IV Peon Recruitment 2025. Apply for Peon posts in Rajasthan High Court.';
		$data['meta_keywords'] = 'Rajasthan High Court Peon, Rajasthan Class IV Jobs, Rajasthan High Court Recruitment';
		$data['content'] = $this->load->view('pages/rajasthan_high_court_class_peon_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function bihar_bpsc_special_school_teacher() {
		$data['title'] = 'Govt Desk - Bihar BPSC Special School Teacher Recruitment 2025 | Apply for 200+ Posts';
		$data['meta_description'] = 'Bihar BPSC Special School Teacher Recruitment 2025. Apply for teacher posts for special schools in Bihar.';
		$data['meta_keywords'] = 'Bihar BPSC Teacher, BPSC Special School Recruitment, Bihar Teacher Jobs 2025';
		$data['content'] = $this->load->view('pages/bihar_bpsc_special_school_teacher-jobs', [], true);
		$this->load->view('main', $data);
	}

	public function aiims_norcet_9th_phase_recruitment() {
		$data['title'] = 'Govt Desk - AIIMS NORCET 9th Phase Recruitment 2025 | Apply for 3000+ Nursing Jobs';
		$data['meta_description'] = 'AIIMS NORCET 9th Phase Recruitment 2025. Apply for 3000+ nursing officer posts across AIIMS hospitals.';
		$data['meta_keywords'] = 'AIIMS NORCET 9th Phase, AIIMS Nursing Recruitment, AIIMS Jobs 2025';
		$data['content'] = $this->load->view('pages/aiims_norcet_9th_phase_recruitment-jobs', [], true);
		$this->load->view('main', $data);
	}
	
	public function MPPSCFoodSafetyOfficerFSORecruitment2025() {
        $data['title'] = 'Govt Desk - MPPSC Food Safety Officer FSO Recruitment 2025';
        $data['meta_description'] = 'Apply for MPPSC Food Safety Officer FSO Recruitment 2025';
        $data['meta_keywords'] = 'MPPSC Food Safety Officer FSO Recruitment 2025';
        $data['content'] = $this->load->view('pages/MPPSCFoodSafetyOfficerFSORecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
	public function RRBMinisterialandIsolatedCategoriesApplicationStatus2025() {
        $data['title'] = 'Govt Desk - RRB Ministerial and Isolated Categories Application Status 2025';
        $data['meta_description'] = 'Apply for RRB Ministerial and Isolated Categories Application Status 2025';
        $data['meta_keywords'] = 'RRB Ministerial and Isolated Categories Application Status 2025';
        $data['content'] = $this->load->view('pages/RRBMinisterialandIsolatedCategoriesApplicationStatus2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
	public function IAFGroupYMedicalAssistantAirmenRecruitment2025() {
        $data['title'] = 'Govt Desk - IAF Group Y Medical Assistant Airmen Recruitment 2025';
        $data['meta_description'] = 'Apply for IAF Group Y Medical Assistant Airmen Recruitment 2025';
        $data['meta_keywords'] = 'IAF Group Y Medical Assistant Airmen Recruitment 2025';
        $data['content'] = $this->load->view('pages/IAFGroupYMedicalAssistantAirmenRecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
	public function NHPCApprenticeRecruitment2025() {
        $data['title'] = 'Govt Desk - NHPC Apprentice Recruitment 2025';
        $data['meta_description'] = 'Apply for NHPC Apprentice Recruitment 2025';
        $data['meta_keywords'] = 'NHPC Apprentice Recruitment 2025';
        $data['content'] = $this->load->view('pages/NHPCApprenticeRecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
	public function AIIMSCREGroupBCVariousPostRecruitment2025() {
        $data['title'] = 'Govt Desk - AIIMS CRE Group B & C Various Post Recruitment 2025';
        $data['meta_description'] = 'Apply for AIIMS CRE Group B & C Various Post Recruitment 2025';
        $data['meta_keywords'] = 'AIIMS CRE Group B & C Various Post Recruitment 2025';
        $data['content'] = $this->load->view('pages/AIIMSCREGroupBCVariousPostRecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
	public function BiharBSEBSakshamtaParikshaPhase4th5thRecruitment2025() {
        $data['title'] = 'Govt Desk - Bihar BSEB Sakshamta Pariksha Phase 4th & 5th Recruitment 2025';
        $data['meta_description'] = 'Apply for Bihar BSEB Sakshamta Pariksha Phase 4th & 5th Recruitment 2025';
        $data['meta_keywords'] = 'Bihar BSEB Sakshamta Pariksha Phase 4th & 5th Recruitment 2025';
        $data['content'] = $this->load->view('pages/BiharBSEBSakshamtaParikshaPhase4th5thRecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
	public function railwayicftradeapprenticerecruitment2025() {
        $data['title'] = 'Govt Desk - Railway ICF Trade Apprentice Recruitment 2025';
        $data['meta_description'] = 'Apply for Railway ICF Trade Apprentice Recruitment 2025';
        $data['meta_keywords'] = 'Railway ICF Trade Apprentice Recruitment 2025';
        $data['content'] = $this->load->view('pages/railwayicftradeapprenticerecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
    public function sscmultitaskingstaffmtsrecruitment2025() {
        $data['title'] = 'Govt Desk - SSC MTS / Havaldar Recruitment 2025';
        $data['meta_description'] = 'Apply for SSC MTS / Havaldar Recruitment 2025';
        $data['meta_keywords'] = 'SSC MTS / Havaldar Recruitment 2025';
        $data['content'] = $this->load->view('pages/sscmultitaskingstaffmtsrecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    }
 
	public function ibaciogradeiiexecutiverecruitment2025() {
        $data['title'] = 'Govt Desk - IB ACIO Grade-II / Executive Recruitment 2025';
        $data['meta_description'] = 'Apply for IB ACIO Grade-II / Executive Recruitment 2025';
        $data['meta_keywords'] = 'IB ACIO Grade-II / Executive Recruitment 2025';
        $data['content'] = $this->load->view('pages/ibaciogradeiiexecutiverecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 

	public function sidbiassistantmanagerrecruitment2025() {
        $data['title'] = 'Govt Desk - SIDBI Assistant Manager Recruitment 2025';
        $data['meta_description'] = 'Apply for SIDBI Assistant Manager Recruitment 2025';
        $data['meta_keywords'] = 'SIDBI Assistant Manager Recruitment 2025';
        $data['content'] = $this->load->view('pages/sidbiassistantmanagerrecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
	public function uppsctgtrecruitment2025() {
        $data['title'] = 'Govt Desk - UPPSC Assistant Teacher TGT Recruitment 2025';
        $data['meta_description'] = 'Apply for UPPSC Assistant Teacher TGT Recruitment 2025';
        $data['meta_keywords'] = 'UPPSC Assistant Teacher TGT Recruitment 2025';
        $data['content'] = $this->load->view('pages/uppsctgtrecruitment2025-jobs', [], true);
        $this->load->view('main', $data);
    } 
	
	public function westbengalassistantteacherrecruitment2025dateextend() {
        $data['title'] = 'Govt Desk - West Bengal Assistant Teacher Recruitment 2025';
        $data['meta_description'] = 'Apply for West Bengal Assistant Teacher Recruitment 2025';
        $data['meta_keywords'] = 'West Bengal Assistant Teacher Recruitment 2025';
        $data['content'] = $this->load->view('pages/westbengalassistantteacherrecruitment2025dateextend-jobs', [], true);
        $this->load->view('main', $data);
    } 
	

        public function rssb_primary_school_teacher_recruitment() {
        $data['title'] = 'Govt Desk - RSSB Primary School Teacher Recruitment 2025';
        $data['meta_description'] = 'RSSB Primary School Teacher Recruitment 2025';
        $data['meta_keywords'] = 'RSSB Primary School Teacher Recruitment 2025';
        $data['content'] = $this->load->view('pages/rssb_primary_school_teacher_recruitment-jobs', [], true);
        $this->load->view('main', $data);
        } 
        public function rssb_aayush_officer_recruitment() {
        $data['title'] = 'Govt Desk - RSSB Aayush Officer Recruitment 2025';
        $data['meta_description'] = 'RSSB Aayush Officer Recruitment 2025';
        $data['meta_keywords'] = 'RSSB Aayush Officer Recruitment 2025';
        $data['content'] = $this->load->view('pages/rssb_aayush_officer_recruitment-jobs', [], true);
        $this->load->view('main', $data);
         } 
         public function rssb_upper_school_teacher_recruitment() {
        $data['title'] = 'Govt Desk - RSSB Upper School Teacher Recruitment 2025';
        $data['meta_description'] = 'RSSB Upper School Teacher Recruitment 2025';
        $data['meta_keywords'] = 'RSSB Upper School Teacher Recruitment 2025';
        $data['content'] = $this->load->view('pages/rssb-upper-school-teacher-recruitment-jobs', [], true);
        $this->load->view('main', $data);
         } 
        public function railway_rrb_technician_cen_recruitment() {
        $data['title'] = 'Govt Desk - Railway RRB Technician CEN.No 02/2025 Recruitment 2025';
        $data['meta_description'] = 'Railway RRB Technician CEN.No 02/2025 Recruitment 2025';
        $data['meta_keywords'] = 'Railway RRB Technician CEN.No 02/2025 Recruitment 2025';
        $data['content'] = $this->load->view('pages/railway_rrb_technician_cen_recruitment-jobs', [], true);
        $this->load->view('main', $data);
         } 



	//new


	    public function mppgcl_ae_je_other_post_recruitment() {
	        $data['title'] = 'Govt Desk - MPPGCL AE/ JE & Other Post Recruitment 2025';
	        $data['meta_description'] = 'MPPGCL AE/ JE & Other Post Recruitment 2025';
	        $data['meta_keywords'] = 'MPPGCL AE/ JE & Other Post Recruitment 2025';
	        $data['content'] = $this->load->view('pages/mppgcl_ae_je_other_post_recruitment-jobs', [], true);
	        $this->load->view('main', $data);
	    } 
		public function RailwaySWRApprenticeRecruitment2025() {
	        $data['title'] = 'Govt Desk - Railway SWR Apprentice Recruitment 2025';
	        $data['meta_description'] = 'Apply for Railway SWR Apprentice Recruitment 2025';
	        $data['meta_keywords'] = 'Railway SWR Apprentice Recruitment 2025';
	        $data['content'] = $this->load->view('pages/RailwaySWRApprenticeRecruitment2025-jobs', [], true);
	        $this->load->view('main', $data);
	    } 
		
	    public function bihariticatcounsellingchoicefilling2025() {
	        $data['title'] = 'Govt Desk - Bihar ITI CAT Counselling/ Choice Filling 2025';
	        $data['meta_description'] = 'Apply for Bihar ITI CAT Counselling/ Choice Filling 2025';
	        $data['meta_keywords'] = 'Bihar ITI CAT Counselling/ Choice Filling 2025';
	        $data['content'] = $this->load->view('pages/bihariticatcounsellingchoicefilling2025-jobs', [], true);
	        $this->load->view('main', $data);
	    } 

		public function csbcbiharpolicedriverconstablerecruitment2025() {
	        $data['title'] = 'Govt Desk - CSBC Bihar Police Driver Constable Recruitment 2025';
	        $data['meta_description'] = 'Apply for CSBC Bihar Police Driver Constable Recruitment 2025';
	        $data['meta_keywords'] = 'CSBC Bihar Police Driver Constable Recruitment 2025';
	        $data['content'] = $this->load->view('pages/csbcbiharpolicedriverconstablerecruitment2025-jobs', [], true);
	        $this->load->view('main', $data);
	    } 
		public function ssc_chsl_online_correction() {
	    $data['title'] = 'SSC CHSL 10+2 Correction Form 2025 – Edit Application Online';
	    $data['meta_description'] = 'Correct your SSC CHSL 10+2 Application Form 2025 online. Know the last date, process and official link for SSC CHSL correction window.';
	    $data['meta_keywords'] = 'SSC CHSL correction form 2025, SSC CHSL edit form 2025, SSC 10+2 correction, SSC CHSL application correction';
	    $data['content'] = $this->load->view('pages/ssc_chsl_online_correction-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function indian_navy_ssc_executive_it_january() {
	    $data['title'] = 'Indian Navy SSC Executive IT January 2026 Online Form';
	    $data['meta_description'] = 'Apply online for Indian Navy SSC Executive IT January 2026 batch. Check eligibility, age limit, and official notification details.';
	    $data['meta_keywords'] = 'Indian Navy SSC Executive IT 2026, Navy IT Officer Recruitment 2026, Indian Navy Jobs 2026';
	    $data['content'] = $this->load->view('pages/indian_navy_ssc_executive_it_january-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function supreme_court_sci_court_master_recruitment() {
	    $data['title'] = 'Supreme Court Court Master Recruitment 2025 – Apply Now';
	    $data['meta_description'] = 'Supreme Court of India invites applications for Court Master Recruitment 2025. Check eligibility, vacancy, and how to apply online.';
	    $data['meta_keywords'] = 'Supreme Court Recruitment 2025, SCI Court Master Vacancy, Govt Jobs 2025, Court Jobs 2025';
	    $data['content'] = $this->load->view('pages/supreme_court_sci_court_master_recruitment-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function csbc_bihar_police_driver_constable_recruitment() {
	    $data['title'] = 'CSBC Bihar Police Driver Constable Recruitment 2025';
	    $data['meta_description'] = 'Apply online for Bihar Police Driver Constable Recruitment 2025. Know eligibility, physical standards, and important dates.';
	    $data['meta_keywords'] = 'Bihar Police Driver Constable 2025, CSBC Recruitment 2025, Bihar Police Bharti';
	    $data['content'] = $this->load->view('pages/csbc_bihar_police_driver_constable_recruitment-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function ssc_mts_havaldar_new_correction() {
	    $data['title'] = 'SSC MTS / Havaldar Correction Form 2025 – Edit Details Online';
	    $data['meta_description'] = 'SSC opens correction window for MTS and Havaldar Exam 2025. Edit your application form before the deadline.';
	    $data['meta_keywords'] = 'SSC MTS correction 2025, SSC Havaldar form edit, SSC correction window 2025';
	    $data['content'] = $this->load->view('pages/ssc_mts_havaldar_new_correction-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function ibps_clerk_15th_recruitment() {
	    $data['title'] = 'IBPS Clerk 15th Recruitment 2025 – Apply Online Now';
	    $data['meta_description'] = 'IBPS Clerk CRP XV Notification 2025 released. Apply online for clerk vacancies in public sector banks. Check eligibility and syllabus.';
	    $data['meta_keywords'] = 'IBPS Clerk 2025, IBPS CRP XV Notification, Bank Clerk Vacancy 2025';
	    $data['content'] = $this->load->view('pages/ibps_clerk_15th_recruitment-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function rpsc_assistant_statistical_officer_aso_recruitment() {
	    $data['title'] = 'RPSC ASO Recruitment 2025 – Assistant Statistical Officer Vacancy';
	    $data['meta_description'] = 'Apply for RPSC Assistant Statistical Officer (ASO) Recruitment 2025. Get age limit, selection process, and online form link.';
	    $data['meta_keywords'] = 'RPSC ASO Recruitment 2025, Rajasthan Statistical Officer Vacancy, RPSC Jobs 2025';
	    $data['content'] = $this->load->view('pages/rpsc_assistant_statistical_officer_aso_recruitment-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function chandigarh_jbt_primary_teacher_recruitment() {
	    $data['title'] = 'Chandigarh JBT Primary Teacher Recruitment 2025';
	    $data['meta_description'] = 'Chandigarh Administration JBT Primary Teacher Vacancy 2025 out now. Check eligibility, syllabus, and online application details.';
	    $data['meta_keywords'] = 'Chandigarh JBT Recruitment 2025, Primary Teacher Jobs, JBT Bharti 2025';
	    $data['content'] = $this->load->view('pages/chandigarh_jbt_primary_teacher_recruitment-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function oriental_insurance_oicl_assistant_recruitment() {
	    $data['title'] = 'Oriental Insurance OICL Assistant Recruitment 2025';
	    $data['meta_description'] = 'OICL Assistant Recruitment 2025 Notification is out. Apply online for assistant jobs in Oriental Insurance Company Limited.';
	    $data['meta_keywords'] = 'OICL Assistant Recruitment 2025, Oriental Insurance Jobs, OICL Bharti 2025';
	    $data['content'] = $this->load->view('pages/oriental_insurance_oicl_assistant_recruitment-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function bank_of_baroda_so_recruitment() {
	    $data['title'] = 'Bank of Baroda SO Recruitment 2025 – Apply Online';
	    $data['meta_description'] = 'Bank of Baroda invites online applications for Specialist Officer (SO) posts 2025. Check eligibility, exam pattern, and salary.';
	    $data['meta_keywords'] = 'Bank of Baroda SO 2025, Specialist Officer Recruitment, BOB Jobs 2025';
	    $data['content'] = $this->load->view('pages/bank_of_baroda_so_recruitment-jobs', [], true);
	    $this->load->view('main', $data);
	}

	public function up_police_upprpb_one_time_registration_otr() {
	    $data['title'] = 'UP Police UPPRPB OTR Online Form 2025 – One Time Registration';
	    $data['meta_description'] = 'UPPRPB OTR Form 2025 now open. One Time Registration is mandatory for all UP Police recruitments. Register online now.';
	    $data['meta_keywords'] = 'UP Police OTR 2025, UPPRPB Registration, One Time Registration UP Police';
	    $data['content'] = $this->load->view('pages/up_police_upprpb_one_time_registration_otr', [], true);
	    $this->load->view('main', $data);
	}

	public function railway_blw_apprentice() {
	    $data['title'] = 'Railway BLW Apprentice Recruitment 2025 – Apply Now';
	    $data['meta_description'] = 'Indian Railway BLW Apprentice 2025 Notification. Apply online for ITI and Non-ITI apprentice positions. Check age limit and trades.';
	    $data['meta_keywords'] = 'Railway BLW Apprentice 2025, Indian Railway Jobs, BLW Varanasi Recruitment';
	    $data['content'] = $this->load->view('pages/railway_blw_apprentice', [], true);
	    $this->load->view('main', $data);
	}

	public function uppsc_computer_assistant_recruitment() {
	    $data['title'] = 'UPPSC Computer Assistant Recruitment 2025 – Apply Online';
	    $data['meta_description'] = 'Uttar Pradesh Public Service Commission (UPPSC) invites application for Computer Assistant 2025. Check exam date, syllabus and apply now.';
	    $data['meta_keywords'] = 'UPPSC Computer Assistant 2025, UP Government Jobs, UPPSC Recruitment 2025';
	    $data['content'] = $this->load->view('pages/uppsc_computer_assistant_recruitment', [], true);
	    $this->load->view('main', $data);
	}

	public function pfrda_assistant_manager_grade() {
	    $data['title'] = 'PFRDA Assistant Manager Grade A Recruitment 2025';
	    $data['meta_description'] = 'PFRDA Assistant Manager (Grade A) Recruitment 2025 Notification released. Apply online for various streams including General and Legal.';
	    $data['meta_keywords'] = 'PFRDA Recruitment 2025, Assistant Manager Grade A, PFRDA Jobs';
	    $data['content'] = $this->load->view('pages/pfrda_assistant_manager_grade', [], true);
	    $this->load->view('main', $data);
	}

	public function army_school_awes_tgt_pgt_prt_recruitment() {
	    $data['title'] = 'AWES Army School TGT, PGT, PRT Recruitment 2025';
	    $data['meta_description'] = 'AWES Army Public School Recruitment 2025: Apply for PGT, TGT, PRT teacher posts. Check eligibility, syllabus and exam dates.';
	    $data['meta_keywords'] = 'Army School Teacher Recruitment 2025, AWES PGT TGT PRT, Teaching Jobs 2025';
	    $data['content'] = $this->load->view('pages/army_school_awes_tgt_pgt_prt_recruitment', [], true);
	    $this->load->view('main', $data);
	}

	public function upsc_cds_ii_correction_edit() {
	    $data['title'] = 'UPSC CDS II 2025 Correction Form – Edit Application Online';
	    $data['meta_description'] = 'UPSC opens correction/edit window for CDS II 2025 exam. Know how to update your details online before the last date.';
	    $data['meta_keywords'] = 'UPSC CDS II Correction 2025, CDS Edit Form 2025, UPSC Form Correction';
	    $data['content'] = $this->load->view('pages/upsc_cds_ii_correction_edit', [], true);
	    $this->load->view('main', $data);
	}

	public function rrb_paramedical_staff_recruitment() {
	    $data['title'] = 'RRB Paramedical Staff Recruitment 2025 – Apply Now';
	    $data['meta_description'] = 'Railway RRB Paramedical Staff Recruitment 2025 Notification. Apply online for Staff Nurse, Lab Technician, Pharmacist & other posts.';
	    $data['meta_keywords'] = 'RRB Paramedical 2025, Railway Staff Nurse Recruitment, RRB Jobs 2025';
	    $data['content'] = $this->load->view('pages/rrb_paramedical_staff_recruitment', [], true);
	    $this->load->view('main', $data);
	}

   public function bihar_jeevika_recruitment() {
    $data['title'] = 'Bihar Jeevika Recruitment 2025 Apply Online | Vacancy, Eligibility, Notification';
    $data['meta_description'] = 'Apply online for Bihar Jeevika Recruitment 2025. Check vacancy details, eligibility, salary, age limit, selection process, and download official notification PDF.';
    $data['meta_keywords'] = 'Bihar Jeevika Recruitment 2025, Jeevika Vacancy 2025, Bihar Jeevika Apply Online, Jeevika Notification 2025, Bihar Govt Jobs 2025, Jeevika Eligibility, Jeevika Salary';
    $data['content'] = $this->load->view('pages/bihar_jeevika_recruitment', [], true);
    $this->load->view('main', $data);
	}

	public function ofss_bihar_intermediate_spot_admission() {
	    $data['title'] = 'OFSS Bihar 11th Admission 2025-27 Spot Round | Apply Now';
	    $data['meta_description'] = 'OFSS Bihar 11th Intermediate Spot Admission 2025-27 Online Form. Check eligibility, admission process, important dates, and apply online through ofssbihar.in.';
	    $data['meta_keywords'] = 'OFSS Bihar 11th Admission 2025, OFSS Bihar Spot Round, OFSS Bihar Intermediate Admission, OFSS 2025 Online Form, ofssbihar.in';
	    $data['content'] = $this->load->view('pages/ofss_bihar_intermediate_spot_admission', [], true);
	    $this->load->view('main', $data);
	}

	public function indian_navy_ssc_officer_june() {
	    $data['title'] = 'Indian Navy SSC Officer Recruitment 2025 Apply Online | June 2026 Batch';
	    $data['meta_description'] = 'Apply for Indian Navy SSC Officer June 2026 Batch. Check eligibility, vacancy details, selection process, and apply online at joinindiannavy.gov.in.';
	    $data['meta_keywords'] = 'Indian Navy SSC Officer Recruitment 2025, Navy June 2026 Batch, Indian Navy Online Form, Navy SSC Entry Eligibility, joinindiannavy.gov.in';
	    $data['content'] = $this->load->view('pages/indian_navy_ssc_officer_june', [], true);
	    $this->load->view('main', $data);
	}

	public function dsssb_non_teaching_various_recruitment() {
    $data['title'] = 'DSSSB Non-Teaching Various Post Online Form 2025 - Apply Now';
    $data['meta_description'] = 'Apply online for DSSSB Non-Teaching Various Posts Recruitment 2025. Check eligibility, important dates, and selection process.';
    $data['meta_keywords'] = 'DSSSB 2025, DSSSB Non Teaching Recruitment, DSSSB Online Form, DSSSB Vacancy Details';
    $data['content'] = $this->load->view('pages/dsssb_non_teaching_various_recruitment', [], true);
    $this->load->view('main', $data);
	}

	public function ofss_bihar_intermediate_spot() {
	    $data['title'] = 'OFSS Bihar 11th Intermediate Spot Admission 2025-27 - Apply Online';
	    $data['meta_description'] = 'OFSS Bihar Intermediate (11th) Spot Admission 2025-27 online application. Check eligibility, date, and how to apply.';
	    $data['meta_keywords'] = 'OFSS Bihar 11th Admission, Spot Admission 2025, OFSS Bihar Spot Round';
	    $data['content'] = $this->load->view('pages/ofss_bihar_intermediate_spot', [], true);
	    $this->load->view('main', $data);
	}

	public function bssc_graduate_level_recruitment() {
	    $data['title'] = 'Bihar BSSC 4th Graduate Level Recruitment 2025 - Apply Online';
	    $data['meta_description'] = 'Bihar BSSC 4th Graduate Level Vacancy 2025 notification out. Apply online, check eligibility, age, and selection process.';
	    $data['meta_keywords'] = 'BSSC Graduate Level Recruitment 2025, Bihar BSSC 4th Level Jobs, BSSC Online Form';
	    $data['content'] = $this->load->view('pages/bssc_graduate_level_recruitment', [], true);
	    $this->load->view('main', $data);
	}

	public function bihar_bssc_office_attendant_online() {
	    $data['title'] = 'Bihar BSSC Office Attendant Recruitment 2025 - Apply for 3727 Posts';
	    $data['meta_description'] = 'Bihar BSSC Office Attendant 2025 notification for 3727 posts. Check eligibility, age limit, exam date, and apply online.';
	    $data['meta_keywords'] = 'BSSC Office Attendant 2025, Bihar BSSC Recruitment, BSSC 10th Pass Jobs, BSSC Online Form 2025';
	    $data['content'] = $this->load->view('pages/bihar_bssc_office_attendant_online', [], true);
	    $this->load->view('main', $data);
	}
	public function sbi_bank_clerk_recruitment() {
    $data['title'] = 'SBI Clerk Recruitment 2025: Notification, Apply Online, Eligibility, Syllabus';
    $data['meta_description'] = 'Check SBI Clerk Recruitment 2025 Notification, Apply Online Form, Eligibility Criteria, Syllabus PDF, Age Limit, Salary, Exam Pattern and more.';
    $data['meta_keywords'] = 'SBI Clerk Recruitment 2025, SBI Clerk Notification, SBI Clerk Online Form 2025, SBI Clerk Eligibility, SBI Clerk Syllabus, SBI Clerk Age Limit, SBI Clerk Salary, Bank Clerk Jobs 2025';
    $data['content'] = $this->load->view('pages/sbi_bank_clerk_recruitment', [], true);
    $this->load->view('main', $data);
	}

	public function indian_army_jag_123rd_course_april() {
    $data['title'] = 'Indian Army JAG 123rd Entry April 2026: Apply Online, Notification, Eligibility';
    $data['meta_description'] = 'Join Indian Army JAG 123rd Entry Scheme April 2026 – Check Official Notification, Apply Online, Eligibility Criteria, Important Dates, and Selection Process.';
    $data['meta_keywords'] = 'Indian Army JAG Entry 2026, JAG 123rd Course April 2026, Indian Army JAG Notification, Army JAG Eligibility, Army Law Officer Vacancy 2026, Join Indian Army Online Form';
    $data['content'] = $this->load->view('pages/indian_army_jag_123rd_course_april', [], true);
    $this->load->view('main', $data);
	}
	public function bank_of_baroda_sales_manager_officer_recruitment() {
    $data['title'] = 'Bank of Baroda Sales Manager Recruitment 2025 | Apply Online Form';
    $data['meta_description'] = 'Bank of Baroda Sales Manager and Officer Recruitment 2025 Apply Online Form. Check eligibility, salary, age limit, last date, and full notification.';
    $data['meta_keywords'] = 'Bank of Baroda Sales Manager Recruitment 2025, Bank of Baroda Officer Vacancy, BOB Online Form 2025, Bank Jobs 2025';
    $data['content'] = $this->load->view('pages/bank_of_baroda_sales_manager_officer_recruitment', [], true);
    $this->load->view('main', $data);
    }


	public function upsc_ies_iss_daf_online() {
    $data['title'] = 'UPSC IES ISS DAF Online Form 2025 | Apply Now';
    $data['meta_description'] = 'UPSC IES / ISS DAF Online Form 2025 available. Fill Indian Economic Service / Indian Statistical Service DAF form. Check eligibility, date, and instructions.';
    $data['meta_keywords'] = 'UPSC IES ISS DAF Online Form 2025, UPSC IES 2025, UPSC ISS 2025, UPSC DAF Form 2025';
    $data['content'] = $this->load->view('pages/upsc_ies_iss_daf_online', [], true);
    $this->load->view('main', $data);
    }

	public function bihar_shs_ophthalmic_assistant_recruitment() {
    $data['title'] = 'Bihar SHS Ophthalmic Assistant Recruitment 2025 | Apply Online';
    $data['meta_description'] = 'Bihar State Health Society Ophthalmic Assistant Recruitment 2025 Online Form. Check eligibility, age limit, and application process.';
    $data['meta_keywords'] = 'Bihar SHS Ophthalmic Assistant Recruitment 2025, SHSB Bihar Jobs, Bihar Health Assistant Vacancy, Bihar Govt Jobs 2025';
    $data['content'] = $this->load->view('pages/bihar_shs_ophthalmic_assistant_recruitment', [], true);
    $this->load->view('main', $data);
    }

	public function niacl_ao_scale_i_online_form() {
    $data['title'] = 'NIACL AO Recruitment 2025 | Scale I Apply Online';
    $data['meta_description'] = 'NIACL Administrative Officer (AO) Scale I Recruitment 2025 Apply Online Form. Check eligibility, vacancy details, and important dates.';
    $data['meta_keywords'] = 'NIACL AO Recruitment 2025, NIACL Scale 1 AO Apply Online, NIACL Jobs 2025, Insurance AO Vacancy';
    $data['content'] = $this->load->view('pages/niacl_ao_scale_i_online_form', [], true);
    $this->load->view('main', $data);
    }
    public function uppsc_gic_lecturer_recruitment() {
    $data['title'] = 'UPPSC GIC Lecturer Recruitment 2025 | Apply Online';
    $data['meta_description'] = 'Apply online for UPPSC GIC Lecturer Recruitment 2025. Check eligibility, vacancy details, important dates, and application process.';
    $data['meta_keywords'] = 'UPPSC GIC Lecturer Recruitment 2025, Uttar Pradesh Public Service Commission Jobs, UPPSC Lecturer Apply Online';
    $data['content'] = $this->load->view('pages/uppsc_gic_lecturer_recruitment', [], true);
    $this->load->view('main', $data);
	}

	public function indian_army_ncc_123rd_course_april() {
	    $data['title'] = 'Indian Army NCC 123rd Course April 2026 | Apply Online';
	    $data['meta_description'] = 'Join Indian Army NCC 123rd Special Entry April 2026. Check eligibility, selection process, and apply online.';
	    $data['meta_keywords'] = 'Indian Army NCC 123rd Course April 2026, Indian Army NCC Special Entry, NCC Entry Scheme 2026';
	    $data['content'] = $this->load->view('pages/indian_army_ncc_123rd_course_april', [], true);
	    $this->load->view('main', $data);
	}

	public function bihar_shs_anm_online_form() {
	    $data['title'] = 'Bihar SHS ANM Recruitment 2025 | Apply Online';
	    $data['meta_description'] = 'Apply online for Bihar SHS ANM Recruitment 2025. Check eligibility, vacancy details, and application process.';
	    $data['meta_keywords'] = 'Bihar SHS ANM Recruitment 2025, Bihar State Health Society Jobs, Bihar ANM Apply Online';
	    $data['content'] = $this->load->view('pages/bihar_shs_anm_online_form', [], true);
	    $this->load->view('main', $data);
	}

	public function up_police_si_syllabus_exam_pattern() {
	    $data['title'] = 'UP Police SI Syllabus & Exam Pattern 2025';
	    $data['meta_description'] = 'Check UP Police Sub Inspector (SI) syllabus and exam pattern 2025. Get detailed subject-wise syllabus and marking scheme.';
	    $data['meta_keywords'] = 'UP Police SI Syllabus 2025, UP Police Sub Inspector Exam Pattern, UP SI Syllabus PDF Download';
	    $data['content'] = $this->load->view('pages/up_police_si_syllabus_exam_pattern', [], true);
	    $this->load->view('main', $data);
	}

    public function up_police_si_recruitment() {
    $data['title'] = 'UP Police SI Recruitment 2025 – Apply Online for 4,543 Sub-Inspector Posts';
    $data['meta_description'] = 'UPPRPB has released the official notification for UP Police SI Recruitment 2025 with 4,543 vacancies. Apply online, check eligibility, selection process and key dates.';
    $data['meta_keywords'] = 'UP Police SI Recruitment 2025, UPPRPB SI Vacancy 2025, Sub Inspector Uttar Pradesh, apply UP SI 2025';
    $data['content'] = $this->load->view('pages/up_police_si_recruitment', [], true);
    $this->load->view('main', $data);
   }
  
   
   public function bsf_hc_ro_rm_recruitment() {
    $data['title'] = 'BSF HC RO / RM Recruitment 2025 | Apply Online';
    $data['meta_description'] = 'Apply online for BSF Head Constable (RO / RM) Recruitment 2025. Check eligibility, vacancy details, important dates, and selection process.';
    $data['meta_keywords'] = 'BSF HC RO RM Recruitment 2025, Border Security Force Jobs, BSF Head Constable Apply Online';
    $data['content'] = $this->load->view('pages/bsf_hc_ro_rm_recruitment', [], true);
    $this->load->view('main', $data);
	}

	public function indian_navy_tradesman_skilled_apprentice() {
	    $data['title'] = 'Indian Navy Tradesman Skilled Apprentice Recruitment 2025 | Apply Online';
	    $data['meta_description'] = 'Indian Navy Tradesman Skilled Apprentice Recruitment 2025. Check eligibility, vacancy details, application process, and important dates.';
	    $data['meta_keywords'] = 'Indian Navy Tradesman Skilled Apprentice Recruitment 2025, Indian Navy Apprentice Jobs, Indian Navy Apply Online';
	    $data['content'] = $this->load->view('pages/indian_navy_tradesman_skilled_apprentice', [], true);
	    $this->load->view('main', $data);
	}
	public function rpsc_1st_grade_teacher_recruitment() {
    $data['title'] = 'RPSC 1st Grade Teacher Recruitment 2025 | Apply Online';
    $data['meta_description'] = 'Apply online for RPSC 1st Grade Teacher Recruitment 2025. Check eligibility, vacancy details, syllabus, and selection process.';
    $data['meta_keywords'] = 'RPSC 1st Grade Teacher Recruitment 2025, Rajasthan Teacher Vacancy, RPSC Teaching Jobs, Apply Online';
    $data['content'] = $this->load->view('pages/rpsc_1st_grade_teacher_recruitment', [], true);
    $this->load->view('main', $data);
	}

	public function railway_rrc_cr_apprentice_recruitment() {
	    $data['title'] = 'Railway RRC CR Apprentice Recruitment 2025 | Apply Online';
	    $data['meta_description'] = 'Railway RRC Central Railway Apprentice Recruitment 2025. Check eligibility, vacancy details, application dates, and selection process.';
	    $data['meta_keywords'] = 'Railway RRC CR Apprentice Recruitment 2025, Central Railway Jobs, Railway Apprentice Vacancy, Apply Online';
	    $data['content'] = $this->load->view('pages/railway_rrc_cr_apprentice_recruitment', [], true);
	    $this->load->view('main', $data);
	}
	public function dsssb_delhi_high_court_attendant() {
	    $data['title'] = 'DSSSB Delhi High Court Attendant Recruitment 2025 | Apply Online';
	    $data['meta_description'] = 'DSSSB Delhi High Court Attendant Recruitment 2025. Check eligibility, vacancy details, application dates, and selection process.';
	    $data['meta_keywords'] = 'DSSSB Delhi High Court Attendant Recruitment 2025';
	    $data['content'] = $this->load->view('pages/dsssb_delhi_high_court_attendant', [], true);
	    $this->load->view('main', $data);
	}


}
