<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syllabus extends CI_Controller {
	 
	 public function __construct() {
        parent::__construct(); 
		date_default_timezone_set('Asia/Kolkata');
    }
		
    public function index() {
		$data['title'] = 'Latest Syllabus 2025 | Govt Desk - govtdesk.com';
		$data['meta_description'] = 'Latest Syllabus 2025 | All India Answer-Keys of Recruitment / Admission / Mains Pravesh Patra / Interview Letter | Govt Desk - govtdesk.com Answer-Keys 2025';
		$data['meta_keywords'] = 'Latest Syllabus 2025 | All India Answer-Keys of Recruitment / Admission / Mains Pravesh Patra / Interview Letter';
		$data['content'] = $this->load->view('syllabus/index', [], true);
		$this->load->view('main', $data);
	}
	
	public function UPSCCBIAssistantProgrammerOnlineForm2024() {
        $data['title'] = 'UPSC CBI Assistant Programmer Recruitment 2024 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'UPSC CBI Assistant Programmer Recruitment 2024 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'UPSC CBI Assistant Programmer Recruitment 2024 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('syllabus/UPSCCBIAssistantProgrammerOnlineForm2024', [], true);
        $this->load->view('main', $data);
    }
	
	public function RailwayRRBALPExamSyllabus2024() {
        $data['title'] = 'Railway RRB ALP Exam Syllabus 2024 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Railway RRB ALP Exam Syllabus 2024 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Railway RRB ALP Exam Syllabus 2024 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('syllabus/RailwayRRBALPExamSyllabus2024', [], true);
        $this->load->view('main', $data);
    }
	
	public function RailwayRPFSIExamSyllabus2024() {
        $data['title'] = 'Railway RPF SI Exam Syllabus 2024 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'Railway RPF SI Exam Syllabus 2024 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'Railway RPF SI Exam Syllabus 2024 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('syllabus/RailwayRPFSIExamSyllabus2024', [], true);
        $this->load->view('main', $data);
    }
	
	public function SSCGDConstableExamSyllabus2024() {
        $data['title'] = 'SSC GD Constable Exam Syllabus 2024 - Govt Desk | govtdesk.com';
        $data['meta_description'] = 'SSC GD Constable Exam Syllabus 2024 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['meta_keywords'] = 'SSC GD Constable Exam Syllabus 2024 | Exam Date | Download | Official Website Direct Link now Available on Govt Desk | govtdesk.com';
        $data['content'] = $this->load->view('syllabus/SSCGDConstableExamSyllabus2024', [], true);
        $this->load->view('main', $data);
    }
	
	
}