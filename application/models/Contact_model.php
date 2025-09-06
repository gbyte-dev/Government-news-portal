<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function save_contact($data) {
        return $this->db->insert('contacts', $data);
    }
	
	public function get_all_contacts() {
		return $this->db
			->order_by('created_at', 'DESC')
			->get('contacts')
			->result_array();
	}

	 public function insert_job_alert($data) {

       return $this->db->insert('jobalert', $data);
    }

}
