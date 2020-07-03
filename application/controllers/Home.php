<?php 
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Musers');
			$this->load->model('Mtransaction');
			$this->load->model('Mcontact_us', 'Mcontact');
			$this->load->model('Mnews');
			$this->load->model('Mcost');
			$this->load->model('Mdonation');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->library('Globals');
			$this->load->library('pagination');
			$this->load->helper('cookie');
			$this->load->helper('url');
			$this->load->helper('file');
			date_default_timezone_set('Asia/Ho_Chi_Minh');
		}
		public function index()
		{
			$total_news = $this->Mnews->get_total_news();
			$perpage 	= 3;
			$this->load->library('pagination');
			$config['total_rows']  		=  $total_news;
			$config['per_page']  		=  $perpage;
			$config['next_link']  		=  '<i class="icofont-caret-right"></i>';
			$config['prev_link'] 		=  '<i class="icofont-caret-left"></i>';
			$config['num_tag_open'] 	=  '';
			$config['num_tag_close'] 	=  '';
			$config['num_links']		=  5;
			$config['cur_tag_open'] 	=  '<a class="currentpage">';
			$config['cur_tag_close'] 	=  '</a>';
			$config['base_url'] 		=  base_url().'home/blog/';
			$config['uri_segment']	 	=  2;
			// 
			
			$config['full_tag_open'] = '<div class="pagination"><ul>';
			$config['full_tag_close'] = '</ul></div>';
			// khoi tao phan trang
			$this->pagination->initialize($config); 

			// tao link phan trang 
			$pagination =  $this->pagination->create_links();

			// lay offset
			$offset  =  ($this->uri->segment(2)=='') ? 0 : $this->uri->segment(2);
			# Đẩy dữ liệu ra view
			// 
			$this->_data['bookList'] 	=  $this->Mnews->get_news($perpage, $offset);
			$this->_data['rank'] 		= $this->Musers->get_rank_amount();
			$this->_data['controller']	= $this;
			$this->_data['cost']		= $this->Mcost->get_cost(1);
			$this->_data['pagination'] 	= $pagination;
			$this->_data['list_donation'] = $this->Mdonation->list_donate();
			$this->load->view('home/one-page.php', $this->_data);
		}
		public function donation()
		{
			$this->form_validation->set_rules('fullname', 'fullname', 'required|trim');
			$this->form_validation->set_rules('email', 'email', 'required|trim');
			$this->form_validation->set_rules('amount', 'amount', 'required|trim');
			if ($this->form_validation->run() == true) {
				$data = array(
					'name' 				=> $this->input->post('fullname'),
					'email'				=> $this->input->post('email'),
					'payment_method'	=> $this->input->post('currencySymbol'),
					'amount'			=> $this->input->post('amount'),
					'created_at'		=> date("Y-m-d H:i:sa")
				);
				$insert = $this->Mdonation->insert($data);
				if ($insert) {
					$this->session->set_flashdata('msg_donate_1', 'Donate Succussfully. Thank you for joining us, your contributions are so great.');
					redirect('home/');
				}
				else{
					$this->session->set_flashdata('msg_donate_2', 'Donate Fail.');
					redirect('home/');
				}
			}
			else{
				redirect('home/', 'refresh');
			}

		}
		public function image_email()
		{
			$this->load->view('home/image_email.php');
		}
		public function home()
		{
			$total_news = $this->Mnews->get_total_news();
			$perpage 	= 3;
			$this->load->library('pagination');
			$config['total_rows']  		=  $total_news;
			$config['per_page']  		=  $perpage;
			$config['next_link']  		=  '<i class="icofont-caret-right"></i>';
			$config['prev_link'] 		=  '<i class="icofont-caret-left"></i>';
			$config['num_tag_open'] 	=  '';
			$config['num_tag_close'] 	=  '';
			$config['num_links']		=  5;
			$config['cur_tag_open'] 	=  '<a class="currentpage">';
			$config['cur_tag_close'] 	=  '</a>';
			$config['base_url'] 		=  base_url().'home/blog/';
			$config['uri_segment']	 	=  3;

			// khoi tao phan trang
			$this->pagination->initialize($config); 

			// tao link phan trang 
			$pagination =  $this->pagination->create_links();

			// lay offset
			$offset  =  ($this->uri->segment(3)=='') ? 0 : $this->uri->segment(3);
			# Đẩy dữ liệu ra view
			$this->_data['bookList'] 	=  $this->Mnews->get_news($perpage, $offset);
			$this->_data['rank'] 		= $this->Musers->get_rank_amount();
			$this->_data['cost']		= $this->Mcost->get_cost(1);
			$this->_data['controller']	= $this;
			$this->_data['pagination'] 	= $pagination;
			$this->load->view('home/one-page.php', $this->_data);
		}
		public function login_view()
		{
			$this->load->view('user_view/login.php');
		}
		public function register_view()
		{
			$this->load->view('user_view/register.php');
		}
		public function referral()
		{
			$this->load->view('user_view/referral.php');
		}
		public function forgotpass_view()
		{
			$this->load->view('user_view/forgot-pass.php');
		}
		public function buy()
		{
			$this->load->view('user_view/buy-sell.php');
		}
		public function contact_us()
		{
			if ($this->input->post('contact_name')) 
			{
				$data = array(
					'name' 		=> 	$this->input->post('contact_name'),
					'email' 	=> 	$this->input->post('contact_email'),
					'address' 	=> 	$this->input->post('contact_address'),
					'company' 	=> 	$this->input->post('contact_company'),
					'message'	=> 	$this->input->post('contact_message')
				);
				$insert = $this->Mcontact->insert($data);
				if ($insert) 
				{
					$this->session->set_flashdata('msg_contact_0', 'Thank you!
						Your message has been successfully sent. We will contact you very soon!');
					redirect('home/');
				}
				else
				{
					$this->session->set_flashdata('msg_contact_1', 'Failed to send your message!');
					redirect('home/');
				}
			}
		}
		public function buy_tokens()
		{
			$this->form_validation->set_rules('amount', 'amount', 'required|trim');
			$this->form_validation->set_rules('currencySymbol', 'currency Symbol', 'required|trim');
			$this->form_validation->set_rules('submit_payment', 'submit payment proof', 'required|trim');
			if ($this->form_validation->run() == true) {
				$amount 			= $this->input->post('amount');
				$currencySymbol		= $this->input->post('currencySymbol');
				$submit_payment   	= $this->input->post('submit_payment');
				$data_wallet = array(
					'user_id'				=> $this->input->post('user_id'),
					'username'              => $this->input->post('user_username'),
					'received_total' 		=> $amount,
					'payment_method'		=> $currencySymbol,
					'payment_proof' 		=> $submit_payment,
					'status'				=> 1,
					'created_at'			=> date("Y-m-d H:i:sa")
				);
				$insert = $this->Mtransaction->insert($data_wallet);
				$user_info					= $this->Musers->get_user_by('id', $data_wallet['user_id']);
				if ($insert) 
				{
					$subject = 'TRANSACTION PROCESSING';
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
					<img src = "https://crypto-virus.io/public/assets/images/header.jpg" >
					<h1><strong>TRANSACTION PROCESSING</strong></h1>
					<p>Hi, '.$user_info['username'].'</p>
					<p>Thank you for trusting us. Your transaction will be processed within <strong>3-6 hours</strong>.</p>
					<p>Your balance of <strong>'.$amount.' NCOR </strong> will be transferred to your wallet once the transaction is completed.</p>
					<p>Best Regards,</p>
					<p><strong>Team Corona Crypto</strong></p>
					<img src ="https://crypto-virus.io/public/assets/images/footer.jpg" >
					</body>
					</html>';
					$this->globals->sendMail($user_info['email'], $subject, $content);
					$this->session->set_flashdata('trans_succesful', 'Submit successful transaction.');
					redirect('home/buy');
				}
				else
				{
					$this->session->set_flashdata('trans_fail', 'Submit failed transaction.');
					redirect('home/buy');
				}
			}
			else
			{
				$this->load->view('user_view/buy-sell.php');
			}
		}
		
		// login
		public function login()
		{
			if (($this->input->post('username')) && ( $this->input->post('password'))) {
				$username 				= $this->input->post('username');
				$password_login 		= md5($this->input->post('password'));
				$password 				= $this->input->post('password');
				if ($this->Musers->check_login($username, $password_login) == 0) 
				{
					$this->session->set_flashdata('msg_login_warning', 'Username or Password incorrect.');
					redirect('home/login_view/', 'refresh');
				}
				else
				{
					$remember = $this->input->post('remember_me');
					$user_info = $this->Musers->get_user_by('username', $username);
					$this->session->set_userdata('user_login_covid', $user_info);
					$this->session->set_userdata('user_info_covid', $user_info);
					$this->session->set_userdata('user_login_url', base_url());
					$data_ = array('last_login' => date("Y-m-d H:i:sa"));
					$this->Musers->update_time($username, $data_);

					if ($remember) {
						$this->input->set_cookie('uusername_covid', $username, 86500);
						$this->input->set_cookie('upassword_covid', $password, 86500);
						$this->load->view('user_view/index.php');

					}
					else{
						delete_cookie('uusername_covid');
						delete_cookie('upassword_covid');
						$this->load->view('user_view/index.php');
					}
					

					
				}

			}
			else{
				$this->load->view('user_view/login.php');
			}
		}
		// Blinding Email
		public function BlindingEmail($email)
		{
			$pos 			= strlen($email);
			$pos_cham 		= strrpos($email, '.');
			$cut_email_1 	= substr($email, 0,2);
			$cut_email_2    = substr($email, $pos_cham);
			$email_new 		= $cut_email_1.'xxx@xxx'.$cut_email_2;
			echo $email_new;
		}

		// register
		public function register()
		{
			$this->form_validation->set_rules('username', 'username', 'required|trim');
			$this->form_validation->set_rules('password', 'password', 'required|trim');
			$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
			if ($this->form_validation->run() == true) {
				$data = array(
					'username' 			=> $this->input->post('username'),
					'email'				=> $this->input->post('email'),
					'password'			=> md5($this->input->post('password')),
					'ref_code'  		=> $this->input->post('ref_code'),
					'register_time'		=> date("Y-m-d H:i:sa")
				);
				if ($this->Musers->check_email($this->input->post('email')) > 0) {
					$this->session->set_flashdata('msg_check_email', 'Email account is already in use, please use another email.');
					redirect('home/register_view', 'refresh');
				}
				if ($this->Musers->check_usename_by($data['username']) > 0)
				{
					$this->session->set_flashdata('msg_check_username', 'Username account is already in use, please use another username.');
					redirect('home/register_view', 'refresh');
				}
				else{
					$this->Musers->insert($data);
					$email 			= $this->input->post('email');
					$token 			= md5(uniqid());
					$data_update	= array('code_verify' => $token);
					$update_stt 	= $this->Musers->update($email, $data_update);
					$user_info		= $this->Musers->get_user_by('email', $email);
					if ($update_stt) {
						$subject = 'SIGN UP SUCCESS';
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
						<img src ="https://crypto-virus.io/public/assets/images/header.jpg" >
						<h1><strong>SIGN UP SUCCESS</strong></h1>
						<p>Hi, '.$user_info['username'].'</p>
						<p>Congratulations, you have successfully signed up for an account on <strong><a href="https://crypto-virus.io/">https://crypto-virus.io/</a></strong></p>
						<p>Please <strong>join us</strong> in protecting the world, repelling the <strong>COVID 19</strong> pandemic.
						</p>
						<p>Best Regards,</p>
						<p><strong>Team Corona Crypto</strong></p>
						<img src ="https://crypto-virus.io/public/assets/images/footer.jpg" >
						</body>
						</html>';
						$this->globals->sendMail($email, $subject, $content);

					}
					$this->load->view('user_view/register-sucessfully.php');
				}
			}
			else
			{
				$this->load->view('user_view/register.php');
			}
		}
		// profile
		public function profile()
		{
			$this->load->view('user_view/index.php');
		}
		// logout
		public function logout()
		{
			$this->session->unset_userdata('user_info_covid');
			redirect('home/');
		}
		public function trans($id)
		{
			$id 						= $this->uri->segment(3);
			$this->_data['user_trans']	= $this->Mtransaction->get_trans_by($id);
			$this->load->view('user_view/transaction.php', $this->_data);
		}
		// news1
		public function blog()
		{
			$total_news = $this->Mnews->get_total_news();
			$perpage 	= 3;
			$this->load->library('pagination');
			$config['total_rows']  		=  $total_news;
			$config['per_page']  		=  $perpage;
			$config['next_link']  		=  '<i class="icofont-caret-right"></i>';
			$config['prev_link'] 		=  '<i class="icofont-caret-left"></i>';
			$config['num_tag_open'] 	=  '';
			$config['num_tag_close'] 	=  '';
			$config['num_links']		=  5;
			$config['cur_tag_open'] 	=  '<a class="currentpage">';
			$config['cur_tag_close'] 	=  '</a>';
			$config['base_url'] 		=  base_url().'home/blog/';
			$config['uri_segment']	 	=  3;

			// khoi tao phan trang
			$this->pagination->initialize($config); 

			// tao link phan trang 
			$pagination =  $this->pagination->create_links();

			// lay offset
			$offset  =  ($this->uri->segment(3)=='') ? 0 : $this->uri->segment(3);
			# Đẩy dữ liệu ra view
			$this->_data['bookList'] 	=  $this->Mnews->get_news($perpage, $offset);
			$this->_data['rank'] = $this->Musers->get_rank_amount();
			$this->_data['cost']		= $this->Mcost->get_cost(1);
			$this->_data['list_donation'] = $this->Mdonation->list_donate();
			$this->_data['controller']	= $this;
			$this->_data['pagination'] 	= $pagination;
			$this->load->view('home/news.php', $this->_data);
		}
		// our blog
		public function learn_about_the_covid19()
		{
			$this->load->view('home/outblog-1.php');
		}
		public function profile_view()
		{
			$this->load->view('user_view/profile.php');
		}
		public function info()
		{
			$this->load->view('user_view/info.php');
		}
		public function active_mail($email, $token)
		{
			$check_email = $this->Musers->get_user_by('email', $email);
			$check_token = $this->Musers->get_user_by('code_verify', $token);
			if ($check_email && $check_token) 
			{

				$data_update = array(
					'email_fa' 		=> 1,
					'code_verify'	=> ''
				);
				$update_stt = $this->Musers->update($email, $data_update);
				if($update_stt)
				{
					$this->session->set_flashdata('msg_update_stt_suc', 'Email activation successful. Sign in below:');
					redirect('home/login');
				}
				else
				{
					$this->session->set_flashdata('msg_update_stt_fail', 'Email activation failed. Sign up below: ');
					redirect('home/register');				
				}
				
				
			}

			else
			{
				$this->session->set_flashdata('msg_link_expire', 'The link active mail does not exist or has expired. Sign up below:');
				redirect('home/register');	
			}
			

		}
		public function resend_email($email)
		{
			$email 			= $this->uri->segment(3);
			$token 			= md5(uniqid());
			$data_update    = array(
				'code_verify' => $token
			);
			$user_info		= $this->Musers->get_user_by('email', $email);
			$update_user 	= $this->Musers->update($email, $data_update);
			if ($update_user) {
				$subject = 'VERIFY EMAIL ADDRESS ';
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
				<img src = "https://crypto-virus.io/public/assets/images/header.jpg" >
				<h1><strong>VERIFY EMAIL ADDRESS</strong></h1>
				<p>Hi, '.$user_info['username'].'</p>
				<p>Please confirm your <strong>email address</strong> by clicking the link below or <strong>copying and pasting</strong> it into your browser:</p>
				<p>'.base_url('home/active_mail/'.$email.'/'.$token).'</p>
				<p>If you <strong>forget your password</strong>, you could recover it here:</p>
				<p>'.base_url('home/forgotpass_view/').'</p>
				<p>Best Regards,</p>
				<p><strong>Team Corona Crypto</strong></p>
				<img src ="https://crypto-virus.io/public/assets/images/footer.jpg" >
				</body>
				</html>';
				$this->globals->sendMail($email, $subject, $content);
				$this->session->set_flashdata('msg_resend_email', 'We have resent the activation email link.');

			}
			redirect('home/info');
		}
		// forgot password
		public function forgot_password()
		{
			
			if ($this->input->post('email')) {
				$email 				= $this->input->post('email');
				$check_email 		= $this->Musers->check_email($email);
				if ($check_email > 0) 
				{
					$row 			= $this->Musers->get_users_by($email);
					$token 			= md5(uniqid());
					$data_update 	= array(
						'forgot_code'	=> $token
					);
					$user_info		= $this->Musers->get_user_by('email', $email);
					$update_stt 	= $this->Musers->update($email, $data_update);
					if ($update_stt) 
					{
						$subject = 'RESSET PASSWORD';
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
						<img src = "https://crypto-virus.io/public/assets/images/header.jpg" >
						<h1><strong>RESSET PASSWORD </strong></h1>
						<p>Hi, '.$user_info['username'].'</p>
						<p>To reset your password, click on the link below and create a new password.</p>
						<p>'.base_url('home/reset_password/'.$email.'/'.$token).'</p>
						<p>Best Regards,</p>
						<p><strong>Team Corona Crypto</strong></p>
						<img src ="https://crypto-virus.io/public/assets/images/footer.jpg" >
						</body>
						</html>';
						$this->globals->sendMail($email, $subject, $content);
						$this->session->set_flashdata('msg_reset_pass_succ', 'We have e-mailed your password reset link!');
						redirect('home/forgotpass_view/', 'refresh');
					}


				}
				else
				{
					$this->session->set_flashdata('msg_check_email', 'This email is not yet used' );
					redirect('home/forgotpass_view');
				}
			}
			$this->load->view('public_view/forgot-pass.php');

		}

		// form reset pass
		public function reset_password($email, $token)
		{
			$check_email = $this->Musers->get_user_by('email', $email);
			$check_token = $this->Musers->get_user_by('forgot_code', $token);
			if ($check_email && $check_token) {
				$this->form_validation->set_rules('password', 'password', 'trim|min_length[8]|max_length[20]|required');
				$this->form_validation->set_rules('password_confirm', 'password confirm', 'required|matches[password]');
				if ($this->form_validation->run() == TRUE) {
					$data_update = array(
						'password' 		=> md5($this->input->post('password')),
						'forgot_code'	=> ''
					);
					$update_stt = $this->Musers->update($email, $data_update);
					if($update_stt)
					{
						$this->session->set_flashdata('msg_update_stt_suc', 'Password change successfully');
						redirect('home/login');
					}
					else
					{
						$this->session->set_flashdata('msg_update_stt_fail', 'Password change failed');
						$this->load->view('user_view/reset-password.php');					}
					}
				}
				else
				{
					$this->session->set_flashdata('msg_link_expire', 'The link does not exist or has expired');

				}
				$this->load->view('user_view/reset-password.php');

			}

		// update password
			public function update_password()
			{
				$email 			= $this->input->post('email');
				$password 		= $this->input->post('old_password');
				$new_password 	= $this->input->post('new_password');
				if ($email && $password) 
				{
					if ($this->Musers->check_pass($email, md5($password)) > 0) 
					{
						$data_update = array(
							'password' => md5($new_password)
						);
						$update = $this->Musers->update($email, $data_update);
						if ($update) 
						{
							$this->session->set_flashdata('msg_update_suc', 'Updated Successfully.');
							redirect('home/profile_view');
						}
						else
						{
							$this->session->set_flashdata('msg_update_fail', 'Update Failed.');
							redirect('home/profile_view');
						}
					}
					else
					{
						$this->session->set_flashdata('msg_check_pass', 'Password is incorrect.');
						redirect('home/profile_view');
					}
				}
				else
				{
					$this->load->view('user_view/profile.php');
				}
			}

		// update tokens address
			public function update_wallet()
			{
				$email = $this->input->post('email_wallet');
				if ($email) 
				{
					$data_update = array(
						'tokens_wallet' 		=> $this->input->post('swallet'),
						'token_address'		=> $this->input->post('address_tokens')
					);
					$update = $this->Musers->update($email, $data_update);
					if ($update) 
					{
						$this->session->set_flashdata('update_wall_suc', 'Updated Successfully.');
						redirect('home/info/');
					}
					else
					{
						$this->session->set_flashdata('update_wall_fail', 'Updated Successfully.');
						redirect('home/info/');
					}
				}
			}

		// update account
			public function update_account($email)
			{
				$email 	= $this->input->post('email_user');
				if ($email) 
				{
					$data_update = array(
						'firstname' 		=> $this->input->post('firstname'),
						'lastname'  		=> $this->input->post('lastname'),
						'phone'				=> $this->input->post('phone'),
						'date_of_birth'		=> $this->input->post('date_of_birth'),
						'country'			=> $this->input->post('country')
					);
					$data_update = $this->Musers->update($email, $data_update);
					if ($data_update) 
					{
						$this->session->set_flashdata('update_acc_suc', 'Updated Successfully.');
						redirect('home/info/');
					}
					else
					{
						$this->session->set_flashdata('update_acc_fail', 'Update Failed.');
						redirect('home/info/');
					}
				}
				else
				{
					$this->load->view('user_view/info.php');
				}
			}
		}
		?>