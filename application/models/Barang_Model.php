<?php 
class Barang_Model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function all(){
        $hasil = $this->db->get('barang');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    
    public function find($id){
        $hasil = $this->db->where('id', $id)
                          ->limit(1)
                          ->get('barang');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }   
}