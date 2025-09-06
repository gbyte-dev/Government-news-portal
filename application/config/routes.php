<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['details'] = 'welcome/details';
$route['track-category-click'] = 'welcome/track_category_click'; 
$route['contact-us'] = 'welcome/contact_us';
$route['admit-cards'] = 'welcome/admit_cards';

$route['privacy-policy'] = 'welcome/privacy_policy';
$route['disclaimer'] = 'welcome/disclaimer';

// coming soon
$route['application-status'] = 'welcome/coming_soon';
$route['cutt-off-marks'] = 'welcome/coming_soon';
$route['previous-paper'] = 'welcome/coming_soon';
$route['study-material'] = 'welcome/coming_soon';
$route['job-alerts'] = 'welcome/job_alerts';
$route['ssc-cgl'] = 'welcome/coming_soon';
$route['IBPS-PO'] = 'welcome/coming_soon';
$route['rrb-ntpc'] = 'welcome/coming_soon';
$route['upsc-csc'] = 'welcome/coming_soon';
$route['sbi-clerk'] = 'welcome/coming_soon';
$route['job_alerts/submit'] = 'welcome/job_alert_submit'; 
$route['sent-jobs'] = 'welcome/sent_jobs';
$route['update-jobs'] = 'welcome/update_jobs';
$route['success-add-ip'] = 'welcome/ipaddress_add';

// syllabus
$route['syllabus'] = 'syllabus/index';
$route['syllabus/UPSC-CBI-Assistant-Programmer-Online-Form-2024'] = 'syllabus/UPSCCBIAssistantProgrammerOnlineForm2024';
$route['syllabus/Railway-RRB-ALP-Exam-Syllabus-2024'] = 'syllabus/RailwayRRBALPExamSyllabus2024';
$route['syllabus/Railway-RPF-SI-Exam-Syllabus-2024'] = 'syllabus/RailwayRPFSIExamSyllabus2024';
$route['syllabus/SSC-GD-Constable-Exam-Syllabus-2024'] = 'syllabus/SSCGDConstableExamSyllabus2024';

// answer-keys
$route['answer-keys'] = 'answer_key/index';
$route['answer-keys/CCI-Various-147-Post-Answer-Key-2025'] = 'answer_key/cci_various147PostAnswerKey2025';
$route['answer-keys/CPCB-Various-Post-Answer-Key-Notice-2025'] = 'answer_key/cpcbVariousPostAnswerKeyNotice2025';
$route['answer-keys/NTA-UGC-NET-June-Answer-Key-2025'] = 'answer_key/ntaUGCNETJuneAnswerKey2025';
$route['answer-keys/UKPSC-Upper-PCS-Pre-Answer-Key-2025'] = 'answer_key/UKPSCUpperPCSPreAnswerKey2025';
$route['answer-keys/NCL-CIL-Technician-Answer-Key-2025'] = 'answer_key/NCLCILTechnicianAnswerKey2025';
$route['answer-keys/UPSSSC-Sachiv-Grade-III-Mains-Revised-Answer-Key-2025'] = 'answer_key/UPSSSCSachivGradeIIIMainsRevisedAnswerKey2025';
$route['answer-keys/UPSSSC-Junior-Assistant-Mains-Answer-Key-Objection-2025'] = 'answer_key/UPSSSCJuniorAssistantMainsAnswerKeyObjection2025';
$route['answer-keys/NIELIT-Scientific-Assistant-Answer-Key-2025'] = 'answer_key/NIELITScientificAssistantAnswerKey2025';
$route['answer-keys/MPESB-BSc-Nursing-MSc-Nursing-Answer-Key-2025'] = 'answer_key/MPESBBScNursingMScNursingAnswerKey2025';
$route['answer-keys/Railway-RRB-NTPC-Graduate-Level-Answer-Key-2025'] = 'answer_key/RailwayRRBNTPCGraduateLevelAnswerKey2025';
$route['answer-keys/UPSSSC-Technical-Assistant-Group-C-07-2024-Answer-Key'] = 'answer_key/TechnicalAssistantAnswerKey';
//24_07
$route['answer-keys/scl-assistant-answer-key-2025'] = 'answer_key/scl_assistant_answer_key';
$route['answer-keys/dsssb-various-post-answer-key-2025'] = 'answer_key/dsssb_various_post_answer_key';
$route['answer-keys/nta-icar-aieea-pg-and-phd-answer-key-2025'] = 'answer_key/nta_icar_aieea_pg_and_phd_answer_key';
$route['answer-keys/dfccil-mts-executive-jr-manager-answer-key-2025'] = 'answer_key/dfccil_mts_executive_jr_manager_answerkey';
$route['answer-keys/bihar-shsb-cho-answer-key-2025'] = 'answer_key/bihar_shsb_cho_answer_key';
$route['answer-keys/cbse-junior-assistant-superintendent-tier-2-answer-key-2025'] = 'answer_key/cbse_junior_assistant_superintendent_tier_answer_key';
$route['answer-keys/bihar-bpsc-assistant-engineer-ae-answer-key-2025'] = 'answer_key/bihar_bpsc_assistant_engineer_ae_answer_key';
$route['answer-keys/nta-ntet-answer-key-2025'] = 'answer_key/nta_ntet_answer_key';

