@include('head')

<!-- Welcome Message -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">

        </div>
    </div>
</div>

<!-- Content with 3 Column Cards -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 custom-card mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                        rel="noopener nofollow" target="_blank"></a></div>
                                <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js"
                                    async>
                                {
                                    "symbol": "CME:BTC1!",
                                    "width": "100%",
                                    "isTransparent": false,
                                    "colorTheme": "light",
                                    "locale": "en"
                                }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                            <p>{{$user->email}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 custom-card mb-3">
            <div class="card card-available-balance">
                <div class="card-body">
                    <h5 class="card-title">0.00USD</h5>
                    <p class="card-text">Available Balance</p>
                </div>
            </div>
        </div>
        <div class="col-md-8 custom-card mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">

                                @if($transactions->isEmpty())
                                <p>0.00USD.</p>
                                @else{{ number_format($totalInvestment, 2) }} USD
                                @endif
                            </h5>
                            <p class="card-text">Total Investments</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">
                                @if($transactions->isEmpty())
                                <p>0.00USD.</p>
                                @else{{ number_format($totalInvestment, 2) }} USD
                                @endif</h5>
                            <p class="card-text">Total Withdrawals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Second row replicated -->
    <div class="row">
        <div class="col-md-4 custom-card mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">0.00USD</h5>
                    <p class="card-text">This month profit</p>
                    <a href="withdraw"><button class="btn btn-primary btn-block">Withdraw Now!</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-8 custom-card mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">0.00USD</h5>
                    <p class="card-text">You have no active Investments</p>
                    <a href="invest"><button class="btn btn-secondary btn-block">Invest now!</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TradingView Ticker Tape Widget -->
<div class="container mt-5">
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright">
            <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">

            </a>
        </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
            async>
        {
            "symbols": [{
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500 Index"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "US 100 Cash CFD"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR to USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                }
            ],
            "showSymbolLogo": true,
            "isTransparent": false,
            "displayMode": "adaptive",
            "colorTheme": "light",
            "locale": "en"
        }
        </script>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <span>&copy; 2024 VortexIncome. All rights reserved.</span>
    </div>
</footer>

<!-- Bootstrap and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/66994826becc2fed6927399b/1i33c3m6h';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>