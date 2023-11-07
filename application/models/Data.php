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
                $lt1Condition = array('lt' => '1', 'full' => '0');
            }
            elseif($ac == 'n' OR $monitor == 'n'){
                if($ac == 'n'){
                    $lt1Condition = array('lt' => '1', 'monitor' => '1', 'full' => '0');
                }
                elseif($monitor == 'n'){
                    $lt1Condition = array('lt' => '1', 'ac' => '1', 'full' => '0');
                }
            }
            else{
                $lt1Condition = array('lt' => '1', 'ac' => '1', 'monitor' => '1', 'full' => '0');
            }
            $dataLt1 = $this->db->select('*')->from('rooms')->where($lt1Condition)->get()->result();
        }
        else{
            $dataLt1 = array();
        }

        // Query lantai 2
        if($lt2 == 'y'){
            if($ac == 'n' AND $monitor == 'n'){
                $lt2Condition = array('lt' => '2', 'full' => '0');
            }
            elseif($ac == 'n' OR $monitor == 'n'){
                if($ac == 'n'){
                    $lt2Condition = array('lt' => '2', 'monitor' => '1', 'full' => '0');
                }
                elseif($monitor == 'n'){
                    $lt2Condition = array('lt' => '2', 'ac' => '1', 'full' => '0');
                }
            }
            else{
                $lt2Condition = array('lt' => '2', 'ac' => '1', 'monitor' => '1', 'full' => '0');
            }
            $dataLt2 = $this->db->select('*')->from('rooms')->where($lt2Condition)->get()->result();
        }
        else{
            $dataLt2 = array();
        }

        // Query lantai 3
        if($lt3 == 'y'){
            if($ac == 'n' AND $monitor == 'n'){
                $lt3Condition = array('lt' => '3', 'full' => '0');
            }
            elseif($ac == 'n' OR $monitor == 'n'){
                if($ac == 'n'){
                    $lt3Condition = array('lt' => '3', 'monitor' => '1', 'full' => '0');
                }
                elseif($monitor == 'n'){
                    $lt3Condition = array('lt' => '3', 'ac' => '1', 'full' => '0');
                }
            }
            else{
                $lt3Condition = array('lt' => '3', 'ac' => '1', 'monitor' => '1', 'full' => '0');
            }
            $dataLt3 = $this->db->select('*')->from('rooms')->where($lt3Condition)->get()->result();
        }
        else{
            $dataLt3 = array();
        }

        $data = array_merge($dataLt1, $dataLt2, $dataLt3);
        return $data;
    }

    public function addBooking($data){

        date_default_timezone_set('Asia/Makassar');
        $date = date('Y-m-d');
        $in = $date.' '.$data['in_h'].':'.$data['in_m'];
        $out = $date.' '.$data['out_h'].':'.$data['out_m'];

        $data = array(
            'mhs_id' => $this->session->userdata['auth_data']['id'],
            'room_id' =>$data['room_id'],
            'email' => $data['email'],
            'time_in' => $in,
            'time_out' => $out,
            'dosen_id' => $data['id_dosen'],
            'matakuliah' => $data['matkul']
        );
        $insert_id = $this->db->insert('booking', $data);
        $q = "UPDATE rooms SET full=1 WHERE id='". $this->input->post('room_id') ."'";;
        $this->db->query($q);
        return $insert_id;
    }

    public function getBooked(){
        $query = "SELECT b.id, mhs.nama AS nama_mhs, mhs.nim, mhs.kelas, b.email, b.time_in, b.time_out, r.id, r.no, r.lt, r.ac, r.monitor, r.status, d.nama AS nama_dosen, b.matakuliah FROM booking b INNER JOIN mahasiswa mhs ON b.mhs_id = mhs.id INNER JOIN rooms r ON b.room_id = r.id INNER JOIN dosen d ON b.dosen_id = d.id ORDER BY b.id DESC";
        $result = $this->db->query($query)->result();
        return $result;
    }
}
