<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller 
{
	function __construct() 
	{
		parent:: __construct();
		$this->load->model('site_model');

	}
	
	function index() 
	{
		
		$this->load->view('pages/index');
	}
	
	public function fetchTodos()
	{
		$query		=	$this->site_model->fetchTodo();
		
		$result['status']	=	'Success';
		$result['data']		=	json_encode($query);
		
		echo json_encode($result, true);	
		
	}
	
	public function deleteTodos($id)
	{
		//$id		=	$this->input->post('id');
		
		$query					=	$this->site_model->deleteTodos($id);
		
		echo json_encode($query, true);	
		
	}
	
	public function addTodos()
	{
		$request					=	file_get_contents('php://input');
		
		if(!empty($request))
		{
			
			$data					=	json_decode($request, true);
			
			$save['title']			=	$data['title'];	
			$save['completed']		=	$data['completed'];
			
			$query					=	$this->site_model->addTodos($save);
			
			$response				=	$query;
						
		}else{
			
			$response['status']		=	'Error';
			$response['message']	=	'Nothing was provided to this api';	
		}
				
		
		echo json_encode($response, true);	
		
	}
		
}
	
