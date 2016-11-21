<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends CI_Controller {

	
	public function index()
    {
            // $today = date("D M j G:i:s T Y");
            $today = $this->session->userdata('today');
            $this->session->set_userdata('today', date("M j Y g:i")); 
        //this displays the page
        $this->load->view('Time_display', array("today" => $this->session->userdata('today')));

    }
}
