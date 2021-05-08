<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model('Barang_Model');
	}

	public function index()
	{
		$data['barang'] = $this->Barang_Model->all();
		$this->load->view('Home_View', $data);
	}

	public function keranjangBelanja(){
		$this->load->view('KeranjangBelanja_View');
	}

	public function tambah_KeranjangBelanja($barang_id)
	{
		$barang = $this->Barang_Model->find($barang_id);
        $data = array(
                       'id'      => $barang->id,
                       'jumlah'     => 1,
                       'harga'   => $barang->harga,
                       'nama'    => $barang->nama
                    );
        $this->cart->insert($data);
        redirect(base_url());
	}

	public function hapus_KeranjangBelanja()
    {
        $this->cart->destroy();
        redirect(base_url());
    }
}
