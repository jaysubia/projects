<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
    //loads the login view
    public function index()
    {
        
        $errors=$this->session->flashdata('errors');
        $this->load->view('student_login_page',Array("errors"=>$errors));
    }
    //processes the student login
    public function register(){

       
         $this->load->library('form_validation');
         $this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[users.email]');
         $this->form_validation->set_rules('password', 'Password', 'required|matches[password]');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->session->set_flashdata('errors',validation_errors());
                        redirect('/');
                }
                else
                {
                       $this->load->model('Student_model');
                       $id=$this->Student_model->register_student($this->input->post());
                       $this->session->set_userdata('user',$id);
                 $this->session->set_flashdata('register_message', "You have successfully registered! Please Login");
                 $this->session->flashdata('register_message');      
                       redirect('/');



                }
        
    }
    public function login()
    {
 

        $this->load->library('form_validation');
         $this->form_validation->set_rules('email', 'Email','required|valid_email');
         $this->form_validation->set_rules('password', 'Password', 'required|matches[password]');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->session->set_flashdata('errors',validation_errors());
                        redirect('/');
                }
                else
                {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->load->model('Student_model');
        $student = $this->Student_model->get_student_by_email($email,$password);
        if(!$student){
        	redirect('/');
        }
        $user = array(
			               'student_id' => $student['id'],
			               'student_email' => $student['email'],
			               'student_first_name' => $student['first_name'],
			               'student_last_name' => $student['last_name'],
			               'is_logged_in' => true
			               );
			            $this->session->set_userdata("user", $user);
			        
			            // var_dump($user);

			            // die();
			            redirect('Students/profile');

    }
}
    //simple profile page of a student
   public function profile(){
   	// var_dump($this->session->userdata('user'));
   	// die('hi');
		if (!$this->session->userdata('user')){
			redirect('/');
		}
		$user = $this->session->userdata('user');

		$this->load->view('welcome', array(
								'user'=>$this->session->userdata('user'),
								'register_message' => $this->session->flashdata('register_message')));

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}

}