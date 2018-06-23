<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	function __construct() 
	{
		parent:: __construct();
		//$this->load->helper('directory');
		$this->load->model('admin_model');
	}
	
	function index() 
	{
		$data['title']		=	'Admin Login::';
		
		$this->is_logged_in();//if admin is logged in, redirect to the dashboard, if not dont log in 
		
		redirect('admin/todo');
	}
	
	function is_logged_in() 
	{
		$is_logged_in 	=	$this->session->userdata('is_logged_in');
		$admin_id		=	$this->session->userdata('admin_id');
	
		if(!isset($is_logged_in) || $is_logged_in != true || $admin_id == 0 || $admin_id == "" ){
			
			redirect('admin/login');
			
		}
		
	}
	
	function login() 
	{
		$data['title']		=	'Admin Login::';
		
		$this->load->view('admin/admin-login', $data);
	}
	
	function validate_admin() 
	{
					
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[4]|max_length[25]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[4]|max_length[32]');
		
		if($this->form_validation->run() === FALSE) {
			
			$this->login();
		
		}
		
		else {
			
				$data	=	array (
							'username'		=>	$this->input->post('username'),
							'password'		=>	$this->input->post('password')
				);
				
				$result	=	$this->admin_model->verify_admin_login($data);	
				
				if ($result	==	TRUE) {

					redirect(base_url(). 'admin/todo');
				
				}
				else {
					
					$data = array (
						'error_mssg_display' => 'Invalid Username or Password'
					);
				
					$this->session->set_userdata($data);
					
					redirect('admin/login');
				
				}
	
			}
	
	}
	
	function validate_user() 
	{
		$data['title']				=	'Admin Login::';
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[4]|max_length[25]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[4]|max_length[32]');
		
		if($this->form_validation->run() === FALSE) {
			
			$this->login();
		
		}
		
		else 
		{
				
			$username		=	$this->input->post('username');
			$password		=	$this->input->post('password');
			
			$result			=	$this->admin_model->validate_user($username, $password);
			
			
/*				
			print_r($result);
			die();	*/
			
			if($result['status']	==	'Success') 
			{
				$data		=	array(
					
					'is_admin_logged_in'	=>	true
				
				);
				
				$this->session->set_userdata($data);
				
				redirect(base_url(). 'admin/todo');
			
			}
			else 
			{
				
				$this->session->set_flashdata('message', ''.$result['status'].': '.$result['message'].'');

				redirect('admin/login');
			
			}
	
		}
	
	}
	
	
	function todo($page = False, $id = FALSE) 
	{
		$this->is_logged_in();
		
		if($page === False)
		{
			$data['title']				=	'Todo List';
			$data['todo']				=	$this->admin_model->get_todo();
			
			$this->load->view('admin/template2/header', $data);
			$this->load->view('admin/template2/side-nav');
			$this->load->view('admin/todo');
			$this->load->view('admin/template2/footer');
		}
		
		else
		{
			$this->patients_form($id);
		}
		
	}
		
	function logout() 
	{
		
		$this->session->sess_destroy();
		redirect('admin/login');
		
	}
	
}