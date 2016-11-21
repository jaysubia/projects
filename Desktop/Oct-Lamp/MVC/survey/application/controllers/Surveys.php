<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {

	
	public function index()
    {
    $this->load->view('index');
    }

  public function process_form()
    {
        $survey_form['name'] = $this->input->post('name');
        $survey_form['location'] = $this->input->post('location');
        $survey_form['language'] = $this->input->post('language');
        $survey_form['comment'] = $this->input->post('comment');

        $counter=$this->session->userdata('counter');
        $this->session->set_userdata('counter', $counter+1);

        $this->load->view('submit', array("name" => $survey_form['name'], "location" => $survey_form['location'], "language" => $survey_form['language'], "comment" => $survey_form['comment'], "counter" => $this->session->userdata('counter')));
}
}