//30
$route['answer-keys/dsssb-july-exam-answer-key-2025'] = 'answer_key/dsssb_july_exam_answer_key';
$route['answer-keys/mpesb-pat-answer-key-2025'] = 'answer_key/mpesb_pat_answer_key';
$route['answer-keys/upsssc-vdo-2023-mains-revised-answer-key'] = 'answer_key/upsssc_vdo_mains_revised_answer_key';
$route['answer-keys/hssc-cet-group-c-answer-key-2025'] = 'answer_key/hssc_cet_group_c_answer_key';
$route['answer-keys/bihar-btsc-dresser-answer-key-2025'] = 'answer_key/bihar_btsc_dresser_answer_key';
$route['answer-keys/uppsc-ro-aro-2023-pre-answer-key-2025'] = 'answer_key/uppsc_ro_aro_pre_answer_key';
//1
$route['answer-keys/haryana-tet-2024-answer-key'] = 'answer_key/haryana_tet_answer_key';
//4
$route['answer-keys/bihar-btsc-insect-collector-dv-objection-2025'] = 'answer_key/bihar_btsc_insect_collector_objection';
$route['answer-keys/nta-csir-ugc-net-june-answer-key-2025'] = 'answer_key/nta_csir_ugc_net_june_answer';
//7
$route['answer-keys/dsssb-may-june-examination-final-answer-key-2025'] = 'answer_key/dsssb_may_june_examination_final_answer_key';
$route['answer-keys/rpsc-deputy-jailor-answer-key-2025'] = 'answer_key/rpsc_deputy_jailor_answer_key';
$route['answer-keys/allahabad-high-court-hjs-pre-answer-key-2025'] = 'answer_key/allahabad_high_court_hjs_pre_answer_key';
$route['answer-keys/bpsc-assistant-engineer-ae-answer-key-2025'] = 'answer_key/bpsc_assistant_engineer_ae_answer_key';
//8
$route['answer-keys/bihar-btsc-staff-nurse-answer-key-2025'] = 'answer_key/bihar_btsc_staff_nurse_answer_key';
//12
$route['answer-keys/ssc-phase-13-answer-key-2025'] = 'answer_key/ssc_phase_13_answer_key';
//13
$route['answer-keys/bpsc-aee-other-post-answer-key-2025'] = 'answer_key/bpsc_aee_other_post_answer_key';
$route['answer-keys/bseb-sakshamta-pariksha-3rd-answer-key-2025'] = 'answer_key/bseb_sakshamta_pariksha_3rd_answer_key';
//14
$route['answer-keys/patna-high-court-mazdoor-answer-key-2025'] = 'answer_key/patna_high_court_mazdoor_answer_key';
$route['answer-keys/bihar-bsphcl-technician-gr-iii-answer-key-2025'] = 'answer_key/bihar_bsphcl_technician_gr_iii_answer_key';



// results
$route['results'] = 'results/index';
$route['results/UP-DELEd-Result-2025-BTC-2nd-4th-semester-result'] = 'results/UPDELEdResult2025BTC2nd4thsemesterresult';
$route['results/AAI-junior-executive-result-2025'] = 'results/AAIjuniorexecutiveresult2025';
$route['results/CSIR-CRRI-JSA-and-stenographer-result-2025-score-card'] = 'results/CSIRCRRIJSAandstenographerresult2025scorecard';
$route['results/upsssc-assistant-accountant-result-2025'] = 'results/upssscassistantaccountantresult2025';
$route['results/india-post-GDS-result-2025-5th-merit-list'] ='results/indiapostGDSresult20255thmeritlist';
$route['results/UP-board-result-UP-board-scrutiny-results-2025'] ='results/UPboardresultUPboardscrutinyresults2025';
$route['results/IDBI-bank-JAM-2025-result-of-personal-interview'] ='results/IDBIbankJAM2025resultofpersonalinterview';
$route['results/bihar-home-guard-final-merit-list-2025'] ='results/biharhomeguardfinalmeritlist2025';
$route['results/uppsc-unani-and-ayurved-medical-officer-result-2025'] ='results/uppscunaniandayurvedmedicalofficerresult2025';
$route['results/nta-cuet-ug-result-2025'] ='results/ntacuetugresult2025';
$route['results/bihar-bed-allotment-result-2025'] ='results/biharbedallotmentresult2025';
$route['results/Railway-SECR-Nagpur-Apprentice-Merit-List-2025'] ='results/RailwaySECRNagpurApprenticeMeritList2025';
$route['results/Bihar-ITI-CAT-Seat-Matrix-2025'] ='results/BiharITICATSeatMatrix2025';
$route['results/OFSS-Bihar-11th-2nd-Merit-List-2025-27'] ='results/OFSSBihar11th2ndMeritList202527';
$route['results/NVS-Non-Teaching-Various-Post-Result-2025'] ='results/NVSNonTeachingVariousPostResult2025';
$route['results/indian-navy-incet-01-24-fireman-driver-result'] ='results/indiannavyincetfiremandriverresult';

