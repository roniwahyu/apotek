<?php
	/**
	*
	*/
	class Md_Obat extends CI_Model
	{
		public function __construct() {
			 parent::__construct();

			 //load database library
			 $this->load->database();
	 }

		function get_obat($angka,$batas)
		{
            # code...
            $this->db->select('*');
            $this->db->from('obat');
			$this->db->join('obat_gol', 'obat_gol.id_gol = obat.id_gol');
			$this->db->limit($angka,$batas);
			return $this->db->get();
		}

		function data($angka,$batas)
		{
			# code...
			return $query=$this->db->get('obat',$angka,$batas)->result();
		}

		function jml_data()
		{
			# code...
			return $this->db->get('obat')->num_rows();
		}

		function insert_obat($data,$table)
		{
			# code...
			$this->db->insert($table,$data);
		}

		function delete_obat($where,$table)
		{
			# code...
			 $this->db->where($where);
			$this->db->delete($table);
		}

		function GetObatById($where,$table)
		{
			# code...
			$this->db->select('*');
			$this->db->from('obat');
			$this->db->join('obat_gol', 'obat_gol.id_gol = obat.id_gol');
			$this->db->where($where);
			return $this->db->get();
		}

		function update_obat($where,$data,$table)
		{
			# code...
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		function LastRecord(){
			$this->db->select('id_obat');
			$this->db->from('obat');
			$this->db->order_by("id_obat", "DESC");
			$this->db->limit(1);
			return $this->db->get();
		}
		function GenerateKodeObat($idObat,$kodeGolObat){
			$kodeObat ="";
			if($idObat < 10){
      	 $kodeObat = $kodeGolObat."0000".$idObat;
		  }else if($idObat > 9 && $idObat < 100){
      	 $kodeObat = $kodeGolObat."000".$idObat;
			}else if ($idObat > 199 && $idObat < 1000) {
				 $kodeObat = $kodeGolObat."00".$idObat;
			}else if ($idObat > 1999 && $idObat < 10000) {
				 $kodeObat = $kodeGolObat."0".$idObat;
			}else{
				 $kodeObat = $kodeGolObat."".$idObat;
			}
			return $kodeObat;
		}
	}
?>
