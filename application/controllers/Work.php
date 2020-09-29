<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {

    function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('work');
    }
    public function work()
	{
		
            $data = array(
                'Work-No' => $this->input->post("Work-No"),
                'Moo-work' => $this->input->post("Moo-work"),
                'road-work' => $this->input->post("road-work"),
                'Province-work'=> $this->input->post("Province-work"),
                'Area-work'=> $this->input->post("Area-work"),
                'Sub-area-work'=> $this->input->post("Sub-area-work"),
                'Postal-Code-work'=> $this->input->post("Postal-Code-work"),
                'Tel-work'=> $this->input->post("Tel-work")
            );
            $data['work']= $data;
        $this->load->view('showwork',$data);
        }
        
}
