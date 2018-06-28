<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
		$this->load->helper('url','form');
		$this->load->model('mlogin');
	}

	public function index()
	{	

		if($this->input->post('submit') == 'Submit'){

		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);

		$cek_admin = $this->mlogin->get_where('tb_admin',array('username'=> $username ));

		if($cek_admin->num_rows() > 0){
			$data = $cek_admin->row_array();
			$this->session->set_userdata('login',TRUE);

			if(password_verify($password,$data['password']) && $data["level"] === '1'){
				$this->session->set_userdata("id_admin",$data["id_admin"]);
				$this->session->set_userdata("username",$data["username"]);

				redirect(site_url('welcome'));
				
				}else{
					$this->session->set_flashdata("alert",'Username atau Password ADMIN salah!!!');
				}

			}else{ //login sbg user
			
				$cek_user = $this->mlogin->get_where('tb_users',array('username'=> $username));

			if($cek_user->num_rows() > 0){
				$data = $cek_user->row_array();

				if(password_verify($password,$data["password"])){
					$this->session->set_userdata('login',TRUE);

					$this->session->set_userdata("id_user",$data->id_user);
					$this->session->set_userdata("username",$data->username);

					redirect(site_url("beranda/user"));
					}else{
						$this->session->set_flashdata("alert",'Username atau Password USER salah!!!');
					}
				}else{
					$this->session->set_flashdata("alert",'Username atau Password USER salah!!!');
				}
			}
		
		}
		$this->load->view('login');
	}

	public function logout(){
		$this->session->sess_destroy();
		$url = base_url();
		redirect($url);
	}
}