$route['results/iert-entrance-result-2025'] ='results/iertentranceresult2025';
$route['results/bsf-group-b-c-various-post-result-2025'] ='results/bsfgroupbcvariouspostresult2025';
$route['results/dsssb-various-post-result-2025'] ='results/dsssbvariouspostresult2025';
$route['results/bihar-btsc-smo-result-2025'] ='results/biharbtscsmoresult2025';
$route['results/bihar-diploma-dece-le-2025-1st-round-allotment-result'] ='results/bihardiplomaresult2025';
$route['results/mp-mpesb-addet-result'] ='results/mp_mpesb_addet_result';
$route['results/nta-ugc-net-june-result'] ='results/nta_ugc_net_june_result';
$route['results/iit-jee-advanced-score-cared'] ='results/iit_jee_advanced_score_cared';
$route['results/bihar-cet-b-ed-2nd-merit-list-2025'] = 'results/results_bihar_cet_b_ed_2nd_marit';
$route['results/aiims-bsc-nursing-1st-round-seat-allocation-result'] = 'results/aiims_bsc_nursing_1st_round_seat_allocation_result';
$route['results/hppsc-hpas-pre-exam-result-2025'] ='results/hppsc_hpas_pre_exam_result';
$route['results/railway-rrb-je-cbt-2-result'] ='results/railway_rrb_je_cbt_result';
$route['results/brabu-ug-2nd-merit-list-2025-29'] ='results/brabu_ug_2nd_merit_list'; 
$route['results/itbp-medical-officer-mo-result-2025'] ='results/itbp_medical_officer_mo_result'; 
$route['results/lnmu-ug-2nd-merit-list-2025-29'] ='results/lnmu_ug_merit_list'; 
//25/7
$route['results/bihar-polytechnic-pe-2nd-round-seat-allotment-result-2025'] ='results/bihar_polytechnic_pe_seat_allotment'; 
$route['results/upsc-geo-scientist-mains-result-2025'] ='results/upsc_geo_scientist_mains_result';
$route['results/jpsc-civil-services-final-result-2025'] ='results/jpsc_civil_services_final';
$route['results/central-bank-cbi-apprentices-final-result-2025'] ='results/central_bank_cbi_apprentices_final_result';
//28 ssc-jht-2024-final-result
$route['results/ssc-jht-2024-final-result'] ='results/ssc_jht_2024_final_result';
$route['results/indian-army-agniveer-cee-result-2025'] ='results/indian_army_agniveer_cee_result';
$route['results/mpesb-pnst-gnmtst-result-2025'] ='results/mpesb_pnst_gnmtst_result';
$route['results/mp-anmtst-result-2025'] ='results/mp_anmtst_result';
$route['results/ofss-bihar-11th-3rd-merit-list-2025-27'] ='results/ofss_bihar_merit_list';
//30  
$route['results/bihar-polytechnic-pe-2nd-round-seat-allotment-result-2025'] ='results/bihar_polytechnic_pe_2nd_round_seat_allotment';
$route['results/upsssc-eye-testing-officer-eto-2023-result'] ='results/upsssc_eye_testing_officer_eto';
$route['results/bis-group-a-b-c-post-2024-final-result'] ='results/bis_group_a_b_c_post_final_result';
//31
$route['results/india-post-gds-6th-merit-list-2025'] ='results/india_post_gds_6th_merit_list';
$route['results/upsc-ies-iss-result-2025'] ='results/upsc_ies_iss_result';
$route['results/nta-aiapget-result-2025'] ='results/nta_aiapget_result';
$route['results/bihar-vidhan-sabha-security-guard-pre-result-2025'] ='results/bihar_vidhan_sabha_security_guard_pre_result';
//1
$route['results/bihar-iti-cat-2025-1st-round-allotment-result'] ='results/bihar_iti_cat_1st_round_allotment';
$route['results/cbse-board-class-12th-supplementary-result-2025'] ='results/cbse_board_class_supplementary_result';
//4
$route['results/railway-secr-raipur-apprentice-final-merit-list-2025'] ='results/railway_secr_raipur_apprentice';
$route['results/upsssc-junior-assistant-08-2022-final-result'] ='results/upsssc_junior_assistant_final_result';

//5
$route['results/union-bank-of-india-assistant-manager-result-2025'] ='results/union_bank_of_india_assistant_manager';
//6
$route['results/cbse-board-class-10th-supplementary-result-2025'] ='results/cbse_board_class_10th_supplementary_result';
$route['results/mpesb-group-1-2-sub-group-1-result-2025'] ='results/mpesb_group_sub_group_result';
$route['results/nta-ntet-result-score-card-2025'] ='results/nta_ntet_result_score_card';
//7
$route['results/up-board-10th-12th-compartmental-result-2025'] ='results/up_board_10th_12th_compartmental_result';
$route['results/upsc-engineering-services-2024-reserve-list-out'] ='results/upsc_engineering_services_reserve_list_out';
$route['results/bihar-cet-b-ed-3rd-merit-list-2025'] ='results/bihar_cet_b_ed_3rd_merit_list';
//8
$route['results/rsmssb-surveyor-and-mines-supervisor-result-2025'] ='results/rsmssb_surveyor_and_mines_supervisor_result';
$route['results/rajasthan-rsmssb-junior-engineer-jen-result-2025'] ='results/rajasthan_rsmssb_junior_engineer_jen_result';
$route['results/rajasthan-rsmssb-animal-attendant-result-2025'] ='results/rajasthan_rsmssb_animal_attendant_result';
$route['results/bpsc-assistant-engineer-ae-32-33-2024-result'] ='results/bpsc_assistant_engineer_ae_result';
$route['results/haryana-board-class-10th-compartmental-result-2025'] ='results/haryana_board_class_compartmental_result';
//12
$route['results/nicl-ao-scale-i-pre-result-2025'] ='results/nicl_ao_scale_i_pre_result';
$route['results/lnmu-ug-3rd-merit-list-2025-29'] ='results/lnmu_ug_3rd_merit_list';
$route['results/ssc-cpo-si-paper-ii-result-2025'] ='results/ssc_cpo_si_paper_ii_result';
$route['results/supreme-court-of-india-spa-result-2025'] ='results/supreme_court_of_india_spa_result';
$route['results/bihar-shsb-cho-result-2025'] ='results/bihar_shsb_cho_result';
$route['results/cbse-superintendent-tier-2-result-2025'] ='results/cbse_superintendent_tier_result';
$route['results/niacl-apprentice-result-2025'] ='results/niacl_apprentice_result';
$route['results/railway-rrb-paramedical-staff-result-2025'] ='results/railway_rrb_paramedical_staff_result';
//13
$route['results/jci-various-post-2024-result'] ='results/jci_various_post_result';
$route['results/nta-icar-aieea-pg-and-phd-result-2025'] ='results/nta_icar_aieea_pg_and_phd_result';
$route['results/bihar-vidhan-sabha-junior-clerk-02-2024-result-2025'] ='results/bihar_vidhan_sabha_junior_clerk_result';
$route['results/sbi-bank-clerk-1st-wait-list-2025'] ='results/sbi_bank_clerk_1st_wait_list';
//14
$route['results/bihar-btsc-insect-collector-final-result-2025'] ='results/bihar_btsc_insect_collector_final_result';



