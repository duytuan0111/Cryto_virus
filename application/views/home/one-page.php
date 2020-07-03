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
      <li><a href="#about">About</a></li>
      <li><a href="#past-epi">Before</a></li>
      <li><a href="#platform">Platform </a></li>
      <li><a href="#solution">Solution</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#blog">Blog </a></li>
      <li><a href="#contact">Contact</a></li>
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
       <li><a href="#about">About </a></li>
       <li><a href="#past-epi">Before</a></li>
       <li><a href="#platform">Platform </a></li>
       <li><a href="#solution">Solution</a></li>
       <li><a href="#faq">FAQ</a></li>
       <li><a href="#blog">Blog</a></li>
       <li><a href="#contact">Contact</a></li>
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
    <div class="col-md-6 col-12">
     <div class="content-part">
      <div class="banner-content">
        <h2>COVID-19 Tracker</h2>
        <h3 style="color: white !important">Total Confirmed Corona Cases</h4>
          <h2 class="count-people"><span id="total_confirmed">381761</span></h2>
          <ul class="lab-ul ">
            <li style="font-size: 30px !important">Current <span id="active_cases">262774</span></li>
            <li style="font-size: 30px !important">Recovered <span id="recovered_cases">125050</span></li>
            <li style="font-size: 30px !important">Deaths <span id="deaths_cases">16558</span></li>
          </ul>
          <a href="<?php echo base_url(); ?>WhitepaperCoronaNCOR.pdf" class="lab-btn style-2" target="_blank"><span>Whitepaper &nbsp; <i class="icofont-download"></i></span></a>
          <a href="<?php if (isset($login_covid_user['user_info_covid'])) { echo "https://crypto-virus.io/home/buy"; } else { echo "https://crypto-virus.io/home/login_view";} ?>" class="lab-btn style-2" ><span>Buy NCOR Now<i class="icofont-dollar"></i></span></a>
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
       <div class="col-sm-4 col-md-5 col-lg-5 col-xl-5" style="padding-left: 0px">
        <div class="status-info">

          <h5 class="title-sm" style="color: white">Pre Sale</h5>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:20%; background-color:  #00ff99">
              <span class="sr-only">70% Complete</span>
            </div>
          </div>
          <div class="progress-points"><span style="margin-left: 28px">15k Sold</span> <span>75k Sold</span></div>
          
        </div>
      </div>
      <div class="col-sm-2 col-md-2 col-lg-3 col-xl-3" style="">
        <div class="status-info">
          <h4 style="color: white">Current  Price</h4>
          <h3 class="fz-3 fw-3 status-percent" style="color: white" >$<?php echo $cost['current_price'] ?></h3>
        </div>
      </div>
      <div class="col-sm-6 col-md-5 col-lg-4 col-xl-4" >
        <div class="status-countdown float-sm-right">
          <h4 style="color: white" >Ico Ends In</h4>
          <ul id="example">
            <li><span class="days">00</span><p class="days_text">Days</p></li>
            <li class="seperator">:</li>
            <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
            <li class="seperator">:</li>
            <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
            <li class="seperator">:</li>
            <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
          </ul>
        </div>
      </div>
      <div class="banner-caption wide-auto">
        <div class="cpn-btns pt-0">
          <ul >
          </ul>
        </div>
      </div>
      <p>  </p>
      <p>  </p>
    </div><!-- .col -->
   <!--  <div class="row align-items-center justify-content-center">
      <div class="col-md-12 col-12">
        <div class="content-part">
          <div class="banner-content">
            <div class="row align-items-center justify-content-center">
              <div class=" col-12">
               <div class="content-part">
                  <h4 style="color: white">Accept Payment </h4>
                  <div class="banner-content">
                    <div class="row">
                      <div class="col-md-3 col-xs-3">
                        <h6 style="color: white"><img src="<?php echo base_url(); ?>public/profile/assets/img/currency/btc.png" alt=""> Bitcoin</h6>
                      </div>
                      <div class="col-md-3 col-xs-3">
                        <h6 style="color: white"><img src="<?php echo base_url(); ?>public/profile/assets/img/currency/eth.png" alt=""> Ethereum</h6>
                      </div>
                      <div class="col-md-3 col-xs-3">
                        <h6 style="color: white"><img src="<?php echo base_url(); ?>public/profile/assets/img/code-usdt.png" alt="" style="width: 50px; height: 50px;"> USDT</h6>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div><!-- .row -->
