<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Mtransaction extends CI_Model
	{
		
		protected $_table = "transaction";
		public function insert($data)
		{
			$this->db->insert($this->_table, $data);
			return $this->db->insert_id();
		}
		public function get_trans_by($id)
		{
			$this->db->where('user_id', $id);
			return $this->db->get($this->_table)->result_array();
		}
		public function get_trans_by_($field, $value)
		{
			$this->db->where($field, $value);
			return $this->db->get($this->_table)->row_array();
		}
		public function get_trans()
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