$route['indian-navy-jobs'] = 'jobsController/navy_jobs';
$route['dsssb-jobs'] = 'jobsController/dsssb';
$route['bpsc-jobs'] = 'jobsController/bpsc';
$route['wbssc-jobs'] = 'jobsController/wbssc';
$route['navyAgniveer-jobs'] = 'jobsController/navyAgniveer';
$route['indian-Navy-B-Tech-jobs'] = 'jobsController/bscbCo_operativeBankAssistant';
$route['drdo-rac-scientist-b-jobs'] = 'jobsController/drdo_scientist';
$route['scc-chsl-jobs'] = 'jobsController/scc_chsl_jobs';
$route['indian-navy-civilian-jobs'] = 'jobsController/indian_navy_civilian_jobs';
$route['wcdc-bihar-various-jobs'] = 'jobsController/wcdc_bihar_various_jobs';
$route['rssb-village-development-jobs'] = 'jobsController/rssb_village_development_jobs';
$route['bscb-co-operative-BankAssistant-jobs'] = 'jobsController/bscbCo_operativeBankAssistant';
$route['rpsc-senior-teacher-grade-iv-recruitment'] = 'jobsController/rpsc_senior_teacher_grade_recruitment';
$route['ib-acio-grade-ii-executive-recruitment'] = 'jobsController/ib_acio_grade_recruitment';
$route['railway-swr-apprentice-recruitment'] = 'jobsController/railway_swr_apprentice_recruitment';
$route['rpsc-assistant-agriculture-engineer-recruitment'] = 'jobsController/rpsc_assistant_agriculture_engineer_recruitment';
$route['rpsc-si-platoon-commander-recruitment'] = 'jobsController/rpsc_si_platoon_commander_recruitment';
$route['rpsc-school-lecturer-recruitment'] = 'jobsController/rpsc_school_lecturer_recruitment';
$route['rssb-agriculture-supervisor-recruitment'] = 'jobsController/rssb_agriculture_supervisor_recruitment';
$route['rpsc-veterinary-officer-recruitment'] = 'jobsController/rpsc_veterinary_officer_recruitment';
$route['rssb-forest-guard-forester-surveyor-recruitment'] = 'jobsController/rssb_forest_guard_forester_surveyor_recruitment';
$route['bank-of-baroda-bob-lbo-recruitment-2025'] = 'jobsController/bank_of_baroda_bob_lbo_recruitment';
$route['rssb-platoon-commander-recruitment'] = 'jobsController/rssb_platoon_commander_recruitment';
$route['jpsc-assistant-public-prosecutor-app-recruitment'] = 'jobsController/jpsc_assistant_public_prosecutor_app_recruitment';
$route['ssc-junior-engineer-je-recruitment'] = 'jobsController/ssc_junior_engineer_je_recruitment';
$route['ibps-probationary-officer-po-15th-online-form'] = 'jobsController/ibps_probationary_officer_po_15th_online_form';
$route['ibps-specialist-officer-so-15th-online-form'] = 'jobsController/ibps_specialist_officer_so_15th_online_form';
$route['rssb-aayush-officer-recruitment-2025'] = 'jobsController/rssb_aayush_officer_recruitment';
$route['rssb-primary-school-teacher-recruitment-2025'] = 'jobsController/rssb_primary_school_teacher_recruitment';

$route['rssb-upper-school-teacher-recruitment'] = 'jobsController/rssb_upper_school_teacher_recruitment';
$route['railway-rrb-technician-cen-no-02-2025-recruitment'] = 'jobsController/railway_rrb_technician_cen_recruitment';

$route['indian-air-force-agniveervayu-vayu-intake-02-2026-online-form-chk'] = 'jobsController/indian_air_force_agniveervayu';
$route['rrb-paramedical-staff-recruitment-2025'] = 'jobsController/rrb_paramedical_staff_recruitment';


$route['rbi-bank-grade-a-b-recruitment-2025-chk'] = 'jobsController/rbi_bank_grade_a_b_recruitment';
$route['indian-bank-apprentice-recruitment'] = 'jobsController/indian_bank_apprentice_recruitment';
$route['sgpgi-nursing-officer-and-non-teaching-post-recruitment'] = 'jobsController/sgpgi_nursing_officer_teaching_recruitment';

