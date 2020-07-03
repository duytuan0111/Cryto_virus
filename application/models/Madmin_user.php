<?php  
	/**
	 * 
	 */
	class Madmin_user extends CI_Model
	{
		protected $_table = 'admin_users';

		public function check_login($username, $password)
		{
			$this->db->where(array('username' => $username, 'password' => $password));
            return $this->db->get($this->_table)->num_rows();
		}
		public function all_admin_users()
		{
			$this->db->order_by('id', 'desc');
			return $this->db->get($this->_table)->result_array();
		}
		public function get_info($field, $value)
		{
			$this->db->where($field, $value);
			return $this->db->get($this->_table)->row_array();
		} 
		public function check_username($username)
		{
			$this->db->where('username', $username);
			return $this->db->get($this->_table)->row_array();
		}
		public function insert($data)
		{
			$this->db->insert($this->_table, $data);
			return $this->db->insert_id();
		}
		public function update($username, $data)
        {
            $this->db->where('username', $username);
            return $this->db->update($this->_table, $data);
        }
        public function delete($id)
        {
            $this->db->where('id', $id);
            return $this->db->delete($this->_table);
        }
       

	}
 ?>