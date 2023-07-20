<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('Rooms');
		$this->load->helper('url');

		if(!$this->session->userdata('auth_data')){
            redirect('auth/login');
        }
    }
	public function index(){
		$nav['location'] = 'home';
		
		$data['listRoom'] = $this->Rooms->getRoomList(6, true);
		$data['status'] = array(
			'available'=> 'fa-sharp fa-solid fa-circle-check',
			'unavailable'=> 'fa-solid fa-circle-xmark'
		);

		$this->load->view('components/head');
		$this->load->view('components/navbar', $nav);
        $this->load->view('home', $data);
		$this->load->view('components/foot');
	}

	public function allRooms(){
		$nav['location'] = 'allrooms';
		
		$data['listRoom'] = $this->Rooms->getRoomList(0, false);
		$data['status'] = array(
			'available'=> 'fa-sharp fa-solid fa-circle-check',
			'unavailable'=> 'fa-solid fa-circle-xmark'
		);

		$this->load->view('components/head');
		$this->load->view('components/navbar', $nav);
        $this->load->view('roomlist', $data);
		$this->load->view('components/foot');
	}
	
	public function book($room_no){
		$nav['location'] = '';
		$this->load->model('Rooms');
		$data['roomdata'] = $this->Rooms->getDetail($room_no);
		$data['status'] = array(
			'available'=> 'fa-sharp fa-solid fa-circle-check',
			'unavailable'=> 'fa-solid fa-circle-xmark'
		);

		$this->load->view('components/head');
		$this->load->view('components/navbar', $nav);
		$this->load->view('room/booking', $data);
		$this->load->view('components/foot');
	}

	public function booked(){
		$nav['location'] = 'booked';
		$this->load->model('Rooms');
		// $data['roomdata'] = $this->Rooms->getDetail($room_no);
		$data['status'] = array(
			'available'=> 'fa-sharp fa-solid fa-circle-check',
			'unavailable'=> 'fa-solid fa-circle-xmark'
		);

		$this->load->view('components/head');
		$this->load->view('components/navbar', $nav);
		$this->load->view('room/booked', $data);
		$this->load->view('components/foot');
	}
}