$route['rrc-eastern-railway-apprentice-recruitment-2025-chk'] = 'jobsController/rrc_eastern_railway_apprentice_recruitment';
$route['rajasthan-rssb-lab-attendant-online-form-2025'] = 'jobsController/rajasthan_rssb_lab_attendant';
$route['indian-army-ssc-technical-april-recruitment-2025'] = 'jobsController/indian_army_ssc_technical_april_recruitment';
$route['bihar-btsc-tutor-nursing-recruitment-2025-chk'] = 'jobsController/bihar_btsc_tutor_nursing_recruitment';
$route['dsssb-group-b-c-various-post-recruitment-2025'] = 'jobsController/dsssb_group_b_c_various_post_recruitment';
$route['jssc-madhyamik-acharya-jtmacce-recruitment-2025'] = 'jobsController/jssc_madhyamik_acharya_jtmacce_recruitment';  
$route['rajasthan-high-court-class-iv-employees-peon-recruitment-2025'] = 'jobsController/rajasthan_high_court_class_peon_recruitment'; 
$route['bihar-bpsc-special-school-teacher-online-form-2025'] = 'jobsController/bihar_bpsc_special_school_teacher';
$route['aiims-norcet-9th-phase-recruitment-2025'] = 'jobsController/aiims_norcet_9th_phase_recruitment';
$route['upsc-epfo-eo-ao-apfc-recruitment-2025'] = 'jobsController/upsc_epfo_eo_ao_apfc_recruitment';
//30  
$route['csbc-bihar-police-driver-constable-recruitment-2025'] = 'jobsController/csbc_bihar_police_driver_constable_recruitment';
$route['supreme-court-sci-court-master-recruitment-2025'] = 'jobsController/supreme_court_sci_court_master_recruitment';
$route['ssc-mts-havaldar-new-correction-date-2025'] = 'jobsController/ssc_mts_havaldar_new_correction';
$route['ibps-clerk-15th-recruitment-2025'] = 'jobsController/ibps_clerk_15th_recruitment';
$route['rpsc-assistant-statistical-officer-aso-recruitment-2025'] = 'jobsController/rpsc_assistant_statistical_officer_aso_recruitment';
$route['chandigarh-jbt-primary-teacher-recruitment-2025'] = 'jobsController/chandigarh_jbt_primary_teacher_recruitment';
$route['oriental-insurance-oicl-assistant-recruitment-2025'] = 'jobsController/oriental_insurance_oicl_assistant_recruitment';
$route['bank-of-baroda-so-recruitment-2025-start'] = 'jobsController/bank_of_baroda_so_recruitment';

//1
$route['railway-blw-apprentice-online-form-2025'] = 'jobsController/railway_blw_apprentice';
$route['uppsc-computer-assistant-recruitment-2025'] = 'jobsController/uppsc_computer_assistant_recruitment';
$route['pfrda-assistant-manager-grade-a-online-form-2025'] = 'jobsController/pfrda_assistant_manager_grade';
$route['army-school-awes-tgt-pgt-prt-recruitment-2025'] = 'jobsController/army_school_awes_tgt_pgt_prt_recruitment';
$route['upsc-cds-ii-correction-edit-form-2025'] = 'jobsController/upsc_cds_ii_correction_edit';
//4
$route['bihar-jeevika-recruitment-2025'] = 'jobsController/bihar_jeevika_recruitment';
$route['ofss-bihar-11th-intermediate-spot-admission-2025-27'] = 'jobsController/ofss_bihar_intermediate_spot_admission';
$route['indian-navy-ssc-officer-june-2026-online-form'] = 'jobsController/indian_navy_ssc_officer_june';
$route['dsssb-non-teaching-various-post-recruitment-2025'] = 'jobsController/dsssb_non_teaching_various_recruitment';
//5
$route['bssc-4th-graduate-level-recruitment-2025'] = 'jobsController/bssc_graduate_level_recruitment';
$route['bihar-bssc-office-attendant-online-form-2025'] = 'jobsController/bihar_bssc_office_attendant_online';
//6
$route['sbi-bank-clerk-recruitment-2025'] = 'jobsController/sbi_bank_clerk_recruitment';
$route['indian-army-jag-123rd-course-april-2026-online-form'] = 'jobsController/indian_army_jag_123rd_course_april';
$route['bank-of-baroda-sales-manager-officer-recruitment-2025'] = 'jobsController/bank_of_baroda_sales_manager_officer_recruitment';
//7
$route['upsc-ies-iss-daf-online-form-2025'] = 'jobsController/upsc_ies_iss_daf_online';
$route['bihar-shs-ophthalmic-assistant-recruitment-2025'] = 'jobsController/bihar_shs_ophthalmic_assistant_recruitment';
$route['niacl-ao-scale-i-online-form-2025'] = 'jobsController/niacl_ao_scale_i_online_form';
//12
$route['uppsc-gic-lecturer-recruitment-2025'] = 'jobsController/uppsc_gic_lecturer_recruitment';
$route['indian-army-ncc-123rd-course-april-2026-online-form'] = 'jobsController/indian_army_ncc_123rd_course_april';
$route['bihar-shs-anm-online-form-2025'] = 'jobsController/bihar_shs_anm_online_form';
//13
$route['up-police-si-syllabus-exam-pattern-2025'] = 'jobsController/up_police_si_syllabus_exam_pattern';
$route['up-police-si-recruitment-2025'] = 'jobsController/up_police_si_recruitment';
$route['bsf-hc-ro-rm-recruitment-2025'] = 'jobsController/bsf_hc_ro_rm_recruitment';
$route['indian-navy-tradesman-skilled-apprentice-recruitment-2025-start'] = 'jobsController/indian_navy_tradesman_skilled_apprentice';
//14
$route['rpsc-1st-grade-teacher-recruitment-2025'] = 'jobsController/rpsc_1st_grade_teacher_recruitment';
$route['railway-rrc-cr-apprentice-recruitment-2025'] = 'jobsController/railway_rrc_cr_apprentice_recruitment';
$route['dsssb-delhi-high-court-attendant-recruitment-2025'] = 'jobsController/dsssb_delhi_high_court_attendant';





