<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		$this->login();
	}
	
	public function perform_login() {
		echo "logging in";			
		
	}	
	
	public function 	register() {
		$this->load->view('login/register');
	}
	
	public function regPageSelect() {
		if ($this->input->post('options') == 'faculty') {
			$this->registerFaculty();			
		} else {
			$this->registerStudent();
		}				
	}
	
	public function performFacultyRegistration() {
		$this->load->model('register');
		if($this->register->save_faculty_data()) {
				echo "faculty registered<br/>";
				echo "<a href='registerFaculty'>New Faculty</a><br/>";
				echo "<a href='login'>Login Page</a>";
		}
	}
	
	public function performStudentRegistration() {
		$this->load->model('register');
		
		if($this->register->save_student_data()) {
				echo "student registered<br/>";
				echo "<a href='registerStudent'>New Student</a><br/>";
				echo "<a href='login'>Login Page</a>";
		}
		
	}	
		
	public function registerFaculty() {
		$this->load->view('login/registerFaculty');
	}	
		
	public function registerStudent() {
		$this->load->view('login/registerStudent');
	}
	
	public function login() {
		$this->load->view('login/login');
	}		
		
}