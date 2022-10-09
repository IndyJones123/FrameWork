<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed aat http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Registration');
	}



	public function index()
	{
		$this->form_validation->set_rules('Username','Username');
        $this->form_validation->set_rules('Password','Password');
        
		$data['account'] = $this->M_Registration->get_account();
		$this->load->library('user',$data);
		$this->user->Get_template($data);
	}
	
	function save_data(){
		
		$this->load->model('M_Registration');
		$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

				$this->form_validation->set_rules('Username', 'Username', 'trim|is_unique[account.Username]',
				['is_unique'=> 'Username sudah diambil orang!'			
				]);
				$this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[8]');
                
                $this->form_validation->set_rules('Email', 'Email', 'required|is_unique[account.Email]',
				['is_unique'=> 'Emailnya sudah diambil orang!'			
				]);

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('V_Registration');
                }
                else
                {
					$this->M_Registration->add_data();
					redirect('Registration');
                }

	}

	public function update_account($Username = null)
    {
        if ($this->input->post()) {
			$data_account = $this->input->post();
            $this->M_Registration->update_account($data_account);
            redirect('Registration');
        } else {
            $data_update['account'] = $this->M_Registration->get_spesifik_account($Username);
            $this->load->view('V_update', $data_update);
        }
    }

	public function delete_account($Username)
    {
        $this->M_Registration->delete_account($Username);
        redirect('Registration');
    }




}