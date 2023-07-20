<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->helper('url');
    }

    // Login viewform
    public function login(){
        if($this->session->userdata('auth_data')){
            redirect('');
        }
        else{
            $this->load->view('components/head');
            $this->load->view('auth/login');
        }
    }

    // Login action
    public function log1n(){
        $this->form_validation->set_rules('nim', 'nim', 'trim|required|numeric');
        $this->form_validation->set_rules('p', 'p', 'trim|required');
        
        if ($this->form_validation->run() ==  false) {
            $this->load->view('components/head');
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }

    }

    // Do Login
    protected function _login(){
        $nim = $this->input->post('nim');
        $pass = $this->input->post('p');

        $user = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();

        if($user){
            if (password_verify($pass, $user['p4ssword'])) {
                $this->session->set_userdata('auth_data', $user);
                if($user['avtivated'] == 0){
                    redirect('auth/setpass');
                }
                elseif($user['avtivated'] == 1){
                    redirect('');
                }
            }
            else{
                $this->session->set_flashdata('password', '<div class="alert small mt-2 alert-danger" role="alert"> Password Salah! </div>');
                redirect('auth/login');
            }
        }
        else{
            $this->session->set_flashdata('nim', '<div class="alert small mt-2 alert-danger" role="alert">NIM tidak ditemukan!</div>');
            redirect('auth/login');
        }
    }

    // Set new pass viewform
    public function setpass(){
        $this->load->view('components/head');
        $this->load->view('auth/newpass');
    }

    public function setp(){
        $this->form_validation->set_rules('p', 'p', 'required|trim|min_length[8]', ['min_length' => 'Password terlalu pendek, buat minimal 8 karakter.']);

        if ($this->form_validation->run() ==  false) {
            $this->load->view('components/head');
            $this->load->view('auth/newpass');
        } else {
            $this->_updatepass();
        }
    }

    protected function _updatepass(){
        $nim = $this->session->userdata['auth_data']['nim'];

        $pass = password_hash($this->input->post('p'), PASSWORD_DEFAULT);
        $this->db->set('avtivated', 1);
        $this->db->set('p4ssword', $pass);
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa');

        $this->session->unset_userdata('auth_data');

        $user = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
        $this->session->set_userdata('auth_data', $user);
        redirect('');
    }


    // LogOut
    public function logout(){
        $this->session->unset_userdata('auth_data');
        $this->session->set_flashdata('nim', '<div class="alert small mt-2 alert-danger" role="alert">Anda telah keluar/logout!</div>');
        redirect('auth/login');
    }
}