<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('index');
	}

	public function enviar(){

		$nome = $this->input->post('nome');
		$sobrenome = $this->input->post('sobrenome');
		$email = $this->input->post('email');
		$mensagem = $this->input->post('mensagem');

		$this->manda_email($nome,$sobrenome,$email,$mensagem);
		$this->session->set_userdata("notice", "Sua messagem foi enviada com sucesso, assim que possivel, entraremos em contato. A Vitroart agradece sua mensagem!");
		redirect(base_url());
	}

	public function manda_email($nome,$sobrenome,$email,$mensagem){
		$config_email = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => getenv("EMAIL_SEND"),
			'smtp_pass' => getenv("PASS_EMAIL_SEND"),
			'mailtype'  => 'html', 
			'charset'   => 'utf-8'
		);

		
		$this->load->library('email', $config_email);
		$this->email->set_newline("\r\n");
		$this->email->from(getenv("EMAIL_CLI"));
		$this->email->to($email);
		$this->email->subject('Contato Site Vitroart');
		$this->email->message($mensagem);
		$this->email->send();
	}
}
