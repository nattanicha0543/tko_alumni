<?php
defined('BASEPATH') or exit('No direct script access allowed');

class page extends CI_Controller
{

	

	public function index()
	{
		$this->load->view('contect');
	}

	public function contect()
	{

		$data = array(

			'email' => $this->input->post("email"),
			'phone' => $this->input->post("phone"),
			'facebook' => $this->input->post("facebook"),
			'line' => $this->input->post("line"),

		);
		$data['contect'] = $data;
		$this->load->view('show',$data);

	}


}
