@include('head')
<!-- Google Translate Element -->
<div id="google_translate_element" class="mt-3"></div>
<!-- Welcome Message -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <!-- Add any welcome message or introductory content here -->
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
                                <div class="tradingview-widget-copyright">
                                    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                                </div>
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
                <!-- Add more cards here if needed -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 custom-card mb-3">
            <div class="card card-available-balance">
                <div class="card-body">
                    <h5 class="card-title">
                        @if($transactions->isEmpty())
                        <p>0.00 USD</p>
                        @else
                        {{ number_format($totalInvestment, 2) }} USD
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

                        @php
                        $activeInvestment = $transactions->firstWhere('investment_amount', '>', 0);
                        @endphp
                        @if($transactions->isEmpty())
                        <p>0.00 USD</p>
                        @else
                     
                        @endif
                    </h5>
                    <p class="card-text">
                        @php
                        $activeInvestment = $transactions->firstWhere('investment_amount', '>', 0);
                        @endphp
                        @if(!$activeInvestment)
                        No Active Investments
                        <br><br>
                        <a href="invest"><button class="btn btn-secondary btn-block">Invest now!</button></a>

                        @else
                        Active Investment: {{ $activeInvestment->investment_plan }}
                        @endif
                    </p>

                </div>
            </div>
        </div>


    </div>
    <!-- Second row replicated -->
    <div class="row">
        <div class="col-md-12 custom-card mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        @if($transactions->isEmpty())
                        <p>0.00 USD</p>
                        @else
                        {{ number_format($totalWithdrawal, 2) }} USD
                        @endif
                    </h5>
                    <p class="card-text">Total Withdrawals</p>
                    <a href="withdraw"><button class="btn btn-primary btn-block">Withdraw Now!</button></a>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-md-12 custom-card mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        @if($transactions->isEmpty())
                        <p>0.00 USD</p>
                        @else
                        {{ number_format($totalWithdrawal, 2) }} USD
                        @endif
                    </h5>
                    <p class="card-text">Total Withdrawals</p>
                    <a href="withdraw"><button class="btn btn-primary btn-block">Withdraw Now!</button></a>
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
            <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
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

@include('footer')