<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('form_validation','template');
		$this->load->helper('url','form');
		$this->load->model('mlogin');

	}

	public function index()
	{
		$this->load->view('index2');
	}

	public function user(){

		if(!$this->session->userdata('login')){

			redirect(site_url('login'));
		}
		$this->template->index('main');
	}

	public function Registrasi(){
		if($this->input->post('submit',TRUE) == 'Submit'){

			$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]',
		        array('required' => 'Username dan Password wajib diisi!',
		        	  'min_length' => 'Username dan Password harus memiliki 6 karakter'
		    		)
				);
			$this->form_validation->set_rules('password','Password','required|min_length[6]',
				array('required' => 'Password tidak boleh kosong!',
					'min_length' => 'Password harus memiliki 6 karakter')
				);
			$this->form_validation->set_rules('password2','Konfirmasi Password','matches[password]',
				array('matches' => 'Password tidak sama!')

				);
			
				
			if($this->form_validation->run() == TRUE){
			$data = array(
				'username' => $this->input->post('username',TRUE),
				'password' => password_hash($this->input->post('password',TRUE),PASSWORD_DEFAULT,['cost' =>10])
			);
				$user = $this->input->post('username');
				$cek = $this->mlogin->get_where('tb_users',array('username' => $user));
					if($cek->num_rows() > 0){
						$this->session->set_flashdata("alert",'Username telah digunakan!');
						redirect(site_url('beranda/registrasi'));
					}else{
						$this->mlogin->insert('tb_users',$data);
						$this->session->set_userdata('login',TRUE);
					}

			redirect(site_url('login'));
			
			}
			
			
		}

		$this->load->view('registrasi');
	}
	
	public function Login(){

	} 
	public function lost(){
		$this->load->view('lost_pass');
	}
}
