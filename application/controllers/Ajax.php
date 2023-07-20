<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('Data');
		$this->load->helper('url');
    }

    function getList($lt1, $lt2, $lt3, $ac, $monitor){
        $list = $this->Data->getList($lt1, $lt2, $lt3, $ac, $monitor);
        $data['list'] = $list;
        $data['status'] = array(
			'available'=> 'fa-sharp fa-solid fa-circle-check',
			'unavailable'=> 'fa-solid fa-circle-xmark'
		);
        $data['disabled'] = 'onclick="return false"';

        
        $this->load->view('ajax/ajx_roomlist', $data);
    }
}