$route['mpesb-primary-school-teacher-pstst-recruitment'] = 'jobsController/mpesb_primary_school_teacher_pstst_recruitment';
$route['ssc-cgl-correction-editform-jobs'] = 'jobsController/sscCGLCorrectionEditForm';
$route['indian-navy-ssc-technical-april-recruitment-jobs'] = 'jobsController/indianNavySSCTechnicalAprilRecruitment';
$route['indian-coast-guard-ac-01-2027-jobs'] = 'jobsController/indianCoastGuardAC012027';
$route['MPESB-Primary-School-Teacher-PSTST-Recruitment-2025'] = 'jobsController/MPESBPrimarySchoolTeacherPSTSTRecruitment2025';
$route['MPPSC-Food-Safety-Officer-FSO-Recruitment-2025'] = 'jobsController/MPPSCFoodSafetyOfficerFSORecruitment2025';
$route['RRB-Ministerial-and-Isolated-Categories-Application-Status-2025'] = 'jobsController/RRBMinisterialandIsolatedCategoriesApplicationStatus2025';
$route['IAF-Group-Y-Medical-Assistant-Airmen-Recruitment-2025'] = 'jobsController/IAFGroupYMedicalAssistantAirmenRecruitment2025';
$route['NHPC-Apprentice-Recruitment-2025'] = 'jobsController/NHPCApprenticeRecruitment2025';
$route['AIIMS-CRE-Group-B-C-Various-Post-Recruitment-2025'] = 'jobsController/AIIMSCREGroupBCVariousPostRecruitment2025';
$route['Bihar-BSEB-Sakshamta-Pariksha-Phase-4th-5th-Recruitment-2025'] = 'jobsController/BiharBSEBSakshamtaParikshaPhase4th5thRecruitment2025';
$route['MPESB-Primary-School-Teacher-PSTST-Recruitment-2025'] = 'jobsController/MPESBPrimarySchoolTeacherPSTSTRecruitment2025';

$route['railway-icf-trade-apprentice-recruitment-2025'] = 'jobsController/railwayicftradeapprenticerecruitment2025';
$route['ssc-multi-tasking-staff-mts-recruitment-2025'] = 'jobsController/sscmultitaskingstaffmtsrecruitment2025';
$route['ib-acio-grade-ii-executive-recruitment-2025'] = 'jobsController/ibaciogradeiiexecutiverecruitment2025';
$route['sidbi-assistant-manager-recruitment-2025'] = 'jobsController/sidbiassistantmanagerrecruitment2025';
$route['uppsc-tgt-recruitment-2025'] = 'jobsController/uppsctgtrecruitment2025';
$route['west-bengal-assistant-teacher-recruitment-2025-date-extend'] = 'jobsController/westbengalassistantteacherrecruitment2025dateextend';
$route['Railway-SWR-Apprentice-Recruitment-2025'] = 'jobsController/RailwaySWRApprenticeRecruitment2025';
$route['bihar-iti-cat-counselling-choice-filling-2025'] = 'jobsController/bihariticatcounsellingchoicefilling2025';
// $route['csbc-bihar-police-driver-constable-recruitment-2025'] = 'jobsController/csbcbiharpolicedriverconstablerecruitment2025';
$route['mppgcl-ae-je-other-post-recruitment-2025'] = 'jobsController/mppgcl_ae_je_other_post_recruitment';
$route['mpesb-group-5-post-recruitment-2025'] = 'jobsController/mpesb_group_post_recruitment';
$route['ib-security-assistant-recruitment-2025'] = 'jobsController/ib_security_assistant_recruitment';
$route['bsf-constable-tradesman-recruitment-2025'] = 'jobsController/bsf_constable_tradesman_recruitment';
$route['ssc-chsl-102-online-correction-form-2025'] = 'jobsController/ssc_chsl_online_correction';
$route['indian-navy-ssc-executive-it-january-2026-online-form'] = 'jobsController/indian_navy_ssc_executive_it_january';
$route['up-police-upprpb-one-time-registration-otr-online-form-2025'] = 'jobsController/up_police_upprpb_one_time_registration_otr';

$route['sitemap.xml'] = 'welcome/sitemap';

