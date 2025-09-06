<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pageview_model extends CI_Model {

		public function insert_view($data) {
			$this->db->insert('pageview', $data);
		}
		public function page_exists($url,$ip_address) {
			$this->db->where('page_url', $url);
			$this->db->where('ip_address', $ip_address);
			$query = $this->db->get('pageview');
			return $query->num_rows() > 0;
		}
		public function get_all_views() {
			return $this->db->get('pageview')->result_array();
		}
	}
