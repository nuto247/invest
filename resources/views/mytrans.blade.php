@include('head')


<!-- Google Translate Element -->
<div id="google_translate_element" class="mt-3"></div>

    <!-- Welcome Message -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="custom-card mb-3">
                   
                        <div>
                           <h2>All Transactions</h2>
                        </div>
                       
       
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card mb-3">
                    <!-- Placeholder for future content -->
                </div>
            </div>
        </div>
    </div>

    <!-- Content with Form in Card -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 custom-card mb-3">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            
                             
                                <tr>
                                          <th scope="col">Transaction Type</th>
                                    <th scope="col">Investment Plan</th>
                              
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                           
                                </tr>
                             
                            </thead>
                            <tbody>

                            @foreach($transactions as $transaction)
                                <tr>
                                    <th scope="row">{{ $transaction->investment_type }}</td>
                                    <td>{{ $transaction->investment_plan }}</td>
                       
                                    <td>{{ $transaction->investment_amount }}</td>
                                    <td>{{ $transaction->status }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [
                {
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
    <!-- TradingView Widget END -->
@include('footer')