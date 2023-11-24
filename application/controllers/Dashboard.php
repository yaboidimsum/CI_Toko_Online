<?php

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model('model_barang'); // Add this line to load the model

		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}
}
