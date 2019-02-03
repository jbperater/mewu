<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Maintenance_model extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function select() {
		
		$this->db->select('*');
		$this->db->from('modules');	
		$query = $this->db->get();
        return $result = $query->result();
				
	}

	 function view_sched($id){

		  /*$this->db->select("job_id,date,description,bldg_no,location");
		  $this->db->from('job_req');*/

		  $this->db->select("job_id,item_no,date_req,work_description,bldg_no,location,date_time_start,date_time_fin");
		  $this->db->from('job_req');
		  $this->db->where('remark','approve');
		  $this->db->where('person_attend',$id);

		  $query = $this->db->get();
		  return $query->result();
 	}
}


	