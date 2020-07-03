<?php require_once APPPATH.'/views/user_view/header.php' ?>

<div class="cryptodash-full-wrapper">
    <div class="crypto-dash-sidenav">
        <div id="sideNavWrapper" class="active">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <nav class="sidebar-nav">
                    <ul class="metismenu" id="menu3">
                        <li >
                            <a href="<?php echo base_url(); ?>home/profile">
                                <i class="fa fa-tachometer" aria-hidden="true"></i>
                                <span class="msm-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="<?php echo base_url(); ?>home/buy">
                                <i class="fa fa-dollar" aria-hidden="true"></i>
                                <span class="msm-text">Buy NCOR</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/trans/<?php echo $login_covid_user['user_info_covid']['id'] ?>">
                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                <span class="msm-text">Transaction</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/referral">
                                <i class="fa fa-link" aria-hidden="true"></i>
                                <span class="msm-text">Referral</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/info">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="msm-text">Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/profile_view">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <span class="msm-text">Security</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/logout">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <span class="msm-text">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /Sidebar -->

            <!-- Page content -->
            <div id="page-content-wrapper" class="dashboard-content">
              <?php 
              if (validation_errors()!='')
              {
                ?>
                <div class="alert alert-warning text-center"><?php echo validation_errors(); ?></div>
                <?php
            } ?>
            <?php if ($this->session->flashdata('trans_succesful')) { ?>
                <div class="alert alert-success text-center">
                  <?php 
                  echo $this->session->flashdata('trans_succesful');
                  ?>
              </div>
          <?php } ?>
          <?php if ($this->session->flashdata('trans_fail')) { ?>
            <div class="alert alert-warning text-center">
              <?php 
              echo $this->session->flashdata('trans_fail');
              ?>
          </div>
      <?php } ?>
      <!-- Keep all page content within the page-content inset div! -->
      <div class="page-content inset">
        <div class="crypto-container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="buy-token-wrapper">
                        <h2 class="crypto-stitle">Buy Token</h2>
                        <p class="crypto-subtitle">To join the Corona Crypto platform, copy or scan the QR code to make transactions.</p>
                        <div class="buy-token-table-box">
                            <table class="buytcn">
                                <thead>
                                    <tr>
                                        <th>Crypto</th>
                                        <th>Wallet</th>
                                        <th>QR</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="single-crncy">
                                                <div class="sc-icon">
                                                    <img src="<?php echo base_url(); ?>public/profile/assets/img/currency/btc.png" alt="">
                                                </div>
                                                <div class="sc-intext">
                                                    <h5>Bitcoin</h5>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="sc-wallet">bc1q7kzznzykn48kxrx5t3pvwr9p7esd876jfg7e4e</span>
                                        </td>
                                        <td>
                                            <div class="single-c-qr">
                                                <img src="<?php echo base_url(); ?>public/profile/assets/img/wallet/wallet-btc.jpg" alt="">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="single-crncy">
                                                <div class="sc-icon">
                                                    <img src="<?php echo base_url(); ?>public/profile/assets/img/currency/eth.png" alt="">
                                                </div>
                                                <div class="sc-intext">
                                                    <h5>Ethereum</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="sc-wallet">0xEF49C8dc86D2F618a29E853Baa751Cf3Bb877d9f</span>
                                        </td>
                                        <td>
                                            <div class="single-c-qr">
                                                <img src="<?php echo base_url(); ?>public/profile/assets/img/wallet/wallet-eth.jpg" alt="">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="single-crncy">
                                                <div class="sc-icon">
                                                    <img src="<?php echo base_url(); ?>public/profile/assets/img/code-usdt.png" alt="">
                                                </div>
                                                <div class="sc-intext">
                                                    <h5>USDT</h5>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="sc-wallet">0xEF49C8dc86D2F618a29E853Baa751Cf3Bb877d9f</span>
                                        </td>
                                        <td>
                                            <div class="single-c-qr">
                                                <img src="<?php echo base_url(); ?>public/profile/assets/img/wallet/wallet-usdt.jpg" alt="">
                                            </div>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                            <!-- <div class="token-buy-analitycs-wrapper">
                               <h2 class="crypto-stitle">Coin Convert Widget</h2>
                               <script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
                               <coingecko-coin-converter-widget  coin-id="bitcoin" currency="usd" background-color="#ffffff" font-color="#4c4c4c" locale="en" ></coingecko-coin-converter-widget>
                           </div> -->
                       </div>
                       <div class="col-xl-5">
                        <div class="tokenCalculation-wrapper tcw2">
                            <h2 class="crypto-stitle">Buy Cryto Virus Tokens</h2>
                            <!-- <p class="crypto-subtitle">Use your wallet to complete this process.</p> -->
                            <div class="token-calculator tc2">
                                <form action="<?php echo base_url(); ?>home/buy_tokens" class="tc-form" method="post" id="form_tokens">
                                    <input type="hidden" name="user_id" value="<?php echo $login_covid_user['user_info_covid']['id'] ?>">
                                    <input type="hidden" name="user_username" value="<?php echo $login_covid_user['user_info_covid']['username'] ?>">
                                    <h4>Crypto Payment:</h4>
                                    <select name="currencySymbol" id="currencySymbol" class="currencySymbol " style="width: 100%;
                                    font-size: 16px;
                                    letter-spacing: 0px;
                                    font-weight: 300;
                                    border: 1px solid #E6E6E6; 
                                    height: 50px;">
                                    <option value="Bitcoin">BTC</option>
                                    <option value="Ethereum">ETH</option>
                                    <option value="USDT">USDT</option>
                                </select>
                                <h4>Amount :</h4>
                                <input type="text" name="amount" placeholder="Ex. 1.000" style="width: 100%;
                                font-size: 16px;
                                letter-spacing: 0px;
                                font-weight: 300;
                                border: 1px solid #E6E6E6; 
                                height: 50px" >
                                <h4>Wallet Address :</h4>
                                <div class="row">
                                    <div class="col-md-9">
                                       <input type="text" value="bc1q7kzznzykn48kxrx5t3pvwr9p7esd876jfg7e4e" name="wallet_address" id="wallet_address" style="width: 100%;
                                       font-size: 16px;
                                       letter-spacing: 0px;
                                       font-weight: 300;
                                       border: 1px solid #E6E6E6; 
                                       height: 50px" readonly>
                                   </div>
                                   <div class="col-md-3">
                                        <a onclick="Copied_to()" data-original-title="Copy Addrees To Clipboard"><i class="fa fa-copy"></i> Copy</a>
                                   </div>
                               </div>
                               

                               <h4>QR CODE :</h4>
                               <img src="<?php echo base_url(); ?>public/profile/assets/img/wallet/wallet-btc.jpg"  style="width: 238px; height: 185px; margin-bottom: 20px" id="img_qr" >
                               <div class="form-group">
                                <input type="text" name="submit_payment" placeholder="Submit Payment Proof" style="width: 100%;
                                font-size: 16px;
                                letter-spacing: 0px;
                                font-weight: 300;
                                border: 1px solid #E6E6E6; height: 50px"> 
                            </div>


                            <div class="form-group">
                                <button style="display: inline-block; height: 50px" type="submit" class="btn btn-block  btn-primary" >BUY NCOR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>

</div>
</div>
<!-- /Page content -->
</div>
</div>
</div>
<!-- Dashboard Full Area -->

<?php require_once APPPATH.'/views/user_view/footer.php' ?>
<script type="text/javascript">
    function Copied_to() {
      var copyText = document.getElementById("wallet_address");
      copyText.select();
      document.execCommand("copy");
      alert("Copied wallet adress : " + copyText.value);
  }
  $("#submit_by_tokens").click(function(event) {
      document.getElementById('form_tokens').submit();
  });
  jQuery(document).ready(function($) {
      $("select.currencySymbol").change(function(){
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