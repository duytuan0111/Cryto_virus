<?php 
	/**
	 * 
	 */
	class Mcost extends CI_Model
	{
		
		protected $_table = 'cost';
		public function insert($data)
		{
			$this->db->insert($this->_table, $data);
			return $this->db->insert_id();
		}
		public function get_cost($id)
		{
			$this->db->where('id', $id);
			return $this->db->get($this->_table)->row_array();
		}
		public function update($data)
		{
			$this->db->where('id', 1);
			return $this->db->update($this->_table, $data);
		}
	}
	?>