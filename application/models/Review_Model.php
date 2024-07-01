<?php
class Review_Model extends CI_Model {

    public function insert_review($data) {
        // Insert review ke dalam database
        return $this->db->insert('review', $data);
    }
    
    // Fungsi untuk mendapatkan ID review terakhir
    public function get_last_id() {
        $this->db->select('ID_REVIEW');
        $this->db->order_by('ID_REVIEW', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('review');
        return $query->row();
    }
    
    // Fungsi untuk mendapatkan data review berdasarkan ID
    public function get_review_by_id($id) {
        return $this->db->get_where('review', array('ID_REVIEW' => $id))->row();
    }

    // Fungsi untuk membuat ID review baru
    public function generate_new_id() {
        $last_id = $this->get_last_id();
        if ($last_id) {
            $last_id_number = intval(substr($last_id->ID_REVIEW, 3));
            $new_id_number = $last_id_number + 1;
            return 'MLK' . str_pad($new_id_number, 4, '0', STR_PAD_LEFT);
        } else {
            return 'MLK0001';
        }
    }
}
?>

}
?>