</div>
</div>
</section>

<!-- faq donate start here -->
<section class="faq-section bg-faq padding-tb"  id="#">
  <div class="faq-shape">
    <!-- <img src="<?php echo base_url() ?>public/assets/images/faq/shape/01.png" alt="action-shape"> -->
  </div>
  <div class="container" style="margin-top: 15px">
    <div class="section-header">
      <h2 style="color: #FF8C00" ><strong>Joining Hands Against COVID</strong></h2>
      <p><strong>Even a small contribution can save many lives, bringing value to the community. Join Corona Crypto to help the world fight COVID-19.</strong></p>
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
                    <input type="text" value="0xEF49C8dc86D2F618a29E853Baa751Cf3Bb877d9f" class="form-control" name="wallet_address" id="wallet_address" readonly>
                  </div>
                  <div class="col-md-3">
                    <a onclick="Copied_to()" data-original-title="Copy Addrees To Clipboard"><i class="icofont-copy"></i> Copy</a>
                  </div>

                </div>
              </div>
              <div class="form-group">
                <label for="">QR CODE:</label> <br>
                <img src="<?php echo base_url(); ?>public/profile/assets/img/wallet/wallet-eth.jpg"  style="width: 238px; height: 185px; margin-bottom: 20px" id="img_qr" >
              </div>


              <button type="submit" class="btn btn-primary te" style="background-color: #FF8C00; color: black;">Donate</button>
            </form>
          </div>
          <div class="col-lg-8 col-sm-8 col-12">
            <h3 class="text-center" style="margin-bottom: 36px; color: #FF8C00">Donation Records</h3>
            <table class="table table-bordered" id="table_donation">
              <thead>
                <tr>
                  <th><strong>Donor Name</strong></th>
                  <th>Amount</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($list_donation as $key) { ?>

                  <tr>
                    <td><?php echo $key['name'] ?></td>
                    <td>$<?php echo $key['amount'] ?></td>
                    <td><?php echo $key['created_at'] ?></td>
                  </tr>
                <?php } ?>

              </tbody>
            </table>
            <h3 class="text-center" style="margin-bottom: 36px; color: #FF8C00; margin-top: 57px">Disease Prevention Fund</h3>
            <p class="text-center"><strong>We deduct 25% for every purchase of NCOR into the Covid Preventive Fund 19. This amount will be donated as soon as the transaction takes place.</strong></p>
            <table class="table table-bordered" id="table_fund">
              <thead>
                <tr>
                  <th></th>
                  <th class="text-center">Email</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody style="background-color: white">
                <?php foreach ($rank as $key ) { ?>
                  <tr>
                    <td class="text-center">
                      <?php if ($key['rank'] == 1) {
                        echo '<img src="https://crypto-virus.io/public/assets/images/medal/firstpm.jpg" alt="">';
                      }
                      else if ($key['rank'] == 2) {
                        echo '<img src="https://crypto-virus.io/public/assets/images/medal/secendpm.jpg" alt="">';
                      }
                      else if ($key['rank'] == 3) {
                        echo '<img src="https://crypto-virus.io/public/assets/images/medal/thirdpm.jpg" alt="">';
                      }
                      else{
                        echo $key['rank'];
                      } 
                      ?>
                    </td>
                    <td class="text-center"<?php if (($key['rank'] == 1) || ($key['rank'] == 2) || ($key['rank'] == 3)) { echo 'style="color: #FF8C00"'; } ?>><?php $controller->BlindingEmail($key['email']); ?></td>
                    <td <?php if (($key['rank'] == 1) || ($key['rank'] == 2) || ($key['rank'] == 3)) { echo 'style="color: #FF8C00"'; } ?>>$<?php echo $key['fund_tokens'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Donate Section ending here -->

  <!-- about section start here -->
  <section class="about-section style-3 bg-about padding-tb" id="about">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-12">
          <div class="about-thumb">
            <img src="<?php echo base_url() ?>public/assets/images/about/home-3/01.png" alt="about">
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-content">
            <div class="ab-title">
              <span>About Us</span>
              <h3>Corona Crypto? </h3>
              <p>During the global pandemic, we created a new asset application on advanced blockchain technology. This kind of asset can contribute to the whole of humanity and the development of world crisis issues. The amount of wealth created based on the number of people in the world currently living is 7.739.879.999 people.</p>
              <ul class="lab-ul">
                <li>
                  <div class="ab-thumb">
                    <img src="<?php echo base_url() ?>public/assets/images/about/Mission.png" alt="ab-thumb">
                  </div>
                  <div class="ab-content">
                    <h6>Mission</h6>
                    <p>Create a transparent Blockchain asset during the time of dealing with pandemics and post-pandemics. A type of asset circulating on the Blockchain space of the Ethereum smart contracts platform.</p>
                  </div>
                </li>
                <li>
                  <div class="ab-thumb">
                    <img src="<?php echo base_url() ?>public/assets/images/about/Vision.png" alt="ab-thumb">
                  </div>
                  <div class="ab-content">
                    <h6>Vision</h6>
                    <p>Help reduce the impact of Covid-19 on society: transparent structures so donors will be able to know how their money is optimized. This will make them trust the project and the nonprofit activities.</p>
                  </div>
                </li>
                <li>
                  <div class="ab-thumb">
                    <img src="<?php echo base_url() ?>public/assets/images/about/Target.png" alt="ab-thumb">
                  </div>
                  <div class="ab-content">
                    <h6>Target</h6>
                    <p>Communities join hands to help the world through the crisis, reducing death and economic losses.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about section start here -->

  <!-- Service Section Start Here -->
  <section class="service-section home-3 padding-tb" style="background-image: url(<?php echo base_url('public/assets/css/bg-image/service-bg.jpg') ?>);" id="platform">
    <div class="container">
      <div class="section-header">
        <h2>Corona-Crypto: A Platform To Help Communities Fight Disease</h2>
        <p> Our teams of experts have discovered the great potential of blockchain to the fight the Covid-19.</p>
      </div>
      <div class="section-wrapper">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-6 col-12">
            <div class="service-item style-2">
              <div class="service-inner">
                <div class="service-thumb">
                  <img src="<?php echo base_url() ?>public/assets/images/Platform/1.png" alt="service">
                </div>
                <div class="service-content">
                  <!-- <h4>Coughing And Sneezing</h4> -->
                  <p>Utilize blockchain technology to create a reliable, efficient and error-free donation system.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="service-item style-2">  
              <div class="service-inner">
                <div class="service-thumb">
                  <img src="<?php echo base_url() ?>public/assets/images/CTA/2.png" alt="service">
                </div>
                <div class="service-content">
                  <p>Eliminate intermediaries in donating to prevent disease.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="service-item style-2">
              <div class="service-inner">
                <div class="service-thumb">
                  <img src="<?php echo base_url() ?>public/assets/images/CTA/3.png" alt="service">
                </div>
                <div class="service-content">
                  <p>Create a public data source to query donations since they were transferred from donors to beneficiaries.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="service-item style-2">
              <div class="service-inner">
                <div class="service-thumb">
                  <img src="<?php echo base_url() ?>public/assets/images/CTA/4.png" alt="service">
                </div>
                <div class="service-content">
                  <p>Bring honest individuals or nonprofits to the Corona platform and create transparent fundraising campaigns using smart contracts.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="service-item style-2">
              <div class="service-inner">
                <div class="service-thumb">
                  <img src="<?php echo base_url() ?>public/assets/images/CTA/5.png" alt="service">
                </div>
                <div class="service-content">
                  <p>Creating a simple control platform for the government and its stakeholders to review the organization's financial transactions.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="service-item style-2">
              <div class="service-inner">
                <div class="service-thumb">
                  <img src="<?php echo base_url() ?>public/assets/images/CTA/6.2.png" alt="service">
                </div>
                <div class="service-content">
                  <p>Connecting all people throughout the territory and contributing to the global pandemic.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Section Ending Here -->

  <!-- about section start here -->
  <section class="about-section style-3 bg-about padding-tb">
    <div class="container">
      <div class="row justify-content-center align-items-center flex-row-reverse">
        <div class="col-lg-6 col-12">
          <div class="about-thumb">
            <img src="<?php echo base_url() ?>public/assets/images/about/home-3/02.png" alt="about">
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-content">
            <div class="ab-title">
              <span>Corona-Crypto Platform </span>
              <!-- <h3>Prevention Coronavirus</h3> -->
              <h3>Corona is a blockchain-based platform and is powered by Corona tokens.</h3>
              <ul class="lab-ul">
                <li>
                  <div class="ab-thumb">
                    <img src="<?php echo base_url() ?>public/assets/images/Platform/1.png" alt="ab-thumb">
                  </div>
                  <div class="ab-content">
                    <h6>Providing an ecosystem of services against the Corona pandemic</h6>
                    <p>An easy-to-use interface and connecting the nonprofit community also allows full traceability of donations. That are donors, charities, beneficiaries, etc ...</p>
                  </div>
                </li>
                <li>
                  <div class="ab-thumb">
                    <img src="<?php echo base_url() ?>public/assets/images/Platform/2.png" alt="ab-thumb">
                  </div>
                  <div class="ab-content">
                    <h6>Simplify the donation and application process of Corona-Crypto</h6>
                    <p>We will integrate some integrated wallet services to store and donate easily, track donations transparently and smart contract templates to run fundraising campaigns.</p>
                  </div>
                </li>
                <li>
                  <div class="ab-thumb">
                    <img src="<?php echo base_url() ?>public/assets/images/Platform/3.png" alt="ab-thumb">
                  </div>
                  <div class="ab-content">
                    <h6>Share information</h6>
                    <p>Donors will be able to share some information about the disease area such as general information, official address, donations received, capital use and up-to-date information disease through public records after registration and verification.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about section start here -->


  <!-- Team Member Section Start here -->
  <div class="team-section home-2 padding-tb" style="background-image: url(<?php echo base_url('public/assets/css/bg-image/service-bg.jpg') ?>);" id="past-epi">
    <div class="container">
      <div class="section-header">
       <h2>Epidemics In Previous</h2>
     </div>
     <div class="team-area">
       <div class="row justify-content-center align-items-center">
        <div class="col-xl-4 col-md-6 col-12">
         <div class="team-item style-2">
          <div class="team-item-inner">
                                    <!-- <div class="team-thumb">
                                        <img src="<?php echo base_url() ?>public/assets/images/team/01.jpg" alt="team-membar">
                                      </div> -->
                                      <div class="team-content">
                                        <h5 class="member-name">SARS</h5>
                                        <!-- <span class="member-dagi">Throat Specialist</span> -->
                                        <p class="member-details">A severe acute respiratory syndrome is a human respiratory disease caused by a virus called the SARS virus (SARS-CoV), a strain of coronavirus. SARS outbreak in Hong Kong spread globally and almost become a pandemic.</p>
                                        <p class="member-details">Total number of deaths: 916 people.</p>
                                        <!-- <ul class="icon-style-list lab-ul">
                                            <li><i class="icofont-phone"></i><span>+880 1234 567 890</span></li>
                                            <li><i class="icofont-envelope"></i><span>d.m.nickell@gmail.com</span></li>
                                          </ul> -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-xl-4 col-md-6 col-12">
                                    <div class="team-item style-2">
                                      <div class="team-item-inner">
                                        <div class="team-content">
                                          <h5 class="member-name">Ebola Pandemic</h5>
                                          <p class="member-details">Ebola is not a strange name. It has originated from Africa. West Africa is the most affected area with 70% of the population infected. Besides, this disease has also been strongly outbreaks in many different areas.</p>
                                          <p class="member-details">Total number of deaths: 7000 people.</p>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-xl-4 col-md-6 col-12">
                                   <div class="team-item style-2">
                                    <div class="team-item-inner">
                                     <div class="team-content">
                                      <h5 class="member-name">H2N2</h5>
                                      <p class="member-details">This H2N2 virus was comprised of three different genes from an H2N2 virus that originated from an avian influenza A virus.It was first reported in Singapore in February 1957 and in coastal cities in the United States in summer 1957.</p>
                                      <p class="member-details">Total of Dead: 1.000.000 people.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Team Member Section Ending here -->

                      <!-- safe actions section start here -->

                      <!-- safe actions section ending here -->

                      <!-- Service Section Start Here -->
                      <section class="service-section home-3 style-2 padding-tb" style="background-image: url(<?php echo base_url('public/assets/css/bg-image/service-bg.jpg') ?>);" id="solution">
                        <div class="container">
                          <div class="section-header">
                            <h2>Our Solution</h2>
                            <p> Corona is a project that applies Blockchain technology to create an unchanging directional <br>algorithm chain.</p>
                          </div>
                          <div class="section-wrapper">
                            <div class="row no-gutters">
                              <div class="col-md-6 col-12">
                                <div class="service-left">
                                  <h3>Corona Crypto Solution</h3>
                                  <div class="row no-gutters justify-content-center">
                                    <div class="col-12">
                                      <div class="service-item style-2">
                                        <div class="service-inner">
                                                <!-- <div class="service-thumb">
                                                    <img src="<?php echo base_url() ?>public/assets/images/service/home-3/01.jpg" alt="service">
                                                  </div> -->
                                                  <div class="service-content">
                                                    <h4>Transparency</h4>
                                                    <p>The Corona Project guarantees transparency because all transactions are publicly recorded and cannot be modified in the ledger.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-12">
                                              <div class="service-item style-2">
                                                <div class="service-inner">
                                               <!--  <div class="service-thumb">
                                                    <img src="<?php echo base_url() ?>public/assets/images/service/home-3/02.jpg" alt="service">
                                                  </div> -->
                                                  <div class="service-content">
                                                    <h4>Smart Contract</h4>
                                                    <p>The smart contracts can ensure that the funds are not spent for purposes other without in the previous contract.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-12">
                                              <div class="service-item style-2">
                                                <div class="service-inner">
                                                <!-- <div class="service-thumb">
                                                    <img src="<?php echo base_url() ?>public/assets/images/service/home-3/03.jpg" alt="service">
                                                  </div> -->
                                                  <div class="service-content">
                                                    <h4>Query Ability</h4>
                                                    <p>The Corona Project builds a system that illustrates in detail each transaction. There, you can track your donation and confirm its spending on the people of the Corona epidemic.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-12">
                                              <div class="service-item style-2">
                                                <div class="service-inner">
                                                <!-- <div class="service-thumb">
                                                    <img src="<?php echo base_url() ?>public/assets/images/service/home-3/04.jpg" alt="service">
                                                  </div> -->
                                                  <div class="service-content">
                                                    <h4>Performance Evaluation</h4>
                                                    <p>Tracking has become easier for the philanthropist. They can track the impact of the contributions they make, who the help is, how they are, and the positive effects of your donation.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 col-12">
                                        <div class="service-right">
                                          <h3>Disadvantages In Charitable Activities</h3>
                                          <div class="row no-gutters justify-content-center">
                                            <div class="col-12">
                                              <div class="service-item style-2">
                                                <div class="service-inner">
                                                  <div class="service-content">
                                                    <h4>Lack Of Transparency</h4>
                                                    <p>It can be noticed that the Corona disease is affecting greatly globally. All over the world joined hands to contribute to repelling the disease.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-12">
                                              <div class="service-item style-2">
                                                <div class="service-inner">

                                                  <div class="service-content">
                                                    <h4>Lack Of Trust</h4>
                                                    <p>There have been repeated stories of funds. Organizations took excessive actions to try to seek contributions and funds being misused by charities.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-12">
                                              <div class="service-item style-2">
                                                <div class="service-inner">

                                                  <div class="service-content">
                                                    <h4>Corruption</h4>
                                                    <p>That can be a major challenge for aid agencies. Funds do not always transfer to the recipient.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-12">
                                              <div class="service-item style-2">
                                                <div class="service-inner">

                                                  <div class="service-content">
                                                    <h4>Have Not Approached The Community Yet</h4>
                                                    <p>Individuals and organizations around the world always want to contribute a part of their efforts to fight Corona disease. They operate through charitable funds, calling for donations, money, and wealth to those in need.</p>
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
                              </section>
                              <!-- Service Section Ending Here -->
                              <!-- Blog Section Start Here -->
                              <section class="blog-section home-3 bgc-blog padding-tb" id="#">
                                <div class="container">
                                  <div class="section-header">
                                    <h2>Funds Allocation</h2>
                                    <p>NCOR is a digital asset developed and circulated on the Blockchain of the Ethereum smart contract platform that helps make all fundraising information transparent during the prevention with pandemics and post-pandemics.</p>
                                  </div>
                                  <div class="row">
                                    <img src="<?php echo base_url(); ?>public/assets/images/op1.png">
                                  </div>
                                </div>
                              </section>
                              <!-- Blog Section Ending Here -->
                              <!-- faq section start here -->
                              <section class="faq-section bg-faq padding-tb" id="faq">
                               <div class="faq-shape">
                                <img src="<?php echo base_url() ?>public/assets/images/faq/shape/01.png" alt="action-shape">
                              </div>
                              <div class="container">
                                <div class="section-header">
                                  <h2>Friquently Ask Questions</h2>
                                </div>
                                <div class="section-wrapper">
                                  <div class="row justify-content-center">
                                    <div class="col-lg-6 col-sm-8 col-12">
                                      <ul class="accordion lab-ul">
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>What is Corona Crypto?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>A new technology is booming, bringing the innovation, transparency and unique, and that is blockchain. Corona is a project that applies Blockchain technology to create an unchanged directional algorithm chain, make fund-raising data transparent through on-chain public archives, eliminate charitable organizations which are seperate and unreliable to replace them with a divisional system - unchangeable and dispersible in preventing and stopping the Corona virus from spreading globally.</p>
                                          </div>
                                        </li>
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>What is the mission of Corona Crypto?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>Creating a transparent Blockchain asset during the time of fighting with the pandemic and after the pandemic. A type of asset circulating on the Blockchain space of Ethereum's smart contract platform. <br>-  Helping the international investment community to pay more attention to issues of the Society. <br>- Helping the global community to store assets safely while the world restricts cash to avoid infection. <br>- Helping the community to make a profit at home through the growing profits of Blockchain assets. <br> - Helping sponsors to make charitable donations for poor countries to have more budgets to prevent the pandemic. <br>- Helping to fight off the impact of the Corona virus on society: by transparent mechanisms, the donors can know how their money is optimized. This will make them trust the project and thereby, give more trust to the nonprofit activities.</p>
                                          </div>
                                        </li>
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>What is the goal of Corona Crypto?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>Communities join hands to help the world overcome the Crisis, reduce the losses of death and economy. <br>- Developing hospitals and health care centers:
                                              Amid the scarcity of medical facilities in the endemic areas, Corona commits to support the organizations and governments to open hospitals and health care centers by raising funds and using them transparently.
                                              <br>- Developing Educational Institutions:  The goal of ensuring no mistakes will help Corona focus on improving the educational facilities and propagandizing on how to prevent Corona.
                                              <br>- Finding out Vaccine: Corona focuses primarily on studying and testing to quickly find out Corona Vaccine through blockchain-based fundraising. 
                                              <br>- Premise of the epidemic prevention fund: The epidemic is a leading risk, in addition to Corona, the project will build a system that allows to create campaigns, call for capital to help fight off other epidemics such as H5N1, H10N8, Ebola, ....
                                            </p>
                                          </div>
                                        </li>
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>Why Blockchain Technology Should Be Used In Donation Charity?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>Blockchain is used to store information in connected information blocks. It is managed by everyone participating in the system.
                                              <br>- Limiting intermediaries: Instead of an seperate third party like the state or central bank. It also allows the secure transmission of data by a complex encryption system, and expanded from time to time.
                                              <br>- Transparency: Everyone can follow the path of data in blockchains, from one address to another and can do statistics for the entire history on such address.
                                              <br>- Smart contracts: Smart contracts are digital embedded by an if-this-then-that (ITTT) code in the system. Allowing them to execute themselves without third parties. Blockchain does not need a third party to join the system. It ensures that all participants are aware of the contract details and the terms are automatically fulfilled once the conditions are ensured.
                                            </p>
                                          </div>
                                        </li>
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>What Does Corona Crypto Solve?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>Creating a new application of assets on the advanced blockchain technology - a type of asset that is possible for all mankind to contribute to the development and resolution of the world's crisis problems. The amount of assets created based on the global population is currently 7.739.879.999 people.
                                              <br>The amount of assets created on the Blockchain platform with the transparency of smart contracts will help every person in the world can own it and contribute to the development of the world to restore the economy, social life during and after the Corona pandemic.

                                            </p>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-lg-6 col-sm-8 col-12">
                                      <ul class="accordion lab-ul">
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>What is Project Transparency?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>The lack of transparency in donations to prevent the epidemic has created suspicion. In this case, the Corona project will ensure the transparency when contributions are used because all transactions are publicly recorded and cannot be modified in the ledger of the controller.
                                              <br>- Smart contacts: In addition, the use of smart contracts can ensure that the money is not spent for purposes other than those set out in the previous contracts.
                                              <br>- Traceability: On the other hand, traceability is the process of identifying the origin of medical equipment, necessities provided to epidemic areas. The Corona Project will build a system that illustrates in detail each transaction. in this system, you can actually track your contribution, and confirm its expenditure for people in the Corona epidemic areas. 
                                              <br>This system is more transparent than any traditional charity system. Tracking has become easier for the donators. They can track the influence of their contributions, who the recipients are, how they are, and the positive effects of their contributions.
                                            </p>
                                          </div>
                                        </li>
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>Corona Crypto Platform?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>Corona is a blockchain-based platform and provided by Corona tokens.
                                              <br>This platform provides an ecosystem of services against the Corona pandemic through an easy-to-use interface, nonprofit community connection, and allowing full transparency and traceability of contributions, donators, charities, beneficiaries, ...
                                              <br>In order to simplify the donation process and increase the adoption of Corona-Crypto, we will integrate a number of integrated wallet services for easy storage and donation, tracking for transparent donations and smart contract forms to run the fund-raising campaign.
                                              <br>In order to create an account on the Coronana platform, charities shall register and be verified to donate. Combine a unique address and allow tracking of donations and check the usage of money.
                                              <br>After registration and verification, the donators can share some information about the epidemic area (for example: general information, official address, donations received, usage of capital and up-to-date information of the epidemic) through public records. 
                                            </p>
                                          </div>
                                        </li>
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>Why Should Donate Through Our Platform?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>Optimal Transparency: Every transaction can be verified on the blockchain very simply. The more transparency and accountability are the more credibility for donators is and this encourage them to make more donations, and the credibility and reputation of the charity will also increase.
                                              <br>- Global and Decentralized: Corona is a highly decentralized blockchain network that is not dependent on any centralized governments or organizations. Therefore, funds raised can be transferred directly from the donator to the beneficiary.  
                                              <br>- Digital Agreements: Corona makes it easier to store and share digital data, and it can also be used to ensure that documents and contracts are not modified without the consent of participants. 
                                              <br>- Cost savings: We simplify the process of charity management, automate stages in the process and save overall costs by reducing intermediaries ...
                                            </p>
                                          </div>
                                        </li>
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>How to Join Our Platform?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>Corona will allow sponsors to convert major cryptocurrencies into Corona Token at current exchange rates, while the integrated wallet will allow every registered user to easily manage and store tokens without using external services.
                                              <br>Donators can convert major cryptocurrencies such as Bitcoin, Ether, Litecoin, Dash and ERC20 into Corona Token with the purpose of helping prevent epidemics and early finding out vaccines in the future.
                                            </p>
                                          </div>
                                        </li>
                                        <li class="accordion-item">
                                          <div class="accordion-list">
                                            <div class="left">
                                              <div class="icon"><i class="icofont-info"></i></div>
                                            </div>
                                            <div class="right">
                                              <h6>Contributions to the Community?</h6>
                                            </div>
                                          </div>
                                          <div class="accordion-answer">
                                            <p>Corona-Crypto: A platform to help our community fight off the epidemic. Our team of experts has investigated and discovered the great potential of blockchain in dealing with the corona virus. We have developed an user-friendly and accessible solution that helps connect people all over the world to fight off the global pandemic.
                                              <br>- Making the best of blockchain technology to create a reliable, efficient and mistake-free donation system.
                                              <br>- Eliminating the intermediaries in donation to prevent the epidemic.
                                              <br>- Creating a public data source to query donations since they are transferred from donators to beneficiaries.
                                              <br>- Bringing honest non-profit individuals or organizations to the Corona platform and creating transparent fund-raising campaigns using smart contracts.
                                              <br>- Creating a simple control platform for the government and its coordinators to review the organization's financial transactions.
                                            </p>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <!-- faq section ending here -->

                            <!-- Blog Section Start Here -->
                            <section class="blog-section home-3 bgc-blog padding-tb" id="blog">
                              <div class="container">
                                <div class="section-header">
                                  <h2>Corona Blog</h2>
                                  <p> Follow the latest Corona Crypto information here. All information is completely transparent and verified.</p>
                                </div>
                                <div class="section-wrapper">
                                  <div class="row justify-content-center">
                                    <?php foreach ($bookList as $key ) { ?>
                                      <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="post-item style-2">
                                          <div class="post-item-inner">
                                            <div class="post-thumb">
                                              <a href="#"><img src="<?php echo $key->img_url ?>"></a>
                                            </div>
                                            <div class="post-content">
                                              <h5><a href="#"><?php echo $key->title ?></a></h5>
                                              <div class="author-date">
                                                <a href="#" class="date"><i class="icofont-calendar"></i><?php echo $key->time ?></a>
                                                <a href="#" class="admin"><i class="icofont-ui-user"></i><?php echo $key->author ?></a>
                                              </div>
                                              <p><?php echo $key->description ?></p>
                                              <div class="post-footer">
                                                <a href="<?php echo $key->new_url ?>" class="text-btn"></i>Read More<i class="icofont-double-right"></i></a>

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <?php } ?>
                                    <div class="section-header">
                                      <h3 id="jquery_link"><?php echo $pagination; ?></h3>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <!-- Blog Section Ending Here -->

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
      date: '<?php echo $cost['time'] ?>'
    }, function () {
      console.log('Time end!');
    });
  </script>


</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Mar 2020 14:48:48 GMT -->
</html>