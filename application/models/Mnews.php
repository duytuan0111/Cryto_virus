<?php 
	/**
	 * 
	 */
	class Mnews extends CI_Model
	{
		
		protected $_table = 'news';

		public function insert($data)
		{
			$this->db->insert($this->_table, $data);
			return $this->db->insert_id();
		}
		public function get_total_news()
		{
			$query = $this->db->get($this->_table);
			return $query->num_rows();
		}
		public function get_news($perpage, $offset)
		{
			$a_User	= $this->db->select()
			->limit($perpage, $offset)
			->order_by('id', 'desc')
			->get($this->_table)
			->result();
			return $a_User;
		}
		public function list_news()
		{
			$this->db->order_by('id', 'desc');
			return $this->db->get($this->_table)->result_array();
		}
		public function get_news_by($field, $value)
		{
			$this->db->where($field, $value);
			return $this->db->get($this->_table)->row_array();
		}
		public function update_by($id, $data)
		{
			$this->db->where('id', $id);
			return $this->db->update($this->_table, $data);
		}
		public function delete($id)
		{
			$this->db->where('id', $id);
			return $this->db->delete($this->_table);
		}

		
	}
	?>