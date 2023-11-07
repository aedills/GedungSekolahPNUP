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
		$head['title']= 'Home';

		$this->load->view('components/head', $head);
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
		$head['title']= 'Daftar Ruang';

		$this->load->view('components/head', $head);
		$this->load->view('components/navbar', $nav);
        $this->load->view('roomlist', $data);
		$this->load->view('components/foot');
	}
	
	public function book($room_no){
		$nav['location'] = 'booked';
		$this->load->model('Rooms');
		$data['roomdata'] = $this->Rooms->getDetail($room_no);
		$data['dosen'] = $this->Rooms->getDosen(null);
		$data['status'] = array(
			'available'=> 'fa-sharp fa-solid fa-circle-check',
			'unavailable'=> 'fa-solid fa-circle-xmark'
		);

		$head['title']= 'Booking';

		$this->load->view('components/head', $head);
		$this->load->view('components/navbar', $nav);
		$this->load->view('room/booking', $data);
		$this->load->view('components/foot');
	}

	public function doBooking(){
		$nav['location'] = '';
		$this->load->model('Data');
		$data['status'] = array(
			'available'=> 'fa-sharp fa-solid fa-circle-check',
			'unavailable'=> 'fa-solid fa-circle-xmark'
		);

		$input = new stdClass();
		$input = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'room_id' => $this->input->post('room_id'),
			'in_h' => $this->input->post('in_h'),
			'in_m' => $this->input->post('in_m'),
			'out_h' => $this->input->post('out_h'),
			'out_m' => $this->input->post('out_m'),
			'id_dosen' => $this->input->post('id_dosen'),
			'matkul' => $this->input->post('matkul')
		];

		$status = $this->Data->addBooking($input);
		if($status){
			redirect('main/booked');
		}
		else{
			$page = 'main/book/'.$this->input->post('room_id');
			redirect($page);
		}
	}

	public function booked(){
		$nav['location'] = 'booked';
		$this->load->model('Data');
		$data['bookedData'] = $this->Data->getBooked();
		$data['status'] = array(
			'available'=> 'fa-sharp fa-solid fa-circle-check',
			'unavailable'=> 'fa-solid fa-circle-xmark'
		);
		$head['title']= 'Daftar Booking';

		$this->load->view('components/head', $head);
		$this->load->view('components/navbar', $nav);
		$this->load->view('room/booked', $data);
		$this->load->view('components/foot');
	}
}
