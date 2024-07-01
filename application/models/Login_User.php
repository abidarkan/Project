<?php
    class Login_User extends CI_Model{
        public function login_Editor($email,$password){
            return $this->db->query("select * from penulis
            where EMAIL='".$email."' AND PASSWORD='".$password."'")->row();
        }
        public function login_Staff($email,$password){
            return $this->db->query("select * from pegawai_perpustakaan
            where EMAIL='".$email."' AND PASSWORD='".$password."'")->row();
        }
        public function get_user_data($email) {
            $query_penulis = $this->db->query("SELECT * FROM penulis WHERE EMAIL = ?", array($email));
            if ($query_penulis->num_rows() == 1) {
                return $query_penulis->row(); // Mengembalikan seluruh data penulis berdasarkan email
            }
    
            $query_staff = $this->db->query("SELECT * FROM pegawai_perpustakaan WHERE EMAIL = ?", array($email));
            if ($query_staff->num_rows() == 1) {
                return $query_staff->row(); // Mengembalikan seluruh data staff berdasarkan email
            }
    
            return false; // Mengembalikan false jika data pengguna tidak ditemukan
        }
    }
?>