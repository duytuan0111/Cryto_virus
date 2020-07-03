<?php 
	/**
	 * 
	 */
	class Mwithdraw extends CI_Model
	{
		
		protected $_table = 'corona_wallet';
		public function insert($data)
		{
			$this->db->insert($this->_table, $data);
			return $this->db->insert_id();
		}
		public function list_ppos()
		{
			$this->db->order_by('id', 'desc');
			return $this->db->get($this->_table)->result_array();
		}
		public function delete($id)
		{
			$this->db->where('id', $id);
			return $this->db->delete($this->_table);
		}
		public function update_by($id,$data)
		{
			$this->db->where('id', $id);
			return $this->db->update($this->_table, $data);
		}
	}
	?>