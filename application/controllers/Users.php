<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }

    }
    
    public function index()
    {
        $data['get'] = $this->m_data->tampil_data('user')->result();
        $data['title'] = 'Asset Management | User Management';
        $this->load->view('templates/index_sidebar2', $data); 
        $this->load->view('users', $data);
        $this->load->view('templates/index_footer');
    }

    public function tampil()
    {
        $data = array(
            'name' => $name,
            'email' => $email
        );
        $this->m_data->input_data($data, 'user');
        redirect('Users/index');
    }
    
}