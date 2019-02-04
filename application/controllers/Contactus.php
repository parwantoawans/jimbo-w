<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller
{
    public function index()
	{
		$this->load->view('contact-us/index');
	}

	public function sendEmail(){
		$name = $this->input->post('name');
		$email = $this->input->post('emailAddress');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		// $this->email->from($email, 'Dimas Rifqi');
		// $this->email->to('dimas@codigo.id');
		// // $this->email->cc('parwanto@codigo.id');
		// // $this->email->bcc('them@their-example.com');

		// $this->email->subject($subject);
		// $this->email->message($message);

		// $this->email->send();

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'dimasrifqi296@gmail.com', // change it to yours
			'smtp_pass' => 'd1m4srifqi296', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$message = '';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($email); // change it to yours
		$this->email->to('dimas@codigo.id');// change it to yours
		$this->email->subject($subject);
		$this->email->message($message);
		if($this->email->send())
		{
			$this->session->set_flashdata('success', 'Success sending message! Thank you for your attention !');
        	redirect('contact-us');
		}
		else
		{
			$this->session->set_flashdata('failed', 'Error sending message!' . show_error($this->email->print_debugger()));
        	redirect('contact-us');
		}

		
	}
}
?>