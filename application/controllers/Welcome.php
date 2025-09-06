<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 
	 public function __construct() {
        parent::__construct(); 
        $this->load->model('Pageview_model');
		$this->load->helper('mail');
		$this->load->model('Contact_model');
		date_default_timezone_set('Asia/Kolkata');

	 }
	
	public function index() {
        $data['title'] = 'Govt Desk';
        $data['content'] = $this->load->view('welcome_message', [], true);
        $this->load->view('main', $data);
    }

	public function details() {
        $data['title'] = 'RRC Eastern Railway Apprentice Recruitment 2025';
        $data['content'] = $this->load->view('details', [], true);
        $this->load->view('main', $data);
    }
	
	public function static($slug) {
		$slug = strtolower($slug);
		$view_path = 'categories/' . $slug;

		// Check if category view exists
		if (!file_exists(APPPATH . 'views/' . $view_path . '.php')) {
			show_404();
		}

		$data['title'] = ucwords(str_replace('-', ' ', $slug));
		$data['content'] = $this->load->view($view_path, [], true);
		$this->load->view('main', $data);
	}
	
	public function coming_soon(){
		$data['title'] = 'Coming Soon';
		$data['content'] = $this->load->view('coming_soon', [], true);
		$this->load->view('main', $data);
	}
	public function job_alerts(){
		$data['title'] = 'Job Alerts';
		$data['content'] = $this->load->view('job_alerts', [], true);
		$this->load->view('main', $data);
	}
	public function job_alert_submit() {
        $this->load->model('Contact_model');
        $email = $this->input->post('email');
        $ipaddress = $this->input->ip_address() ?? '103.157.195.94';

        // Prepare data for insertion
        $data = array(
            'email' => $email,
            'ipaddress' => $ipaddress,
            'createdate' => date('Y-m-d H:i:s') 
        );
        if ($this->Contact_model->insert_job_alert($data)) {
            redirect('job-alerts');  
        } else {
            redirect('job-alerts');
        }
    }


	public function track_category_click() {
		header('Content-Type: application/json');

		try {
			$input = json_decode(file_get_contents('php://input'), true);

			if (!is_array($input)) {
				throw new Exception('Invalid JSON payload');
			}

			echo $page_url = isset($input['page_url']) ? $input['page_url'] : '';
			echo $ip_address = $this->input->ip_address() ?? '103.157.195.94';
			$created_at = date('Y-m-d H:i:s');

			if (empty($page_url)) {
				throw new Exception('Missing page_url in request');
			}

			// Skip insertion if IP is the blocked one
			if ($ip_address == '103.157.195.68') {
				echo json_encode([
					'status' => 'skipped',
					'message' => 'IP address is excluded from tracking'
				]);
				return;
			}

			$data = [
				'page_url' => $page_url,
				'ip_address' => $ip_address,
				'createdate' => $created_at
			];

			$this->Pageview_model->insert_view($data);

			echo json_encode([
				'status' => 'success',
			]);
		} catch (Exception $e) {
			http_response_code(500);
			echo json_encode([
				'status' => 'error',
				'message' => $e->getMessage()
			]);
		}
	}


	 public function get_all_pageviews() {
			try {
				$data = $this->Pageview_model->get_all_views();
				echo "<pre>";

				echo json_encode([
					'status' => 'success',
					'data' => $data
				]);
			} catch (Exception $e) {
				http_response_code(500);
				echo json_encode([
					'status' => 'error',
					'message' => $e->getMessage()
				]);
			}
		}
		
		
		public function contact_us(){
			$data['title'] = 'Govtdesk - Contact Us';
			$data['content'] = $this->load->view('contact-us', [], true);
			$this->load->view('main', $data);
		}
		
		public function submit_contact() {
			header('Content-Type: application/json');

			$name    = $this->input->post('name');
			$email   = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			if (!$name || !$email || !$subject || !$message) {
				echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
				return;
			}

			$email_data = [
				'name'         => htmlspecialchars($name),
				'email'        => htmlspecialchars($email),
				'subject'      => htmlspecialchars($subject),
				'message'      => nl2br(htmlspecialchars($message)),
				'current_year' => date('Y')
			];

			// Load email templates
			$adminMessage = $this->load->view('emails/new_contact_admin', $email_data, TRUE);
			$userMessage  = $this->load->view('emails/new_contact_user', $email_data, TRUE);

			// Send emails
			$adminSent = send_email('sub800.dev@gmail.com', 'New Contact Form Submission', $adminMessage, $email, $name);
			$userSent  = send_email($email, 'We received your message', $userMessage, 'noreply@sarkarijobs.com', 'SarkariJobs');

			if ($adminSent && $userSent) {
				// Save to DB using model
				$contact_data = [
					'name'       => $name,
					'email'      => $email,
					'subject'    => $subject,
					'message'    => $message,
					'ip_address' => $this->input->ip_address(),
					'created_at' => date('Y-m-d H:i:s')
				];

				$this->Contact_model->save_contact($contact_data);

				echo json_encode(['status' => 'success', 'message' => 'Your message has been sent.']);
			} else {
				echo json_encode(['status' => 'error', 'message' => 'Email sending failed. Please try again.']);
			}
		}
		
		public function get_contacts_json() {
			$contacts = $this->Contact_model->get_all_contacts();
			header('Content-Type: application/json');
			echo json_encode([
				'status' => 'success',
				'data' => $contacts
			]);
		}
		
		public function navy_jobs(){
			$data['title'] = 'Govtdesk - Indian Navy Civilian Recruitment 2025';
			$data['content'] = $this->load->view('pages/navy-jobs', [], true);
			$this->load->view('main', $data);
		}
		
		public function sitemap() {
			// Set content type
			header("Content-Type: application/xml");

			// Your sitemap data
			$data['urls'] = [
				[
					'loc' => base_url(),
					'lastmod' => '2025-07-09',
					'changefreq' => 'daily',
					'priority' => '1.0'
				],
				[
					'loc' => base_url() . '#latest-jobs',
					'lastmod' => '2025-07-09',
					'changefreq' => 'daily',
					'priority' => '0.9'
				],
				[
					'loc' => base_url() . '#results',
					'lastmod' => '2025-07-09',
					'changefreq' => 'daily',
					'priority' => '0.9'
				],
				[
					'loc' => base_url() . '#admit-cards',
					'lastmod' => '2025-07-09',
					'changefreq' => 'daily',
					'priority' => '0.8'
				],
				[
					'loc' => base_url() . '#answer-keys',
					'lastmod' => '2025-07-09',
					'changefreq' => 'weekly',
					'priority' => '0.7'
				],
				[
					'loc' => base_url() . '#syllabus',
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.7'
				],
				[
					'loc' => base_url('contact-us'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				//jobs url 
				[
					'loc' => base_url('dsssb-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('bpsc-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('wbssc-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('navyAgniveer-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('indian-Navy-B-Tech-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('indian-coast-guard-ac-01-2027-jobs'),
					'lastmod' => '2025-07-10',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('indian-navy-ssc-technical-april-recruitment-jobs'),
					'lastmod' => '2025-07-10',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('ssc-cgl-correction-editform-jobs'),
					'lastmod' => '2025-07-10',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('bscb-co-operative-BankAssistant-jobs'),
					'lastmod' => '2025-07-10',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				
				//categories url
				
				[
					'loc' => base_url('upsc-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('ssc-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('railway-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('banking-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('defense-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('teaching-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('police-paramilitary'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('psu-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('court-jobs'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				[
					'loc' => base_url('parliament-secretariat'),
					'lastmod' => '2025-07-09',
					'changefreq' => 'monthly',
					'priority' => '0.6'
				],
				
			];

			$this->load->view('sitemap_view', $data);
		}
		
		public function admit_cards()
		{
			$data['title'] = 'Latest Admit Card 2025 | Govt Desk - govtdesk.com';
			$data['meta_description'] = 'Latest Admit Card 2025 | All India Admit Card for Recruitment / Admission / Mains Pravesh Patra / Interview Letter | Govt Desk - govtdesk.com Admit Card 2025';
            $data['meta_keywords'] = 'Latest Admit Card 2025 | All India Admit Card for Recruitment / Admission / Mains Pravesh Patra / Interview Letter';
			$data['content'] = $this->load->view('admit-cards', [], true);
			$this->load->view('main', $data);
		}

		public function disclaimer()
		{
			$data['title'] = 'Disclaimer | Govt Desk - govtdesk.com';
			$data['meta_description'] = 'Disclaimer | All India Admit Card for Recruitment / Admission / Mains Pravesh Patra / Interview Letter | Govt Desk - govtdesk.com Admit Card 2025';
            $data['meta_keywords'] = 'Disclaimer | All India Admit Card for Recruitment / Admission / Mains Pravesh Patra / Interview Letter';
			$data['content'] = $this->load->view('disclaimer', [], true);
			$this->load->view('main', $data);
		}

		public function privacy_policy()
		{
			$data['title'] = 'Privacy Policy | Govt Desk - govtdesk.com';
			$data['meta_description'] = 'Privacy Policy | All India Admit Card for Recruitment / Admission / Mains Pravesh Patra / Interview Letter | Govt Desk - govtdesk.com Admit Card 2025';
            $data['meta_keywords'] = 'Privacy Policy | All India Admit Card for Recruitment / Admission / Mains Pravesh Patra / Interview Letter';
			$data['content'] = $this->load->view('privacy_policy', [], true);
			$this->load->view('main', $data);
		}
		
		public function sent_jobs(){
		$data['title'] = 'Update Jobs';
		$data['content'] = $this->load->view('update_jobs', $data, true);
        $this->load->view('main', $data);
        }


    public function update_jobs(){
    $data['title'] = 'Update Jobs';
    $this->db->select('email');
    $this->db->from('jobalert');
    $query = $this->db->get();
    $data['emails'] = $query->result();

    // If form is submitted
    if($this->input->server('REQUEST_METHOD') == 'POST'){

        $jobTitle = $this->input->post('title');
        $jobUrl   = $this->input->post('url');

        // Email subject & message
        $subject = "New Job Alert: " . $jobTitle;
     $message = "
    <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                    color: #333;
                }
                .container {
                    width: 100%;
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #ffffff;
                    border-radius: 8px;
                    overflow: hidden;
                }
                .header {
                    background-color: #e9841f;  /* Fixed the extra # */
                    color: white;
                    padding: 20px;
                    text-align: center;
                }
                .header h1 {
                    margin: 0;
                    font-size: 28px;
                }
                .content {
                    padding: 20px;
                    text-align: center;
                }
                .content h2 {
                    font-size: 22px;
                    color: #333;
                    margin-bottom: 15px;
                }
                .content p {
                    font-size: 16px;
                    line-height: 1.6;
                    color: #555;
                }
                .btn {
                    background-color: black;
                    color: white;
                    padding: 12px 20px;
                    font-size: 16px;
                    text-decoration: none;
                    border-radius: 5px;
                    display: inline-block;
                    margin-top: 20px;
                }
                .footer {
                    background-color: #f8f9fa;
                    text-align: center;
                    padding: 10px;
                    font-size: 14px;
                    color: #888;
                }
                .footer a {
                    color: #007BFF;
                    text-decoration: none;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>Job Alert: {$jobTitle}</h1>
                </div>
                <div class='content'>
                    <!-- You need to replace this PHP block with the full image URL before sending the email -->
                    <h2><a href='{$base_url}' class='logo'> <img src='https://govtdesk.com/assets/img/govt_desk.webp' alt='Logo' style='width: 80px; height: auto;'></a> New Job Opportunity</h2>
                    <p>We are excited to inform you about a new job opening for the position of <strong>{$jobTitle}</strong>.</p>
                    <p>For more details, and to apply, please click the link below:</p>
                    <a href='{$jobUrl}' class='btn' target='_blank' style='color:white;'>Apply Here</a>
                </div>
                <div class='footer'>
                    <p>If you are no longer interested in receiving job alerts, <a href='#'>unsubscribe here</a>.</p>
                    <p>© 2025 Job Alerts, All Rights Reserved.</p>
                </div>
            </div>
        </body>
    </html>
";

		  //$allEmailsSentSuccessfully = true;

        // Loop through all emails and send
        foreach($data['emails'] as $row){
            $this->email->from('shubham18822@gmail.com', 'Govtdesk.com Job Alerts');
            $this->email->to($row->email);
            $this->email->subject($subject);
            $this->email->message($message);

            if (!$this->email->send()) {
                // Debugging email error
                 $this->email->print_debugger();
            } else {
                echo "Email sent to: " . $row->email . "<br>";
            }
        }

        // if ($allEmailsSentSuccessfully) {
        //     $this->session->set_flashdata('success', 'Job alert sent successfully to all subscribers.');
        // } else {
        //     $this->session->set_flashdata('error', 'There was an issue sending the job alerts to some subscribers.');
        // }
    }
    redirect('sent-jobs');
    // Load the form view
    // $data['content'] = $this->load->view('update_jobs', $data, true);
    // $this->load->view('main', $data);
}

    public function ipaddress_add(){
        $ipaddress = $this->input->post('ipaddress');

        $this->db->select('ipaddress');
        $this->db->from('jobalert');
        $this->db->where('ipaddress', $ipaddress);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            echo "success";
        } else {
            $this->db->insert('jobalert', [
                'ipaddress' => $ipaddress,
                'createdate' => date('Y-m-d H:i:s')
            ]);
        }
    } 

}
