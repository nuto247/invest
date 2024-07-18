<!doctype html>
<html lang="zxx">



<!-- Mirrored from VortexIncome.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2024 12:14:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> VortexIncome </title>
<!-- /Required meta tags -->

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
<!-- /Favicon -->

<!-- All CSS -->

<!-- Vendor Css -->
<link rel="stylesheet" href="css/vendors.css">
<!-- /Vendor Css -->

<!-- Plugin Css -->
<link rel="stylesheet" href="css/plugins.css">
<!-- Plugin Css -->

<!-- Icons Css -->
<link rel="stylesheet" href="css/icons.css">
<!-- /Icons Css -->

<!-- Style Css -->
<link rel="stylesheet" href="css/style.css">
<!-- /Style Css -->
<link rel="stylesheet" href="plugin/toastr.min.css" type="text/css" />

<link rel="stylesheet" href="plugin/owlcarousel/assets/owl.carousel.min.html">
<link rel="stylesheet" href="plugin/owlcarousel/assets/owl.theme.default.min.html">

<style>
.carousel-item {
    height: 600px;
}

/* CSS Multiple Whatsapp Chat */
.whatsapp-name {
  font-size: 16px;
  font-weight: 600;
  padding-bottom: 0;
  margin-bottom: 0;
  line-height: 0.5;
}

#whatsapp-chat {
  box-sizing: border-box !important;

  outline: none !important;
  position: fixed;
  width: 350px;
  border-radius: 10px;
  box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
  bottom: 90px;
  right: 30px;
  overflow: hidden;
  z-index: 99;
  animation-name: showchat;
  animation-duration: 1s;
  transform: scale(1);
}
a.blantershow-chat {
  /*   background: #009688; */
  background: #fff;
  color: #404040;
  position: fixed;
  display: flex;
  font-weight: 400;
  justify-content: space-between;
  z-index: 98;
  bottom: 25px;
  right: 30px;
  font-size: 15px;
  padding: 10px 20px;
  border-radius: 30px;
  box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}
a.blantershow-chat svg {
  transform: scale(1.2);
  margin: 0 10px 0 0;
}
.header-chat {
  /*   background: linear-gradient(to right top, #6f96f3, #164ed2); */
  background: #009688;
  background: #095e54;
  color: #fff;
  padding: 20px;
}
.header-chat h3 {
  margin: 0 0 10px;
}
.header-chat p {
  font-size: 14px;
  line-height: 1.7;
  margin: 0;
}
.info-avatar {
  position: relative;
}
.info-avatar img {
  border-radius: 100%;
  width: 50px;
  float: left;
  margin: 0 10px 0 0;
}

a.informasi {
  padding: 20px;
  display: block;
  overflow: hidden;
  animation-name: showhide;
  animation-duration: 0.5s;
}
a.informasi:hover {
  background: #f1f1f1;
}
.info-chat span {
  display: block;
}
#get-label,
span.chat-label {
  font-size: 12px;
  color: #888;
}
#get-nama,
span.chat-nama {
  margin: 5px 0 0;
  font-size: 15px;
  font-weight: 700;
  color: #222;
}
#get-label,
#get-nama {
  color: #fff;
}
span.my-number {
  display: none;
}
/* .blanter-msg {
  color: #444;
  padding: 20px;
  font-size: 12.5px;
  text-align: center;
  border-top: 1px solid #ddd;
} */
textarea#chat-input {
    border: none;
    font-family: "Arial", sans-serif;
    width: 100%;
    height: 20px;
    outline: none;
    resize: none;
    padding: 10px;
    font-size: 14px;
}

a#send-it {
  width: 30px;
  font-weight: 700;
  padding: 10px 10px 0;
  background:#eee;
  border-radius: 10px;

  svg {
    fill:#a6a6a6;
    height: 24px;
    width: 24px;
  }
}

.first-msg {
  background: transparent;
  padding: 30px;
  text-align: center;
  & span {
    background: #e2e2e2;
    color: #333;
    font-size: 14.2px;
    line-height: 1.7;
    border-radius: 10px;
    padding: 15px 20px;
    display: inline-block;
  }
}

.start-chat .blanter-msg {
  display: flex;
}
#get-number {
  display: none;
}
a.close-chat {
  position: absolute;
  top: 5px;
  right: 15px;
  color: #fff;
  font-size: 30px;

}

@keyframes ZpjSY{
  0% {
    background-color: rgb(182, 181, 186);
  }
  15% {
    background-color: rgb(17, 17, 17);
  }
  25% {
    background-color: rgb(182, 181, 186);
  }
}

@keyframes hPhMsj {
  15% {
    background-color: rgb(182, 181, 186);
  }
  25% {
    background-color: rgb(17, 17, 17);
  }
  35% {
    background-color: rgb(182, 181, 186);
  }
}

@keyframes iUMejp {
  25% {
    background-color: rgb(182, 181, 186);
  }
  35% {
    background-color: rgb(17, 17, 17);
  }
  45% {
    background-color: rgb(182, 181, 186);
  }
}


@keyframes showhide {
  from {
    transform: scale(0.5);
    opacity: 0;
  }
}
@keyframes showchat {
  from {
    transform: scale(0);
    opacity: 0;
  }
}
@media screen and (max-width: 480px) {
  #whatsapp-chat {
    width: auto;
    left: 5%;
    right: 5%;
    font-size: 80%;
  }
}
.hide {
  display: none;
  animation-name: showhide;
  animation-duration: 0.5s;
  transform: scale(1);
  opacity: 1;
}
.show {
  display: block;
  animation-name: showhide;
  animation-duration: 0.5s;
  transform: scale(1);
  opacity: 1;
}

.whatsapp-message-container {
  display: flex;
  z-index: 1;
}

.whatsapp-message {
  padding: 7px 14px 6px;
  background-color: rgb(255, 255, 255);
  border-radius: 0px 8px 8px;
  position: relative;
  transition: all 0.3s ease 0s;
  opacity: 0;
  transform-origin: center top 0px;
  z-index: 2;
  box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
  margin-top: 4px;
  margin-left: -54px;
  max-width: calc(100% - 66px);
}

.whatsapp-chat-body {
  padding: 20px 20px 20px 10px;
  background-color: rgb(230, 221, 212);
  position: relative;
  &::before {
    display: block;
    position: absolute;
    content: "";
    left: 0px;
    top: 0px;
    height: 100%;
    width: 100%;
    z-index: 0;
    opacity: 0.08;
    background-image: url("../elfsight.com/assets/chats/patterns/whatsapp.png");
    // background-image: url(https://res.cloudinary.com/eventbree/image/upload/v1575782560/Widgets/whatsappbg_opt.jpg);
  }
}

.dAbFpq {
  display: flex;
  z-index: 1;
}

.eJJEeC {
  background-color: rgb(255, 255, 255);
  width: 52.5px;
  height: 32px;
  border-radius: 16px;
  display: flex;
  -moz-box-pack: center;
  justify-content: center;
  -moz-box-align: center;
  align-items: center;
  margin-left: 10px;
  opacity: 0;
  transition: all 0.1s ease 0s;
  z-index: 1;
  box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
}

.hFENyl {
    position: relative;
    display: flex;
}

.ixsrax {
    height: 5px;
    width: 5px;
    margin: 0px 2px;
    border-radius: 50%;
    display: inline-block;
    position: relative;
    animation-duration: 1.2s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    top: 0px;
    background-color: rgb(158, 157, 162);
    animation-name: ZpjSY;
}

.dRvxoz {

    height: 5px;
    width: 5px;
    margin: 0px 2px;
    background-color: rgb(182, 181, 186);
    border-radius: 50%;
    display: inline-block;
    position: relative;
    animation-duration: 1.2s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    top: 0px;
    animation-name: hPhMsj;
}

.kAZgZq {
    padding: 7px 14px 6px;
    background-color: rgb(255, 255, 255);
    border-radius: 0px 8px 8px;
    position: relative;
    transition: all 0.3s ease 0s;
    opacity: 0;
    transform-origin: center top 0px;
    z-index: 2;
    box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
    margin-top: 4px;
    margin-left: -54px;
    max-width: calc(100% - 66px);
    &::before {
    position: absolute;
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: contain;
    content: "";
    top: 0px;
    left: -12px;
    width: 12px;
    height: 19px;
}
}

.bMIBDo {
    font-size: 13px;
    font-weight: 700;
    line-height: 18px;
    color: rgba(0, 0, 0, 0.4);
}

.iSpIQi {
    font-size: 14px;
    line-height: 19px;
    margin-top: 4px;
    color: rgb(17, 17, 17);
}

.iSpIQi {
    font-size: 14px;
    line-height: 19px;
    margin-top: 4px;
    color: rgb(17, 17, 17);
}

.cqCDVm {
    text-align: right;
    margin-top: 4px;
    font-size: 12px;
    line-height: 16px;
    color:
    rgba(17, 17, 17, 0.5);
    margin-right: -8px;
    margin-bottom: -4px;
}


</style>

<!-- /All CSS -->

</head>

<body>

    <!-- PreLoader -->
  
    <!--Preloader-->

    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-two">
        <div class="acavo-responsive-nav">
            <div class="container">
                <div class="acavo-responsive-menu">
                    <div class="logo">
                        <a href="index.html">

                            <img src="logo.jpg" alt="logo">

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="acavo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="logo.jpg" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu ">
                        <ul class="navbar-nav ms-auto me-auto">

                            <li class="nav-item">
                                <a href="index.html" class="nav-link active">Home </i></a>
                            </li>

                            <li class="nav-item">
                                <a href="about-us.html" class="nav-link">About Us </a>
                            </li>


                            <li class="nav-item">
                                <a href="contact-us.html" class="nav-link">Contact Us </a>
                            </li>

                            <li class="nav-item">
                                <a href="https://wa.me/+31687215846"  class="nav-link" target="_blank">Whatsapp</a>
                            </li>

                                                            <li class="nav-item">
                                    <a href="login" class="nav-link">Login </a>
                                </li>
                                <li class="nav-item">
                                    <a href="register" class="nav-link">Register </a>
                                </li>
                            


                        </ul>

                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <a href="login" class="btn theme-btn-1">Get
                                    Started <i class="las la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="option-item">
                            <a href="login" class="btn theme-btn-1">Get
                                Started <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    
    <!-- Hero -->
    <div class="hero-1 oh pos-rel" style="background: url('sliders/slide-2.jpg')">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-5">
                    <div class="hero-1-content wow fadeInLeft animated">
                        <h1 class="title  wow fadeInUp animated" data-wow-delay="0.4s"
                            style="color: #fff; text-shadow: 1px 1px 5px #00">Personal / Business Loan
                            Up to $2 Million </h1>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.6s"
                            style="color: #fff; text-shadow: 1px 1px 5px #000">
                            VortexIncome is a financial institution that renders 3 unique services; INVESTMENT, SAVINGS AND
                            UNSECURED LOAN.
                        </p>
                        <div class="hero-1-button-group">
                            <a href="login" class="btn theme-btn-1  wow fadeInUp animated"
                                data-wow-delay="0.8s"> Get
                                Started
                                <i class="uil uil-angle-right-b ml-2 mb-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-7 d-lg-block">
                    <div class="hero-1-thumb-15 wow fadeInUp animated" data-wow-delay="0.4s">
                        
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Hero -->

    <div class="featured-boxes-area">
        <!-- Container -->
        <div class="container">
            <div class="featured-boxes-inner">
                <!-- row -->
                <div class="row m-0">
                    <!-- col -->
                    <div class="col-lg-4 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-fb7756">
                                <i class="ri-thumb-up-line"></i>
                            </div>
                            <h3>PROFESSIONAL TEAM</h3>
                            <p>We have professional team and we have developed a automatic system that will allow you to
                                make profit handsomely. It includes defined risk prevention as well as stable income for any
                                investment plan.</p>

                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-facd60">
                                <i class="ri-wallet-line"></i>
                            </div>
                            <h3>[24/7] SUPPORT</h3>
                            <p>Our live support is a key ingredient in the success of our company services. Our experts are
                                well-qualified. We provide you with qualitative support consult 24/7 online live chat
                                support for our members..</p>

                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-1ac0c6">
                                <i class="ri-customer-service-2-line"></i>
                            </div>
                            <h3>INSTANT WITHDRAW </h3>
                            <p>All payments are instant. If you meet pending please check e-currency website first! It can't
                                make instant payment if the e-currency website is down or not working !</p>

                        </div>
                    </div>
                    <!-- /col -->

                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </div>


    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>


        <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "BTC/USD"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "ETH/USD"
                    }
                ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

    <!-- Featured box -->
    
    <!-- /Featured box -->


    <!-- Services -->
    <div class="services-area pt-120 pb-70">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Best Services</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Presenting financial Services that are Right For You</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">

                <script>
                    $(document).ready(function() {

                        $(".read-more-link").click(function() {

                            $(".readmoree").toggle();

                        });

                    });
                </script>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="login">
                                <img src="invest-now.jpg" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="login">Invest</a>
                        </h3>
                        <p>We collect investment & invest in successful business of buying and selling of own real estate
                            and get a good profit.

                            we buy residential real estate, Cryptocurrency, crude oil,
                            townhomes and give them a new and attractive look by customizing and sell them with a very good
                            profit. <a class="read-more-link"><strong>Read More</strong></a>

                            <span class="readmoree" style="display:none;">

                                We do business with your invested money on behalf of you and return your profit at the time
                                of your investment plan mature. It was created for the purpose of providing its members with
                                the safest and most secure investment, with the best possible and achievable returns without
                                risk. We made a long-term business plan with our honorable investors.

                            </span>


                        </p>
                        <div class="option-item align-self-start">
                            <a href="login" class="btn theme-btn-1">
                                Invest Now <i class="las la-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="login">
                                <img src="save.jpg" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="login">Savings</a>
                        </h3>
                        <p>What’s the point of your savings if you can’t make more money from it? Why be satisfied with 1-2%
                            interest on your savings, when you can get up to 10%? Yes, you read that right – up to 10% per
                            month is what you get when you save with VortexIncome!. Switch to VortexIncome Savings today
                            and get the best, high-yield interest on your savings. </p>

                        <div class="option-item align-self-start">
                            <a href="saving-details.html" class="btn theme-btn-1">
                                Start Saving <i class="las la-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <!-- /col -->

                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="login">
                                <img src="business-loan.jpg" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="login">Loan</a>
                        </h3>
                        <p>Have the next great idea, but cannot get funding from banks or private
                            equity groups? Let the VortexIncome community fund your next business. </p>
                        <p style="font-weight: bold; text-transform: capitalize"> loan up to $2m. <br>
                            Interest rate of 2.3%<br>
                            1 – 5 year loan repayment term</p>


                        <div class="option-item align-self-start">
                            <a href="loan-details.html" class="btn theme-btn-1">
                                Get Loan <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /col -->


            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Services  -->
    
      <div class="pricing-area ">
        <!-- Container -->
        <div class="container">

            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Our Plans</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>

                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row pricing-content-wrap mt-30">

                                    <!-- col -->
                    <div class="col-lg-3">
                        <div class="pricing-item pricing-item-2 shadow shadow-lg">
                            <div class="pricing-title text-center text-capitalize">
                                <h3 class="pricing-title">PLATINUM</h3>
                            </div>

                            <ul class="pricing-list">

                                <li>Daily Interest <span
                                        class="pricing-list__action">15.30%</span>
                                </li>
                                <li>Duration <span class="pricing-list__action">25 Days</span></li>
                                <li>Min Deposit <span class="pricing-list__action">$30000</span></li>
                                <li>Max Deposit <span class="pricing-list__action">$100000</span></li>
                                <li>Payout <span class="pricing-list__action " >$144,750 - $482,500+</span></li>

                                <div class="pricing-price mt-20">
                                    <a href="customer.html" class="btn theme-btn-1 width-100">Invest
                                        <span class="la la-caret-right"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                                    <!-- col -->
                    <div class="col-lg-3">
                        <div class="pricing-item pricing-item-2 shadow shadow-lg">
                            <div class="pricing-title text-center text-capitalize">
                                <h3 class="pricing-title">GOLD</h3>
                            </div>

                            <ul class="pricing-list">

                                <li>Daily Interest <span
                                        class="pricing-list__action">10.23%</span>
                                </li>
                                <li>Duration <span class="pricing-list__action">30 Days</span></li>
                                <li>Min Deposit <span class="pricing-list__action">$10000</span></li>
                                <li>Max Deposit <span class="pricing-list__action">$25000</span></li>
                                <li>Payout <span class="pricing-list__action " >$40,690 - $101,725+</span></li>

                                <div class="pricing-price mt-20">
                                    <a href="customer.html" class="btn theme-btn-1 width-100">Invest
                                        <span class="la la-caret-right"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                                    <!-- col -->
                    <div class="col-lg-3">
                        <div class="pricing-item pricing-item-2 shadow shadow-lg">
                            <div class="pricing-title text-center text-capitalize">
                                <h3 class="pricing-title">PREMIUM</h3>
                            </div>

                            <ul class="pricing-list">

                                <li>Daily Interest <span
                                        class="pricing-list__action">5.70%</span>
                                </li>
                                <li>Duration <span class="pricing-list__action">45 Days</span></li>
                                <li>Min Deposit <span class="pricing-list__action">$3000</span></li>
                                <li>Max Deposit <span class="pricing-list__action">$15000</span></li>
                                <li>Payout <span class="pricing-list__action " >$10,695 - $53,954+</span></li>

                                <div class="pricing-price mt-20">
                                    <a href="customer.html" class="btn theme-btn-1 width-100">Invest
                                        <span class="la la-caret-right"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                                    <!-- col -->
                    <div class="col-lg-3">
                        <div class="pricing-item pricing-item-2 shadow shadow-lg">
                            <div class="pricing-title text-center text-capitalize">
                                <h3 class="pricing-title">STARTER</h3>
                            </div>

                            <ul class="pricing-list">

                                <li>Daily Interest <span
                                        class="pricing-list__action">2.50%</span>
                                </li>
                                <li>Duration <span class="pricing-list__action">60 Days</span></li>
                                <li>Min Deposit <span class="pricing-list__action">$800</span></li>
                                <li>Max Deposit <span class="pricing-list__action">$3000</span></li>
                                <li>Payout <span class="pricing-list__action " >$625 - $15,325+</span></li>

                                <div class="pricing-price mt-20">
                                    <a href="customer.html" class="btn theme-btn-1 width-100">Invest
                                        <span class="la la-caret-right"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                            </div>






        </div>
        <!-- /row -->
    </div>
    <!-- /Container -->
    </div>


    <!-- About Us -->
    <div class="about-area pt-100 pb-100">
        <!-- Container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-6">
                    <div class="about-image-warp">

                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6">
                    <div class="about-content warp">
                        <!-- row -->
                        <div class="row justify-content-center text-center">
                            <!-- col -->
                            <div class="col-lg-8 col-md-12 mb-50">
                                <div class="section-title">
                                    <h2 class="title">About Us</h2>
                                    <div class="title-bdr">
                                        <div class="left-bdr"></div>
                                        <div class="right-bdr"></div>
                                    </div>
                                    <p>We operate our banking services in many countries around the world.</p>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->

                        <p>Investment decisions and decision-making is easier, more efficient, and better with
                            our investment consultants, who will always have your best interests in mind. Our
                            investment analysts and investment consultants take careful risk management
                            steps to provide lucrative short-term and long-term success for our clients.
                        <p>
                        <p>
                            With our scale and breadth of operations into global market insights, our
                            consulting services can help you to: </p>

                        Find the right investment opportunities.
                        Put together a rigid portfolio structure.
                        Implement an efficient investment strategy.
                        Research and find information on markets all over the world.
                        Determine strategic asset allocation.
                        Invest after-tax.
                        Stay ahead of any unnecessary risks.

                        And with highly attractive annual yields in a variety of tangible asset classes, we believe we're
                        suitably placed to add real significance to your investment</p>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Online Presence</h4>
                            <p>Register to receive further information regarding tangible, asset-backed and
                                secured investment opportunities, Loans, FixedDeposit with attractive annual yields.</p>
                        </div>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Marketing Strategy</h4>
                            <p>We’ll match you with a portfolio that can help your money grow. Make a jump in success.
                                Want make money from home? Grab the offer now!.</p>
                        </div>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Promote local Sale</h4>
                            <p>We've been blessed with luck, talent and opportunities, so now it is our duty
                                to add the hardworking element, as all the work we put in is for the greater benefit of our
                                customers and stakeholders alike.</p>
                        </div>
                        <div class="about-btn justify-content-center text-center">
                            <a href="about-us.html" class="btn theme-btn-1">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /About Us -->
