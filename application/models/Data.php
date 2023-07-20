<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {
	public function __construct(){
        parent::__construct();
		$this->load->database();
    }
    public function getList($lt1, $lt2, $lt3, $ac, $monitor){


        // Query lantai 1
        if($lt1 == 'y'){
            if($ac == 'n' AND $monitor == 'n'){
                $lt1Condition = array('lt' => '1');
            }
            elseif($ac == 'n' OR $monitor == 'n'){
                if($ac == 'n'){
                    $lt1Condition = array('lt' => '1', 'monitor' => '1');
                }
                elseif($monitor == 'n'){
                    $lt1Condition = array('lt' => '1', 'ac' => '1');
                }
            }
            else{
                $lt1Condition = array('lt' => '1', 'ac' => '1', 'monitor' => '1');
            }
            $dataLt1 = $this->db->select('*')->from('rooms')->where($lt1Condition)->get()->result();
        }
        else{
            $dataLt1 = array();
        }

        // Query lantai 2
        if($lt2 == 'y'){
            if($ac == 'n' AND $monitor == 'n'){
                $lt2Condition = array('lt' => '2');
            }
            elseif($ac == 'n' OR $monitor == 'n'){
                if($ac == 'n'){
                    $lt2Condition = array('lt' => '2', 'monitor' => '1');
                }
                elseif($monitor == 'n'){
                    $lt2Condition = array('lt' => '2', 'ac' => '1');
                }
            }
            else{
                $lt2Condition = array('lt' => '2', 'ac' => '1', 'monitor' => '1');
            }
            $dataLt2 = $this->db->select('*')->from('rooms')->where($lt2Condition)->get()->result();
        }
        else{
            $dataLt2 = array();
        }

        // Query lantai 3
        if($lt3 == 'y'){
            if($ac == 'n' AND $monitor == 'n'){
                $lt3Condition = array('lt' => '3');
            }
            elseif($ac == 'n' OR $monitor == 'n'){
                if($ac == 'n'){
                    $lt3Condition = array('lt' => '3', 'monitor' => '1');
                }
                elseif($monitor == 'n'){
                    $lt3Condition = array('lt' => '3', 'ac' => '1');
                }
            }
            else{
                $lt3Condition = array('lt' => '3', 'ac' => '1', 'monitor' => '1');
            }
            $dataLt3 = $this->db->select('*')->from('rooms')->where($lt3Condition)->get()->result();
        }
        else{
            $dataLt3 = array();
        }

        $data = array_merge($dataLt1, $dataLt2, $dataLt3);
        return $data;
    }
}
