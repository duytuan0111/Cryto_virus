<?php 
$login_covid_user = $this->session->get_userdata();
$this->session->set_userdata('_current_link', current_url());
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Mar 2020 14:47:34 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>public/assets/images/x-icon/2.png">

	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/icofont.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/lightcase.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/swiper.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/font-awesome.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/> -->

	<title>Covid-19</title>
</head>
<style type="text/css">
	.error
	{
		color:red !important;
		font-family:verdana, Helvetica !important;
	}
</style>
<body>
	<!-- Mobile Menu Start Here -->

	<div class="mobile-menu" id="home">
		<nav class="mobile-header">
			<div class="header-logo">
				<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>public/assets/images/logo-virus.png" alt="logo"></a>
			</div>
			<div class="header-bar">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</nav>
		<nav class="mobile-menu">
			<div class="mobile-menu-area">
				<div class="mobile-menu-area-inner">
					<ul class="lab-ul">
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<?php if ($this->session->userdata('user_info_covid')) { ?>
							<li><a href="#0">Hi, <?php echo $login_covid_user['user_info_covid']['username'] ?></a>
								<ul class="lab-ul">
									<li><a href="<?php echo base_url(); ?>home/profile">Profile</a></li>
									<li><a href="<?php echo base_url(); ?>home/logout">Logout</a></li>
								</ul>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="header-btn" style="<?php if (isset($login_covid_user['user_info_covid'])) { echo "display: none";  } ?>">
					<a href="<?php echo base_url(); ?>home/login_view" class="lab-btn style-2"><span>Sign in</span></a>
				</div>
			</div>
		</nav>
	</div>
	<!-- Mobile Menu Ending Here -->


	<!-- desktop menu start here -->
	<header class="header-section transparent-header" id="home" style="background-color: #06264d">
		<div class="header-area">
			<div class="container">
				<div class="primary-menu">
					<div class="logo">
						<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>public/assets/images/logo-virus.png" alt="logo"></a>
					</div>
					<div class="main-area">
						<div class="main-menu">
							<ul class="lab-ul">
								<li><a href="<?php echo base_url(); ?> ">Home</a></li>
								<?php if ($this->session->userdata('user_info_covid')) { ?>
									<li><a href="#0">Hi, <?php echo $login_covid_user['user_info_covid']['username'] ?></a>
										<ul class="lab-ul">
											<li><a href="<?php echo base_url(); ?>home/profile">Profile</a></li>
											<li><a href="<?php echo base_url(); ?>home/logout">Logout</a></li>
										</ul>
									</li>
								<?php } ?>
							</ul>
						</div>
						<div class="header-btn" style="<?php if (isset($login_covid_user['user_info_covid'])) { echo "display: none";  } ?>">
							<a href="<?php echo base_url(); ?>home/login_view" class="lab-btn style-2"><span>Sign in</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- desktop menu ending here -->




	<!-- faq section start here -->
	<section class="faq-section bg-faq padding-tb" id="faq">
		<div class="faq-shape">
            <img src="<?php echo base_url() ?>public/assets/images/faq/shape/01.png" alt="action-shape">
        </div>
		<div class="container" style="margin-top: 15px">
			<div class="section-header">
				<h2 style="color: #FF8C00" ><strong>Crypto Virus Against COVID</strong></h2>
				<p><strong>Join Ctyoto Virus Charity and help the world fight COVID-19. Even a small donation can save lives. Together, let’s help those in need.</strong></p>
				<?php if ($this->session->flashdata('msg_donate_1')) { ?>
					<div class="alert alert-success">
						<?php echo $this->session->flashdata('msg_donate_1'); ?>
					</div>
				<?php } ?>
				<?php if ($this->session->flashdata('msg_donate_2')) { ?>
					<div class="alert alert-warning">
						<?php echo $this->session->flashdata('msg_donate_2'); ?>
					</div>
				<?php } ?>
			</div>
			<div class="section-wrapper">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-sm-8 col-12">
						<h3 class="text-center" style="color: #FF8C00">Donation</h2>
							<form action="<?php echo base_url(); ?>home/donation" method="POST" role="form" id="form_donation">
								<div class="form-group">
									<label for="">Select Identity:</label>
									<select name="Identity" id="Identity" class="form-control">
										<option value="individual">Indidual</option>
										<option value="company">Company</option>
									</select>
								</div>
								<div class="form-group">
									<label for="fullname">Full Name:</label>
									<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
								</div>
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="text" class="form-control" name="email" id="email" placeholder="Email">
								</div>  	
								<div class="form-group">
									<label for="">Crypto Payment:</label>
									<select name="currencySymbol" id="currencySymbol" class="form-control">
										<option value="Ethereum" selected="">ETH</option>
									</select>
								</div>
								<div class="form-group">
									<label for="amount">Amount:</label>
									<input type="text" class="form-control" name="amount" id="amount" placeholder="Ex. 1.000">
								</div>
								<div class="form-group">
									<label for="wallet_address">Wallet Address:</label>
									<div class="row">
										<div class="col-md-9">
											<input type="text" value="0xDFD7a3650B3C646D338bC6B45A0D114E2df763dc" class="form-control" name="wallet_address" id="wallet_address" readonly>
										</div>
										<div class="col-md-3">
											<a onclick="Copied_to()" data-original-title="Copy Addrees To Clipboard"><i class="icofont-copy"></i> Copy</a>
										</div>

									</div>
								</div>
								<div class="form-group">
									<label for="">QR CODE:</label> <br>
									<img src="<?php echo base_url(); ?>public/profile/assets/img/wallet/code-eth.jpg"  style="width: 238px; height: 185px; margin-bottom: 20px" id="img_qr" >
								</div>


								<button type="submit" class="btn btn-primary te" style="background-color: #FF8C00; color: black;">Donate</button>
							</form>
						</div>
						<div class="col-lg-8 col-sm-8 col-12">
							<h3 class="text-center" style="margin-bottom: 36px; color: #FF8C00">Donation Records</h2>
								<table class="table table-striped table-bordered" id="table_donation">
									<thead>
										<tr>
											<th>Donor Name</th>
											<th>Currency</th>
											<th>Amount</th>
											<th>Date</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($list_donation as $key) { ?>
										
										<tr>
											<td><?php echo $key['name'] ?></td>
											<td><?php echo $key['payment_method'] ?></td>
											<td><?php echo $key['amount'] ?></td>
											<td><?php echo $key['created_at'] ?></td>
										</tr>
										<?php } ?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- faq section ending here -->





			<!-- Footer Section Start Here -->
			<footer style="background-image: url(<?php echo base_url('public/assets/css/bg-image/footer-bg-3.jpg') ?>);">
				<div class="footer-top padding-tb">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="footer-item first-set">
									<div class="footer-inner">
										<div class="footer-content">
											<div class="title">
												<h6>About Covid-19</h6>
											</div>
											<div class="content">
												<p>We believe in Simple Creative and Flexible Design Standards.</p>
												<h6>Contact Us:</h6>
												<!-- <p>795 Folsom Ave, Suite 600 San Francisco, CA 94107</p> -->
												<ul class="lab-ul">
                                <!-- <li>
                                   <p><span>Phone:</span>(91) 8547 632521</p>
                               </li> -->
                               <li>
                               	<p><span>Email:</span><a href="#">support@crypto-virus.io</a></p>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="col-lg-6 col-md-6 col-12">
       	<div class="footer-item">
       		<div class="footer-inner">
       			<div class="footer-content">
       				<div class="title text-center">
       					<h6>Social Contact</h6>
       				</div>
       				<div class="content">
       					<div class="row">
       						<div class="col-md-4">
       							<ul class="lab-ul">
       								<li><a href="https://www.facebook.com/VirusCrypto/"><i class="icofont-facebook"></i>Facebook</a></li>
       								<li><a href="https://twitter.com/corona_crypto"><i class="icofont-twitter"></i>Twitter</a></li>
       							</ul>
       						</div>
       						<div class="col-md-4">
       							<ul class="lab-ul">
       								<li><a href="https://www.instagram.com/cryptocorona/"><i class="icofont-instagram"></i>Instagram</a></li>
       								<li><a href="bit.ly/ChannelCoronaCrypto"><i class="icofont-youtube"></i>YouTube</a></li>
       							</ul>
       						</div>
       						<div class="col-md-4">
       							<ul class="lab-ul">
       								<li><a href="https://medium.com/@cryptovirus"><i class="icofont-web"></i>Medium</a></li>
       							</ul>
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>
       	</div>
       </div>

   </div>
</div>
</div>
<div class="footer-bottom">
	<div class="container">
		<div class="section-wrapper">
			<p>&copy; Copyright © 2020, Corona Crypto. All trademarks and copyrights belong to their respective owners.</p>
		</div>
	</div>
</div>
</footer>
<!-- Footer Section Ending Here -->

<!-- scrollToTop start here -->
<!-- scrollToTop ending here -->


<script src="<?php echo base_url() ?>public/assets/js/jquery.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/datatables.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/lightcase.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/swiper.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/functions.js"></script>
<script src="<?php  echo base_url() ?>public/assets/js/jquery.validate.min.js"></script>
<script src="<?php  echo base_url() ?>public/admin/page-index.js"></script>
<script src="<?php  echo base_url() ?>public/admin/page-donation.js"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script> -->
<script type="text/javascript">
	// datatable
	$(document).ready( function () {
		$('#table_donation').DataTable({
			 "pagingType": "full_numbers",
			 "searching": true,

		});
	} );
	function Copied_to() {
		var copyText = document.getElementById("wallet_address");
		copyText.select();
		document.execCommand("copy");
		alert("Copied wallet adress : " + copyText.value);
	};
	$(document).ready(function() {
		$("#currencySymbol").change(function(event) {
			var currencySymbol = $(this).children("option:selected").val();
			switch(currencySymbol) {
				case "Ethereum":
				document.getElementById('wallet_address').value = "0xDFD7a3650B3C646D338bC6B45A0D114E2df763dc";
				document.getElementById('img_qr').src = '<?php echo base_url(); ?>public/profile/assets/img/wallet/code-eth.jpg';
				break;
				case "Bitcoin":
				document.getElementById('wallet_address').value = "bc1qkt4a5ecu8y452cq75wwzcclpduzm0wvzp87dsx";
				document.getElementById('img_qr').src = '<?php echo base_url(); ?>public/profile/assets/img/wallet/code-btc.jpg';
				break;
				case "USDT":
				document.getElementById('wallet_address').value = "0xDFD7a3650B3C646D338bC6B45A0D114E2df763dc";
				document.getElementById('img_qr').src = '<?php echo base_url(); ?>public/profile/assets/img/wallet/code-usdt.jpg';
				break;
				default:
            // code block
        }
    });
	});

</script>




</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Mar 2020 14:48:48 GMT -->
</html>