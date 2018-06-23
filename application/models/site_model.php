<?php
class Site_model extends CI_Model
{
	public function __construct()
	{
		
		
	}
	
	
	public function fetchTodo()
	{
		$query		=	$this->db->get('todo')->result_array();	
		
		return $query;
	}
	
	public function getTodo($id)
	{
		
	}
	
	public function addTodos($save)
	{
		$query						=	$this->db->insert('todo', $save);
		
		if($query)
		{
			$response['status']		=	'Success';
			$response['message']	=	'Insert Successful';
				
		}else{
			
			$response['status']		=	'Error';
			$response['message']	=	'Insert Failed';
			
		}
		
		return $response;
		
	}
	
	public function deleteTodos($id)
	{
		$this->db->where('id', $id);
		$query		=	$this->db->delete('todo');
		
		if($query)
		{
			$response['status']		=	'Success';
			$response['message']	=	'Delete Successful';
				
		}else{
			
			$response['status']		=	'Error';
			$response['message']	=	'Delete Failed';
			
		}
		
		return $response;
		
	}
	
}

?>