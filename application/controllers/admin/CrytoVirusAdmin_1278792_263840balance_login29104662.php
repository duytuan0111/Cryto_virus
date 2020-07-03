<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * 
	 */
	class CrytoVirusAdmin_1278792_263840balance_login29104662 extends CI_Controller
	{
		protected $_data;
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Musers');
			$this->load->model('Madmin_user', 'Madmin');
			$this->load->model('Mtransaction');
			$this->load->model('Mnews');
			$this->load->model('Mcost');
			$this->load->model('Mwithdraw');
			$this->load->helper('url');
			$this->load->helper('security');
			$this->load->helper('cookie');
			$this->load->library('Globals');
			$this->load->library('session');
			$this->load->library('form_validation');
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			
		}
		public function index()
		{
			$this->_data['list_uers'] = $this->Musers->get_all_users();
			$this->load->view('admin/admin_view/sign-in.php', $this->_data);
		}
		public function home()
		{
			$this->_data['list_user'] = $this->Musers->get_all_users();
			$this->load->view('admin/admin_view/index.php', $this->_data);
		}
		public function list_email()
		{
			$this->_data['list_email'] = $this->Memail->list_emal();
			$this->load->view('admin/admin_view/list-email.php', $this->_data);
		}
		public function setting()
		{
			$this->load->view('admin/admin_view/setting.php');
		}
		// list news
		public function news()
		{
			$this->_data['list_news'] = $this->Mnews->list_news();
			$this->load->view('admin/admin_view/news.php', $this->_data);
		}
		// view exit news
		public function exit_news($id)
		{
			$id = $this->uri->segment(4);
			$this->_data['info_news'] = $this->Mnews->get_news_by('id', $id);
			$this->load->view('admin/admin_view/exit_news.php', $this->_data);
		}
		public function cost()
		{
			$this->_data['cost'] = $this->Mcost->get_cost(1);
			$this->load->view('admin/admin_view/cost.php', $this->_data);
		}
		public function change_cost($id)
		{
			$this->_data['cost'] = $this->Mcost->get_cost(1);
			$this->load->view('admin/admin_view/change_cost.php', $this->_data);
		}
		public function change($id)
		{
			$this->form_validation->set_rules('current_price', 'current price', 'required|trim');
			$this->form_validation->set_rules('time', 'date', 'required|trim');
			if ($this->form_validation->run() == true) {
				$data = array(
					'current_price' => $this->input->post('current_price'),
					'time'			=> $this->input->post('time')
				);
				$update = $this->Mcost->update($data);
				if ($update) {
					$this->session->set_flashdata('msg_change_1', 'Changed Successfully.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/cost');
				}
				else{
					$this->session->set_flashdata('msg_change_2', 'Changed Fail.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/cost');
				}
			}
			else{
				$this->load->view('admin/admin_view/change_cost.php', $this->_data);
			}
		}
		// exit news
		public function exit_new($id)
		{
			$this->form_validation->set_rules('title', 'title', 'required|trim');
			$this->form_validation->set_rules('time', 'time', 'required|trim');
			$this->form_validation->set_rules('author', 'author', 'required|trim');
			$this->form_validation->set_rules('description', 'description', 'required|trim');
			$this->form_validation->set_rules('img_url', 'image url', 'required|trim');
			$this->form_validation->set_rules('new_url', 'new url', 'required|trim');
			if ($this->form_validation->run() == true) 
			{
				$id = $this->input->post('id');
				$data = array(
					'title' 		=> $this->input->post('title'),
					'time'			=> $this->input->post('time'),
					'author'		=> $this->input->post('author'),
					'description' 	=> $this->input->post('description'),
					'img_url'		=> $this->input->post('img_url'),
					'new_url'		=> $this->input->post('new_url')
				);
				$update = $this->Mnews->update_by($id, $data);
				if ($update) 
				{
					$this->session->set_flashdata('msg_exit_news_1', 'Updated Successfully.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news');
				}
				else
				{
					$this->session->set_flashdata('msg_exit_news_2', 'Updated Fail.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news');
				}
			}
			else
			{
				$this->_data['list_news'] = $this->Mnews->list_news();
				$this->load->view('admin/admin_view/news.php', $this->_data);
			}
		}
		// add news
		public function add_news()
		{
			$this->form_validation->set_rules('title', 'title', 'required|trim');
			$this->form_validation->set_rules('time', 'time', 'required|trim');
			$this->form_validation->set_rules('author', 'author', 'required|trim');
			$this->form_validation->set_rules('description', 'description', 'required|trim');
			$this->form_validation->set_rules('img_url', 'image url', 'required|trim');
			$this->form_validation->set_rules('new_url', 'new url', 'required|trim');
			if ($this->form_validation->run() == true) 
			{
				$id = $this->input->post('id');
				$data = array(
					'title' 		=> $this->input->post('title'),
					'time'			=> $this->input->post('time'),
					'author'		=> $this->input->post('author'),
					'description' 	=> $this->input->post('description'),
					'img_url'		=> $this->input->post('img_url'),
					'new_url'		=> $this->input->post('new_url')
				);
				$insert = $this->Mnews->insert($data);
				if ($insert) 
				{
					$this->session->set_flashdata('msg_ins_news_1', 'Insert Successfully.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news');
				}
				else
				{
					$this->session->set_flashdata('msg_ins_news_2', 'Insert Fail.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news');
				}
			}
			else
			{
				$this->_data['list_news'] = $this->Mnews->list_news();
				$this->load->view('admin/admin_view/news.php', $this->_data);
			}
		}
		// update password
		public function update_password()
		{
			$username 		= $this->input->post('admin_username');
			$password 		= $this->input->post('old_password');
			$new_password 	= $this->input->post('new_password');
			$this->form_validation->set_rules('old_password', 'old password', 'required|trim');
			$this->form_validation->set_rules('new_password', 'new password', 'required|trim');
			if ($this->form_validation->run() == true) 
			{
				if ($username && $password) 
				{
					if ($this->Madmin->check_login($username, md5($password)) > 0) 
					{
						$data_update = array(
							'password' => md5($new_password)
						);
						$update = $this->Madmin->update($username, $data_update);
						if ($update) 
						{
							$this->session->set_flashdata('msg_update_suc', 'Updated Successfully.');
							redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/setting');
						}
						else
						{
							$this->session->set_flashdata('msg_update_fail', 'Update Failed.');
							redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/setting');
						}
					}
					else
					{
						$this->session->set_flashdata('msg_check_pass', 'Password is incorrect.');
						redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/setting');
					}
				}
				else
				{
					$this->load->view('admin/admin_view/setting.php');
				}
			}
			else
			{
				$this->load->view('admin/admin_view/setting.php');
			}
			
		}

		public function login()
		{

			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|min_length[6]|max_length[30]|required');
			if ($this->form_validation->run() == TRUE) {
				$username 		= $this->input->post('username');
				$password 		= $this->input->post('password');
				if ($this->Madmin->check_login($username, md5($password)) == 0) 
				{
					$this->session->set_flashdata('msg_login_warning', 'Username or Password incorrect.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/', 'refresh');
				}
				else
				{
					$data_update = array(
						'last_login' => date("Y-m-d H:i:sa")
					);
					$this->Madmin->update($username, $data_update);
					$remember = $this->input->post('remember_me');
					$user_info = $this->Madmin->get_info('username', $username);
					$this->session->set_userdata('user_login_admin', $user_info);
					$this->session->set_userdata('user_login_admin_covid', $user_info);
					$this->session->set_userdata('user_login_url_admin', base_url());
					$this->_data['list_user'] = $this->Musers->get_all_users();
					if ($remember) {
						$this->input->set_cookie('uusername_admmin', $username, 86500);
						$this->input->set_cookie('upassword_password', $password, 86500);
						$this->load->view('admin/admin_view/index.php', $this->_data);

					}
					else{
						delete_cookie('uusername_admmin');
						delete_cookie('upassword_password');
						$this->load->view('admin/admin_view/index.php', $this->_data);
					}
					

					
				}
			}
			else{
				$this->load->view('admin/admin_view/sign-in.php');
			}


		}
		public function approve_by($id)
		{
			$id 				= $this->uri->segment('4');
			$trans_info 		= $this->Mtransaction->get_trans_by_('id', $id);
			$user_id 			= $trans_info['user_id'];
			// get amount in transaction
			$trans_amount 		= $trans_info['received_total'];
			// get amount fund in transaction
			$amount_fund    	= ($trans_amount*25)/100;
			// get amount user
			$user_info      	= $this->Musers->get_user_by('id', $user_id);
			$user_amount 		= $user_info['tokens_number'];
			// get amount funf user
			$user_amount_fund 	= $user_info['fund_tokens'];
			$amount_fund_update = $amount_fund + $user_amount_fund;
			//
			$amount_update 		= ($user_amount + $trans_amount);
			$email 				= $user_info['email'];
			if ($trans_info['status'] == 2) 
			{
				$this->session->set_flashdata('msg_app_fail', 'This transaction has been approved.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/transactions', 'refresh');
			}
			else
			{
				$data_update_user = array(
					'tokens_number' => $amount_update,
					'fund_tokens' 	=> $amount_fund_update
				);
				$data_update = array(
					'status' => 2
				);
				$update_tokens = $this->Musers->update_by($user_id, $data_update_user);
				$this->Mtransaction->update_by($id, $data_update);
				if ($update_tokens) {
					$subject = 'TRANSACTION SUCCESSFULLY';
					$content = '<html>
					<head>
					<style>
					p{
						font-family: Calibri;
						font-size: 16pt;
					}
					h1{
						font-style: italic; font-size: 24pt;     color: #005cb9; text-align:center
					}

					</style>
					</head>
					<body>
					<img src ="htts://crypto-virus.io/public/assets/images/header.jpg" >
					<h1><strong>TRANSACTION SUCCESSFULLY</strong></h1>
					<p>Hi, '.$user_info['username'].'</p>
					<p>You have successfully purchased <strong>'.$trans_amount.' NCOR </strong>, thank you for your contribution to repelling the <strong>COVID 19</strong> pandemic.
					</p>
					<p>See more details information <a href="https://crypto-virus.io/">here!</a></p>
					<p>Best Regards,</p>
					<p><strong>Team Corona Crypto</strong></p>
					<img src ="htts://crypto-virus.io/public/assets/images/footer.jpg" >
					</body>
					</html>';
					$this->globals->sendMail($user_info['email'], $subject, $content);
					$this->session->set_flashdata('msg_app_suc', 'Approved Successfully.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/transactions', 'refresh');

				}

			}
		}
		public function withdraw_ppos()
		{
			$this->_data['list_withdraw'] = $this->Mwithdraw->list_ppos();
			$this->load->view('admin/admin_view/withdraw-ppos.php', $this->_data);
		}
		public function exit_ppos($id)
		{
			$this->form_validation->set_rules('tokens_amount', 'Tokens Amount', 'required|trim');
			$this->form_validation->set_rules('rep_add', 'Recipiend Addresses', 'required|trim');
			if ($this->form_validation->run() == true) 
			{
				$data_update = array(
					'tokens_amount' 			=> $this->input->post('tokens_amount'),
					'recipiend_add' 	=> $this->input->post('rep_add'),
					'updated_at' 		=> date("Y-m-d H:i:sa")
				);
				$update_stt = $this->Mwithdraw->update_by($id, $data_update);
				if ($update_stt) 
				{
					$this->session->set_flashdata('msg_exit_suc', 'Exit Successfully.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/withdraw_ppos', 'refresh');
				}
				else
				{
					$this->session->set_flashdata('msg_exit_fail', 'Exit Failed.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/withdraw_ppos', 'refresh');
				}
			}
			
			else
			{
				$this->_data['list_withdraw'] = $this->Mwithdraw->list_ppos();
				$this->load->view('admin/admin_view/withdraw-ppos.php', $this->_data);
			}
		}
		public function list_admin()
		{
			$this->_data['list_admin'] = $this->Madmin->all_admin_users();
			$this->load->view('admin/admin_view/user-list-admin.php', $this->_data);
		}
		

		public function logout()
		{
			$this->session->unset_userdata('user_login_admin_covid');
			redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/');
		}

		public function register()
		{
			$this->form_validation->set_rules('fullname', 'your name', 'required|trim');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|min_length[6]|max_length[20]|required');
			$this->form_validation->set_rules('password_confirm', 'password confirm', 'required|matches[password]');
			if ($this->form_validation->run() == TRUE) 
			{
				$role = $this->input->post('role');
				$data = array(
					'name' 			=> $this->input->post('fullname'),
					'username'		=> $this->input->post('username'),
					'password'		=> md5($this->input->post('password')),
					'role'			=> 0,
					'created_at'	=> date("Y-m-d H:i:sa")
				);
				if ($this->Madmin->check_username($this->input->post('username')) > 0) {
					$this->session->set_flashdata('msg_check_username', 'Username is already in use, please use another username.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/list_admin', 'refresh');
				}
				if (($this->Madmin->check_username($this->input->post('username')) == 0) && ($role == 1))
				{
					$insert_admin	= $this->Madmin->insert($data);
					$this->session->set_flashdata('msg_succ', 'Insert Successfully.');						
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/list_admin', 'refresh');
				}
			}
			else
			{
				$this->load->view('admin/admin_view/user-list-admin.php');
			}
		}

		public function user_details($id)
		{
			$id = $this->uri->segment(4);
			$this->_data['info_user'] = $this->Musers->get_user_by('id', $id);
			$this->load->view('admin/admin_view/user-details.php', $this->_data);
		}
		public function delete($id)
		{
			$delete = $this->Musers->delete($id);
			if ($delete) 
			{
				$this->session->set_flashdata('msg_del_suc', 'Delete Successfully.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/home', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('msg_del_fail', 'Delete Failed.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/home', 'refresh');
			}
		}
		public function delete_admin($id)
		{
			$delete = $this->Madmin->delete($id);
			if ($delete) 
			{
				$this->session->set_flashdata('msg_del_suc', 'Delete Successfully.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/list_admin', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('msg_del_fail', 'Delete Failed.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/list_admin', 'refresh');
			}
		}
		public function delete_email($id)
		{
			$delete = $this->Memail->delete($id);
			if ($delete) 
			{
				$this->session->set_flashdata('msg_mail_suc', 'Delete Successfully.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/list_email', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('msg_mail_fail', 'Delete Failed.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/list_email', 'refresh');
			}
		}
		public function delete_news($id)
		{
			$delete = $this->Mnews->delete($id);
			if ($delete) 
			{
				$this->session->set_flashdata('del_new_suc', 'Delete Successfully.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('del_new_fail', 'Delete Failed.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news', 'refresh');
			}
		}
		public function delete_trans($id)
		{
			$id 				= $this->uri->segment('4');
			$trans_info 		= $this->Mtransaction->get_trans_by_('id', $id);
			$user_id 			= $trans_info['user_id'];
			// get amount in transaction
			$trans_amount 		= $trans_info['received_total'];
			// get amount funt in transaction
			$trans_amount_fund 	= ($trans_amount*25)/100;
			// get amount user
			$user_info      	= $this->Musers->get_user_by('id', $user_id);
			$user_amount 		= $user_info['tokens_number'];
			// get amount fund
			$user_amount_fund 	= $user_info['fund_tokens']; 
			//
			$amount_update 		= ($user_amount - $trans_amount);
			$amount_fund_update	= ($user_amount_fund - $trans_amount_fund);
			if ($trans_info['status'] == 1) 
			{
				$delete 		= $this->Mtransaction->delete($id);
				if ($delete) 
				{
					$this->session->set_flashdata('msg_del_suc', 'Delete Successfully.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/transactions', 'refresh');
				}
				else
				{
					$this->session->set_flashdata('msg_del_fail', 'Delete Failed.');
					redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/transactions', 'refresh');
				}
			}
			else
			{
				$data_update_user = array(
					'tokens_number' => $amount_update,
					'fund_tokens'	=> $amount_fund_update
				);
				$this->Musers->update_by($user_id, $data_update_user);
				$delete 		= $this->Mtransaction->delete($id);
				$this->session->set_flashdata('msg_del_suc', 'Delete Successfully.');
				redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662/transactions', 'refresh');
			}
		}
		public function get_email($id)
		{
			$data = $this->Musers->get_user_by('id', $id);
			echo $data['email'];
		}

		public function transactions()
		{
			$this->_data['list_trans'] = $this->Mtransaction->get_trans();
			$this->_data['controller'] = $this;
			$this->load->view('admin/admin_view/transactions.php', $this->_data);
		}

	}
	?>