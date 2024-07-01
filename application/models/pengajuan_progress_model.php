<?php
class pengajuan_progress_model extends CI_Model {

    public function get_limit_progress() {
        return $this->db->select('B.JUDUL, P.NAMA, M.STATUS, M.TANGGAL_PENGAJUAN,B.NAMA_PENULIS')
                        ->from('BUKU B')
                        ->join('MILIK M', 'B.ID_BUKU = M.ID_BUKU')
                        ->join('PENULIS P', 'P.NOMOR_INDUK = M.NOMOR_INDUK')
                        ->order_by('M.ID_BUKU', 'DESC') // Asumsikan kolom 'id' digunakan untuk mengurutkan data
                        ->limit(5)
                        ->get()
                        ->result_array();
    }
    public function get_all_pengajuan($statusFilter = null) {
        $this->db->select('B.ID_BUKU, B.JUDUL, B.NAMA_PENULIS, B.EDISI, B.SERI, B.TAHUN_TERBIT, B.JUMLAH_HALAMAN, B.TINGGI_BUKU, B.KATEGORI, B.JENIS, B.MEDIA, B.FILE_BUKU, B.LAMPIRAN_PENDUKUNG, B.KETERANGAN, P.NAMA, M.STATUS, M.TANGGAL_PENGAJUAN')
             ->from('BUKU B')
             ->join('MILIK M', 'B.ID_BUKU = M.ID_BUKU')
             ->join('PENULIS P', 'P.NOMOR_INDUK = M.NOMOR_INDUK');
    
    if ($statusFilter) {
        $this->db->where('M.STATUS', $statusFilter);
    }
        return $this->db->get()->result_array();
    }
    public function delete_pengajuan($id){
        $this->db->where('ID_BUKU', $id);
        $this->db->delete('MILIK');
    }
    public function update_pengajuan($id, $data) {
        $this->db->where('id_buku', $id);
        return $this->db->update('buku', $data);
    }

    public function set_Editor(){
        
    }
    
}
?>