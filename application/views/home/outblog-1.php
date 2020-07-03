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
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/icofont.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/lightcase.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/datatables.min.css">
  <link href="https://fonts.googleapis.com/css?family=Arapey:400,400i,600|Open+Sans:300" rel="stylesheet">

  <title>Covid-19</title>
  <style type="text/css">
    ul#example {
      list-style: none;
      margin: 20px 0;
      padding: 0;
      display: block;
      text-align: center;
    }

    ul#example li { display: inline-block; }

    ul#example li span {
      font-size: 25px;

      line-height: 25px;
      color: white;
    }

    ul#example li.seperator {
      font-size: 25px;
      line-height: 25px;
      vertical-align: top;
    }

    ul#example li p {
      color: #a7abb1;
      font-size: 22px;
    }
    #timeline-hozi {
      font-family: 'Open Sans', sans-serif;
      font-weight: 300;
      color: #232323;
    }
    #top-news {
      margin-top: 20px;
    }

  </style>
  <style>
    .dataTables_wrapper .dataTables_paginate .paginate_button {
      color: black !important;
      border: 1px solid #FF8C00!important;
      background-color: #FF8C00!important;
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #FF8C00), color-stop(100%, #FF8C00))!important;
      background: -webkit-linear-gradient(top, #FF8C00 0%, #FF8C00 100%)!important;
      background: -moz-linear-gradient(top, #FF8C00 0%, #FF8C00 100%)!important;
      background: -ms-linear-gradient(top, #FF8C00 0%, #FF8C00 100%)!important;
      background: -o-linear-gradient(top, #FF8C00 0%, #FF8C00 100%)!important;
      background: linear-gradient(to bottom, #FF8C00 0%, #FF8C00 100%)!important;
    }

  </style>
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
<header class="header-section transparent-header" id="home">
 <div class="header-area">
  <div class="container">
   <div class="primary-menu">
    <div class="logo">
     <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>public/assets/images/logo-virus.png" alt="logo"></a>
   </div>
   <div class="main-area">
     <div class="main-menu">
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
</div>
</div>
</div>
</header>
<!-- desktop menu ending here -->

<!-- Banner Section start here -->
<section class="banner-section home-3">
 <div class="banner-area">
  <div class="container">
   <div class="row align-items-center justify-content-center">
    <div class="col-md-6 col-12" style="margin-top: -188px;">
     <div class="content-part">
      <div class="banner-content">
        <h2>Corona Blog</h2>
        <h3 style="color: #00ff99">LEARN ABOUT THE COVID-19 GLOBAL PANDEMIC</h3>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-12">
    <div class="banner-round">
      <img src="<?php echo base_url() ?>public/assets/images/banner/home-3/01.png" alt="banner">
    </div>
  </div>
</div>
</div>
</div>
<div class="row align-items-center justify-content-center">
  <div class="col-lg-10 text-center">
    <div class="row gutter-vr-40px justify-content-between">
     <div class="col-md-11 col-xl-11 col-lg-11 text-center text-sm-left" style="padding-left: 0px !important">
      <div class="row justify-content-around gutter-vr-30px" style="margin-top: 21px;">
      </div><!-- .row -->
    </div>
  </div>
</section>

<!-- Service Section Start Here -->
<section class="service-section home-3 padding-tb" style="background-image: url(<?php echo base_url('public/assets/css/bg-image/service-bg.jpg') ?>);" id="platform">
  <div class="container">
    <div class="section-header">
      <h2>LEARN ABOUT THE COVID-19 GLOBAL PANDEMIC</h2>
    </div>
    <div class="section-wrapper">
      <div class="row no-gutters justify-content-center" style="color: white">
        <img src="http://localhost:8089/covid19/public/assets/images/news/1.png">
        <p id="top-news">&nbsp; Corona is a large family of viruses, of which some strains are capable of causing disease when infecting from animals to humans, others infect only and survive in animals including camels, cats and bats. Sometimes, the corona virus evolves from animals in order to transmit to humans and then spreads from person to person like the Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). </p>
        <img src="http://localhost:8089/covid19/public/assets/images/news/1.1.jpg" style="width: 1170px; ">
        <p id="top-news">&nbsp; At present, the corona virus strain causing an epidemic in Wuhan (2019-nCoV) is a new strain that has never appeared in humans and is likely to transmit from person to person. The virus initially originated from animal sources but has the ability to spread from person to person. It is important to note that the spread from person to person can occur continuously. In humans, the virus spreads from person to person through contact with infected body fluids. Depending on the rate of transmission by the virus strain, the coughing, sneezing or shaking hands can cause people to exposure.</p>
        <p>&nbsp; The virus can also be spread by touching an object that an infected person had touched, then putting the hands up to their mouth, nose, and eyes. The persons taking care of patients may also be exposed to the virus when handling the patient's waste.</p>
      </div>
    </div>
  </div>
</section>
<!-- Service Section Ending Here -->



<!-- Contact Section Start Here -->
<section class="contact-us padding-tb pb-0" id="contact">
  <div class="container">
    <div class="section-header">
      <h2>Contact Us</h2>
    </div>
    <div class="contact-wrap">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <ul class="contact-area lab-ul">
            <li class="contact-item">
              <div class="contact-icon">
                <img src="<?php echo base_url() ?>public/assets/images/contact/icon/Tele-1.png" alt="contact">
              </div>
              <div class="content">
                <h6>Telegram</h6>
                <p>https://t.me/VirusCryptoOfficial</p>
              </div>
            </li>
            <li class="contact-item">
              <div class="contact-icon">
                <img src="<?php echo base_url() ?>public/assets/images/contact/icon/facebook-2.png" alt="contact">
              </div>
              <div class="content">
                <h6>Facebook</h6>
                <p>https://www.facebook.com/groups/<br> VirusCrypto/</p>
              </div>
            </li>
            <li class="contact-item">
              <div class="contact-icon">
                <img src="<?php echo base_url() ?>public/assets/images/contact/icon/03.png" alt="contact">
              </div>
              <div class="content">
                <h6>Email Address</h6>
                <p>support@crypto-virus.io</p>
              </div>
            </li>
            <li class="contact-item">
              <div class="contact-icon">
                <img src="<?php echo base_url() ?>public/assets/images/contact/icon/04.png" alt="contact">
              </div>
              <div class="content">
                <h6>Website Address:</h6>
                <p>https://crypto-virus.io/</p>
              </div>
            </li>
          </ul>
        </div>
        <?php if ($this->session->flashdata('msg_contact_0')) { ?>
          <script type="text/javascript">
            window.alert('Thank you! Your message has been successfully sent. We will contact you very soon!');
          </script>
        <?php } ?>
        <?php if ($this->session->flashdata('msg_contact_1')) { ?>
          <script type="text/javascript">
            window.alert('Failed to send your message!');
          </script>
        <?php } ?>
        <div class="col-lg-8 col-md-6 col-xs-12">
          <form class="contact-form" action="<?php echo base_url(); ?>home/contact_uss" method="POST" id="form_contact">
            <input type="text" name="contact_name" placeholder="Your Name" class="contact-input">
            <input type="email" name="contact_email" placeholder="Your Email" class="contact-input">
            <input type="text" name="contact_address" placeholder="Your Address" class="contact-input">
            <input type="text" name="contact_company" placeholder="Your Company" class="contact-input">
            <textarea rows="5" name="contact_message" class="contact-input" placeholder="Your Messages"></textarea>
            <input type="submit" name="submit" value="Send Message" class="lab-btn">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section Ending Here -->

<!-- Footer Section Start Here -->
<footer style="background-image: url(<?php echo base_url('public/assets/css/bg-image/footer-bg-3.jpg') ?>);">
 <div class="footer-top padding-tb">
  <div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
     <div class="footer-item first-set">
      <div class="footer-inner">
       <div class="footer-content">
                                    <!-- <div class="title">
                                     <h6>About Covid-19</h6>
                                   </div> -->
                                   <div class="content">
                                     <!-- <p>We believe in Simple Creative and Flexible Design Standards.</p> -->
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
      <a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
      <!-- scrollToTop ending here -->

      <script src="<?php echo base_url() ?>public/assets/js/jquery.js"></script>
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
      <script src="<?php echo base_url() ?>public/assets/js/datatables.min.js"></script>


      <script>
    // https://thevirustracker.com/free-api?global=stats
    $.ajax({
      url: 'https://corona.lmao.ninja/all',
      dataType: 'json',
      async: false,
      success: function(data) {
        console.log(data.cases);
        console.log(data.active);
        console.log(data.recovered);
        console.log(data.deaths);
        var total_cases                 = data.cases;
        var total_active_cases          = data.active;
        var total_recovered_case        = data.recovered
        var total_deaths                = data.deaths;
        var total_confirmed             = document.getElementById('total_confirmed');
        total_confirmed.innerHTML       = total_cases;
        var active_cases                = document.getElementById('active_cases');
        active_cases.innerHTML          = total_active_cases;
        var total_recovered             = document.getElementById('recovered_cases');
        total_recovered.innerHTML       = total_recovered_case;
        var deaths_cases                = document.getElementById('deaths_cases');
        deaths_cases.innerHTML          = total_deaths;
      }

    });

  </script>
  
  <script>
    // datatable
    $(document).ready( function () {
      $('#table_donation').DataTable({
       "pagingType": "first_last_numbers",
       "searching": false,
       "lengthChange": false,
       "paging":         false,
       "scrollCollapse": true,
       "scrollY":        "300px",
     });
      // table_fund
      $('#table_fund').DataTable({
       "paging":         false,
       "scrollCollapse": true,
       "scrollY":        "300px",
       "searching": false,
       "lengthChange": false
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
         document.getElementById('wallet_address').value = "0xEF49C8dc86D2F618a29E853Baa751Cf3Bb877d9f";
         document.getElementById('img_qr').src = '<?php echo base_url(); ?>public/profile/assets/img/wallet/wallet-eth.jpg';
         break;
         case "Bitcoin":
         document.getElementById('wallet_address').value = "bc1q7kzznzykn48kxrx5t3pvwr9p7esd876jfg7e4e";
         document.getElementById('img_qr').src = '<?php echo base_url(); ?>public/profile/assets/img/wallet/wallet-btc.jpg';
         break;
         case "USDT":
         document.getElementById('wallet_address').value = "0xEF49C8dc86D2F618a29E853Baa751Cf3Bb877d9f";
         document.getElementById('img_qr').src = '<?php echo base_url(); ?>public/profile/assets/img/wallet/wallet-usdt.jpg';
         break;
         default:
            // code block
          }
        });
    });
  </script>
  <script type="text/javascript">
    $('#example').countdown({
      date: '05/11/2020 00:00:00'
    }, function () {
      console.log('Time end!');
    });
  </script>


</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Mar 2020 14:48:48 GMT -->
</html>