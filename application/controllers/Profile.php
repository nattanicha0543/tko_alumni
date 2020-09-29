<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index()
	{
		$this->load->view('info');
    }
	public function info(){
        $data = array(
			'title1' => $this->input->post("title1"),
			'fname' => $this->input->post("fname"),
			'lname' => $this->input->post("lname"),
			'idcard'=> $this->input->post("idcard"),
			'sex'=> $this->input->post("sex"),
			'date'=> $this->input->post("date"),
			'job'=> $this->input->post("job"),
			'Tel'=> $this->input->post("face"),
			
           
        );
        $data['info'] = $data;
        $this->load->view('showinfo',$data);
    }
}
