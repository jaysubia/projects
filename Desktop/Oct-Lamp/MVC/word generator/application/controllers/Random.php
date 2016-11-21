<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Random extends CI_Controller {

	
	public function index()
    {

    if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else
		{
			$this->session->set_userdata('counter', 1);
		}
		$this->load->view('index', array('counter' => $this->session->userdata('counter')) );
	}
	public function reset()
	{
		$this->session->set_userdata('counter', 0);
		redirect('/');
	}



  public function random_string(){

  	$this->load->helper('string');
	
  	$string = random_string('alnum', 16);

  	$this->session->set_userdata('string',$string);

  	redirect('/');


  
}
}