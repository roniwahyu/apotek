<?php
	/**
	* 
	*/
	class Md_Gol_Obat extends CI_Model
	{
		
		function get_gol_obat()
		{
            # code...
			return $this->db->get('obat_gol');
		}

		function insert_gol_obat($data,$table)
		{
			# code...
			$this->db->insert($table,$data);
		}

		function delete_gol_obat($where,$table)
		{
			# code...
			$this->db->where($where);
			$this->db->delete($table);
		}

		function edit_gol_obat($where,$table)
		{
			# code...
			return $this->db->get_where($table,$where);
		}

		function update_gol_obat($where,$data,$table)
		{
			# code...
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}
?>