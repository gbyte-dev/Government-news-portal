<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrackVisitor {

    public function track() {
        $CI =& get_instance();
        $CI->load->model('Pageview_model');
        $CI->load->helper('url'); // For current_url()

        try {
            // Get current URL
            $page_url = current_url();

            // Get IP address
            $ip_address = $CI->input->ip_address() ?? 'UNKNOWN';

            // Skip specific IP (e.g. server monitoring or developer)
            if ($ip_address == '103.157.195.106') {
                return; // No output
            }

            // Validate
            if (empty($page_url)) {
                return; // Or log error optionally
            }

            $data = [
                'page_url' => $page_url,
                'ip_address' => $ip_address,
                'createdate' => date('Y-m-d H:i:s')
            ];
            //echo '<pre>';print_r($data);die;
            // Save to DB
            $CI->Pageview_model->insert_view($data);

        } catch (Exception $e) {
            // Optional: log error
            log_message('error', 'TrackVisitor Error: ' . $e->getMessage());
        }
    }
}

