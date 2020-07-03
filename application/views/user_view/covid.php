
application/x-httpd-php commission.blade.php ( ASCII text )
@extends('frontend.user')
@section('title', 'Wallet')
@section('classpage', 'wallet-page')
@section('content')
<style>
    .wallet-page .tg-0lax{
        padding: 13px 35px 10px 35px !important;
    }
    .button_commission,.button_transfer{
        color:#fff;
        border: 1px solid #00c4ff;
        border-radius: 4px;
    }
    .button_commission:hover,.button_transfer:hover{
        color:#fff;
    }
    .wallet-page .buy-bots input#recipient{
        background-image: unset; 
    }
    .wallet-page .buy-bots input#amount{
        background-image: unset; 
    }
    .max_commission{
        width: 25px;
        cursor: pointer;
    }
    .ex-val:before{
        content:unset;
    }
    .wallet-page .list-coin{
        width: 160px;
        background-color:#181C39;
        background-image:unset;
    }
    .add-active{
        color: #00c4ff;
        font-weight: 600;
    }
    .add-active:hover{
        color: #00c4ff;
    }
    .buybots-form .add-active::after{
        top: 25px;
    }
    .pus{
        text-align: center;
    }
    .pus span{
        font-size: 28px;
        font-weight: 600;
    }
    .wallet-page .transaction-list{
        padding-top: 90px;
    }
    form{
        background: #1A1E3B;
        height: 550px;
        border-radius: 2%;
    }
    .form-large{
        background: #1A1E3B;
        height: 808px;
        border-radius: 2%;
    }
    .customer-content.wallet-page .form-group{
        padding: 2px 50px 0px;
    }
    .customer-content.wallet-page .form-group{
        width: auto;
    }
    .form-control{
        background-color: #181C39;
    }
    .ftops{
        padding-top: 32px!important;
    }
    .affiliate h2 {
        text-align: center;
        font-size: 20px;
        font-family: 'SVN-Poppins';
        font-weight: 500;
        color: #ffffff;
    }
    .affiliate{
        padding-top: 50px;
    }
    .affiliate .nav-tabs .nav-item:last-child {
        width: unset;
        margin-top: unset;
    }
    .wallet-page th:nth-child(3){
        width: unset; 
        width: unset !important; 
        text-align: center; 
        padding-right: unset !important; 
    }
    .customer-content.wallet-page .buy-bots .list-coin .coin-switch.open{
        height: auto;
        border-bottom-right-radius: unset;
        border-bottom-left-radius: unset; 
    }
    .buy-bots .list-coin .coin-switch{
        height: unset;
    }
    .affiliate{
        padding-bottom: 220px;
    }
    .tab-content{
        overflow-x: auto;
    }
    .transfer_i .ex-val{
        background-image: linear-gradient(#181C39, #181C39), linear-gradient(#181C39, #00c4ff)!important;
        background-clip: padding-box, border-box!important;
        background-origin: padding-box, border-box!important;
        top: 20PX;
        right: 4px;
    }
</style>
<div class="container commission_body">
    <div class="row">
        <div class="col-md-12">
            <div class="buy-bots">
                <h1 class="title-main text-center">COMMISSION</h1>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif
                @if(Session::has('danger'))
                <div class="alert alert-danger">
                    {{ Session::get('danger') }}
                    @php
                    Session::forget('danger');
                    @endphp
                </div>
                @endif
                <form action="{{ route('commission') }}" method="post" name="commission" class="buybots-form">
                    @csrf
                    <div class="form-group ftops">
                        <div class="list-coin">
                            <a href="javascript:void(0);" class="add-active">BOTS WALLET</a>

                            <ul class="coin-switch"><div class="scrollbar-inner">
                                <li><a data-id="2" data-num="{{ $user->cash_wallet ? $user->cash_wallet : 0 }}">CASH WALLET</a></li>
                                <li><a data-id="1" data-num="{{ $user->bots_wallet ? $user->bots_wallet : 0 }}">BOTS WALLET</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group pus">
                            <span class="num_bot">{{ $user->bots_wallet ? $user->bots_wallet : 0 }} BOTS</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-ex">
                            <input type="text" name="recipient" class="form-control" aria-describedby="recipientHelp" placeholder="Recipient's ETH Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-ex">
                            <input type="hidden" name="type" value="1">
                            <input type="text" name="amount" min="0" max="{{ $user->bots_wallet }}" class="form-control number" aria-describedby="amountlHelp" placeholder="Amount">
                            <p class="ex-val"><img class="max_commission" src="{{asset('public/images/max.png')}}" alt=""></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block mybtn tx-tfm button_commission">Submit</button>
                    </div>
                    <div class="form-group transfer_i d-none">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-ex">
                                    <input type="text" id="transfer_usd" class="form-control" aria-describedby="recipientHelp" placeholder="USD">
                                    <p class="ex-val"><span class="approxi">&nbsp;&nbsp;</span>USD</p>
                                </div>
                            </div>
                            <div class="col-md-2" style="text-align: center;top: 20px;">
                                <img class="max_commission" src="{{asset('public/images/tranfer.png')}}" alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="form-ex">
                                    <input type="text" id="transfer_bot" class="form-control" aria-describedby="recipientHelp">
                                    <p class="ex-val"><span class="approxi">&nbsp;&nbsp;</span>BOTS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group transfer_b d-none">
                        <button class="btn btn-block mybtn tx-tfm button_transfer">Transfer</button>
                    </div>
                    <!-- them  -->
                    <div class="form-group transfer_i d-none">
                    <p>Note:</p>
                    <p><i class="fas fa-exclamation-circle"></i> Holders of BOTS in the account before the time of listing will receive% USDT per week (From 03/12/2020 - 06/15/2020) </p>
                    <p><i class="fas fa-exclamation-circle"></i> When Bots are listed, Holders of Bots in their account will receive a reward by percent BOTS (Finish receiving % USDT)</p>
                    </div>
                </form>

            </div>
            <div class="affiliate">
                <h2>History Withdraw Commission</h2>
                <div class="tabs">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab_bot_wallet">BOTS WALLET</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_cash_wallet">CASH WALLET</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_transfer">TRANSFER BOTS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab_bot_wallet" class="container tab-pane active"><br>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Information</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @if(!empty($bots_wallet))
                                        @foreach($bots_wallet as $key => $items)
                                        <tr>
                                            <td>
                                                @if($items->status == 1)
                                                Completed
                                                @elseif($items->status == 2)
                                                Pending
                                                @endif
                                            </td>
                                            <td>{{$items->bots_amount}} BOTS</td>
                                            <td>{{$items->created_at}}</td>
                                            <td>Addrees: {{$items->recipient_add}}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        <div class="cl"></div>
                                    </tbody>
                                </table>
                                @if($bots_wallet->isEmpty())
                                <p class="more"><a href="javascript:;">No transactions yet</a></p>
                                @endif
                            </div>
                            <div id="tab_cash_wallet" class="container tab-pane"><br>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($cash_wallet))
                                        @foreach($cash_wallet as $key => $items)
                                        <tr>
                                            <td>
                                                @if($items->status == 1)
                                                Completed
                                                @elseif($items->status == 2)
                                                Pending
                                                @endif
                                            </td>
                                            <td>${{$items->bots_amount}}</td>
                                            <td>{{$items->created_at}}</td>
                                            <td>Addrees: {{$items->recipient_add}}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        <div class="cl"></div>
                                    </tbody>
                                </table>
                                @if($cash_wallet->isEmpty())
                                <p class="more"><a href="javascript:;">No transactions yet</a></p>
                                @endif
                            </div>
                            <div id="tab_transfer" class="container tab-pane"><br>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($transfer_bot))
                                        @foreach($transfer_bot as $key => $items)
                                        <tr>
                                            <td>
                                                @if($items->status == 1)
                                                Completed
                                                @elseif($items->status == 2)
                                                Pending
                                                @endif
                                            </td>
                                            <td>${{$items->bots_amount}}</td>
                                            <td>{{$items->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        <div class="cl"></div>
                                    </tbody>
                                </table>
                                @if($transfer_bot->isEmpty())
                                <p class="more"><a href="javascript:;">No transactions yet</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var max = <?php echo !empty($user->bots_wallet) ? $user->bots_wallet : 0 ?>;
    var bots_rate = <?php echo env('BOTS_RATE') ?>;
    jQuery(document).ready(function(){
        $('.ex-val .max_commission').click(function() {
            let usd = $('[name="amount"]').attr('max');
            $('[name="amount"]').val(parseInt(usd));
        });

        $('.coin-switch li').click(function() {
            let id = $(this).find('a').attr('data-id');
            let num = $(this).find('a').attr('data-num');
            max = num;
            $('[name="amount"]').attr('max',num);
            $('[name="type"]').val(parseInt(id));
            if(id == 2){
                $('.buybots-form').addClass("form-large");
                $('.num_bot').text('$'+parseInt(num));
                $('.transfer_i').removeClass('d-none');
                $('.transfer_b').removeClass('d-none');
                $('#transfer_usd').val(parseInt(num));
                $('#transfer_bot').val(parseInt(num)/bots_rate);
            }else{
                $('.buybots-form').removeClass("form-large");
                $('.num_bot').text(parseInt(num)+' BOTS');
                $('.transfer_i').addClass('d-none');
                $('.transfer_b').addClass('d-none');
            }
        });

        $('#transfer_usd').keyup(function(){
            let value = this.value;
            $('#transfer_bot').val(parseInt(value)/bots_rate);
        });
        
    });
</script>

@endsection