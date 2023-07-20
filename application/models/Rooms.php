<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Model {
	public function __construct(){
        parent::__construct();
		$this->load->database();
    }
    
    public function getRoomList($limit, $available){
        $this->db->select('*');
        $this->db->from('rooms');

        if($limit > 0){
            $this->db->limit($limit);
        }
        if($available == true){
            $this->db->where('status', 'AVAILABLE');
        }
        
        $data = $this->db->get();
        return $data->result();
    }

    public function getDetail($no){
        $this->db->select('*');
        $this->db->from('rooms');
        $this->db->where('no', ''.$no.'');

        $x = $this->db->get()->result();
        if($x[0]->status == 'UNAVAILABLE'){
            redirect(base_url('/main/allrooms'));
        }
        return $x[0];
    }
}