<div class="row pricing-content-wrap mt-30">

    <div class="col-md-12">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"></a>
            </div>
            <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {
                    "width": "100%",
                    "height": "100%",
                    "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP",
                        "CHF",
                        "AUD",
                        "CAD",
                        "NZD",
                        "CNY"
                    ],
                    "isTransparent": false,
                    "colorTheme": "light",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>

</div>

  
    <section class="pricing-are pt-100 pb-100">
        <!-- Container -->
        <div class="container">

            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-7">

                    <h2 class="mt-5">HOW IT WORKS (the mathematics explained)
                    </h2>

                    <p class="pb-3">VortexIncome is a financial institution that offer defined RETURNS, LOAN AND SAVINGS while limiting
                        your losses. Gain peace of mind with products structured in a manner that limits your downside
                        risks.
                    </p>

                </div>
            </div>

            <div class="row">

                <div class="col-md-6">

                    <div class="shadow shadow-lg p-3">

                        <h3>INVESTMENT</h3>

                        <ul>
                            <li>Platinum offers 15.30% daily profit, with a 25 days trade duration.</li>
                            <li>Gold pack: 10.23% daily interest,  30 days trade duration</li>
                            <li>Premium:  This plan offer daily profit of 5.70%, with a duration of 45 days</li>
                            <li>Starter: 2.50% daily interest, 60 days trade duration.</li>
                        </ul>


                        <h3>LOAN SERVICES</h3>


                        <ul>
                            <li> Unsecured loan up to $2 million. </li>
                            <li> Interest rate of 2.3% </li>
                            <li> 1 – 5 year loan repayment term </li>
                        </ul>

                        <h3>SAVINGS</h3>
                        <p>Why be satisfied with 1-2% interest on your savings, when you can get up to 10% monthly interest?
                            Yes, you read that
                            right – up to 10% per month. </p>

                    </div>

                </div>
                <div class="col-md-6">

                    <div class="shadow shadow-lg p-3">

                        <h4>Investment Illustrations:</h4>

                        <p>Let's take for instance, Mr A made an investment of $30,000 (25 days trading duration pack of
                            15.3%
                            daily interest)
                        </p>

                        <h4>At Day 1,</h4>

                        <p>30,000 × 15.30 ÷ 100= $4,590. (DAY 1 profit is $4,590 + the initial capital of $30,000 = $34,590)
                        </p>

                        <h4>Day 2.</h4>

                        <p>Here the Total Investment has grown to $34,590 </p>
                        <p>Thus, $34,590 × 15.30 ÷100 = $5,292.27(34,590 + 5,292.27 = $39,882.27)</p>

                        <h4>At Day 15.</h4>

                        <p>Investment capital has grown to ($220,151.5). Thus, $220,151.5 × 15.3 ÷ 100 = 33,683(where
                            $33,683
                            is the daily profit
                            for day 15)
                        </p>

                        <p>it keeps that way till 25 days trading circle is completed. Same logic is applicable to other
                            plans,
                            where only interest
                            rate and trade duration is different
                        </p>

                        <p>For more clarification, reach us fast through the live chat button. we are live 24 hours 7 days a
                            week.
                        </p>



                    </div>


                </div>



            </div>



        </div>
    </div>



    <!-- Loan Calculation -->
    <div class="loan-section">
        <!-- Container -->
        <div class="container">
            <form action="#">
                <!-- row -->
                <div class="row calculator-loan">
                    <!-- col -->
                    <div class="col-lg-7 col-12 wow fadeInLeft">
                        <div class="loan-calculation-wrapper">
                            <div class="theme-title">

                                <h2>Loan Payment Calculator</h2>
                                <p>This Loan Payment Calculator computes an estimate of the size of your monthly loan
                                    payments, loan term and interest rate to see how your monthly payment changes.
                                </p>
                                <p>Our monthly payment estimates are broken down by principal, interest, property taxes
                                    and
                                    homeowners insurance.</p>
                                <div class="loan-filter-form">
                                    <div class="thirty form">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- Col -->
                    <div class="col-lg-5 col-12 wow fadeInRight">
                        <div class="loan-confirm-form">
                            <div class="thirty">
                                <div class="results clearfix"></div>
                            </div>
                            <button class="tran3s apply-button">APPLY FOR LOAN</button>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </form>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Loan Calculation -->



    <!-- Team -->
    <div class="team-style">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Team</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Meet Our team member</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="image-1.jpg" alt=""></figure>
                            <ul class="social-list">

                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Miriam Cole</a></h3>
                            <span class="designation">Marketing</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="image-2.jpg" alt=""></figure>
                            <ul class="social-list">

                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Gilbert Young</a></h3>
                            <span class="designation">President & CEO</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="image-3.jpg" alt=""></figure>
                            <ul class="social-list">

                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Pat Dattalo</a></h3>
                            <span class="designation">Accountant</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->

            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Team -->

    <!-- FAQ -->
    <div class="faq-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">

            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">FAQ</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Frequently Asked Questions</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

            <div class="tab faq-accordion-tab">

                <div class="tab-content">
                    <div class="tabs-item">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q1. What are the required documents for a Personal/business Loan?
                                    </a>

                                    <div class="accordion-content show">
                                        <p>The following documents are required:</p>
                                        <ul class="list-unstyled">
                                            <li>* Signed application form</li>
                                            <li>* Utility bills</li>
                                            <li>* Valid identity card</li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q2. How much can I borrow?
                                    </a>

                                    <div class="accordion-content">
                                        <p>You can borrow up to $2M depending on the organisation you work for and your
                                            income. You will be advised at the time of application.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q3. Can I use the loan for any purpose?

                                    </a>

                                    <div class="accordion-content">
                                        <p>Yes. This is an all-purpose loan and can be used for any purpose of your
                                            choice.
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q4. What is the security or collateral for this loan?
                                        ?

                                    </a>

                                    <div class="accordion-content">
                                        <p>Yes. This is an all-purpose loan and can be used for any purpose of your
                                            choice.
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='las la-angle-down'></i>
                                        Q5. What is VortexIncome Referral?

                                    </a>

                                    <div class="accordion-content">
                                        <p>The VortexIncome referral scheme is designed to reward users for referring
                                            friends and/or family to VortexIncome It gives you a chance to earn extra!
                                            <br>

                                            You can earn:<br>

                                            7.5% commission on all referred, repaid loans under 5.0 BTC <br>

                                            9.25% commission on all referred, repaid loans over 5.0 BTC.
                                        </p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /FAQ -->



    <!-- Footer -->
    <footer class="footer-style bg-gray-100 pt-0">
        <!-- Container -->
        <div class="container">
            <!-- row -->

            <!-- /row -->
            <div class="footer-middle-area mt-30 pb-30 pt-60">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About Us</h3>
                            <div class="footer-text">
                                <p style="color: white !important">We offer loan services as well as Savings to assist
                                    startups. We understand alot of people out there have the next great idea, but
                                    cannot get funding from banks or private equity groups, because of lack of
                                    collateral.

                                    <a style="font-weight: bold; color: white;" class="read-more-div text-bold">READ
                                        MORE</a>

                                <div class="hide-element" style="display: none; color: white !important;"> To solve
                                    this, we extended a helping hand by making our loan requirements to be based on
                                    based on reputation, not credit score or collateral.
                                    We understand business development as accurate and comprehensive use of experience.
                                    We have already developed by ourselves and tested in our business practice. Our
                                    knowledge, experience, and financial innovation serve as our guarantee.
                                    </p>

                                    <ul>
                                        <li>Professional Services</li>
                                        <li>Transparency</li>
                                        <li>Integrity</li>
                                        <li>Right and Assets Protection</li>
                                        <li>Confidentiality and Privacy</li>
                                    </ul>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- /col -->

                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Useful Links</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="conditions.html">Conditions</a></li>
                                    <li><a href="confidentiality.html">Confidentiality</a></li>
                                    <li><a href="about-loan.html">About Loan</a></li>
                                    <li><a href="about-savings.html">About Savings</a></li>
                                    <li><a href="about-investments.html">About Investments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Subscribe</h3>
                            <div class="subscribes-form">
                                <form action="#">
                                    <input placeholder="Enter email " type="email">
                                    <button class="btn theme-btn-1 width-100 mt-10"><i
                                            class="lab la-telegram-plane me-2"></i>subscribe</button>
                                </form>
                            </div>
                            <div class="footer-info">
                                <p style="color: white;">Get the latest updates via email. Any time you may unsubscribe
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Social Link</h3>
                            <div class="footer-icon" style="text-align: left; color: white !important;" >
                                <a style="color: white !important;" target="_blank_" href="https://facebook.com/VortexIncome">
                                    <img src="facebook.png" alt="facebook" >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- col -->
                    <div class="col-md-12">
                        <span style="color: white;">Risk Disclosure:</span>
                        <p style="font-size: 11px;
                        color: #ddd;
                        line-height: 14px !important;">Past performance is no guarantee of future results. Any
                            historical returns, expected returns, or probability projections may not reflect actual
                            future performance. All securities involve risk and may result in significant losses. <br>

                            Investments in the pools are speculative investments that involve high degrees of risk,
                            including a partial or total loss of invested funds. VortexIncome is not suitable for any
                            investor that cannot afford to loss some, or all, of the entire investment amount. Prices of
                            cryptocurrencies are extremely volatile and may be affected by external factors such as
                            financial, regulatory or political events. Trading on margin increases the financial
                            risks.<br>
                            The track record of each Pool is intended to reflect the ROI of the digital assets under
                            management under a stipulated period of time. This information should not be relied upon as
                            research, investment advice, or a recommendation regarding any products, strategies, or any
                            security in particular. Rather it's strictly for illustrative, educational, or informational
                            purposes and is subject to change.
                        </p>

                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="footer-bottom-area pt-25 pb-25">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>© Copyrights 2024 <a style="font-weight:bold; color: #fff;"
                                    href="index.html">VortexIncome.</a> All rights reserved.</p>
                        </div>
                    </div>
                    <!-- col -->
                    <!-- /col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link text-end">
                            <!-- <ul>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#"> Terms</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Help </a></li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </footer>
    <!-- /Footer -->
     <!--
    <div id='whatsapp-chat' class='hide'>
  <div class='header-chat'>
    <div class='head-home'>
      <div class='info-avatar'><img src='https://files.elfsight.com/storage/9274ed8b-a2e8-4cf8-a4cf-fad383377f2b/7b75090c-19a2-452b-9d6b-c2a51ad4916f.jpeg' /></div>
      <p><span class="whatsapp-name">Tedbree</span><br><small>Typically replies within an hour</small></p>

    </div>
    <div class='get-new hide'>
      <div id='get-label'></div>
      <div id='get-nama'></div>
    </div>
  </div>
  <div class='home-chat'>

  </div>
  <div class='start-chat'>
    <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
      <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
        <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
          <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
          </div>
        </div>
        <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
          <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">Tedbree</div>
          <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hi there 👋<br><br>How can I help you?</div>
          <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div>
        </div>
      </div>
    </div>

    <div class='blanter-msg'>
      <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
      <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"/></svg></a>

    </div>
  </div>
  <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg> Chat with Us</a>
 -->
    <!-- Go top -->
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="las la-angle-double-up"></i>
                    <i class="las la-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- /Go top -->

    <!-- JS -->

    <!-- Vendor Js -->
    <script src="js/vendors.js"></script>
    <!-- /Vendor js -->

    <!-- Plugins Js -->
    <script src="js/plugins.js"></script>
    <!-- /Plugins Js -->

    <script src="plugin/toastr.min.js"></script>

    <script src="plugin/owlcarousel/owl.carousel.min.html"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>
    <!-- /Main JS -->

    <script>
        $(document).ready(function() {
            $(".read-more-div").click(function() {
                $(".hide-element").toggle();
            });

            $(document).ready(function(){
                $(".slideshow").owlCarousel({
                    items: 1,
                    autoplay: true,
                    loop: true,
                    center: true
                });
            });

            /* Whatsapp Chat Widget by www.bloggermix.com
$(document).on("click", "#send-it", function() {
  var a = document.getElementById("chat-input");
  if ("" != a.value) {
    var b = $("#get-number").text(),
      c = document.getElementById("chat-input").value,
      d = "https://web.whatsapp.com/send",
      e = b,
      f = "&text=" + c;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    )
      var d = "whatsapp://send";
    var g = d + "?phone=+31 6 29320129" + e + f;
    window.open(g, "_blank");
  }
}),
  $(document).on("click", ".informasi", function() {
    (document.getElementById("get-number").innerHTML = $(this)
      .children(".my-number")
      .text()),
      $(".start-chat,.get-new")
        .addClass("show")
        .removeClass("hide"),
      $(".home-chat,.head-home")
        .addClass("hide")
        .removeClass("show"),
      (document.getElementById("get-nama").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-nama")
        .text()),
      (document.getElementById("get-label").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-label")
        .text());
  }),
  $(document).on("click", ".close-chat", function() {
    $("#whatsapp-chat")
      .addClass("hide")
      .removeClass("show");
  }),
  $(document).on("click", ".blantershow-chat", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
  });*/

        });
    </script>

    <script type="text/javascript">
        $(function() {
            function showNotification(msg = '') {
                Array.prototype.random = function(length) {
                    return this[Math.floor((Math.random() * length))];
                }
                const range = (start, end) => {
                    const length = end - start;
                    return Array.from({
                        length
                    }, (_, i) => start + i);
                }

                var range_amount = [...range(10000, 2000000)];

                var names = [
                    "Aaren",
                    "Aarika",
                    "Abagael",
                    "Abagail",
                    "Abbe",
                    "Abbey",
                    "Abbi",
                    "Abbie", "Abby",
                    "Abbye",
                    "Abigael",
                    "Abigail",
                    "Abigale",
                    "Abra",
                    "Ada",
                    "Adah",
                    "Adaline",
                    "Adan",
                    "Adara",
                    "Adda",
                    "Addi",
                    "Addia",
                    "Addie",
                    "Addy",
                    "Adel",
                    "Adela",
                    "Adelaida",
                    "Adelaide",
                    "Adele",
                    "Adelheid",
                    "Adelice",
                    "Adelina",
                    "Adelind",
                    "Adeline",
                    "Adella",
                    "Adelle",
                    "Adena",
                    "Adey",
                    "Adi",
                    "Adiana",
                    "Adina",
                    "Adora",
                    "Adore",
                    "Adoree",
                    "Adorne",
                    "Adrea",
                    "Adria",
                    "Adriaens",
                    "Adrian",
                    "Adriana",
                    "Adriane",
                    "Adrianna",
                    "Adrianne",
                    "Adriena",
                    "Adrienne",
                    "Aeriel",
                    "Aeriela",
                    "Aeriell",
                    "Afton",
                    "Ag",
                    "Agace",
                    "Agata",
                    "Agatha",
                    "Agathe",
                    "Aggi",
                    "Aggie",
                    "Aggy",
                    "Agna",
                    "Agnella",
                    "Agnes",
                    "Agnese",
                    "Agnesse",
                    "Agneta",
                    "Agnola",
                    "Agretha",
                    "Aida",
                    "Aidan",
                    "Aigneis",
                    "Aila",
                    "Aile",
                    "Ailee",
                    "Aileen",
                    "Ailene",
                    "Ailey",
                    "Aili",
                    "Ailina",
                    "Ailis",
                    "Ailsun",
                    "Ailyn",
                    "Aime",
                    "Aimee",
                    "Aimil",
                    "Aindrea",
                    "Ainslee",
                    "Ainsley",
                    "Ainslie",
                    "Ajay",
                    "Alaine",
                    "Alameda",
                    "Alana",
                    "Alanah",
                    "Alane",
                    "Alanna",
                    "Alayne",
                    "Alberta",
                    "Albertina",
                    "Albertine",
                    "Albina",
                    "Alecia",
                    "Aleda",
                    "Aleece",
                    "Aleen",
                    "Alejandra",
                    "Alejandrina",
                    "Alena",
                    "Alene",
                    "Alessandra",
                    "Aleta",
                    "Alethea",
                    "Alex",
                    "Alexa",
                    "Alexandra",
                    "Alexandrina",
                    "Alexi",
                    "Alexia",
                    "Alexina",
                    "Alexine",
                    "Alexis",
                    "Alfi",
                    "Alfie",
                    "Alfreda",
                    "Alfy",
                    "Ali",
                    "Alia",
                    "Alica",
                    "Alice",
                    "Alicea",
                    "Alicia",
                    "Alida",
                    "Alidia",
                    "Alie",
                    "Alika",
                    "Alikee",
                    "Alina",
                    "Aline",
                    "Alis",
                    "Alisa",
                    "Alisha",
                    "Alison",
                    "Alissa",
                    "Alisun",
                    "Alix",
                    "Aliza",
                    "Alla",
                    "Alleen",
                    "Allegra",
                    "Allene",
                    "Alli",
                    "Allianora",
                    "Allie",
                    "Allina",
                    "Allis",
                    "Allison",
                    "Allissa",
                    "Allix",
                    "Allsun",
                    "Allx",
                    "Ally",
                    "Allyce",
                    "Allyn",
                    "Allys",
                    "Allyson",
                    "Alma",
                    "Almeda",
                    "Almeria",
                    "Almeta",
                    "Almira",
                    "Almire",
                    "Aloise",
                    "Aloisia",
                    "Aloysia",
                    "Alta",
                    "Althea",
                    "Alvera",
                    "Alverta",
                    "Alvina",
                    "Alvinia",
                    "Alvira",
                    "Alyce",
                    "Alyda",
                    "Alys",
                    "Alysa",
                    "Alyse",
                    "Alysia",
                    "Alyson",
                    "Alyss",
                    "Alyssa",
                    "Amabel",
                    "Amabelle",
                    "Amalea",
                    "Amalee",
                    "Amaleta",
                    "Amalia",
                    "Amalie",
                    "Amalita",
                    "Amalle",
                    "Amanda",
                    "Amandi",
                    "Amandie",
                    "Amandy",
                    "Amara",
                    "Amargo",
                    "Amata",
                    "Amber",
                    "Amberly",
                    "Ambur",
                    "Ame",
                    "Amelia",
                    "Amelie",
                    "Amelina",
                    "Ameline",
                    "Amelita",
                    "Ami",
                    "Amie",
                    "Amii",
                    "Amil",
                    "Amitie",
                    "Amity",
                    "Ammamaria",
                    "Amy",
                    "Amye",
                    "Ana",
                    "Anabal",
                    "Anabel",
                    "Anabella",
                    "Anabelle",
                    "Analiese",
                    "Analise",
                    "Anallese",
                    "Anallise",
                    "Anastasia",
                    "Anastasie",
                    "Anastassia",
                    "Anatola",
                    "Andee",
                    "Andeee",
                    "Anderea",
                    "Andi",
                    "Andie",
                    "Andra",
                    "Andrea",
                    "Andreana",
                    "Andree",
                    "Andrei",
                    "Andria",
                    "Andriana",
                    "Andriette",
                    "Andromache",
                    "Andy",
                    "Anestassia",
                    "Anet",
                    "Anett",
                    "Anetta",
                    "Anette",
                    "Ange",
                    "Angel",
                    "Angela",
                    "Angele",
                    "Angelia",
                    "Angelica",
                    "Angelika",
                    "Angelina",
                    "Angeline",
                    "Angelique",
                    "Angelita",
                    "Angelle",
                    "Angie",
                    "Angil",
                    "Angy",
                    "Ania",
                    "Anica",
                    "Anissa",
                    "Anita",
                    "Anitra",
                    "Anjanette",
                    "Anjela",
                    "Ann",
                    "Ann-Marie",
                    "Anna",
                    "Anna-Diana",
                    "Anna-Diane",
                    "Anna-Maria",
                    "Annabal",
                    "Annabel",
                    "Annabela",
                    "Annabell",
                    "Annabella",
                    "Annabelle",
                    "Annadiana",
                    "Annadiane",
                    "Annalee",
                    "Annaliese",
                    "Annalise",
                    "Annamaria",
                    "Annamarie",
                    "Anne",
                    "Anne-Corinne",
                    "Anne-Marie",
                    "Annecorinne",
                    "Anneliese",
                    "Annelise",
                    "Annemarie",
                    "Annetta",
                    "Annette",
                    "Anni",
                    "Annice",
                    "Annie",
                    "Annis",
                    "Annissa",
                    "Annmaria",
                    "Annmarie",
                    "Annnora",
                    "Annora",
                    "Anny",
                    "Anselma",
                    "Ansley",
                    "Anstice",
                    "Anthe",
                    "Anthea",
                    "Anthia",
                    "Anthiathia",
                    "Antoinette",
                    "Antonella",
                    "Antonetta",
                    "Antonia",
                    "Antonie",
                    "Antonietta",
                    "Antonina",
                    "Anya",
                    "Appolonia",
                    "April",
                    "Aprilette",
                    "Ara",
                    "Arabel",
                    "Arabela",
                    "Arabele",
                    "Arabella",
                    "Arabelle",
                    "Arda",
                    "Ardath",
                    "Ardeen",
                    "Ardelia",
                    "Ardelis",
                    "Ardella",
                    "Ardelle",
                    "Arden",
                    "Ardene",
                    "Ardenia",
                    "Ardine",
                    "Ardis",
                    "Ardisj",
                    "Ardith",
                    "Ardra",
                    "Ardyce",
                    "Ardys",
                    "Ardyth",
                    "Aretha",
                    "Ariadne",
                    "Ariana",
                    "Aridatha",
                    "Ariel",
                    "Ariela",
                    "Ariella",
                    "Arielle",
                    "Arlana",
                    "Arlee",
                    "Arleen",
                    "Arlen",
                    "Arlena",
                    "Arlene",
                    "Arleta",
                    "Arlette",
                    "Arleyne",
                    "Arlie",
                    "Arliene",
                    "Arlina",
                    "Arlinda",
                    "Arline",
                    "Arluene",
                    "Arly",
                    "Arlyn",
                    "Arlyne",
                    "Aryn",
                    "Ashely",
                    "Ashia",
                    "Ashien",
                    "Ashil",
                    "Ashla",
                    "Ashlan",
                    "Ashlee",
                    "Ashleigh",
                    "Ashlen",
                    "Ashley",
                    "Ashli",
                    "Ashlie",
                    "Ashly",
                    "Asia",
                    "Astra",
                    "Astrid",
                    "Astrix",
                    "Atalanta",
                    "Athena",
                    "Athene",
                    "Atlanta",
                    "Atlante",
                    "Auberta",
                    "Aubine",
                    "Aubree",
                    "Aubrette",
                    "Aubrey",
                    "Aubrie",
                    "Aubry",
                    "Audi",
                    "Audie",
                    "Audra",
                    "Audre",
                    "Audrey",
                    "Audrie",
                    "Audry",
                    "Audrye",
                    "Audy",
                    "Augusta",
                    "Auguste",
                    "Augustina",
                    "Augustine",
                    "Aundrea",
                    "Aura",
                    "Aurea",
                    "Aurel",
                    "Aurelea",
                    "Aurelia",
                    "Aurelie",
                    "Auria",
                    "Aurie",
                    "Aurilia",
                    "Aurlie",
                    "Auroora",
                    "Aurora",
                    "Aurore",
                    "Austin",
                    "Austina",
                    "Austine",
                    "Ava",
                    "Aveline",
                    "Averil",
                    "Averyl",
                    "Avie",
                    "Avis",
                    "Aviva",
                    "Avivah",
                    "Avril",
                    "Avrit",
                    "Ayn",
                    "Bab",
                    "Babara",
                    "Babb",
                    "Babbette",
                    "Babbie",
                    "Babette",
                    "Babita",
                    "Babs",
                    "Bambi",
                    "Bambie",
                    "Bamby",
                    "Barb",
                    "Barbabra",
                    "Barbara",
                    "Barbara-Anne",
                    "Barbaraanne",
                    "Barbe",
                    "Barbee",
                    "Barbette",
                    "Barbey",
                    "Barbi",
                    "Barbie",
                    "Barbra",
                    "Barby",
                    "Bari",
                    "Barrie",
                    "Barry",
                    "Basia",
                    "Bathsheba",
                    "Batsheva",
                    "Bea",
                    "Beatrice",
                    "Beatrisa",
                    "Beatrix",
                    "Beatriz",
                    "Bebe",
                    "Becca",
                    "Becka",
                    "Becki",
                    "Beckie",
                    "Becky",
                    "Bee",
                    "Beilul",
                    "Beitris",
                    "Bekki",
                    "Bel",
                    "Belia",
                    "Belicia",
                    "Belinda",
                    "Belita",
                    "Bell",
                    "Bella",
                    "Bellanca",
                    "Belle",
                    "Bellina",
                    "Belva",
                    "Belvia",
                    "Bendite",
                    "Benedetta",
                    "Benedicta",
                    "Benedikta",
                    "Benetta",
                    "Benita",
                    "Benni",
                    "Bennie",
                    "Benny",
                    "Benoite",
                    "Berenice",
                    "Beret",
                    "Berget",
                    "Berna",
                    "Bernadene",
                    "Bernadette",
                    "Bernadina",
                    "Bernadine",
                    "Bernardina",
                    "Bernardine",
                    "Bernelle",
                    "Bernete",
                    "Bernetta",
                    "Bernette",
                    "Berni",
                    "Bernice",
                    "Bernie",
                    "Bernita",
                    "Berny",
                    "Berri",
                    "Berrie",
                    "Berry",
                    "Bert",
                    "Berta",
                    "Berte",
                    "Bertha",
                    "Berthe",
                    "Berti",
                    "Bertie",
                    "Bertina",
                    "Bertine",
                    "Berty",
                    "Beryl",
                    "Beryle",
                    "Bess",
                    "Bessie",
                    "Bessy",
                    "Beth",
                    "Bethanne",
                    "Bethany",
                    "Bethena",
                    "Bethina",
                    "Betsey",
                    "Betsy",
                    "Betta",
                    "Bette",
                    "Bette-Ann",
                    "Betteann",
                    "Betteanne",
                    "Betti",
                    "Bettina",
                    "Bettine",
                    "Betty",
                    "Bettye",
                    "Beulah",
                    "Bev",
                    "Beverie",
                    "Beverlee",
                    "Beverley",
                    "Beverlie",
                    "Beverly",
                    "Bevvy",
                    "Bianca",
                    "Bianka",
                    "Bibbie",
                    "Bibby",
                    "Bibbye",
                    "Bibi",
                    "Biddie",
                    "Biddy",
                    "Bidget",
                    "Bili",
                    "Bill",
                    "Billi",
                    "Billie",
                    "Billy",
                    "Billye",
                    "Binni",
                    "Binnie",
                    "Binny",
                    "Bird",
                    "Birdie",
                    "Birgit",
                    "Birgitta",
                    "Blair",
                    "Blaire",
                    "Blake",
                    "Blakelee",
                    "Blakeley",
                    "Blanca",
                    "Blanch",
                    "Blancha",
                    "Blanche",
                    "Blinni",
                    "Blinnie",
                    "Blinny",
                    "Bliss",
                    "Blisse",
                    "Blithe",
                    "Blondell",
                    "Blondelle",
                    "Blondie",
                    "Blondy",
                    "Blythe",
                    "Bobbe",
                    "Bobbee",
                    "Bobbette",
                    "Bobbi",
                    "Bobbie",
                    "Bobby",
                    "Bobbye",
                    "Bobette",
                    "Bobina",
                    "Bobine",
                    "Bobinette",
                    "Bonita",
                    "Bonnee",
                    "Bonni",
                    "Bonnibelle",
                    "Bonnie",
                    "Bonny",
                    "Brana",
                    "Brandais",
                    "Brande",
                    "Brandea",
                    "Brandi",
                    "Brandice",
                    "Brandie",
                    "Brandise",
                    "Brandy",
                    "Breanne",
                    "Brear",
                    "Bree",
                    "Breena",
                    "Bren",
                    "Brena",
                    "Brenda",
                    "Brenn",
                    "Brenna",
                    "Brett",
                    "Bria",
                    "Briana",
                    "Brianna",
                    "Brianne",
                    "Bride",
                    "Bridget",
                    "Bridgette",
                    "Bridie",
                    "Brier",
                    "Brietta",
                    "Brigid",
                    "Brigida",
                    "Brigit",
                    "Brigitta",
                    "Brigitte",
                    "Brina",
                    "Briney",
                    "Brinn",
                    "Brinna",
                    "Briny",
                    "Brit",
                    "Brita",
                    "Britney",
                    "Britni",
                    "Britt",
                    "Britta",
                    "Brittan",
                    "Brittaney",
                    "Brittani",
                    "Brittany",
                    "Britte",
                    "Britteny",
                    "Brittne",
                    "Brittney",
                    "Brittni",
                    "Brook",
                    "Brooke",
                    "Brooks",
                    "Brunhilda",
                    "Brunhilde",
                    "Bryana",
                    "Bryn",
                    "Bryna",
                    "Brynn",
                    "Brynna",
                    "Brynne",
                    "Buffy",
                    "Bunni",
                    "Bunnie",
                    "Bunny",
                    "Cacilia",
                    "Cacilie",
                    "Cahra",
                    "Cairistiona",
                    "Caitlin",
                    "Caitrin",
                    "Cal",
                    "Calida",
                    "Calla",
                    "Calley",
                    "Calli",
                    "Callida",
                    "Callie",
                    "Cally",
                    "Calypso",
                    "Cam",
                    "Camala",
                    "Camel",
                    "Camella",
                    "Camellia",
                    "Cami",
                    "Camila",
                    "Camile",
                    "Camilla",
                    "Camille",
                    "Cammi",
                    "Cammie",
                    "Cammy",
                    "Candace",
                    "Candi",
                    "Candice",
                    "Candida",
                    "Candide",
                    "Candie",
                    "Candis",
                    "Candra",
                    "Candy",
                    "Caprice",
                    "Cara",
                    "Caralie",
                    "Caren",
                    "Carena",
                    "Caresa",
                    "Caressa",
                    "Caresse",
                    "Carey",
                    "Cari",
                    "Caria",
                    "Carie",
                    "Caril",
                    "Carilyn",
                    "Carin",
                    "Carina",
                    "Carine",
                    "Cariotta",
                    "Carissa",
                    "Carita",
                    "Caritta",
                    "Carla",
                    "Carlee",
                    "Carleen",
                    "Carlen",
                    "Carlene",
                    "Carley",
                    "Carlie",
                    "Carlin",
                    "Carlina",
                    "Carline",
                    "Carlita",
                    "Carlota",
                    "Carlotta",
                    "Carly",
                    "Carlye",
                    "Carlyn",
                    "Carlynn",
                    "Carlynne",
                    "Carma",
                    "Carmel",
                    "Carmela",
                    "Carmelia",
                    "Carmelina",
                    "Carmelita",
                    "Carmella",
                    "Carmelle",
                    "Carmen",
                    "Carmencita",
                    "Carmina",
                    "Carmine",
                    "Carmita",
                    "Carmon",
                    "Caro",
                    "Carol",
                    "Carol-Jean",
                    "Carola",
                    "Carolan",
                    "Carolann",
                    "Carole",
                    "Carolee",
                    "Carolin",
                    "Carolina",
                    "Caroline",
                    "Caroljean",
                    "Carolyn",
                    "Carolyne",
                    "Carolynn",
                    "Caron",
                    "Carree",
                    "Carri",
                    "Carrie",
                    "Carrissa",
                    "Carroll",
                    "Carry",
                    "Cary",
                    "Caryl",
                    "Caryn",
                    "Casandra",
                    "Casey",
                    "Casi",
                    "Casie",
                    "Cass",
                    "Cassandra",
                    "Cassandre",
                    "Cassandry",
                    "Cassaundra",
                    "Cassey",
                    "Cassi",
                    "Cassie",
                    "Cassondra",
                    "Cassy",
                    "Catarina",
                    "Cate",
                    "Caterina",
                    "Catha",
                    "Catharina",
                    "Catharine",
                    "Cathe",
                    "Cathee",
                    "Catherin",
                    "Catherina",
                    "Catherine",
                    "Cathi",
                    "Cathie",
                    "Cathleen",
                    "Cathlene",
                    "Cathrin",
                    "Cathrine",
                    "Cathryn",
                    "Cathy",
                    "Cathyleen",
                    "Cati",
                    "Catie",
                    "Catina",
                    "Catlaina",
                    "Catlee",
                    "Catlin",
                    "Catrina",
                    "Catriona",
                    "Caty",
                    "Caye",
                    "Cayla",
                    "Cecelia",
                    "Cecil",
                    "Cecile",
                    "Ceciley",
                    "Cecilia",
                    "Cecilla",
                    "Cecily",
                    "Ceil",
                    "Cele",
                    "Celene",
                    "Celesta",
                    "Celeste",
                    "Celestia",
                    "Celestina",
                    "Celestine",
                    "Celestyn",
                    "Celestyna",
                    "Celia",
                    "Celie",
                    "Celina",
                    "Celinda",
                    "Celine",
                    "Celinka",
                    "Celisse",
                    "Celka",
                    "Celle",
                    "Cesya",
                    "Chad",
                    "Chanda",
                    "Chandal",
                    "Chandra",
                    "Channa",
                    "Chantal",
                    "Chantalle",
                    "Charil",
                    "Charin",
                    "Charis",
                    "Charissa",
                    "Charisse",
                    "Charita",
                    "Charity",
                    "Charla",
                    "Charlean",
                    "Charleen",
                    "Charlena",
                    "Charlene",
                    "Charline",
                    "Charlot",
                    "Charlotta",
                    "Charlotte",
                    "Charmain",
                    "Charmaine",
                    "Charmane",
                    "Charmian",
                    "Charmine",
                    "Charmion",
                    "Charo",
                    "Charyl",
                    "Chastity",
                    "Chelsae",
                    "Chelsea",
                    "Chelsey",
                    "Chelsie",
                    "Chelsy",
                    "Cher",
                    "Chere",
                    "Cherey",
                    "Cheri",
                    "Cherianne",
                    "Cherice",
                    "Cherida",
                    "Cherie",
                    "Cherilyn",
                    "Cherilynn",
                    "Cherin",
                    "Cherise",
                    "Cherish",
                    "Cherlyn",
                    "Cherri",
                    "Cherrita",
                    "Cherry",
                    "Chery",
                    "Cherye",
                    "Cheryl",
                    "Cheslie",
                    "Chiarra",
                    "Chickie",
                    "Chicky",
                    "Chiquia",
                    "Chiquita",
                    "Chlo",
                    "Chloe",
                    "Chloette",
                    "Chloris",
                    "Chris",
                    "Chrissie",
                    "Chrissy",
                    "Christa",
                    "Christabel",
                    "Christabella",
                    "Christal",
                    "Christalle",
                    "Christan",
                    "Christean",
                    "Christel",
                    "Christen",
                    "Christi",
                    "Christian",
                    "Christiana",
                    "Christiane",
                    "Christie",
                    "Christin",
                    "Christina",
                    "Christine",
                    "Christy",
                    "Christye",
                    "Christyna",
                    "Chrysa",
                    "Chrysler",
                    "Chrystal",
                    "Chryste",
                    "Chrystel",
                    "Cicely",
                    "Cicily",
                    "Ciel",
                    "Cilka",
                    "Cinda",
                    "Cindee",
                    "Cindelyn",
                    "Cinderella",
                    "Cindi",
                    "Cindie",
                    "Cindra",
                    "Cindy",
                    "Cinnamon",
                    "Cissiee",
                    "Cissy",
                    "Clair",
                    "Claire",
                    "Clara",
                    "Clarabelle",
                    "Clare",
                    "Claresta",
                    "Clareta",
                    "Claretta",
                    "Clarette",
                    "Clarey",
                    "Clari",
                    "Claribel",
                    "Clarice",
                    "Clarie",
                    "Clarinda",
                    "Clarine",
                    "Clarissa",
                    "Clarisse",
                    "Clarita",
                    "Clary",
                    "Claude",
                    "Claudelle",
                    "Claudetta",
                    "Claudette",
                    "Claudia",
                    "Claudie",
                    "Claudina",
                    "Claudine",
                    "Clea",
                    "Clem",
                    "Clemence",
                    "Clementia",
                    "Clementina",
                    "Clementine",
                    "Clemmie",
                    "Clemmy",
                    "Cleo",
                    "Cleopatra",
                    "Clerissa",
                    "Clio",
                    "Clo",
                    "Cloe",
                    "Cloris",
                    "Clotilda",
                    "Clovis",
                    "Codee",
                    "Codi",
                    "Codie",
                    "Cody",
                    "Coleen",
                    "Colene",
                    "Coletta",
                    "Colette",
                    "Colleen",
                    "Collen",
                    "Collete",
                    "Collette",
                    "Collie",
                    "Colline",
                    "Colly",
                    "Con",
                    "Concettina",
                    "Conchita",
                    "Concordia",
                    "Conni",
                    "Connie",
                    "Conny",
                    "Consolata",
                    "Constance",
                    "Constancia",
                    "Constancy",
                    "Constanta",
                    "Constantia",
                    "Constantina",
                    "Constantine",
                    "Consuela",
                    "Consuelo",
                    "Cookie",
                    "Cora",
                    "Corabel",
                    "Corabella",
                    "Corabelle",
                    "Coral",
                    "Coralie",
                    "Coraline",
                    "Coralyn",
                    "Cordelia",
                    "Cordelie",
                    "Cordey",
                    "Cordi",
                    "Cordie",
                    "Cordula",
                    "Cordy",
                    "Coreen",
                    "Corella",
                    "Corenda",
                    "Corene",
                    "Coretta",
                    "Corette",
                    "Corey",
                    "Cori",
                    "Corie",
                    "Corilla",
                    "Corina",
                    "Corine",
                    "Corinna",
                    "Corinne",
                    "Coriss",
                    "Corissa",
                    "Corliss",
                    "Corly",
                    "Cornela",
                    "Cornelia",
                    "Cornelle",
                    "Cornie",
                    "Corny",
                    "Correna",
                    "Correy",
                    "Corri",
                    "Corrianne",
                    "Corrie",
                    "Corrina",
                    "Corrine",
                    "Corrinne",
                    "Corry",
                    "Cortney",
                    "Cory",
                    "Cosetta",
                    "Cosette",
                    "Costanza",
                    "Courtenay",
                    "Courtnay",
                    "Courtney",
                    "Crin",
                    "Cris",
                    "Crissie",
                    "Crissy",
                    "Crista",
                    "Cristabel",
                    "Cristal",
                    "Cristen",
                    "Cristi",
                    "Cristie",
                    "Cristin",
                    "Cristina",
                    "Cristine",
                    "Cristionna",
                    "Cristy",
                    "Crysta",
                    "Crystal",
                    "Crystie",
                    "Cthrine",
                    "Cyb",
                    "Cybil",
                    "Cybill",
                    "Cymbre",
                    "Cynde",
                    "Cyndi",
                    "Cyndia",
                    "Cyndie",
                    "Cyndy",
                    "Cynthea",
                    "Cynthia",
                    "Cynthie",
                    "Cynthy",
                    "Dacey",
                    "Dacia",
                    "Dacie",
                    "Dacy",
                    "Dael",
                    "Daffi",
                    "Daffie",
                    "Daffy",
                    "Dagmar",
                    "Dahlia",
                    "Daile",
                    "Daisey",
                    "Daisi",
                    "Daisie",
                    "Daisy",
                    "Dale",
                    "Dalenna",
                    "Dalia",
                    "Dalila",
                    "Dallas",
                    "Daloris",
                    "Damara",
                    "Damaris",
                    "Damita",
                    "Dana",
                    "Danell",
                    "Danella",
                    "Danette",
                    "Dani",
                    "Dania",
                    "Danica",
                    "Danice",
                    "Daniela",
                    "Daniele",
                    "Daniella",
                    "Danielle",
                    "Danika",
                    "Danila",
                    "Danit",
                    "Danita",
                    "Danna",
                    "Danni",
                    "Dannie",
                    "Danny",
                    "Dannye",
                    "Danya",
                    "Danyelle",
                    "Danyette",
                    "Daphene",
                    "Daphna",
                    "Daphne",
                    "Dara",
                    "Darb",
                    "Darbie",
                    "Darby",
                    "Darcee",
                    "Darcey",
                    "Darci",
                    "Darcie",
                    "Darcy",
                    "Darda",
                    "Dareen",
                    "Darell",
                    "Darelle",
                    "Dari",
                    "Daria",
                    "Darice",
                    "Darla",
                    "Darleen",
                    "Darlene",
                    "Darline",
                    "Darlleen",
                    "Daron",
                    "Darrelle",
                    "Darryl",
                    "Darsey",
                    "Darsie",
                    "Darya",
                    "Daryl",
                    "Daryn",
                    "Dasha",
                    "Dasi",
                    "Dasie",
                    "Dasya",
                    "Datha",
                    "Daune",
                    "Daveen",
                    "Daveta",
                    "Davida",
                    "Davina",
                    "Davine",
                    "Davita",
                    "Dawn",
                    "Dawna",
                    "Dayle",
                    "Dayna",
                    "Ddene",
                    "De",
                    "Deana",
                    "Deane",
                    "Deanna",
                    "Deanne",
                    "Deb",
                    "Debbi",
                    "Debbie",
                    "Debby",
                    "Debee",
                    "Debera",
                    "Debi",
                    "Debor",
                    "Debora",
                    "Deborah",
                    "Debra",
                    "Dede",
                    "Dedie",
                    "Dedra",
                    "Dee",
                    "Dee Dee",
                    "Deeann",
                    "Deeanne",
                    "Deedee",
                    "Deena",
                    "Deerdre",
                    "Deeyn",
                    "Dehlia",
                    "Deidre",
                    "Deina",
                    "Deirdre",
                    "Del",
                    "Dela",
                    "Delcina",
                    "Delcine",
                    "Delia",
                    "Delila",
                    "Delilah",
                    "Delinda",
                    "Dell",
                    "Della",
                    "Delly",
                    "Delora",
                    "Delores",
                    "Deloria",
                    "Deloris",
                    "Delphine",
                    "Delphinia",
                    "Demeter",
                    "Demetra",
                    "Demetria",
                    "Demetris",
                    "Dena",
                    "Deni",
                    "Denice",
                    "Denise",
                    "Denna",
                    "Denni",
                    "Dennie",
                    "Denny",
                    "Deny",
                    "Denys",
                    "Denyse",
                    "Deonne",
                    "Desdemona",
                    "Desirae",
                    "Desiree",
                    "Desiri",
                    "Deva",
                    "Devan",
                    "Devi",
                    "Devin",
                    "Devina",
                    "Devinne",
                    "Devon",
                    "Devondra",
                    "Devonna",
                    "Devonne",
                    "Devora",
                    "Di",
                    "Diahann",
                    "Dian",
                    "Diana",
                    "Diandra",
                    "Diane",
                    "Diane-Marie",
                    "Dianemarie",
                    "Diann",
                    "Dianna",
                    "Dianne",
                    "Diannne",
                    "Didi",
                    "Dido",
                    "Diena",
                    "Dierdre",
                    "Dina",
                    "Dinah",
                    "Dinnie",
                    "Dinny",
                    "Dion",
                    "Dione",
                    "Dionis",
                    "Dionne",
                    "Dita",
                    "Dix",
                    "Dixie",
                    "Dniren",
                    "Dode",
                    "Dodi",
                    "Dodie",
                    "Dody",
                    "Doe",
                    "Doll",
                    "Dolley",
                    "Dolli",
                    "Dollie",
                    "Dolly",
                    "Dolores",
                    "Dolorita",
                    "Doloritas",
                    "Domeniga",
                    "Dominga",
                    "Domini",
                    "Dominica",
                    "Dominique",
                    "Dona",
                    "Donella",
                    "Donelle",
                    "Donetta",
                    "Donia",
                    "Donica",
                    "Donielle",
                    "Donna",
                    "Donnamarie",
                    "Donni",
                    "Donnie",
                    "Donny",
                    "Dora",
                    "Doralia",
                    "Doralin",
                    "Doralyn",
                    "Doralynn",
                    "Doralynne",
                    "Dore",
                    "Doreen",
                    "Dorelia",
                    "Dorella",
                    "Dorelle",
                    "Dorena",
                    "Dorene",
                    "Doretta",
                    "Dorette",
                    "Dorey",
                    "Dori",
                    "Doria",
                    "Dorian",
                    "Dorice",
                    "Dorie",
                    "Dorine",
                    "Doris",
                    "Dorisa",
                    "Dorise",
                    "Dorita",
                    "Doro",
                    "Dorolice",
                    "Dorolisa",
                    "Dorotea",
                    "Doroteya",
                    "Dorothea",
                    "Dorothee",
                    "Dorothy",
                    "Dorree",
                    "Dorri",
                    "Dorrie",
                    "Dorris",
                    "Dorry",
                    "Dorthea",
                    "Dorthy",
                    "Dory",
                    "Dosi",
                    "Dot",
                    "Doti",
                    "Dotti",
                    "Dottie",
                    "Dotty",
                    "Dre",
                    "Dreddy",
                    "Dredi",
                    "Drona",
                    "Dru",
                    "Druci",
                    "Drucie",
                    "Drucill",
                    "Drucy",
                    "Drusi",
                    "Drusie",
                    "Drusilla",
                    "Drusy",
                    "Dulce",
                    "Dulcea",
                    "Dulci",
                    "Dulcia",
                    "Dulciana",
                    "Dulcie",
                    "Dulcine",
                    "Dulcinea",
                    "Dulcy",
                    "Dulsea",
                    "Dusty",
                    "Dyan",
                    "Dyana",
                    "Dyane",
                    "Dyann",
                    "Dyanna",
                    "Dyanne",
                    "Dyna",
                    "Dynah",
                    "Eachelle",
                    "Eada",
                    "Eadie",
                    "Eadith",
                    "Ealasaid",
                    "Eartha",
                    "Easter",
                    "Eba",
                    "Ebba",
                    "Ebonee",
                    "Ebony",
                    "Eda",
                    "Eddi",
                    "Eddie",
                    "Eddy",
                    "Ede",
                    "Edee",
                    "Edeline",
                    "Eden",
                    "Edi",
                    "Edie",
                    "Edin",
                    "Edita",
                    "Edith",
                    "Editha",
                    "Edithe",
                    "Ediva",
                    "Edna",
                    "Edwina",
                    "Edy",
                    "Edyth",
                    "Edythe",
                    "Effie",
                    "Eileen",
                    "Eilis",
                    "Eimile",
                    "Eirena",
                    "Ekaterina",
                    "Elaina",
                    "Elaine",
                    "Elana",
                    "Elane",
                    "Elayne",
                    "Elberta",
                    "Elbertina",
                    "Elbertine",
                    "Eleanor",
                    "Eleanora",
                    "Eleanore",
                    "Electra",
                    "Eleen",
                    "Elena",
                    "Elene",
                    "Eleni",
                    "Elenore",
                    "Eleonora",
                    "Eleonore",
                    "Elfie",
                    "Elfreda",
                    "Elfrida",
                    "Elfrieda",
                    "Elga",
                    "Elianora",
                    "Elianore",
                    "Elicia",
                    "Elie",
                    "Elinor",
                    "Elinore",
                    "Elisa",
                    "Elisabet",
                    "Elisabeth",
                    "Elisabetta",
                    "Elise",
                    "Elisha",
                    "Elissa",
                    "Elita",
                    "Eliza",
                    "Elizabet",
                    "Elizabeth",
                    "Elka",
                    "Elke",
                    "Ella",
                    "Elladine",
                    "Elle",
                    "Ellen",
                    "Ellene",
                    "Ellette",
                    "Elli",
                    "Ellie",
                    "Ellissa",
                    "Elly",
                    "Ellyn",
                    "Ellynn",
                    "Elmira",
                    "Elna",
                    "Elnora",
                    "Elnore",
                    "Eloisa",
                    "Eloise",
                    "Elonore",
                    "Elora",
                    "Elsa",
                    "Elsbeth",
                    "Else",
                    "Elset",
                    "Elsey",
                    "Elsi",
                    "Elsie",
                    "Elsinore",
                    "Elspeth",
                    "Elsy",
                    "Elva",
                    "Elvera",
                    "Elvina",
                    "Elvira",
                    "Elwira",
                    "Elyn",
                    "Elyse",
                    "Elysee",
                    "Elysha",
                    "Elysia",
                    "Elyssa",
                    "Em",
                    "Ema",
                    "Emalee",
                    "Emalia",
                    "Emelda",
                    "Emelia",
                    "Emelina",
                    "Emeline",
                    "Emelita",
                    "Emelyne",
                    "Emera",
                    "Emilee",
                    "Emili",
                    "Emilia",
                    "Emilie",
                    "Emiline",
                    "Emily",
                    "Emlyn",
                    "Emlynn",
                    "Emlynne",
                    "Emma",
                    "Emmalee",
                    "Emmaline",
                    "Emmalyn",
                    "Emmalynn",
                    "Emmalynne",
                    "Emmeline",
                    "Emmey",
                    "Emmi",
                    "Emmie",
                    "Emmy",
                    "Emmye",
                    "Emogene",
                    "Emyle",
                    "Emylee",
                    "Engracia",
                    "Enid",
                    "Enrica",
                    "Enrichetta",
                    "Enrika",
                    "Enriqueta",
                    "Eolanda",
                    "Eolande",
                    "Eran",
                    "Erda",
                    "Erena",
                    "Erica",
                    "Ericha",
                    "Ericka",
                    "Erika",
                    "Erin",
                    "Erina",
                    "Erinn",
                    "Erinna",
                    "Erma",
                    "Ermengarde",
                    "Ermentrude",
                    "Ermina",
                    "Erminia",
                    "Erminie",
                    "Erna",
                    "Ernaline",
                    "Ernesta",
                    "Ernestine",
                    "Ertha",
                    "Eryn",
                    "Esma",
                    "Esmaria",
                    "Esme",
                    "Esmeralda",
                    "Essa",
                    "Essie",
                    "Essy",
                    "Esta",
                    "Estel",
                    "Estele",
                    "Estell",
                    "Estella",
                    "Estelle",
                    "Ester",
                    "Esther",
                    "Estrella",
                    "Estrellita",
                    "Ethel",
                    "Ethelda",
                    "Ethelin",
                    "Ethelind",
                    "Etheline",
                    "Ethelyn",
                    "Ethyl",
                    "Etta",
                    "Etti",
                    "Ettie",
                    "Etty",
                    "Eudora",
                    "Eugenia",
                    "Eugenie",
                    "Eugine",
                    "Eula",
                    "Eulalie",
                    "Eunice",
                    "Euphemia",
                    "Eustacia",
                    "Eva",
                    "Evaleen",
                    "Evangelia",
                    "Evangelin",
                    "Evangelina",
                    "Evangeline",
                    "Evania",
                    "Evanne",
                    "Eve",
                    "Eveleen",
                    "Evelina",
                    "Eveline",
                    "Evelyn",
                    "Evey",
                    "Evie",
                    "Evita",
                    "Evonne",
                    "Evvie",
                    "Evvy",
                    "Evy",
                    "Eyde",
                    "Eydie",
                    "Ezmeralda",
                    "Fae",
                    "Faina",
                    "Faith",
                    "Fallon",
                    "Fan",
                    "Fanchette",
                    "Fanchon",
                    "Fancie",
                    "Fancy",
                    "Fanechka",
                    "Fania",
                    "Fanni",
                    "Fannie",
                    "Fanny",
                    "Fanya",
                    "Fara",
                    "Farah",
                    "Farand",
                    "Farica",
                    "Farra",
                    "Farrah",
                    "Farrand",
                    "Faun",
                    "Faunie",
                    "Faustina",
                    "Faustine",
                    "Fawn",
                    "Fawne",
                    "Fawnia",
                    "Fay",
                    "Faydra",
                    "Faye",
                    "Fayette",
                    "Fayina",
                    "Fayre",
                    "Fayth",
                    "Faythe",
                    "Federica",
                    "Fedora",
                    "Felecia",
                    "Felicdad",
                    "Felice",
                    "Felicia",
                    "Felicity",
                    "Felicle",
                    "Felipa",
                    "Felisha",
                    "Felita",
                    "Feliza",
                    "Fenelia",
                    "Feodora",
                    "Ferdinanda",
                    "Ferdinande",
                    "Fern",
                    "Fernanda",
                    "Fernande",
                    "Fernandina",
                    "Ferne",
                    "Fey",
                    "Fiann",
                    "Fianna",
                    "Fidela",
                    "Fidelia",
                    "Fidelity",
                    "Fifi",
                    "Fifine",
                    "Filia",
                    "Filide",
                    "Filippa",
                    "Fina",
                    "Fiona",
                    "Fionna",
                    "Fionnula",
                    "Fiorenze",
                    "Fleur",
                    "Fleurette",
                    "Flo",
                    "Flor",
                    "Flora",
                    "Florance",
                    "Flore",
                    "Florella",
                    "Florence",
                    "Florencia",
                    "Florentia",
                    "Florenza",
                    "Florette",
                    "Flori",
                    "Floria",
                    "Florida",
                    "Florie",
                    "Florina",
                    "Florinda",
                    "Floris",
                    "Florri",
                    "Florrie",
                    "Florry",
                    "Flory",
                    "Flossi",
                    "Flossie",
                    "Flossy",
                    "Flss",
                    "Fran",
                    "Francene",
                    "Frances",
                    "Francesca",
                    "Francine",
                    "Francisca",
                    "Franciska",
                    "Francoise",
                    "Francyne",
                    "Frank",
                    "Frankie",
                    "Franky",
                    "Franni",
                    "Frannie",
                    "Franny",
                    "Frayda",
                    "Fred",
                    "Freda",
                    "Freddi",
                    "Freddie",
                    "Freddy",
                    "Fredelia",
                    "Frederica",
                    "Fredericka",
                    "Frederique",
                    "Fredi",
                    "Fredia",
                    "Fredra",
                    "Fredrika",
                    "Freida",
                    "Frieda",
                    "Friederike",
                    "Fulvia",
                    "Gabbey",
                    "Gabbi",
                    "Gabbie",
                    "Gabey",
                    "Gabi",
                    "Gabie",
                    "Gabriel",
                    "Gabriela",
                    "Gabriell",
                    "Gabriella",
                    "Gabrielle",
                    "Gabriellia",
                    "Gabrila",
                    "Gaby",
                    "Gae",
                    "Gael",
                    "Gail",
                    "Gale",
                    "Gale",
                    "Galina",
                    "Garland",
                    "Garnet",
                    "Garnette",
                    "Gates",
                    "Gavra",
                    "Gavrielle",
                    "Gay",
                    "Gaye",
                    "Gayel",
                    "Gayla",
                    "Gayle",
                    "Gayleen",
                    "Gaylene",
                    "Gaynor",
                    "Gelya",
                    "Gena",
                    "Gene",
                    "Geneva",
                    "Genevieve",
                    "Genevra",
                    "Genia",
                    "Genna",
                    "Genni",
                    "Gennie",
                    "Gennifer",
                    "Genny",
                    "Genovera",
                    "Genvieve",
                    "George",
                    "Georgeanna",
                    "Georgeanne",
                    "Georgena",
                    "Georgeta",
                    "Georgetta",
                    "Georgette",
                    "Georgia",
                    "Georgiana",
                    "Georgianna",
                    "Georgianne",
                    "Georgie",
                    "Georgina",
                    "Georgine",
                    "Geralda",
                    "Geraldine",
                    "Gerda",
                    "Gerhardine",
                    "Geri",
                    "Gerianna",
                    "Gerianne",
                    "Gerladina",
                    "Germain",
                    "Germaine",
                    "Germana",
                    "Gerri",
                    "Gerrie",
                    "Gerrilee",
                    "Gerry",
                    "Gert",
                    "Gerta",
                    "Gerti",
                    "Gertie",
                    "Gertrud",
                    "Gertruda",
                    "Gertrude",
                    "Gertrudis",
                    "Gerty",
                    "Giacinta",
                    "Giana",
                    "Gianina",
                    "Gianna",
                    "Gigi",
                    "Gilberta",
                    "Gilberte",
                    "Gilbertina",
                    "Gilbertine",
                    "Gilda",
                    "Gilemette",
                    "Gill",
                    "Gillan",
                    "Gilli",
                    "Gillian",
                    "Gillie",
                    "Gilligan",
                    "Gilly",
                    "Gina",
                    "Ginelle",
                    "Ginevra",
                    "Ginger",
                    "Ginni",
                    "Ginnie",
                    "Ginnifer",
                    "Ginny",
                    "Giorgia",
                    "Giovanna",
                    "Gipsy",
                    "Giralda",
                    "Gisela",
                    "Gisele",
                    "Gisella",
                    "Giselle",
                    "Giuditta",
                    "Giulia",
                    "Giulietta",
                    "Giustina",
                    "Gizela",
                    "Glad",
                    "Gladi",
                    "Gladys",
                    "Gleda",
                    "Glen",
                    "Glenda",
                    "Glenine",
                    "Glenn",
                    "Glenna",
                    "Glennie",
                    "Glennis",
                    "Glori",
                    "Gloria",
                    "Gloriana",
                    "Gloriane",
                    "Glory",
                    "Glyn",
                    "Glynda",
                    "Glynis",
                    "Glynnis",
                    "Gnni",
                    "Godiva",
                    "Golda",
                    "Goldarina",
                    "Goldi",
                    "Goldia",
                    "Goldie",
                    "Goldina",
                    "Goldy",
                    "Grace",
                    "Gracia",
                    "Gracie",
                    "Grata",
                    "Gratia",
                    "Gratiana",
                    "Gray",
                    "Grayce",
                    "Grazia",
                    "Greer",
                    "Greta",
                    "Gretal",
                    "Gretchen",
                    "Grete",
                    "Gretel",
                    "Grethel",
                    "Gretna",
                    "Gretta",
                    "Grier",
                    "Griselda",
                    "Grissel",
                    "Guendolen",
                    "Guenevere",
                    "Guenna",
                    "Guglielma",
                    "Gui",
                    "Guillema",
                    "Guillemette",
                    "Guinevere",
                    "Guinna",
                    "Gunilla",
                    "Gus",
                    "Gusella",
                    "Gussi",
                    "Gussie",
                    "Gussy",
                    "Gusta",
                    "Gusti",
                    "Gustie",
                    "Gusty",
                    "Gwen",
                    "Gwendolen",
                    "Gwendolin",
                    "Gwendolyn",
                    "Gweneth",
                    "Gwenette",
                    "Gwenneth",
                    "Gwenni",
                    "Gwennie",
                    "Gwenny",
                    "Gwenora",
                    "Gwenore",
                    "Gwyn",
                    "Gwyneth",
                    "Gwynne",
                    "Gypsy",
                    "Hadria",
                    "Hailee",
                    "Haily",
                    "Haleigh",
                    "Halette",
                    "Haley",
                    "Hali",
                    "Halie",
                    "Halimeda",
                    "Halley",
                    "Halli",
                    "Hallie",
                    "Hally",
                    "Hana",
                    "Hanna",
                    "Hannah",
                    "Hanni",
                    "Hannie",
                    "Hannis",
                    "Hanny",
                    "Happy",
                    "Harlene",
                    "Harley",
                    "Harli",
                    "Harlie",
                    "Harmonia",
                    "Harmonie",
                    "Harmony",
                    "Harri",
                    "Harrie",
                    "Harriet",
                    "Harriett",
                    "Harrietta",
                    "Harriette",
                    "Harriot",
                    "Harriott",
                    "Hatti",
                    "Hattie",
                    "Hatty",
                    "Hayley",
                    "Hazel",
                    "Heath",
                    "Heather",
                    "Heda",
                    "Hedda",
                    "Heddi",
                    "Heddie",
                    "Hedi",
                    "Hedvig",
                    "Hedvige",
                    "Hedwig",
                    "Hedwiga",
                    "Hedy",
                    "Heida",
                    "Heidi",
                    "Heidie",
                    "Helaina",
                    "Helaine",
                    "Helen",
                    "Helen-Elizabeth",
                    "Helena",
                    "Helene",
                    "Helenka",
                    "Helga",
                    "Helge",
                    "Helli",
                    "Heloise",
                    "Helsa",
                    "Helyn",
                    "Hendrika",
                    "Henka",
                    "Henrie",
                    "Henrieta",
                    "Henrietta",
                    "Henriette",
                    "Henryetta",
                    "Hephzibah",
                    "Hermia",
                    "Hermina",
                    "Hermine",
                    "Herminia",
                    "Hermione",
                    "Herta",
                    "Hertha",
                    "Hester",
                    "Hesther",
                    "Hestia",
                    "Hetti",
                    "Hettie",
                    "Hetty",
                    "Hilary",
                    "Hilda",
                    "Hildagard",
                    "Hildagarde",
                    "Hilde",
                    "Hildegaard",
                    "Hildegarde",
                    "Hildy",
                    "Hillary",
                    "Hilliary",
                    "Hinda",
                    "Holli",
                    "Hollie",
                    "Holly",
                    "Holly-Anne",
                    "Hollyanne",
                    "Honey",
                    "Honor",
                    "Honoria",
                    "Hope",
                    "Horatia",
                    "Hortense",
                    "Hortensia",
                    "Hulda",
                    "Hyacinth",
                    "Hyacintha",
                    "Hyacinthe",
                    "Hyacinthia",
                    "Hyacinthie",
                    "Hynda",
                    "Ianthe",
                    "Ibbie",
                    "Ibby",
                    "Ida",
                    "Idalia",
                    "Idalina",
                    "Idaline",
                    "Idell",
                    "Idelle",
                    "Idette",
                    "Ileana",
                    "Ileane",
                    "Ilene",
                    "Ilise",
                    "Ilka",
                    "Illa",
                    "Ilsa",
                    "Ilse",
                    "Ilysa",
                    "Ilyse",
                    "Ilyssa",
                    "Imelda",
                    "Imogen",
                    "Imogene",
                    "Imojean",
                    "Ina",
                    "Indira",
                    "Ines",
                    "Inesita",
                    "Inessa",
                    "Inez",
                    "Inga",
                    "Ingaberg",
                    "Ingaborg",
                    "Inge",
                    "Ingeberg",
                    "Ingeborg",
                    "Inger",
                    "Ingrid",
                    "Ingunna",
                    "Inna",
                    "Iolande",
                    "Iolanthe",
                    "Iona",
                    "Iormina",
                    "Ira",
                    "Irena",
                    "Irene",
                    "Irina",
                    "Iris",
                    "Irita",
                    "Irma",
                    "Isa",
                    "Isabel",
                    "Isabelita",
                    "Isabella",
                    "Isabelle",
                    "Isadora",
                    "Isahella",
                    "Iseabal",
                    "Isidora",
                    "Isis",
                    "Isobel",
                    "Issi",
                    "Issie",
                    "Issy",
                    "Ivett",
                    "Ivette",
                    "Ivie",
                    "Ivonne",
                    "Ivory",
                    "Ivy",
                    "Izabel",
                    "Jacenta",
                    "Jacinda",
                    "Jacinta",
                    "Jacintha",
                    "Jacinthe",
                    "Jackelyn",
                    "Jacki",
                    "Jackie",
                    "Jacklin",
                    "Jacklyn",
                    "Jackquelin",
                    "Jackqueline",
                    "Jacky",
                    "Jaclin",
                    "Jaclyn",
                    "Jacquelin",
                    "Jacqueline",
                    "Jacquelyn",
                    "Jacquelynn",
                    "Jacquenetta",
                    "Jacquenette",
                    "Jacquetta",
                    "Jacquette",
                    "Jacqui",
                    "Jacquie",
                    "Jacynth",
                    "Jada",
                    "Jade",
                    "Jaime",
                    "Jaimie",
                    "Jaine",
                    "Jami",
                    "Jamie",
                    "Jamima",
                    "Jammie",
                    "Jan",
                    "Jana",
                    "Janaya",
                    "Janaye",
                    "Jandy",
                    "Jane",
                    "Janean",
                    "Janeczka",
                    "Janeen",
                    "Janel",
                    "Janela",
                    "Janella",
                    "Janelle",
                    "Janene",
                    "Janenna",
                    "Janessa",
                    "Janet",
                    "Janeta",
                    "Janetta",
                    "Janette",
                    "Janeva",
                    "Janey",
                    "Jania",
                    "Janice",
                    "Janie",
                    "Janifer",
                    "Janina",
                    "Janine",
                    "Janis",
                    "Janith",
                    "Janka",
                    "Janna",
                    "Jannel",
                    "Jannelle",
                    "Janot",
                    "Jany",
                    "Jaquelin",
                    "Jaquelyn",
                    "Jaquenetta",
                    "Jaquenette",
                    "Jaquith",
                    "Jasmin",
                    "Jasmina",
                    "Jasmine",
                    "Jayme",
                    "Jaymee",
                    "Jayne",
                    "Jaynell",
                    "Jazmin",
                    "Jean",
                    "Jeana",
                    "Jeane",
                    "Jeanelle",
                    "Jeanette",
                    "Jeanie",
                    "Jeanine",
                    "Jeanna",
                    "Jeanne",
                    "Jeannette",
                    "Jeannie",
                    "Jeannine",
                    "Jehanna",
                    "Jelene",
                    "Jemie",
                    "Jemima",
                    "Jemimah",
                    "Jemmie",
                    "Jemmy",
                    "Jen",
                    "Jena",
                    "Jenda",
                    "Jenelle",
                    "Jeni",
                    "Jenica",
                    "Jeniece",
                    "Jenifer",
                    "Jeniffer",
                    "Jenilee",
                    "Jenine",
                    "Jenn",
                    "Jenna",
                    "Jennee",
                    "Jennette",
                    "Jenni",
                    "Jennica",
                    "Jennie",
                    "Jennifer",
                    "Jennilee",
                    "Jennine",
                    "Jenny",
                    "Jeralee",
                    "Jere",
                    "Jeri",
                    "Jermaine",
                    "Jerrie",
                    "Jerrilee",
                    "Jerrilyn",
                    "Jerrine",
                    "Jerry",
                    "Jerrylee",
                    "Jess",
                    "Jessa",
                    "Jessalin",
                    "Jessalyn",
                    "Jessamine",
                    "Jessamyn",
                    "Jesse",
                    "Jesselyn",
                    "Jessi",
                    "Jessica",
                    "Jessie",
                    "Jessika",
                    "Jessy",
                    "Jewel",
                    "Jewell",
                    "Jewelle",
                    "Jill",
                    "Jillana",
                    "Jillane",
                    "Jillayne",
                    "Jilleen",
                    "Jillene",
                    "Jilli",
                    "Jillian",
                    "Jillie",
                    "Jilly",
                    "Jinny",
                    "Jo",
                    "Jo Ann",
                    "Jo-Ann",
                    "Jo-Anne",
                    "Joan",
                    "Joana",
                    "Joane",
                    "Joanie",
                    "Joann",
                    "Joanna",
                    "Joanne",
                    "Joannes",
                    "Jobey",
                    "Jobi",
                    "Jobie",
                    "Jobina",
                    "Joby",
                    "Jobye",
                    "Jobyna",
                    "Jocelin",
                    "Joceline",
                    "Jocelyn",
                    "Jocelyne",
                    "Jodee",
                    "Jodi",
                    "Jodie",
                    "Jody",
                    "Joeann",
                    "Joela",
                    "Joelie",
                    "Joell",
                    "Joella",
                    "Joelle",
                    "Joellen",
                    "Joelly",
                    "Joellyn",
                    "Joelynn",
                    "Joete",
                    "Joey",
                    "Johanna",
                    "Johannah",
                    "Johna",
                    "Johnath",
                    "Johnette",
                    "Johnna",
                    "Joice",
                    "Jojo",
                    "Jolee",
                    "Joleen",
                    "Jolene",
                    "Joletta",
                    "Joli",
                    "Jolie",
                    "Joline",
                    "Joly",
                    "Jolyn",
                    "Jolynn",
                    "Jonell",
                    "Joni",
                    "Jonie",
                    "Jonis",
                    "Jordain",
                    "Jordan",
                    "Jordana",
                    "Jordanna",
                    "Jorey",
                    "Jori",
                    "Jorie",
                    "Jorrie",
                    "Jorry",
                    "Joscelin",
                    "Josee",
                    "Josefa",
                    "Josefina",
                    "Josepha",
                    "Josephina",
                    "Josephine",
                    "Josey",
                    "Josi",
                    "Josie",
                    "Josselyn",
                    "Josy",
                    "Jourdan",
                    "Joy",
                    "Joya",
                    "Joyan",
                    "Joyann",
                    "Joyce",
                    "Joycelin",
                    "Joye",
                    "Jsandye",
                    "Juana",
                    "Juanita",
                    "Judi",
                    "Judie",
                    "Judith",
                    "Juditha",
                    "Judy",
                    "Judye",
                    "Juieta",
                    "Julee",
                    "Juli",
                    "Julia",
                    "Juliana",
                    "Juliane",
                    "Juliann",
                    "Julianna",
                    "Julianne",
                    "Julie",
                    "Julienne",
                    "Juliet",
                    "Julieta",
                    "Julietta",
                    "Juliette",
                    "Julina",
                    "Juline",
                    "Julissa",
                    "Julita",
                    "June",
                    "Junette",
                    "Junia",
                    "Junie",
                    "Junina",
                    "Justina",
                    "Justine",
                    "Justinn",
                    "Jyoti",
                    "Kacey",
                    "Kacie",
                    "Kacy",
                    "Kaela",
                    "Kai",
                    "Kaia",
                    "Kaila",
                    "Kaile",
                    "Kailey",
                    "Kaitlin",
                    "Kaitlyn",
                    "Kaitlynn",
                    "Kaja",
                    "Kakalina",
                    "Kala",
                    "Kaleena",
                    "Kali",
                    "Kalie",
                    "Kalila",
                    "Kalina",
                    "Kalinda",
                    "Kalindi",
                    "Kalli",
                    "Kally",
                    "Kameko",
                    "Kamila",
                    "Kamilah",
                    "Kamillah",
                    "Kandace",
                    "Kandy",
                    "Kania",
                    "Kanya",
                    "Kara",
                    "Kara-Lynn",
                    "Karalee",
                    "Karalynn",
                    "Kare",
                    "Karee",
                    "Karel",
                    "Karen",
                    "Karena",
                    "Kari",
                    "Karia",
                    "Karie",
                    "Karil",
                    "Karilynn",
                    "Karin",
                    "Karina",
                    "Karine",
                    "Kariotta",
                    "Karisa",
                    "Karissa",
                    "Karita",
                    "Karla",
                    "Karlee",
                    "Karleen",
                    "Karlen",
                    "Karlene",
                    "Karlie",
                    "Karlotta",
                    "Karlotte",
                    "Karly",
                    "Karlyn",
                    "Karmen",
                    "Karna",
                    "Karol",
                    "Karola",
                    "Karole",
                    "Karolina",
                    "Karoline",
                    "Karoly",
                    "Karon",
                    "Karrah",
                    "Karrie",
                    "Karry",
                    "Kary",
                    "Karyl",
                    "Karylin",
                    "Karyn",
                    "Kasey",
                    "Kass",
                    "Kassandra",
                    "Kassey",
                    "Kassi",
                    "Kassia",
                    "Kassie",
                    "Kat",
                    "Kata",
                    "Katalin",
                    "Kate",
                    "Katee",
                    "Katerina",
                    "Katerine",
                    "Katey",
                    "Kath",
                    "Katha",
                    "Katharina",
                    "Katharine",
                    "Katharyn",
                    "Kathe",
                    "Katherina",
                    "Katherine",
                    "Katheryn",
                    "Kathi",
                    "Kathie",
                    "Kathleen",
                    "Kathlin",
                    "Kathrine",
                    "Kathryn",
                    "Kathryne",
                    "Kathy",
                    "Kathye",
                    "Kati",
                    "Katie",
                    "Katina",
                    "Katine",
                    "Katinka",
                    "Katleen",
                    "Katlin",
                    "Katrina",
                    "Katrine",
                    "Katrinka",
                    "Katti",
                    "Kattie",
                    "Katuscha",
                    "Katusha",
                    "Katy",
                    "Katya",
                    "Kay",
                    "Kaycee",
                    "Kaye",
                    "Kayla",
                    "Kayle",
                    "Kaylee",
                    "Kayley",
                    "Kaylil",
                    "Kaylyn",
                    "Keeley",
                    "Keelia",
                    "Keely",
                    "Kelcey",
                    "Kelci",
                    "Kelcie",
                    "Kelcy",
                    "Kelila",
                    "Kellen",
                    "Kelley",
                    "Kelli",
                    "Kellia",
                    "Kellie",
                    "Kellina",
                    "Kellsie",
                    "Kelly",
                    "Kellyann",
                    "Kelsey",
                    "Kelsi",
                    "Kelsy",
                    "Kendra",
                    "Kendre",
                    "Kenna",
                    "Keri",
                    "Keriann",
                    "Kerianne",
                    "Kerri",
                    "Kerrie",
                    "Kerrill",
                    "Kerrin",
                    "Kerry",
                    "Kerstin",
                    "Kesley",
                    "Keslie",
                    "Kessia",
                    "Kessiah",
                    "Ketti",
                    "Kettie",
                    "Ketty",
                    "Kevina",
                    "Kevyn",
                    "Ki",
                    "Kiah",
                    "Kial",
                    "Kiele",
                    "Kiersten",
                    "Kikelia",
                    "Kiley",
                    "Kim",
                    "Kimberlee",
                    "Kimberley",
                    "Kimberli",
                    "Kimberly",
                    "Kimberlyn",
                    "Kimbra",
                    "Kimmi",
                    "Kimmie",
                    "Kimmy",
                    "Kinna",
                    "Kip",
                    "Kipp",
                    "Kippie",
                    "Kippy",
                    "Kira",
                    "Kirbee",
                    "Kirbie",
                    "Kirby",
                    "Kiri",
                    "Kirsten",
                    "Kirsteni",
                    "Kirsti",
                    "Kirstin",
                    "Kirstyn",
                    "Kissee",
                    "Kissiah",
                    "Kissie",
                    "Kit",
                    "Kitti",
                    "Kittie",
                    "Kitty",
                    "Kizzee",
                    "Kizzie",
                    "Klara",
                    "Klarika",
                    "Klarrisa",
                    "Konstance",
                    "Konstanze",
                    "Koo",
                    "Kora",
                    "Koral",
                    "Koralle",
                    "Kordula",
                    "Kore",
                    "Korella",
                    "Koren",
                    "Koressa",
                    "Kori",
                    "Korie",
                    "Korney",
                    "Korrie",
                    "Korry",
                    "Kris",
                    "Krissie",
                    "Krissy",
                    "Krista",
                    "Kristal",
                    "Kristan",
                    "Kriste",
                    "Kristel",
                    "Kristen",
                    "Kristi",
                    "Kristien",
                    "Kristin",
                    "Kristina",
                    "Kristine",
                    "Kristy",
                    "Kristyn",
                    "Krysta",
                    "Krystal",
                    "Krystalle",
                    "Krystle",
                    "Krystyna",
                    "Kyla",
                    "Kyle",
                    "Kylen",
                    "Kylie",
                    "Kylila",
                    "Kylynn",
                    "Kym",
                    "Kynthia",
                    "Kyrstin",
                    "La Verne",
                    "Lacee",
                    "Lacey",
                    "Lacie",
                    "Lacy",
                    "Ladonna",
                    "Laetitia",
                    "Laina",
                    "Lainey",
                    "Lana",
                    "Lanae",
                    "Lane",
                    "Lanette",
                    "Laney",
                    "Lani",
                    "Lanie",
                    "Lanita",
                    "Lanna",
                    "Lanni",
                    "Lanny",
                    "Lara",
                    "Laraine",
                    "Lari",
                    "Larina",
                    "Larine",
                    "Larisa",
                    "Larissa",
                    "Lark",
                    "Laryssa",
                    "Latashia",
                    "Latia",
                    "Latisha",
                    "Latrena",
                    "Latrina",
                    "Laura",
                    "Lauraine",
                    "Laural",
                    "Lauralee",
                    "Laure",
                    "Lauree",
                    "Laureen",
                    "Laurel",
                    "Laurella",
                    "Lauren",
                    "Laurena",
                    "Laurene",
                    "Lauretta",
                    "Laurette",
                    "Lauri",
                    "Laurianne",
                    "Laurice",
                    "Laurie",
                    "Lauryn",
                    "Lavena",
                    "Laverna",
                    "Laverne",
                    "Lavina",
                    "Lavinia",
                    "Lavinie",
                    "Layla",
                    "Layne",
                    "Layney",
                    "Lea",
                    "Leah",
                    "Leandra",
                    "Leann",
                    "Leanna",
                    "Leanor",
                    "Leanora",
                    "Lebbie",
                    "Leda",
                    "Lee",
                    "Leeann",
                    "Leeanne",
                    "Leela",
                    "Leelah",
                    "Leena",
                    "Leesa",
                    "Leese",
                    "Legra",
                    "Leia",
                    "Leigh",
                    "Leigha",
                    "Leila",
                    "Leilah",
                    "Leisha",
                    "Lela",
                    "Lelah",
                    "Leland",
                    "Lelia",
                    "Lena",
                    "Lenee",
                    "Lenette",
                    "Lenka",
                    "Lenna",
                    "Lenora",
                    "Lenore",
                    "Leodora",
                    "Leoine",
                    "Leola",
                    "Leoline",
                    "Leona",
                    "Leonanie",
                    "Leone",
                    "Leonelle",
                    "Leonie",
                    "Leonora",
                    "Leonore",
                    "Leontine",
                    "Leontyne",
                    "Leora",
                    "Leshia",
                    "Lesley",
                    "Lesli",
                    "Leslie",
                    "Lesly",
                    "Lesya",
                    "Leta",
                    "Lethia",
                    "Leticia",
                    "Letisha",
                    "Letitia",
                    "Letizia",
                    "Letta",
                    "Letti",
                    "Lettie",
                    "Letty",
                    "Lexi",
                    "Lexie",
                    "Lexine",
                    "Lexis",
                    "Lexy",
                    "Leyla",
                    "Lezlie",
                    "Lia",
                    "Lian",
                    "Liana",
                    "Liane",
                    "Lianna",
                    "Lianne",
                    "Lib",
                    "Libbey",
                    "Libbi",
                    "Libbie",
                    "Libby",
                    "Licha",
                    "Lida",
                    "Lidia",
                    "Liesa",
                    "Lil",
                    "Lila",
                    "Lilah",
                    "Lilas",
                    "Lilia",
                    "Lilian",
                    "Liliane",
                    "Lilias",
                    "Lilith",
                    "Lilla",
                    "Lilli",
                    "Lillian",
                    "Lillis",
                    "Lilllie",
                    "Lilly",
                    "Lily",
                    "Lilyan",
                    "Lin",
                    "Lina",
                    "Lind",
                    "Linda",
                    "Lindi",
                    "Lindie",
                    "Lindsay",
                    "Lindsey",
                    "Lindsy",
                    "Lindy",
                    "Linea",
                    "Linell",
                    "Linet",
                    "Linette",
                    "Linn",
                    "Linnea",
                    "Linnell",
                    "Linnet",
                    "Linnie",
                    "Linzy",
                    "Lira",
                    "Lisa",
                    "Lisabeth",
                    "Lisbeth",
                    "Lise",
                    "Lisetta",
                    "Lisette",
                    "Lisha",
                    "Lishe",
                    "Lissa",
                    "Lissi",
                    "Lissie",
                    "Lissy",
                    "Lita",
                    "Liuka",
                    "Liv",
                    "Liva",
                    "Livia",
                    "Livvie",
                    "Livvy",
                    "Livvyy",
                    "Livy",
                    "Liz",
                    "Liza",
                    "Lizabeth",
                    "Lizbeth",
                    "Lizette",
                    "Lizzie",
                    "Lizzy",
                    "Loella",
                    "Lois",
                    "Loise",
                    "Lola",
                    "Loleta",
                    "Lolita",
                    "Lolly",
                    "Lona",
                    "Lonee",
                    "Loni",
                    "Lonna",
                    "Lonni",
                    "Lonnie",
                    "Lora",
                    "Lorain",
                    "Loraine",
                    "Loralee",
                    "Loralie",
                    "Loralyn",
                    "Loree",
                    "Loreen",
                    "Lorelei",
                    "Lorelle",
                    "Loren",
                    "Lorena",
                    "Lorene",
                    "Lorenza",
                    "Loretta",
                    "Lorette",
                    "Lori",
                    "Loria",
                    "Lorianna",
                    "Lorianne",
                    "Lorie",
                    "Lorilee",
                    "Lorilyn",
                    "Lorinda",
                    "Lorine",
                    "Lorita",
                    "Lorna",
                    "Lorne",
                    "Lorraine",
                    "Lorrayne",
                    "Lorri",
                    "Lorrie",
                    "Lorrin",
                    "Lorry",
                    "Lory",
                    "Lotta",
                    "Lotte",
                    "Lotti",
                    "Lottie",
                    "Lotty",
                    "Lou",
                    "Louella",
                    "Louisa",
                    "Louise",
                    "Louisette",
                    "Loutitia",
                    "Lu",
                    "Luce",
                    "Luci",
                    "Lucia",
                    "Luciana",
                    "Lucie",
                    "Lucienne",
                    "Lucila",
                    "Lucilia",
                    "Lucille",
                    "Lucina",
                    "Lucinda",
                    "Lucine",
                    "Lucita",
                    "Lucky",
                    "Lucretia",
                    "Lucy",
                    "Ludovika",
                    "Luella",
                    "Luelle",
                    "Luisa",
                    "Luise",
                    "Lula",
                    "Lulita",
                    "Lulu",
                    "Lura",
                    "Lurette",
                    "Lurleen",
                    "Lurlene",
                    "Lurline",
                    "Lusa",
                    "Luz",
                    "Lyda",
                    "Lydia",
                    "Lydie",
                    "Lyn",
                    "Lynda",
                    "Lynde",
                    "Lyndel",
                    "Lyndell",
                    "Lyndsay",
                    "Lyndsey",
                    "Lyndsie",
                    "Lyndy",
                    "Lynea",
                    "Lynelle",
                    "Lynett",
                    "Lynette",
                    "Lynn",
                    "Lynna",
                    "Lynne",
                    "Lynnea",
                    "Lynnell",
                    "Lynnelle",
                    "Lynnet",
                    "Lynnett",
                    "Lynnette",
                    "Lynsey",
                    "Lyssa",
                    "Mab",
                    "Mabel",
                    "Mabelle",
                    "Mable",
                    "Mada",
                    "Madalena",
                    "Madalyn",
                    "Maddalena",
                    "Maddi",
                    "Maddie",
                    "Maddy",
                    "Madel",
                    "Madelaine",
                    "Madeleine",
                    "Madelena",
                    "Madelene",
                    "Madelin",
                    "Madelina",
                    "Madeline",
                    "Madella",
                    "Madelle",
                    "Madelon",
                    "Madelyn",
                    "Madge",
                    "Madlen",
                    "Madlin",
                    "Madonna",
                    "Mady",
                    "Mae",
                    "Maegan",
                    "Mag",
                    "Magda",
                    "Magdaia",
                    "Magdalen",
                    "Magdalena",
                    "Magdalene",
                    "Maggee",
                    "Maggi",
                    "Maggie",
                    "Maggy",
                    "Mahala",
                    "Mahalia",
                    "Maia",
                    "Maible",
                    "Maiga",
                    "Maighdiln",
                    "Mair",
                    "Maire",
                    "Maisey",
                    "Maisie",
                    "Maitilde",
                    "Mala",
                    "Malanie",
                    "Malena",
                    "Malia",
                    "Malina",
                    "Malinda",
                    "Malinde",
                    "Malissa",
                    "Malissia",
                    "Mallissa",
                    "Mallorie",
                    "Mallory",
                    "Malorie",
                    "Malory",
                    "Malva",
                    "Malvina",
                    "Malynda",
                    "Mame",
                    "Mamie",
                    "Manda",
                    "Mandi",
                    "Mandie",
                    "Mandy",
                    "Manon",
                    "Manya",
                    "Mara",
                    "Marabel",
                    "Marcela",
                    "Marcelia",
                    "Marcella",
                    "Marcelle",
                    "Marcellina",
                    "Marcelline",
                    "Marchelle",
                    "Marci",
                    "Marcia",
                    "Marcie",
                    "Marcile",
                    "Marcille",
                    "Marcy",
                    "Mareah",
                    "Maren",
                    "Marena",
                    "Maressa",
                    "Marga",
                    "Margalit",
                    "Margalo",
                    "Margaret",
                    "Margareta",
                    "Margarete",
                    "Margaretha",
                    "Margarethe",
                    "Margaretta",
                    "Margarette",
                    "Margarita",
                    "Margaux",
                    "Marge",
                    "Margeaux",
                    "Margery",
                    "Marget",
                    "Margette",
                    "Margi",
                    "Margie",
                    "Margit",
                    "Margo",
                    "Margot",
                    "Margret",
                    "Marguerite",
                    "Margy",
                    "Mari",
                    "Maria",
                    "Mariam",
                    "Marian",
                    "Mariana",
                    "Mariann",
                    "Marianna",
                    "Marianne",
                    "Maribel",
                    "Maribelle",
                    "Maribeth",
                    "Marice",
                    "Maridel",
                    "Marie",
                    "Marie-Ann",
                    "Marie-Jeanne",
                    "Marieann",
                    "Mariejeanne",
                    "Mariel",
                    "Mariele",
                    "Marielle",
                    "Mariellen",
                    "Marietta",
                    "Mariette",
                    "Marigold",
                    "Marijo",
                    "Marika",
                    "Marilee",
                    "Marilin",
                    "Marillin",
                    "Marilyn",
                    "Marin",
                    "Marina",
                    "Marinna",
                    "Marion",
                    "Mariquilla",
                    "Maris",
                    "Marisa",
                    "Mariska",
                    "Marissa",
                    "Marita",
                    "Maritsa",
                    "Mariya",
                    "Marj",
                    "Marja",
                    "Marje",
                    "Marji",
                    "Marjie",
                    "Marjorie",
                    "Marjory",
                    "Marjy",
                    "Marketa",
                    "Marla",
                    "Marlane",
                    "Marleah",
                    "Marlee",
                    "Marleen",
                    "Marlena",
                    "Marlene",
                    "Marley",
                    "Marlie",
                    "Marline",
                    "Marlo",
                    "Marlyn",
                    "Marna",
                    "Marne",
                    "Marney",
                    "Marni",
                    "Marnia",
                    "Marnie",
                    "Marquita",
                    "Marrilee",
                    "Marris",
                    "Marrissa",
                    "Marsha",
                    "Marsiella",
                    "Marta",
                    "Martelle",
                    "Martguerita",
                    "Martha",
                    "Marthe",
                    "Marthena",
                    "Marti",
                    "Martica",
                    "Martie",
                    "Martina",
                    "Martita",
                    "Marty",
                    "Martynne",
                    "Mary",
                    "Marya",
                    "Maryann",
                    "Maryanna",
                    "Maryanne",
                    "Marybelle",
                    "Marybeth",
                    "Maryellen",
                    "Maryjane",
                    "Maryjo",
                    "Maryl",
                    "Marylee",
                    "Marylin",
                    "Marylinda",
                    "Marylou",
                    "Marylynne",
                    "Maryrose",
                    "Marys",
                    "Marysa",
                    "Masha",
                    "Matelda",
                    "Mathilda",
                    "Mathilde",
                    "Matilda",
                    "Matilde",
                    "Matti",
                    "Mattie",
                    "Matty",
                    "Maud",
                    "Maude",
                    "Maudie",
                    "Maura",
                    "Maure",
                    "Maureen",
                    "Maureene",
                    "Maurene",
                    "Maurine",
                    "Maurise",
                    "Maurita",
                    "Maurizia",
                    "Mavis",
                    "Mavra",
                    "Max",
                    "Maxi",
                    "Maxie",
                    "Maxine",
                    "Maxy",
                    "May",
                    "Maybelle",
                    "Maye",
                    "Mead",
                    "Meade",
                    "Meagan",
                    "Meaghan",
                    "Meara",
                    "Mechelle",
                    "Meg",
                    "Megan",
                    "Megen",
                    "Meggi",
                    "Meggie",
                    "Meggy",
                    "Meghan",
                    "Meghann",
                    "Mehetabel",
                    "Mei",
                    "Mel",
                    "Mela",
                    "Melamie",
                    "Melania",
                    "Melanie",
                    "Melantha",
                    "Melany",
                    "Melba",
                    "Melesa",
                    "Melessa",
                    "Melicent",
                    "Melina",
                    "Melinda",
                    "Melinde",
                    "Melisa",
                    "Melisande",
                    "Melisandra",
                    "Melisenda",
                    "Melisent",
                    "Melissa",
                    "Melisse",
                    "Melita",
                    "Melitta",
                    "Mella",
                    "Melli",
                    "Mellicent",
                    "Mellie",
                    "Mellisa",
                    "Mellisent",
                    "Melloney",
                    "Melly",
                    "Melodee",
                    "Melodie",
                    "Melody",
                    "Melonie",
                    "Melony",
                    "Melosa",
                    "Melva",
                    "Mercedes",
                    "Merci",
                    "Mercie",
                    "Mercy",
                    "Meredith",
                    "Meredithe",
                    "Meridel",
                    "Meridith",
                    "Meriel",
                    "Merilee",
                    "Merilyn",
                    "Meris",
                    "Merissa",
                    "Merl",
                    "Merla",
                    "Merle",
                    "Merlina",
                    "Merline",
                    "Merna",
                    "Merola",
                    "Merralee",
                    "Merridie",
                    "Merrie",
                    "Merrielle",
                    "Merrile",
                    "Merrilee",
                    "Merrili",
                    "Merrill",
                    "Merrily",
                    "Merry",
                    "Mersey",
                    "Meryl",
                    "Meta",
                    "Mia",
                    "Micaela",
                    "Michaela",
                    "Michaelina",
                    "Michaeline",
                    "Michaella",
                    "Michal",
                    "Michel",
                    "Michele",
                    "Michelina",
                    "Micheline",
                    "Michell",
                    "Michelle",
                    "Micki",
                    "Mickie",
                    "Micky",
                    "Midge",
                    "Mignon",
                    "Mignonne",
                    "Miguela",
                    "Miguelita",
                    "Mikaela",
                    "Mil",
                    "Mildred",
                    "Mildrid",
                    "Milena",
                    "Milicent",
                    "Milissent",
                    "Milka",
                    "Milli",
                    "Millicent",
                    "Millie",
                    "Millisent",
                    "Milly",
                    "Milzie",
                    "Mimi",
                    "Min",
                    "Mina",
                    "Minda",
                    "Mindy",
                    "Minerva",
                    "Minetta",
                    "Minette",
                    "Minna",
                    "Minnaminnie",
                    "Minne",
                    "Minni",
                    "Minnie",
                    "Minnnie",
                    "Minny",
                    "Minta",
                    "Miof Mela",
                    "Miquela",
                    "Mira",
                    "Mirabel",
                    "Mirabella",
                    "Mirabelle",
                    "Miran",
                    "Miranda",
                    "Mireielle",
                    "Mireille",
                    "Mirella",
                    "Mirelle",
                    "Miriam",
                    "Mirilla",
                    "Mirna",
                    "Misha",
                    "Missie",
                    "Missy",
                    "Misti",
                    "Misty",
                    "Mitzi",
                    "Modesta",
                    "Modestia",
                    "Modestine",
                    "Modesty",
                    "Moina",
                    "Moira",
                    "Moll",
                    "Mollee",
                    "Molli",
                    "Mollie",
                    "Molly",
                    "Mommy",
                    "Mona",
                    "Monah",
                    "Monica",
                    "Monika",
                    "Monique",
                    "Mora",
                    "Moreen",
                    "Morena",
                    "Morgan",
                    "Morgana",
                    "Morganica",
                    "Morganne",
                    "Morgen",
                    "Moria",
                    "Morissa",
                    "Morna",
                    "Moselle",
                    "Moyna",
                    "Moyra",
                    "Mozelle",
                    "Muffin",
                    "Mufi",
                    "Mufinella",
                    "Muire",
                    "Mureil",
                    "Murial",
                    "Muriel",
                    "Murielle",
                    "Myra",
                    "Myrah",
                    "Myranda",
                    "Myriam",
                    "Myrilla",
                    "Myrle",
                    "Myrlene",
                    "Myrna",
                    "Myrta",
                    "Myrtia",
                    "Myrtice",
                    "Myrtie",
                    "Myrtle",
                    "Nada",
                    "Nadean",
                    "Nadeen",
                    "Nadia",
                    "Nadine",
                    "Nadiya",
                    "Nady",
                    "Nadya",
                    "Nalani",
                    "Nan",
                    "Nana",
                    "Nananne",
                    "Nance",
                    "Nancee",
                    "Nancey",
                    "Nanci",
                    "Nancie",
                    "Nancy",
                    "Nanete",
                    "Nanette",
                    "Nani",
                    "Nanice",
                    "Nanine",
                    "Nannette",
                    "Nanni",
                    "Nannie",
                    "Nanny",
                    "Nanon",
                    "Naoma",
                    "Naomi",
                    "Nara",
                    "Nari",
                    "Nariko",
                    "Nat",
                    "Nata",
                    "Natala",
                    "Natalee",
                    "Natalie",
                    "Natalina",
                    "Nataline",
                    "Natalya",
                    "Natasha",
                    "Natassia",
                    "Nathalia",
                    "Nathalie",
                    "Natividad",
                    "Natka",
                    "Natty",
                    "Neala",
                    "Neda",
                    "Nedda",
                    "Nedi",
                    "Neely",
                    "Neila",
                    "Neile",
                    "Neilla",
                    "Neille",
                    "Nelia",
                    "Nelie",
                    "Nell",
                    "Nelle",
                    "Nelli",
                    "Nellie",
                    "Nelly",
                    "Nerissa",
                    "Nerita",
                    "Nert",
                    "Nerta",
                    "Nerte",
                    "Nerti",
                    "Nertie",
                    "Nerty",
                    "Nessa",
                    "Nessi",
                    "Nessie",
                    "Nessy",
                    "Nesta",
                    "Netta",
                    "Netti",
                    "Nettie",
                    "Nettle",
                    "Netty",
                    "Nevsa",
                    "Neysa",
                    "Nichol",
                    "Nichole",
                    "Nicholle",
                    "Nicki",
                    "Nickie",
                    "Nicky",
                    "Nicol",
                    "Nicola",
                    "Nicole",
                    "Nicolea",
                    "Nicolette",
                    "Nicoli",
                    "Nicolina",
                    "Nicoline",
                    "Nicolle",
                    "Nikaniki",
                    "Nike",
                    "Niki",
                    "Nikki",
                    "Nikkie",
                    "Nikoletta",
                    "Nikolia",
                    "Nina",
                    "Ninetta",
                    "Ninette",
                    "Ninnetta",
                    "Ninnette",
                    "Ninon",
                    "Nissa",
                    "Nisse",
                    "Nissie",
                    "Nissy",
                    "Nita",
                    "Nixie",
                    "Noami",
                    "Noel",
                    "Noelani",
                    "Noell",
                    "Noella",
                    "Noelle",
                    "Noellyn",
                    "Noelyn",
                    "Noemi",
                    "Nola",
                    "Nolana",
                    "Nolie",
                    "Nollie",
                    "Nomi",
                    "Nona",
                    "Nonah",
                    "Noni",
                    "Nonie",
                    "Nonna",
                    "Nonnah",
                    "Nora",
                    "Norah",
                    "Norean",
                    "Noreen",
                    "Norene",
                    "Norina",
                    "Norine",
                    "Norma",
                    "Norri",
                    "Norrie",
                    "Norry",
                    "Novelia",
                    "Nydia",
                    "Nyssa",
                    "Octavia",
                    "Odele",
                    "Odelia",
                    "Odelinda",
                    "Odella",
                    "Odelle",
                    "Odessa",
                    "Odetta",
                    "Odette",
                    "Odilia",
                    "Odille",
                    "Ofelia",
                    "Ofella",
                    "Ofilia",
                    "Ola",
                    "Olenka",
                    "Olga",
                    "Olia",
                    "Olimpia",
                    "Olive",
                    "Olivette",
                    "Olivia",
                    "Olivie",
                    "Oliy",
                    "Ollie",
                    "Olly",
                    "Olva",
                    "Olwen",
                    "Olympe",
                    "Olympia",
                    "Olympie",
                    "Ondrea",
                    "Oneida",
                    "Onida",
                    "Oona",
                    "Opal",
                    "Opalina",
                    "Opaline",
                    "Ophelia",
                    "Ophelie",
                    "Ora",
                    "Oralee",
                    "Oralia",
                    "Oralie",
                    "Oralla",
                    "Oralle",
                    "Orel",
                    "Orelee",
                    "Orelia",
                    "Orelie",
                    "Orella",
                    "Orelle",
                    "Oriana",
                    "Orly",
                    "Orsa",
                    "Orsola",
                    "Ortensia",
                    "Otha",
                    "Othelia",
                    "Othella",
                    "Othilia",
                    "Othilie",
                    "Ottilie",
                    "Page",
                    "Paige",
                    "Paloma",
                    "Pam",
                    "Pamela",
                    "Pamelina",
                    "Pamella",
                    "Pammi",
                    "Pammie",
                    "Pammy",
                    "Pandora",
                    "Pansie",
                    "Pansy",
                    "Paola",
                    "Paolina",
                    "Papagena",
                    "Pat",
                    "Patience",
                    "Patrica",
                    "Patrice",
                    "Patricia",
                    "Patrizia",
                    "Patsy",
                    "Patti",
                    "Pattie",
                    "Patty",
                    "Paula",
                    "Paule",
                    "Pauletta",
                    "Paulette",
                    "Pauli",
                    "Paulie",
                    "Paulina",
                    "Pauline",
                    "Paulita",
                    "Pauly",
                    "Pavia",
                    "Pavla",
                    "Pearl",
                    "Pearla",
                    "Pearle",
                    "Pearline",
                    "Peg",
                    "Pegeen",
                    "Peggi",
                    "Peggie",
                    "Peggy",
                    "Pen",
                    "Penelopa",
                    "Penelope",
                    "Penni",
                    "Pennie",
                    "Penny",
                    "Pepi",
                    "Pepita",
                    "Peri",
                    "Peria",
                    "Perl",
                    "Perla",
                    "Perle",
                    "Perri",
                    "Perrine",
                    "Perry",
                    "Persis",
                    "Pet",
                    "Peta",
                    "Petra",
                    "Petrina",
                    "Petronella",
                    "Petronia",
                    "Petronilla",
                    "Petronille",
                    "Petunia",
                    "Phaedra",
                    "Phaidra",
                    "Phebe",
                    "Phedra",
                    "Phelia",
                    "Phil",
                    "Philipa",
                    "Philippa",
                    "Philippe",
                    "Philippine",
                    "Philis",
                    "Phillida",
                    "Phillie",
                    "Phillis",
                    "Philly",
                    "Philomena",
                    "Phoebe",
                    "Phylis",
                    "Phyllida",
                    "Phyllis",
                    "Phyllys",
                    "Phylys",
                    "Pia",
                    "Pier",
                    "Pierette",
                    "Pierrette",
                    "Pietra",
                    "Piper",
                    "Pippa",
                    "Pippy",
                    "Polly",
                    "Pollyanna",
                    "Pooh",
                    "Poppy",
                    "Portia",
                    "Pris",
                    "Prisca",
                    "Priscella",
                    "Priscilla",
                    "Prissie",
                    "Pru",
                    "Prudence",
                    "Prudi",
                    "Prudy",
                    "Prue",
                    "Queenie",
                    "Quentin",
                    "Querida",
                    "Quinn",
                    "Quinta",
                    "Quintana",
                    "Quintilla",
                    "Quintina",
                    "Rachael",
                    "Rachel",
                    "Rachele",
                    "Rachelle",
                    "Rae",
                    "Raeann",
                    "Raf",
                    "Rafa",
                    "Rafaela",
                    "Rafaelia",
                    "Rafaelita",
                    "Rahal",
                    "Rahel",
                    "Raina",
                    "Raine",
                    "Rakel",
                    "Ralina",
                    "Ramona",
                    "Ramonda",
                    "Rana",
                    "Randa",
                    "Randee",
                    "Randene",
                    "Randi",
                    "Randie",
                    "Randy",
                    "Ranee",
                    "Rani",
                    "Rania",
                    "Ranice",
                    "Ranique",
                    "Ranna",
                    "Raphaela",
                    "Raquel",
                    "Raquela",
                    "Rasia",
                    "Rasla",
                    "Raven",
                    "Ray",
                    "Raychel",
                    "Raye",
                    "Rayna",
                    "Raynell",
                    "Rayshell",
                    "Rea",
                    "Reba",
                    "Rebbecca",
                    "Rebe",
                    "Rebeca",
                    "Rebecca",
                    "Rebecka",
                    "Rebeka",
                    "Rebekah",
                    "Rebekkah",
                    "Ree",
                    "Reeba",
                    "Reena",
                    "Reeta",
                    "Reeva",
                    "Regan",
                    "Reggi",
                    "Reggie",
                    "Regina",
                    "Regine",
                    "Reiko",
                    "Reina",
                    "Reine",
                    "Remy",
                    "Rena",
                    "Renae",
                    "Renata",
                    "Renate",
                    "Rene",
                    "Renee",
                    "Renell",
                    "Renelle",
                    "Renie",
                    "Rennie",
                    "Reta",
                    "Retha",
                    "Revkah",
                    "Rey",
                    "Reyna",
                    "Rhea",
                    "Rheba",
                    "Rheta",
                    "Rhetta",
                    "Rhiamon",
                    "Rhianna",
                    "Rhianon",
                    "Rhoda",
                    "Rhodia",
                    "Rhodie",
                    "Rhody",
                    "Rhona",
                    "Rhonda",
                    "Riane",
                    "Riannon",
                    "Rianon",
                    "Rica",
                    "Ricca",
                    "Rici",
                    "Ricki",
                    "Rickie",
                    "Ricky",
                    "Riki",
                    "Rikki",
                    "Rina",
                    "Risa",
                    "Rita",
                    "Riva",
                    "Rivalee",
                    "Rivi",
                    "Rivkah",
                    "Rivy",
                    "Roana",
                    "Roanna",
                    "Roanne",
                    "Robbi",
                    "Robbie",
                    "Robbin",
                    "Robby",
                    "Robbyn",
                    "Robena",
                    "Robenia",
                    "Roberta",
                    "Robin",
                    "Robina",
                    "Robinet",
                    "Robinett",
                    "Robinetta",
                    "Robinette",
                    "Robinia",
                    "Roby",
                    "Robyn",
                    "Roch",
                    "Rochell",
                    "Rochella",
                    "Rochelle",
                    "Rochette",
                    "Roda",
                    "Rodi",
                    "Rodie",
                    "Rodina",
                    "Rois",
                    "Romola",
                    "Romona",
                    "Romonda",
                    "Romy",
                    "Rona",
                    "Ronalda",
                    "Ronda",
                    "Ronica",
                    "Ronna",
                    "Ronni",
                    "Ronnica",
                    "Ronnie",
                    "Ronny",
                    "Roobbie",
                    "Rora",
                    "Rori",
                    "Rorie",
                    "Rory",
                    "Ros",
                    "Rosa",
                    "Rosabel",
                    "Rosabella",
                    "Rosabelle",
                    "Rosaleen",
                    "Rosalia",
                    "Rosalie",
                    "Rosalind",
                    "Rosalinda",
                    "Rosalinde",
                    "Rosaline",
                    "Rosalyn",
                    "Rosalynd",
                    "Rosamond",
                    "Rosamund",
                    "Rosana",
                    "Rosanna",
                    "Rosanne",
                    "Rose",
                    "Roseann",
                    "Roseanna",
                    "Roseanne",
                    "Roselia",
                    "Roselin",
                    "Roseline",
                    "Rosella",
                    "Roselle",
                    "Rosemaria",
                    "Rosemarie",
                    "Rosemary",
                    "Rosemonde",
                    "Rosene",
                    "Rosetta",
                    "Rosette",
                    "Roshelle",
                    "Rosie",
                    "Rosina",
                    "Rosita",
                    "Roslyn",
                    "Rosmunda",
                    "Rosy",
                    "Row",
                    "Rowe",
                    "Rowena",
                    "Roxana",
                    "Roxane",
                    "Roxanna",
                    "Roxanne",
                    "Roxi",
                    "Roxie",
                    "Roxine",
                    "Roxy",
                    "Roz",
                    "Rozalie",
                    "Rozalin",
                    "Rozamond",
                    "Rozanna",
                    "Rozanne",
                    "Roze",
                    "Rozele",
                    "Rozella",
                    "Rozelle",
                    "Rozina",
                    "Rubetta",
                    "Rubi",
                    "Rubia",
                    "Rubie",
                    "Rubina",
                    "Ruby",
                    "Ruperta",
                    "Ruth",
                    "Ruthann",
                    "Ruthanne",
                    "Ruthe",
                    "Ruthi",
                    "Ruthie",
                    "Ruthy",
                    "Ryann",
                    "Rycca",
                    "Saba",
                    "Sabina",
                    "Sabine",
                    "Sabra",
                    "Sabrina",
                    "Sacha",
                    "Sada",
                    "Sadella",
                    "Sadie",
                    "Sadye",
                    "Saidee",
                    "Sal",
                    "Salaidh",
                    "Sallee",
                    "Salli",
                    "Sallie",
                    "Sally",
                    "Sallyann",
                    "Sallyanne",
                    "Saloma",
                    "Salome",
                    "Salomi",
                    "Sam",
                    "Samantha",
                    "Samara",
                    "Samaria",
                    "Sammy",
                    "Sande",
                    "Sandi",
                    "Sandie",
                    "Sandra",
                    "Sandy",
                    "Sandye",
                    "Sapphira",
                    "Sapphire",
                    "Sara",
                    "Sara-Ann",
                    "Saraann",
                    "Sarah",
                    "Sarajane",
                    "Saree",
                    "Sarena",
                    "Sarene",
                    "Sarette",
                    "Sari",
                    "Sarina",
                    "Sarine",
                    "Sarita",
                    "Sascha",
                    "Sasha",
                    "Sashenka",
                    "Saudra",
                    "Saundra",
                    "Savina",
                    "Sayre",
                    "Scarlet",
                    "Scarlett",
                    "Sean",
                    "Seana",
                    "Seka",
                    "Sela",
                    "Selena",
                    "Selene",
                    "Selestina",
                    "Selia",
                    "Selie",
                    "Selina",
                    "Selinda",
                    "Seline",
                    "Sella",
                    "Selle",
                    "Selma",
                    "Sena",
                    "Sephira",
                    "Serena",
                    "Serene",
                    "Shae",
                    "Shaina",
                    "Shaine",
                    "Shalna",
                    "Shalne",
                    "Shana",
                    "Shanda",
                    "Shandee",
                    "Shandeigh",
                    "Shandie",
                    "Shandra",
                    "Shandy",
                    "Shane",
                    "Shani",
                    "Shanie",
                    "Shanna",
                    "Shannah",
                    "Shannen",
                    "Shannon",
                    "Shanon",
                    "Shanta",
                    "Shantee",
                    "Shara",
                    "Sharai",
                    "Shari",
                    "Sharia",
                    "Sharity",
                    "Sharl",
                    "Sharla",
                    "Sharleen",
                    "Sharlene",
                    "Sharline",
                    "Sharon",
                    "Sharona",
                    "Sharron",
                    "Sharyl",
                    "Shaun",
                    "Shauna",
                    "Shawn",
                    "Shawna",
                    "Shawnee",
                    "Shay",
                    "Shayla",
                    "Shaylah",
                    "Shaylyn",
                    "Shaylynn",
                    "Shayna",
                    "Shayne",
                    "Shea",
                    "Sheba",
                    "Sheela",
                    "Sheelagh",
                    "Sheelah",
                    "Sheena",
                    "Sheeree",
                    "Sheila",
                    "Sheila-Kathryn",
                    "Sheilah",
                    "Shel",
                    "Shela",
                    "Shelagh",
                    "Shelba",
                    "Shelbi",
                    "Shelby",
                    "Shelia",
                    "Shell",
                    "Shelley",
                    "Shelli",
                    "Shellie",
                    "Shelly",
                    "Shena",
                    "Sher",
                    "Sheree",
                    "Sheri",
                    "Sherie",
                    "Sherill",
                    "Sherilyn",
                    "Sherline",
                    "Sherri",
                    "Sherrie",
                    "Sherry",
                    "Sherye",
                    "Sheryl",
                    "Shina",
                    "Shir",
                    "Shirl",
                    "Shirlee",
                    "Shirleen",
                    "Shirlene",
                    "Shirley",
                    "Shirline",
                    "Shoshana",
                    "Shoshanna",
                    "Siana",
                    "Sianna",
                    "Sib",
                    "Sibbie",
                    "Sibby",
                    "Sibeal",
                    "Sibel",
                    "Sibella",
                    "Sibelle",
                    "Sibilla",
                    "Sibley",
                    "Sibyl",
                    "Sibylla",
                    "Sibylle",
                    "Sidoney",
                    "Sidonia",
                    "Sidonnie",
                    "Sigrid",
                    "Sile",
                    "Sileas",
                    "Silva",
                    "Silvana",
                    "Silvia",
                    "Silvie",
                    "Simona",
                    "Simone",
                    "Simonette",
                    "Simonne",
                    "Sindee",
                    "Siobhan",
                    "Sioux",
                    "Siouxie",
                    "Sisely",
                    "Sisile",
                    "Sissie",
                    "Sissy",
                    "Siusan",
                    "Sofia",
                    "Sofie",
                    "Sondra",
                    "Sonia",
                    "Sonja",
                    "Sonni",
                    "Sonnie",
                    "Sonnnie",
                    "Sonny",
                    "Sonya",
                    "Sophey",
                    "Sophi",
                    "Sophia",
                    "Sophie",
                    "Sophronia",
                    "Sorcha",
                    "Sosanna",
                    "Stace",
                    "Stacee",
                    "Stacey",
                    "Staci",
                    "Stacia",
                    "Stacie",
                    "Stacy",
                    "Stafani",
                    "Star",
                    "Starla",
                    "Starlene",
                    "Starlin",
                    "Starr",
                    "Stefa",
                    "Stefania",
                    "Stefanie",
                    "Steffane",
                    "Steffi",
                    "Steffie",
                    "Stella",
                    "Stepha",
                    "Stephana",
                    "Stephani",
                    "Stephanie",
                    "Stephannie",
                    "Stephenie",
                    "Stephi",
                    "Stephie",
                    "Stephine",
                    "Stesha",
                    "Stevana",
                    "Stevena",
                    "Stoddard",
                    "Storm",
                    "Stormi",
                    "Stormie",
                    "Stormy",
                    "Sue",
                    "Suellen",
                    "Sukey",
                    "Suki",
                    "Sula",
                    "Sunny",
                    "Sunshine",
                    "Susan",
                    "Susana",
                    "Susanetta",
                    "Susann",
                    "Susanna",
                    "Susannah",
                    "Susanne",
                    "Susette",
                    "Susi",
                    "Susie",
                    "Susy",
                    "Suzann",
                    "Suzanna",
                    "Suzanne",
                    "Suzette",
                    "Suzi",
                    "Suzie",
                    "Suzy",
                    "Sybil",
                    "Sybila",
                    "Sybilla",
                    "Sybille",
                    "Sybyl",
                    "Sydel",
                    "Sydelle",
                    "Sydney",
                    "Sylvia",
                    "Tabatha",
                    "Tabbatha",
                    "Tabbi",
                    "Tabbie",
                    "Tabbitha",
                    "Tabby",
                    "Tabina",
                    "Tabitha",
                    "Taffy",
                    "Talia",
                    "Tallia",
                    "Tallie",
                    "Tallou",
                    "Tallulah",
                    "Tally",
                    "Talya",
                    "Talyah",
                    "Tamar",
                    "Tamara",
                    "Tamarah",
                    "Tamarra",
                    "Tamera",
                    "Tami",
                    "Tamiko",
                    "Tamma",
                    "Tammara",
                    "Tammi",
                    "Tammie",
                    "Tammy",
                    "Tamqrah",
                    "Tamra",
                    "Tana",
                    "Tandi",
                    "Tandie",
                    "Tandy",
                    "Tanhya",
                    "Tani",
                    "Tania",
                    "Tanitansy",
                    "Tansy",
                    "Tanya",
                    "Tara",
                    "Tarah",
                    "Tarra",
                    "Tarrah",
                    "Taryn",
                    "Tasha",
                    "Tasia",
                    "Tate",
                    "Tatiana",
                    "Tatiania",
                    "Tatum",
                    "Tawnya",
                    "Tawsha",
                    "Ted",
                    "Tedda",
                    "Teddi",
                    "Teddie",
                    "Teddy",
                    "Tedi",
                    "Tedra",
                    "Teena",
                    "TEirtza",
                    "Teodora",
                    "Tera",
                    "Teresa",
                    "Terese",
                    "Teresina",
                    "Teresita",
                    "Teressa",
                    "Teri",
                    "Teriann",
                    "Terra",
                    "Terri",
                    "Terrie",
                    "Terrijo",
                    "Terry",
                    "Terrye",
                    "Tersina",
                    "Terza",
                    "Tess",
                    "Tessa",
                    "Tessi",
                    "Tessie",
                    "Tessy",
                    "Thalia",
                    "Thea",
                    "Theadora",
                    "Theda",
                    "Thekla",
                    "Thelma",
                    "Theo",
                    "Theodora",
                    "Theodosia",
                    "Theresa",
                    "Therese",
                    "Theresina",
                    "Theresita",
                    "Theressa",
                    "Therine",
                    "Thia",
                    "Thomasa",
                    "Thomasin",
                    "Thomasina",
                    "Thomasine",
                    "Tiena",
                    "Tierney",
                    "Tiertza",
                    "Tiff",
                    "Tiffani",
                    "Tiffanie",
                    "Tiffany",
                    "Tiffi",
                    "Tiffie",
                    "Tiffy",
                    "Tilda",
                    "Tildi",
                    "Tildie",
                    "Tildy",
                    "Tillie",
                    "Tilly",
                    "Tim",
                    "Timi",
                    "Timmi",
                    "Timmie",
                    "Timmy",
                    "Timothea",
                    "Tina",
                    "Tine",
                    "Tiphani",
                    "Tiphanie",
                    "Tiphany",
                    "Tish",
                    "Tisha",
                    "Tobe",
                    "Tobey",
                    "Tobi",
                    "Toby",
                    "Tobye",
                    "Toinette",
                    "Toma",
                    "Tomasina",
                    "Tomasine",
                    "Tomi",
                    "Tommi",
                    "Tommie",
                    "Tommy",
                    "Toni",
                    "Tonia",
                    "Tonie",
                    "Tony",
                    "Tonya",
                    "Tonye",
                    "Tootsie",
                    "Torey",
                    "Tori",
                    "Torie",
                    "Torrie",
                    "Tory",
                    "Tova",
                    "Tove",
                    "Tracee",
                    "Tracey",
                    "Traci",
                    "Tracie",
                    "Tracy",
                    "Trenna",
                    "Tresa",
                    "Trescha",
                    "Tressa",
                    "Tricia",
                    "Trina",
                    "Trish",
                    "Trisha",
                    "Trista",
                    "Trix",
                    "Trixi",
                    "Trixie",
                    "Trixy",
                    "Truda",
                    "Trude",
                    "Trudey",
                    "Trudi",
                    "Trudie",
                    "Trudy",
                    "Trula",
                    "Tuesday",
                    "Twila",
                    "Twyla",
                    "Tybi",
                    "Tybie",
                    "Tyne",
                    "Ula",
                    "Ulla",
                    "Ulrica",
                    "Ulrika",
                    "Ulrikaumeko",
                    "Ulrike",
                    "Umeko",
                    "Una",
                    "Ursa",
                    "Ursala",
                    "Ursola",
                    "Ursula",
                    "Ursulina",
                    "Ursuline",
                    "Uta",
                    "Val",
                    "Valaree",
                    "Valaria",
                    "Vale",
                    "Valeda",
                    "Valencia",
                    "Valene",
                    "Valenka",
                    "Valentia",
                    "Valentina",
                    "Valentine",
                    "Valera",
                    "Valeria",
                    "Valerie",
                    "Valery",
                    "Valerye",
                    "Valida",
                    "Valina",
                    "Valli",
                    "Vallie",
                    "Vally",
                    "Valma",
                    "Valry",
                    "Van",
                    "Vanda",
                    "Vanessa",
                    "Vania",
                    "Vanna",
                    "Vanni",
                    "Vannie",
                    "Vanny",
                    "Vanya",
                    "Veda",
                    "Velma",
                    "Velvet",
                    "Venita",
                    "Venus",
                    "Vera",
                    "Veradis",
                    "Vere",
                    "Verena",
                    "Verene",
                    "Veriee",
                    "Verile",
                    "Verina",
                    "Verine",
                    "Verla",
                    "Verna",
                    "Vernice",
                    "Veronica",
                    "Veronika",
                    "Veronike",
                    "Veronique",
                    "Vevay",
                    "Vi",
                    "Vicki",
                    "Vickie",
                    "Vicky",
                    "Victoria",
                    "Vida",
                    "Viki",
                    "Vikki",
                    "Vikky",
                    "Vilhelmina",
                    "Vilma",
                    "Vin",
                    "Vina",
                    "Vinita",
                    "Vinni",
                    "Vinnie",
                    "Vinny",
                    "Viola",
                    "Violante",
                    "Viole",
                    "Violet",
                    "Violetta",
                    "Violette",
                    "Virgie",
                    "Virgina",
                    "Virginia",
                    "Virginie",
                    "Vita",
                    "Vitia",
                    "Vitoria",
                    "Vittoria",
                    "Viv",
                    "Viva",
                    "Vivi",
                    "Vivia",
                    "Vivian",
                    "Viviana",
                    "Vivianna",
                    "Vivianne",
                    "Vivie",
                    "Vivien",
                    "Viviene",
                    "Vivienne",
                    "Viviyan",
                    "Vivyan",
                    "Vivyanne",
                    "Vonni",
                    "Vonnie",
                    "Vonny",
                    "Vyky",
                    "Wallie",
                    "Wallis",
                    "Walliw",
                    "Wally",
                    "Waly",
                    "Wanda",
                    "Wandie",
                    "Wandis",
                    "Waneta",
                    "Wanids",
                    "Wenda",
                    "Wendeline",
                    "Wendi",
                    "Wendie",
                    "Wendy",
                    "Wendye",
                    "Wenona",
                    "Wenonah",
                    "Whitney",
                    "Wileen",
                    "Wilhelmina",
                    "Wilhelmine",
                    "Wilie",
                    "Willa",
                    "Willabella",
                    "Willamina",
                    "Willetta",
                    "Willette",
                    "Willi",
                    "Willie",
                    "Willow",
                    "Willy",
                    "Willyt",
                    "Wilma",
                    "Wilmette",
                    "Wilona",
                    "Wilone",
                    "Wilow",
                    "Windy",
                    "Wini",
                    "Winifred",
                    "Winna",
                    "Winnah",
                    "Winne",
                    "Winni",
                    "Winnie",
                    "Winnifred",
                    "Winny",
                    "Winona",
                    "Winonah",
                    "Wren",
                    "Wrennie",
                    "Wylma",
                    "Wynn",
                    "Wynne",
                    "Wynnie",
                    "Wynny",
                    "Xaviera",
                    "Xena",
                    "Xenia",
                    "Xylia",
                    "Xylina",
                    "Yalonda",
                    "Yasmeen",
                    "Yasmin",
                    "Yelena",
                    "Yetta",
                    "Yettie",
                    "Yetty",
                    "Yevette",
                    "Ynes",
                    "Ynez",
                    "Yoko",
                    "Yolanda",
                    "Yolande",
                    "Yolane",
                    "Yolanthe",
                    "Yoshi",
                    "Yoshiko",
                    "Yovonnda",
                    "Ysabel",
                    "Yvette",
                    "Yvonne",
                    "Zabrina",
                    "Zahara",
                    "Zandra",
                    "Zaneta",
                    "Zara",
                    "Zarah",
                    "Zaria",
                    "Zarla",
                    "Zea",
                    "Zelda",
                    "Zelma",
                    "Zena",
                    "Zenia",
                    "Zia",
                    "Zilvia",
                    "Zita",
                    "Zitella",
                    "Zoe",
                    "Zola",
                    "Zonda",
                    "Zondra",
                    "Zonnya",
                    "Zora",
                    "Zorah",
                    "Zorana",
                    "Zorina",
                    "Zorine",
                    "Zsa Zsa",
                    "Zsazsa",
                    "Zulema",
                    "Zuzana"
                ];

                var rn = names.random(names.length);

                var actions = [
                    'invested',
                    'made a withdrawal of',
                    'deposited',
                    'made a savings',
                    'Got a Loan approval of'
                ];

                var raction = actions.random(actions.length);

                var ramount = range_amount.random(range_amount.length);

                var a = (ramount).toLocaleString("en", {
                    style: "currency",
                    currency: "USD",
                    minimumFractionDigits: 2
                });

                msg = rn + ' ' + raction + ' ' + a;

                $.toast({
                    heading: 'Notification',
                    text: '<strong style="font-size: 14px">' + msg + '</strong>',
                    icon: 'info',
                    textColor: '#000',
                    bgColor: '#e9d16f',
                    loader: false,
                    position: 'left-center'
                });

            }

            var intervalId = setInterval(function() {
                showNotification();
            }, 5000);


        })
    </script>


<script src="../code.tidio.co_443/1mwp0csqhzyi6grb2o6o96crejgqqli6.js" async></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66994826becc2fed6927399b/1i33c3m6h';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

<!-- Mirrored from VortexIncome.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2024 12:15:23 GMT -->
</html>
