<?php

class Admin_model extends CI_Model
{
	function verify_admin_login($data) 
	{
		
		$this->db->where('username', $data['username']);
		$this->db->where('password', md5($data['password']));
		$this->db->where('status', '1');	//so that an unregistered admin does not get entry
		$query = $this->db->get('admin_tbl');
					
		if ($query->num_rows() == 1) 
		{
			$from_db	= $query->row();
			
			$set_sesson_details = array 
								(
									'admin_id'			=> $from_db->admin_id,
									'firstname' 		=> $from_db->firstname,
									'lastname' 			=> $from_db->lastname,
									'is_logged_in'		=> TRUE
								);
								
			$this->session->set_userdata($set_sesson_details); // pass the users details to the session method
			
			return TRUE;
		}			
		else 
		{
			return FALSE;
		}
		
	}
	
	public function get_todo()
	{
		$query	=	$this->db->get('todo')->result_array();
		
		return $query;
			
	}
}
	
	
?>