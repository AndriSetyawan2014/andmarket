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

    public function get_kategori(){
        $query = $this->db->get('kategori')->result();
        return $query;
    }

    public function cari_barang2()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from barang where nama like '%$cari%' ");
		return $data->result();
	}

    public function cari_barang($keyword=null){
		$this->db->select('*');
		$this->db->from('barang');
		if(!empty($keyword)){
			$this->db->like('nama',$keyword);
		}
		return $this->db->get()->result_array();
	}
}