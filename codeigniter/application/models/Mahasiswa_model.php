<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model{

    public function getmahasiswa(){    
        $data = $this->db->get('mahasiswa');
        return $data->result_array();
    }
}
?>