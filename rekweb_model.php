function edit_users($data_users,$id){
			$query = $this->db->update('users',$data_users,array('id'=>$id));
		}

		public function tambah_bahan($data_bahan)
		{
			return $this->db->insert('bahan_baku',$data_bahan);
		}
		public function pembelian_bahan($pembelian_bahan,$nama_bahan){
			$query = $this->db->get_where('bahan_baku',array('nama'=>$nama_bahan));
			return $query->row();
			$query = $this->db->$query('insert into pembelian_bahan_baku (bahan_baku_id,jumlah,satuan,harga_satuan)select id,jumlah_stok,satuan from bahan_baku');
			// $this->db->insert('pembelian_bahan_baku',)
		}
