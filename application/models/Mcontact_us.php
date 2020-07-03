<?php 
	/**
	 * 
	 */
	class Mcontact_us extends CI_Model
	{
		
		protected $_table = 'contact_us';
		public function insert($data)
		{
			$this->db->insert($this->_table, $data);
			return $this->db->insert_id();
		}
	}
 ?>