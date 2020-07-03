<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Musers extends CI_Model
	{
		protected $_table = 'users';    
		protected $column_order = array('fullname','phone','surname','email','phone','date_of_birth','join_date'); //set column field database for datatable orderable     
		protected $column_search = array('fullname','surname','email','phone'); //set column field database for datatable searchable just firstname , lastname , address are searchable     
		protected $order = array('id' => 'desc'); // default order 

        public function get_all_users()
        {
            $this->db->order_by('id', 'desc');
            return $this->db->get($this->_table)->result_array();
        }
        public function check_login($username, $password)
        {
            $this->db->where(array('username' => $username, 'password' => $password));
            return $this->db->get($this->_table)->num_rows();
        }
        public function check_pass($email, $password)
        {
            $this->db->where(array('email' => $email, 'password' => $password));
            return $this->db->get($this->_table)->num_rows();
        }
        public function get_users_by($email)
        {
            $this->db->where('email', $email);
            return $this->db->get($this->_table)->row_array();
        }
        public function get_user_by($field, $value)
        {
            $this->db->where($field, $value);
            return $this->db->get($this->_table)->row_array();
        }
        public function check_email($email)
        {
            $this->db->where('email', $email);
            return $this->db->get($this->_table)->num_rows();
        }
        public function check_usename_by($username)
        {
            $this->db->where('username', $username);
            return $this->db->get($this->_table)->num_rows();
        }
        public function insert($data)
        {
            $this->db->insert($this->_table, $data);
            return $this->db->insert_id();

        }
        public function update($email,$data)
        {
            $this->db->where('email', $email);
            return $this->db->update($this->_table, $data);
        }
        public function update_time($username, $data)
        {
            $this->db->where('username', $username);
            return $this->db->update($this->_table, $data);
        }
        public function delete($id)
        {
            $this->db->where('id', $id);
            return $this->db->delete($this->_table);
        }
        public function update_by($id, $data)
        {
         $this->db->where('id', $id);
         return $this->db->update($this->_table, $data);
     }
     public function get_rank_amount()
     {
        $query = $this->db->query("
            SELECT id, email, fund_tokens, FIND_IN_SET( fund_tokens, (
            SELECT GROUP_CONCAT( fund_tokens
            ORDER BY fund_tokens DESC )
            FROM users )
        )  AS rank
        FROM users where fund_tokens > 0 order by rank
        ");
        return $query->result_array();
    }


}


?>