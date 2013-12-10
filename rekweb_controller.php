//controller

public function tambah_bahan(){

		$hari_ini=date("d-F-Y");
		$data_bahan = array(
			'nama'=>$this->input->post('nama_bahan'),
			'jumlah_stok'=>$this->input->post('jumlah'),
			'satuan'=>$this->input->post('satuan'),
			);

		$this->users_model->tambah_bahan($data_bahan);
		$nama_bahan = $data_bahan['nama'];
		$pembelian_bahan = array(
			'nama'=>$this->input->post('nama_bahan'),
			'jumlah_stok'=>$this->input->post('jumlah'),
			'satuan'=>$this->input->post('satuan'),
			'harga' =>$this->input->post('harga'),
			'tanggal' =>$hari_ini
			);

		// $this->users_model->pembelian_bahan();
		// redirect('users');
	}
