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
                       'qty'     => 1,
                       'price'   => $barang->harga,
                       'name'    => $barang->nama,
                    );
        $this->cart->insert($data);
        redirect(base_url());
	}

	public function hapus_KeranjangBelanja()
    {
        $this->cart->destroy();
        redirect(base_url());
    }

	public function hasilCari2()
	{
		$data['hasil_cari'] = $this->Barang_Model->cari_barang();
		$this->load->view('HasilCari_View', $data);
	}

	public function hasilCari()
	{
		$this->load->model('Barang_Model');
		$keyword = $this->input->get('keyword');
		$barang = $this->Barang_Model->cari_barang($keyword);
		$barang = array(
			'keyword'	=> $keyword,
			'barang'		=> $barang
		);
		$this->load->view('Home_View_hasil',$barang);
	}

	public function checkout()
    {        
        $this->load->view('Checkout_View');
    }

	public function proses_order()
    {
       
		$data['barang'] = $this->Barang_Model->all();
		$this->load->view('Home_View', $data);
    }
}
