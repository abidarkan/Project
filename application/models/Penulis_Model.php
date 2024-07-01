<?php
class Penulis_Model extends CI_Model {

    public function get_all_editor() {
        return $this->db->select('*')->from ('penulis')->like('email', '@pcr.ac.id', 'before') ->get()->result_array();
    }
    public function get_all_penulis() {
        return $this->db->select('*')->from ('penulis')->get()->result_array();
    }
}
?>