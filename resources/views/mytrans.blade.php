@include('head')

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

    <!-- JavaScript for Countup Timer -->
    <script>
        function countupTimer() {
            const startTime = new Date().getTime();
            const daysElement = document.getElementById("days");
            const hoursElement = document.getElementById("hours");
            const minutesElement = document.getElementById("minutes");
            const secondsElement = document.getElementById("seconds");

            function updateTimer() {
                const now = new Date().getTime();
                const timeElapsed = now - startTime;

                const days = Math.floor(timeElapsed / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeElapsed % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeElapsed % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeElapsed % (1000 * 60)) / 1000);

                daysElement.innerHTML = days.toString().padStart(2, '0');
                hoursElement.innerHTML = hours.toString().padStart(2, '0');
                minutesElement.innerHTML = minutes.toString().padStart(2, '0');
                secondsElement.innerHTML = seconds.toString().padStart(2, '0');
            }

            setInterval(updateTimer, 1000);
        }

        document.addEventListener("DOMContentLoaded", countupTimer);
    </script>

    <!-- Additional Scripts -->
    <script>
        function convertToBTC() {
            const usdAmount = document.getElementById("usdAmount").value;
            const btcRate = 0.000029; 
            const btcAmount = usdAmount * btcRate;
            document.getElementById("btcAmount").value = btcAmount.toFixed(8);
        }

        function handleFormSubmission() {
            document.getElementById('investmentForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const selectedNetwork = document.getElementById('selectNetwork').value;
                if (selectedNetwork === 'bitcoin') {
                    window.location.href = 'bitcoin.html';
                } else if (selectedNetwork === 'ethereum') {
                    window.location.href = 'ethereum.html';
                } else {
                    alert('Please select a valid network');
                }
            });
        }

        document.addEventListener("DOMContentLoaded", handleFormSubmission);
    </script>

    <!-- Tawk.to Integration -->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/your_property_id/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
</body>
</html>
