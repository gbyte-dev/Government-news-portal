<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends CI_Controller {
	 
	 public function __construct() {
        parent::__construct(); 
		date_default_timezone_set('Asia/Kolkata');
    }
		
    public function index() {
		$data['title'] = 'Latest Result 2025 | Govt Desk - govtdesk.com';
		$data['meta_description'] = 'Latest Result 2025 | All India Result for Recruitment / Admission / Mains Pravesh Patra / Interview Letter | Govt Desk - govtdesk.com Result 2025';
		$data['meta_keywords'] = 'Latest Result 2025 | All India Result for Recruitment / Admission / Mains Pravesh Patra / Interview Letter';
		$data['content'] = $this->load->view('result', [], true);
		$this->load->view('main', $data);
	}
	public function brabu_ug_2nd_merit_list() {
        $data['title'] = 'BRABU UG 2nd Merit List 2025-29 - Govt Desk | govtdesk.com';
        $data['meta_description'] = ' BRABU UG 2nd Merit List 2025-29 | BTC 2nd, 4th Semester Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = ' BRABU UG 2nd Merit List 2025-29 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/brabu_ug_2nd_merit_list', [], true);
        $this->load->view('main', $data);
    }
	
	public function UPDELEdResult2025BTC2nd4thsemesterresult() {
        $data['title'] = 'UP DELEd Result 2025 | BTC 2nd, 4th Semester Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = ' UP DELEd Result 2025 | BTC 2nd, 4th Semester Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = ' UP DELEd Result 2025 | BTC 2nd, 4th Semester Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/UPDELEdResult2025BTC2nd4thsemesterresult', [], true);
        $this->load->view('main', $data);
    }
	
	public function bihardiplomaresult2025() {
        $data['title'] = 'Bihar Diploma DECE LE 2025 1st Round Allotment Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar Diploma DECE LE 2025 1st Round Allotment Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = ' Bihar Diploma DECE LE 2025 1st Round Allotment Result| BTC 2nd, 4th Semester Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihardiplomaresult2025', [], true);
        $this->load->view('main', $data);
    }
	public function mp_mpesb_addet_result() {
        $data['title'] = 'MP MPESB ADDET Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'MP MPESB ADDET Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = ' MP MPESB ADDET Result 2025 | BTC 2nd, 4th Semester Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/mp_mpesb_addet_result', [], true);
        $this->load->view('main', $data);
    }
	
	
	public function nta_ugc_net_june_result() {
        $data['title'] = 'NTA UGC NET June Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'NTA UGC NET June Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = ' NTA UGC NET June Result 2025 | BTC 2nd, 4th Semester Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/nta_ugc_net_june_result', [], true);
        $this->load->view('main', $data);
    }
	
	public function iit_jee_advanced_score_cared() {
        $data['title'] = 'IIT JEE Advanced Score Cared 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'IIT JEE Advanced Score Cared 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = ' IIT JEE Advanced Score Cared 2025 | BTC 2nd, 4th Semester Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/iit_jee_advanced_score_cared', [], true);
        $this->load->view('main', $data);
    }
	
	
	
	
	public function results_bihar_cet_b_ed_2nd_marit() {
        $data['title'] = 'Bihar CET B.Ed 2nd Merit List 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar CET B.Ed 2nd Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar CET B.Ed 2nd Merit List 2025| Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/results_bihar_cet_b_ed_2nd_marit', [], true);
        $this->load->view('main', $data);
    }
	
	public function aiims_bsc_nursing_1st_round_seat_allocation_result() {
        $data['title'] = 'AIIMS BSc Nursing 1st Round Seat Allocation Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'AIIMS BSc Nursing 1st Round Seat Allocation Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'AIIMS BSc Nursing 1st Round Seat Allocation Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/aiims_bsc_nursing_1st_round_seat_allocation_result', [], true);
        $this->load->view('main', $data);
    }
	
	
	
	
	public function AAIjuniorexecutiveresult2025() {
        $data['title'] = 'AAI Junior Executive Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = ' AAI Junior Executive Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'AAI Junior Executive Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/AAIjuniorexecutiveresult2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function CSIRCRRIJSAandstenographerresult2025scorecard() {
        $data['title'] = 'CSIR CRRI JSA and Stenographer Result 2025 Score Card - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'CSIR CRRI JSA and Stenographer Result 2025 Score Card | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'CSIR CRRI JSA and Stenographer Result 2025 Score Card | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/CSIRCRRIJSAandstenographerresult2025scorecard', [], true);
        $this->load->view('main', $data);
    }
	
	public function upssscassistantaccountantresult2025() {
        $data['title'] = 'UPSSSC Assistant Accountant Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UPSSSC Assistant Accountant Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UPSSSC Assistant Accountant Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/upssscassistantaccountantresult2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function indiapostGDSresult20255thmeritlist() {
        $data['title'] = 'India Post GDS Result 2025 : 5th Merit List - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'India Post GDS Result 2025 : 5th Merit List | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'India Post GDS Result 2025 : 5th Merit List | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/indiapostGDSresult20255thmeritlist', [], true);
        $this->load->view('main', $data);
    }
	
	public function UPboardresultUPboardscrutinyresults2025() {
        $data['title'] = 'UP Board Result 2025 : UP Board Scrutiny Results 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UP Board Result 2025 : UP Board Scrutiny Results 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UP Board Result 2025 : UP Board Scrutiny Results 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/UPboardresultUPboardscrutinyresults2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function IDBIbankJAM2025resultofpersonalinterview() {
        $data['title'] = 'IDBI Bank JAM 2025 Result of Personal Interview - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'IDBI Bank JAM 2025 Result of Personal Interview | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'IDBI Bank JAM 2025 Result of Personal Interview | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/IDBIbankJAM2025resultofpersonalinterview', [], true);
        $this->load->view('main', $data);
    }
	
	public function biharhomeguardfinalmeritlist2025() {
        $data['title'] = 'Bihar Home Guard Final Merit List 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar Home Guard Final Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar Home Guard Final Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/biharhomeguardfinalmeritlist2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function uppscunaniandayurvedmedicalofficerresult2025() {
        $data['title'] = 'UPPSC Unani and Ayurved Medical Officer Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UPPSC Unani and Ayurved Medical Officer Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UPPSC Unani and Ayurved Medical Officer Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/uppscunaniandayurvedmedicalofficerresult2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function ntacuetugresult2025() {
        $data['title'] = 'NTA CUET UG Result 2025 with Score Card and Final Answer Key - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'NTA CUET UG Result 2025 with Score Card and Final Answer Key | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'NTA CUET UG Result 2025 with Score Card and Final Answer Key | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/ntacuetugresult2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function biharbedallotmentresult2025() {
        $data['title'] = 'Bihar BEd Allotment Result 2025 | CET 2 Year Course - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar BEd Allotment Result 2025 | CET 2 Year Course | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar BEd Allotment Result 2025 | CET 2 Year Course | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/biharbedallotmentresult2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function RailwaySECRNagpurApprenticeMeritList2025() {
        $data['title'] = 'Railway SECR Nagpur Apprentice Merit List 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Railway SECR Nagpur Apprentice Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Railway SECR Nagpur Apprentice Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/RailwaySECRNagpurApprenticeMeritList2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function BiharITICATSeatMatrix2025() {
        $data['title'] = 'Bihar ITI-CAT Seat Matrix 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar ITI-CAT Seat Matrix 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar ITI-CAT Seat Matrix 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/BiharITICATSeatMatrix2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function OFSSBihar11th2ndMeritList202527() {
        $data['title'] = 'OFSS Bihar 11th 2nd Merit List 2025-27 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'OFSS Bihar 11th 2nd Merit List 2025-27 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'OFSS Bihar 11th 2nd Merit List 2025-27 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/OFSSBihar11th2ndMeritList202527', [], true);
        $this->load->view('main', $data);
    }
	
	public function NVSNonTeachingVariousPostResult2025() {
        $data['title'] = 'NVS Non Teaching Various Post Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'NVS Non Teaching Various Post Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'NVS Non Teaching Various Post Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/NVSNonTeachingVariousPostResult2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function indiannavyincetfiremandriverresult() {
        $data['title'] = 'Indian Navy INCET 01/24 (Fireman, Driver) Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Indian Navy INCET 01/24 (Fireman, Driver) Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Indian Navy INCET 01/24 (Fireman, Driver) Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/indiannavyincetfiremandriverresult', [], true);
        $this->load->view('main', $data);
    }
	
	public function iertentranceresult2025() {
        $data['title'] = 'IERT Entrance Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'IERT Entrance Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'IERT Entrance Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/iertentranceresult2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function bsfgroupbcvariouspostresult2025() {
        $data['title'] = 'BSF Group B, C Various Post Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'BSF Group B, C Various Post Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'BSF Group B, C Various Post Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bsfgroupbcvariouspostresult2025', [], true);
        $this->load->view('main', $data);
    }
	public function railway_rrb_je_cbt_result() {
        $data['title'] = 'Railway RRB JE CBT-2 Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Railway RRB JE CBT-2 Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Railway RRB JE CBT-2 Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/railway_rrb_je_cbt_result', [], true);
        $this->load->view('main', $data);
    }
	public function dsssbvariouspostresult2025() {
        $data['title'] = 'DSSSB Various Post Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'DSSSB Various Post Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'DSSSB Various Post Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/dsssbvariouspostresult2025', [], true);
        $this->load->view('main', $data);
    }
	
	public function biharbtscsmoresult2025() {
        $data['title'] = 'Bihar BTSC SMO Final Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar BTSC SMO Final Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar BTSC SMO Final Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/biharbtscsmoresult2025', [], true);
        $this->load->view('main', $data);
    }
    public function hppsc_hpas_pre_exam_result() {
        $data['title'] = 'HPPSC HPAS Pre Exam Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'HPPSC HPAS Pre Exam Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'HPPSC HPAS Pre Exam Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/hppsc_hpas_pre_exam_result', [], true);
        $this->load->view('main', $data);
    }
	public function itbp_medical_officer_mo_result() {
        $data['title'] = 'ITBP Medical Officer MO Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'ITBP Medical Officer MO Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'ITBP Medical Officer MO Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/itbp_medical_officer_mo_result', [], true);
        $this->load->view('main', $data);
    }
	public function lnmu_ug_merit_list() {
        $data['title'] = 'LNMU UG 2nd Merit List 2025-29 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'LNMU UG 2nd Merit List 2025-29 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'LNMU UG 2nd Merit List 2025-29 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/lnmu_ug_merit_list', [], true);
        $this->load->view('main', $data);
    }
	
	public function bihar_polytechnic_pe_seat_allotment() {
        $data['title'] = 'Bihar Polytechnic PE 2nd Round Seat Allotment Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar Polytechnic PE 2nd Round Seat Allotment Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar Polytechnic PE 2nd Round Seat Allotment Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihar_polytechnic_pe_seat_allotment', [], true);
        $this->load->view('main', $data);
    }
	public function upsc_geo_scientist_mains_result() {
        $data['title'] = 'UPSC Geo-Scientist Mains Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UPSC Geo-Scientist Mains Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UPSC Geo-Scientist Mains Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/upsc_geo_scientist_mains_result', [], true);
        $this->load->view('main', $data);
    }
	
	public function rajasthan_rsmssb_junior_engineer_jen_result() {
        $data['title'] = 'Rajasthan RSMSSB Junior Engineer JEN Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Rajasthan RSMSSB Junior Engineer JEN Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Rajasthan RSMSSB Junior Engineer JEN Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/rajasthan_rsmssb_junior_engineer_jen_result', [], true);
        $this->load->view('main', $data);
    }
	public function jpsc_civil_services_final() {
        $data['title'] = 'JPSC Civil Services Final Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'JPSC Civil Services Final Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'JPSC Civil Services Final Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/jpsc_civil_services_final', [], true);
        $this->load->view('main', $data);
    }
	
	public function central_bank_cbi_apprentices_final_result() {
        $data['title'] = 'Central Bank CBI Apprentices Final Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Central Bank CBI Apprentices Final Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Central Bank CBI Apprentices Final Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/central_bank_cbi_apprentices_final_result', [], true);
        $this->load->view('main', $data);
    }
	public function ssc_jht_2024_final_result() {
        $data['title'] = 'SSC JHT 2024 Final Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'SSC JHT 2024 Final Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'SSC JHT 2024 Final Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/ssc_jht_2024_final_result', [], true);
        $this->load->view('main', $data);
    }
	public function indian_army_agniveer_cee_result() {
        $data['title'] = 'Indian Army Agniveer CEE Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Indian Army Agniveer CEE Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Indian Army Agniveer CEE Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/indian_army_agniveer_cee_result', [], true);
        $this->load->view('main', $data);
    }
	public function mpesb_pnst_gnmtst_result() {
        $data['title'] = 'MPESB PNST/ GNMTST Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'MPESB PNST/ GNMTST Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'MPESB PNST/ GNMTST Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/mpesb_pnst_gnmtst_result', [], true);
        $this->load->view('main', $data);
    }
	public function mp_anmtst_result() {
        $data['title'] = 'MP ANMTST Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'MP ANMTST Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'MP ANMTST Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/mp_anmtst_result', [], true);
        $this->load->view('main', $data);
    }
	public function ofss_bihar_merit_list() {
        $data['title'] = 'OFSS Bihar 11th 3rd Merit List 2025-27 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'OFSS Bihar 11th 3rd Merit List 2025-27 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'OFSS Bihar 11th 3rd Merit List 2025-27 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/ofss_bihar_merit_list', [], true);
        $this->load->view('main', $data);
    }
    public function bihar_polytechnic_pe_2nd_round_seat_allotment() {
        $data['title'] = 'Bihar DCECE PM/ PMM 1st Round Seat Allotment Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar DCECE PM/ PMM 1st Round Seat Allotment Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar DCECE PM/ PMM 1st Round Seat Allotment Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihar_polytechnic_pe_2nd_round_seat_allotment', [], true);
        $this->load->view('main', $data);
    }
    public function upsssc_eye_testing_officer_eto() {
        $data['title'] = 'UPSSSC Eye Testing Officer ETO 2023 Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UPSSSC Eye Testing Officer ETO 2023 Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UPSSSC Eye Testing Officer ETO 2023 Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/upsssc_eye_testing_officer_eto', [], true);
        $this->load->view('main', $data);
    }
    public function bis_group_a_b_c_post_final_result() {
        $data['title'] = 'BIS Group A, B, C Post 2024 Final Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'BIS Group A, B, C Post 2024 Final Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'BIS Group A, B, C Post 2024 Final Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bis_group_a_b_c_post_final_result', [], true);
        $this->load->view('main', $data);
    }
	public function india_post_gds_6th_merit_list() {
        $data['title'] = 'India Post GDS 6th Merit List 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'India Post GDS 6th Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'India Post GDS 6th Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/india_post_gds_6th_merit_list', [], true);
        $this->load->view('main', $data);
    }

	public function upsc_ies_iss_result() {
        $data['title'] = 'UPSC IES / ISS Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UPSC IES / ISS Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UPSC IES / ISS Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/upsc_ies_iss_result', [], true);
        $this->load->view('main', $data);
    }
	public function nta_aiapget_result() {
        $data['title'] = 'NTA AIAPGET Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'NTA AIAPGET Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'NTA AIAPGET Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/nta_aiapget_result', [], true);
        $this->load->view('main', $data);
    }

	public function bihar_vidhan_sabha_security_guard_pre_result() {
        $data['title'] = 'Bihar Vidhan Sabha Security Guard Pre Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar Vidhan Sabha Security Guard Pre Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar Vidhan Sabha Security Guard Pre Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihar_vidhan_sabha_security_guard_pre_result', [], true);
        $this->load->view('main', $data);
    }

    public function bihar_iti_cat_1st_round_allotment() {
        $data['title'] = 'Bihar ITI CAT 2025 1st Round Allotment Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar ITI CAT 2025 1st Round Allotment Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar ITI CAT 2025 1st Round Allotment Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihar_iti_cat_1st_round_allotment', [], true);
        $this->load->view('main', $data);
    }

    public function cbse_board_class_supplementary_result() {
        $data['title'] = 'CBSE Board Class 12th Supplementary Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'CBSE Board Class 12th Supplementary Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'CBSE Board Class 12th Supplementary Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/cbse_board_class_supplementary_result', [], true);
        $this->load->view('main', $data);
    }

    public function upsssc_junior_assistant_final_result() {
        $data['title'] = 'UPSSSC Junior Assistant 08/2022 Final Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UPSSSC Junior Assistant 08/2022 Final Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UPSSSC Junior Assistant 08/2022 Final Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/upsssc_junior_assistant_final_result', [], true);
        $this->load->view('main', $data);
    }
    public function railway_secr_raipur_apprentice() {
        $data['title'] = 'Railway SECR Raipur Apprentice Final Merit List 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Railway SECR Raipur Apprentice Final Merit List 2025 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Railway SECR Raipur Apprentice Final Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/railway_secr_raipur_apprentice', [], true);
        $this->load->view('main', $data);
    }

     public function union_bank_of_india_assistant_manager() {
        $data['title'] = 'Union Bank of India Assistant Manager Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Union Bank of India Assistant Manager Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Union Bank of India Assistant Manager Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/union_bank_of_india_assistant_manager', [], true);
        $this->load->view('main', $data);
    }



	public function cbse_board_class_10th_supplementary_result() {
        $data['title'] = 'CBSE Board Class 10th Supplementary Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'CBSE Board Class 10th Supplementary Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'CBSE Board Class 10th Supplementary Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/cbse_board_class_10th_supplementary_result', [], true);
        $this->load->view('main', $data);
    }

	public function mpesb_group_sub_group_result() {
        $data['title'] = 'MPESB Group 1 & 2 Sub Group 1 Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'MPESB Group 1 & 2 Sub Group 1 Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'MPESB Group 1 & 2 Sub Group 1 Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/mpesb_group_sub_group_result', [], true);
        $this->load->view('main', $data);
    }


    public function nta_ntet_result_score_card() {
        $data['title'] = 'NTA NTET Result/ Score Card 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'NTA NTET Result/ Score Card 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'NTA NTET Result/ Score Card 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/nta_ntet_result_score_card', [], true);
        $this->load->view('main', $data);
    }
    public function up_board_10th_12th_compartmental_result() {
        $data['title'] = 'UP Board Class 10th/ 12th Compartmental Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UP Board Class 10th/ 12th Compartmental Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UP Board Class 10th/ 12th Compartmental Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/up_board_10th_12th_compartmental_result', [], true);
        $this->load->view('main', $data);
    }
    public function upsc_engineering_services_reserve_list_out() {
        $data['title'] = 'UPSC Engineering Services 2024 Reserve List - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UPSC Engineering Services 2024 Reserve List | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UPSC Engineering Services 2024 Reserve List | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/upsc_engineering_services_reserve_list_out', [], true);
        $this->load->view('main', $data);
    }
    public function bihar_cet_b_ed_3rd_merit_list() {
        $data['title'] = 'Bihar CET B.Ed 3rd Merit List 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar CET B.Ed 3rd Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar CET B.Ed 3rd Merit List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihar_cet_b_ed_3rd_merit_list', [], true);
        $this->load->view('main', $data);
    }
    public function rsmssb_surveyor_and_mines_supervisor_result() {
        $data['title'] = 'RSMSSB Surveyor and Mines Supervisor Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'RSMSSB Surveyor and Mines Supervisor Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'RSMSSB Surveyor and Mines Supervisor Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/rsmssb_surveyor_and_mines_supervisor_result', [], true);
        $this->load->view('main', $data);
    }
    
    public function rajasthan_rsmssb_animal_attendant_result() {
        $data['title'] = 'Rajasthan RSMSSB Animal Attendant Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Rajasthan RSMSSB Animal Attendant Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Rajasthan RSMSSB Animal Attendant Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/rajasthan_rsmssb_animal_attendant_result', [], true);
        $this->load->view('main', $data);
    }
    public function bpsc_assistant_engineer_ae_result() {
        $data['title'] = 'BPSC Assistant Engineer AE 32, 33/2024 Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'BPSC Assistant Engineer AE 32, 33/2024 Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'BPSC Assistant Engineer AE 32, 33/2024 Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bpsc_assistant_engineer_ae_result', [], true);
        $this->load->view('main', $data);
    }
    public function haryana_board_class_compartmental_result() {
        $data['title'] = 'Haryana Board Class 10th Compartmental Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Haryana Board Class 10th Compartmental Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Haryana Board Class 10th Compartmental Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/haryana_board_class_compartmental_result', [], true);
        $this->load->view('main', $data);
    }
    public function nicl_ao_scale_i_pre_result() {
        $data['title'] = 'NICL AO Scale-I Pre Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'NICL AO Scale-I Pre Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'NICL AO Scale-I Pre Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/nicl_ao_scale_i_pre_result', [], true);
        $this->load->view('main', $data);
    }
    public function lnmu_ug_3rd_merit_list() {
        $data['title'] = 'LNMU UG 3rd Merit List 2025-29 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'LNMU UG 3rd Merit List 2025-29 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'LNMU UG 3rd Merit List 2025-29 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/lnmu_ug_3rd_merit_list', [], true);
        $this->load->view('main', $data);
    }

    public function ssc_cpo_si_paper_ii_result() {
        $data['title'] = 'SSC CPO SI Paper II Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'SSC CPO SI Paper II Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'SSC CPO SI Paper II Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/ssc_cpo_si_paper_ii_result', [], true);
        $this->load->view('main', $data);
    }
    public function supreme_court_of_india_spa_result() {
        $data['title'] = 'Supreme Court of India SPA Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Supreme Court of India SPA Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Supreme Court of India SPA Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/supreme_court_of_india_spa_result', [], true);
        $this->load->view('main', $data);
    }
    public function bihar_shsb_cho_result() {
        $data['title'] = 'Bihar SHSB CHO Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar SHSB CHO Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar SHSB CHO Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihar_shsb_cho_result', [], true);
        $this->load->view('main', $data);
    }
    public function cbse_superintendent_tier_result() {
        $data['title'] = 'CBSE Superintendent Tier-2 Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'CBSE Superintendent Tier-2 Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'CBSE Superintendent Tier-2 Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/cbse_superintendent_tier_result', [], true);
        $this->load->view('main', $data);
    }
    public function niacl_apprentice_result() {
        $data['title'] = 'NIACL Apprentice Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'NIACL Apprentice Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'NIACL Apprentice Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/niacl_apprentice_result', [], true);
        $this->load->view('main', $data);
    }
    public function railway_rrb_paramedical_staff_result() {
        $data['title'] = 'Railway RRB Paramedical Staff Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Railway RRB Paramedical Staff Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Railway RRB Paramedical Staff Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/railway_rrb_paramedical_staff_result', [], true);
        $this->load->view('main', $data);
    }
    public function jci_various_post_result() {
        $data['title'] = 'JCI Various Post 2024 Result - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'JCI Various Post 2024 Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'JCI Various Post 2024 Result | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/jci_various_post_result', [], true);
        $this->load->view('main', $data);
    }
    public function nta_icar_aieea_pg_and_phd_result() {
        $data['title'] = 'NTA ICAR AIEEA PG and PhD Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'NTA ICAR AIEEA PG and PhD Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'NTA ICAR AIEEA PG and PhD Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/nta_icar_aieea_pg_and_phd_result', [], true);
        $this->load->view('main', $data);
    }
    public function bihar_vidhan_sabha_junior_clerk_result() {
        $data['title'] = 'Bihar Vidhan Sabha Junior Clerk 02/2024 Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar Vidhan Sabha Junior Clerk 02/2024 Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar Vidhan Sabha Junior Clerk 02/2024 Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihar_vidhan_sabha_junior_clerk_result', [], true);
        $this->load->view('main', $data);
    }
    public function sbi_bank_clerk_1st_wait_list() {
        $data['title'] = 'SBI Bank Clerk 1st Wait List 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'SBI Bank Clerk 1st Wait List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'SBI Bank Clerk 1st Wait List 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/sbi_bank_clerk_1st_wait_list', [], true);
        $this->load->view('main', $data);
    }
    public function bihar_btsc_insect_collector_final_result() {
        $data['title'] = 'Bihar BTSC Insect Collector Final Result 2025 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Bihar BTSC Insect Collector Final Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Bihar BTSC Insect Collector Final Result 2025 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('results/bihar_btsc_insect_collector_final_result', [], true);
        $this->load->view('main', $data);
    }
}
