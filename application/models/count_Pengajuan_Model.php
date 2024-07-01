<?php
class count_Pengajuan_Model extends CI_Model {

    public function get_count_progress() {
        $result =  $this->db->select('COUNT(*) as count_progress')
                        ->from('milik')
                        ->where('STATUS', 'DIAJUKAN')
                        ->get()
                        ->row_array();
        return $result['count_progress'];
    }
    public function get_count_edited(){
        $result =  $this->db->select('COUNT(*) as count_edited')
                        ->from('milik')
                        ->where('STATUS', 'SEDANG DIREVIEW')
                        ->get()
                        ->row_array();
        return $result['count_edited'];
    }
    public function get_count_completed(){
        $result =  $this->db->select('COUNT(*) as count_complete')
                        ->from('milik')
                        ->where('STATUS', 'SELESAI')
                        ->get()
                        ->row_array();
        return $result['count_complete'];
    }
    public function get_count_rejected(){
        $result =  $this->db->select('COUNT(*) as count_rejected')
                        ->from('milik')
                        ->where('STATUS', 'DITOLAK')
                        ->get()
                        ->row_array();
        return $result['count_rejected'];
    }
    
    
}
?>