// Admit Cards ---------------------
$route['admit-card/upsssc-stenographer-interview-letter-2025'] = 'admitCards/UPSSSCStenographerInterviewLetter2025';
$route['admit-card/csbc-bihar-police-constable'] = 'admitCards/CSBCBiharPoliceConstable';
$route['admit-card/rrb-ntpc-under-graduate-level-application'] = 'admitCards/RRBNTPCUnderGraduateLevelApplication';
$route['admit-card/rajasthan-high-court-civil-judge-pre'] = 'admitCards/RajasthanHighCourtCivilJudgePre';
$route['admit-card/nta-csir-ugc-net-exam-date'] = 'admitCards/NTACSIRUGCNETExamDate2025';
$route['admit-card/dsssb-july-august-exam-schedule-2025'] = 'admitCards/DSSSBJulyandAugustExamSchedule2025';
$route['admit-card/jharkhand-high-court-assistant-admit-card-2025'] = 'admitCards/JharkhandHighCourtAssistantAdmitCard2025'; 
$route['admit-card/rpsc-deputy-jailor-exam-date-2025'] = 'admitCards/rpscdeputyjailorexamdate2025'; 
$route['admit-card/dfccil-mts-and-various-post-admit-card-2025'] = 'admitCards/dfccilmtsandvariouspostadmitcard2025'; 
$route['admit-card/cci-cotton-corporation-of-india-admit-card-2025'] = 'admitCards/ccicottoncorporationofindiaadmitcard2025'; 
$route['admit-card/SSC-Phase-13-Exam-Date-2025'] = 'admitCards/SSCPhase13ExamDate2025'; 
$route['admit-card/Bihar-BSPHCL-CC-Store-Assistant-Re-Exam-Admit-Card-2025'] = 'admitCards/AssistantReExamAdmitCard2025'; 
$route['admit-card/BSEB-Sakshamta-Pariksha-3rd-Admit-Card-2025'] = 'admitCards/BSEBSakshamtaParikshaAdmitCard2025'; 
$route['admit-card/DSSSB-Various-Post-July-Exam-Admit-Card-2025'] = 'admitCards/DSSSBVariousPostJulyExamAdmitCard2025'; 
$route['admit-card/UPSSSC-PET-Exam-Date-2025'] = 'admitCards/UPSSSCPETExamDate2025'; 
$route['admit-card/bpsc-aee-other-post-admit-card-date'] = 'admitCards/bpscExamDateAdmit2025'; 
$route['admit-card/neet-pg-exam-city-details'] = 'admitCards/neet_pg_exam_city_details';
$route['admit-card/mpesb-pat-admit-card'] = 'admitCards/mpesb_pat_admit_card';
$route['admit-card/ssc-phase-13-admit-card-2025'] = 'admitCards/ssc_phase_admit_card';













$route['admit-card/idbi-bank-jam-grade-o-interview-letter-2025'] = 'admitCards/idbibankjamgradeointerviewletter2025';
$route['admit-card/ssc-phase-13-exam-city-details-2025'] = 'admitCards/sscphaseexamcitydetails2025';
$route['admit-card/bihar-btsc-staff-nurse-exam-date-2025'] = 'admitCards/biharbtscstaffnurseexamdate2025';
$route['admit-card/bseb-sakshamta-pariksha-3rd-admit-card-2025'] = 'admitCards/bsebsakshamtapariksha3rdadmitcard2025';
$route['admit-card/jceceb-para-medical-entrance-exam-admit-card-2025'] = 'admitCards/jcecebparamedicalentranceexamadmitcard2025';
$route['admit-card/bihar-bsphcl-cc-store-assistant-re-exam-admit-card-2025'] = 'admitCards/biharbsphclccstoreassistantreexamadmitcard2025';
$route['admit-card/indian-territorial-army-officer-admit-card-2025'] = 'admitCards/indianterritorialarmyofficeradmitcard2025';
$route['(:any)'] = 'welcome/static/$1';

$route['admit-card/bihar-vidhan-sabha-junior-clerk-02-2024-admit-card'] = 'admitCards/vidhansabhaclerlExamDateAdmit2025';
$route['admit-card/rpsc-senior-teacher-gr-ii-tgt-exam-date'] = 'admitCards/rpscseniorteacherExamDateDate';
$route['admit-card/bseb-bihar-jee-neet-free-coaching-admit-card'] = 'admitCards/bsebBiharJeeNeetCoaching';
$route['admit-card/rssb-librarian-gr-iii-exam-city-admit-card-date'] = 'admitCards/rssblibrarianExam';
$route['admit-card/hssc-cet-group-c-admit-card'] = 'admitCards/hssc_cet_admit_card';
$route['admit-card/uppsc-ro-aro-2023-pre-admit-card'] ='admitCards/uppsc_ro_aro_admit_card';
$route['admit-card/sbi-bank-po-pre-exam-date'] ='admitCards/sbi_bank_po_pre_exam_date';
$route['admit-card/bpsc-dso-ad-exam-date-2025'] ='admitCards/bpsc_dso_ad_exam'; 

$route['admit-card/bpsc-aee-other-post-admit-card-2025'] ='admitCards/bpsc_aee_other_post_admit_card'; 
$route['admit-card/bihar-btsc-insect-collector-dv-letter-2025'] ='admitCards/bihar_btsc_insect_collector'; 
$route['admit-card/haryana-tet-2024-admit-card'] ='admitCards/haryana_tet_admit_card'; 
$route['admit-card/bpsc-mvi-exam-date-2025'] ='admitCards/bpsc_mvi_exam'; 
$route['admit-card/rpsc-various-post-exam-date-2025'] ='admitCards/rpsc_various_post_exam';
$route['admit-card/upsssc-auditor-assistant-accountant-05-2023-dv-letter'] ='admitCards/upsssc_auditor_assistant_accountant';
$route['admit-card/indian-navy-agniveer-mr-musician-admit-card-2025'] ='admitCards/indian_navy_agniveer_mr_musician';
$route['admit-card/sci-junior-court-assistant-descriptive-test-date-2025'] ='admitCards/sci_junior_court_assistant_descriptive';
$route['admit-card/bihar-police-csbc-constable-admit-card-2025'] ='admitCards/bihar_police_csbc_constable_admit_card';
$route['admit-card/up-ncvt-mis-iti-admit-card-2025'] ='admitCards/up_ncvt_mis_iti_admit_card'; 
//28
$route['admit-card/rajasthan-rssb-patwari-exam-date-2025'] ='admitCards/rajasthan_rssb_patwari_exam_date'; 
$route['admit-card/hpcl-junior-executive-exam-date-2025'] ='admitCards/hpcl_junior_executive_exam_date'; 
$route['admit-card/bpsc-mdo-exam-date-2025'] ='admitCards/bpsc_mdo_exam_date'; 
$route['admit-card/bihar-board-bseb-class-10th-12th-model-question-paper-2025'] ='admitCards/bihar_board_bseb_class_model'; 
$route['admit-card/upsc-capf-ac-admit-card-2025'] ='admitCards/upsc_capf_ac_admit_card';
$route['admit-card/sav-bihar-class-11th-dummy-admit-card-2025-27'] ='admitCards/sav_bihar_class_dummy_admit_card';
$route['admit-card/dsssb-various-post-august-september-exam-schedule-2025'] ='admitCards/dsssb_various_post_august_september'; 
$route['admit-card/bihar-board-class-10th-12th-dummy-registration-card-2026'] ='admitCards/bihar_board_class_dummy_registration'; 
//30 
$route['admit-card/railway-rrb-ntpc-102-inter-level-exam-city-details-2025'] ='admitCards/railway_rrb_ntpc_inter_level_exam_city_details_2025'; 
$route['admit-card/ssc-gd-constable-physical-test-date-2025'] ='admitCards/ssc_gd_constable_physical_test'; 
$route['admit-card/sci-junior-court-assistant-descriptive-test-admit-card-2025'] ='admitCards/sci_junior_court_assistant_descriptive_test_admit_card'; 
$route['admit-card/ssc-stenographer-c-d-exam-date-2025'] ='admitCards/ssc_stenographer_c_d_exam_date';
$route['admit-card/ssc-jht-exam-date-2025'] ='admitCards/ssc_jht_exam_date';
$route['admit-card/upsc-engineering-services-mains-admit-card-2025'] ='admitCards/upsc_engineering_services_mains_admit_card';

