<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submission extends CI_Controller {

	
	public function index()
    {
    	if(!$this->session->userdata('gold')){
    		$this->session->set_userdata('gold', 0);
    	}
    	if(!$this->session->userdata('activities')){
    		$this->session->set_userdata('activities', array());
    	}

    	$this->load->view('index');

}
	public function reset()
	{
		
	}
		
		public function farm(){
			// $farm=$this->input->post('farm');
			$current_gold=$this->session->userdata('gold');
			$value = rand(10,20);
			$this->session->set_userdata('gold', ($value + $current_gold));
			$temp = "Earned " . $value . " gold from the farm " . date('F jS, Y g:i a');
			$activities = $this->session->userdata('activities');
			array_push($activities, $temp);
			$this->session->set_userdata('activities', $activities);
			redirect('/');
		}

		public function cave(){
			// $cave=$this->input->post('cave');
			$current_gold=$this->session->userdata('gold');
			$value = rand(5,10);
			$this->session->set_userdata('gold', ($value + $current_gold));
			$temp = "Earned " . $value . " gold from the cave " . date('F jS, Y g:i a');
			$activities = $this->session->userdata('activities');
			array_push($activities, $temp);
			$this->session->set_userdata('activities', $activities);
			redirect('/');
	
		}
		public function house(){
			// $house=$this->input->post('house');
			$current_gold=$this->session->userdata('gold');
			$value = rand(2,5);
			$this->session->set_userdata('gold', ($value + $current_gold));
			$temp = "Earned " . $value . " gold from the house " . date('F jS, Y g:i a');
			$activities = $this->session->userdata('activities');
			array_push($activities, $temp);
			$this->session->set_userdata('activities', $activities);
			redirect('/');
		}

		public function casino(){
			// $casino=$this->input->post('casino');
			

			if($current_gold=$this->session->userdata('gold')){

			$value = rand(1,100);
			$this->session->set_userdata('gold', ($value + $current_gold));
			$temp = "Earned " . $value . " gold from the casino " . date('F jS, Y g:i a');
			$activities = $this->session->userdata('activities');
			array_push($activities, $temp);
			$this->session->set_userdata('activities', $activities);
			redirect('/');
			}
		}
	}