//31
$route['admit-card/bihar-vidhan-sabha-security-guard-02-2023-pre-admit-card-2025'] ='admitCards/bihar_vidhan_sabha_security_guard';
$route['admit-card/bihar-bssc-field-assistant-admit-card-2025'] ='admitCards/bihar_bssc_field_assistant_admit_card';
$route['admit-card/neet-pg-admit-card-2025'] ='admitCards/neet_pg_admit_card';
$route['admit-card/bpsc-dso-ad-admit-card-2025'] ='admitCards/bpsc_dso_ad_admit_card';
//1
$route['admit-card/ssc-cgl-2025-tentative-vacancy'] ='admitCards/ssc_cgl_tentative_vacancy';
$route['admit-card/uksssc-police-constable-written-admit-card-2025'] ='admitCards/uksssc_police_constable_written';
$route['admit-card/bpsc-mvi-admit-card-date-2025'] ='admitCards/bpsc_mvi_admit_card_date';
//4
$route['admit-card/dsssb-assistant-teacher-08-2023-admit-card-2025'] ='admitCards/dsssb_assistant_teacher_admit_card';
$route['admit-card/railway-rrb-ntpc-102-inter-level-admit-card-2025'] ='admitCards/railway_rrb_ntpc_inter_level_admit';
$route['admit-card/bpssc-range-officer-of-forest-admit-card-date-2025'] ='admitCards/bpssc_range_officer_forest_admit_c';
$route['admit-card/ssc-stenographer-c-d-admit-card-2025'] ='admitCards/ssc_stenographer_c_d_admit_card';
$route['admit-card/bihar-btsc-tutor-nursing-exam-date-2025'] ='admitCards/bihar_btsc_tutor_nursing_exam';
//6
$route['admit-card/bihar-vidhan-sabha-security-guard-01-2023-pet-admit-card-2025'] ='admitCards/bihar_vidhan_sabha_security_guard_pet_admit';
$route['admit-card/bihar-police-bpssc-si-prohibition-mains-admit-card-2025'] ='admitCards/bihar_police_bpssc_si_prohibition_mains_admit';
$route['admit-card/bpsc-mdo-admit-card-2025'] ='admitCards/bpsc_mdo_admit_card';
$route['admit-card/bpsc-mvi-admit-card-2025'] ='admitCards/bpsc_mvi_admit_card';

//7
$route['admit-card/rssb-vdo-new-exam-date-2025'] ='admitCards/rssb_vdo_new_exam_date';
$route['admit-card/bihar-vidhan-sabha-deo-admit-card-2025'] ='admitCards/bihar_vidhan_sabha_deo_admit_card';
$route['admit-card/afcat-02-2025-exam-city-details-out'] ='admitCards/afcat_2025_exam_city_details';

//8
$route['admit-card/bihar-vidhan-parishad-office-attendant-03-2024-admit-card-2025'] ='admitCards/bihar_vidhan_parishad_office_attendan';

//12
$route['admit-card/rajasthan-rssb-patwari-admit-card-2025'] ='admitCards/rajasthan_rssb_patwari_admit_card';
$route['admit-card/ssc-constable-gd-2024-pet-pst-admit-card-2025'] ='admitCards/ssc_constable_gd_pet_pst_admit_card';
//13
$route['admit-card/bihar-vidhan-sabha-office-attendant-05-2023-admit-card-2025'] ='admitCards/bihar_vidhan_sabha_office_attendant';
//14
$route['admit-card/bank-of-baroda-lbo-exam-date-2025'] ='admitCards/bank_of_baroda_lbo_exam_date';
$route['admit-card/bpsc-vice-principal-iti-admit-card-2025'] ='admitCards/bpsc_vice_principal_iti_admit_card';
$route['admit-card/bscb-bihar-co-operative-bank-assistant-csa-exam-date-2025'] ='admitCards/bscb_bihar_co_operative_bank_assistant';
$route['admit-card/upsc-civil-services-ias-mains-admit-card-2025'] ='admitCards/upsc_civil_services_ias_mains_admit_card';
