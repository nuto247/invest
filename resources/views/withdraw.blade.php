<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VortexIncome</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eef1f0;
            padding-top: 56px; /* To avoid content being hidden behind the navbar */
        }
        .navbar-nav {
            margin: auto;
        }
        .nav-link {
            text-transform: uppercase;
        }
        .navbar-custom {
            background-color: navy;
        }
        .custom-card {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .navy-card {
            background-color: navy;
            color: white;
        }
        .footer {
            background-color: black;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        /* Adding bottom border to all navbar items in mobile view */
        @media (max-width: 767px) {
            .navbar-nav .nav-item {
                position: relative;
            }
            .navbar-nav .nav-item::after {
                content: '';
                position: absolute;
                bottom: -1px;
                left: 0;
                width: 100%;
                height: 1px;
                background-color: #ccc; /* Adjust color as needed */
            }
        }
        /* Style for Available Balance card */
        .card-available-balance {
            background-color: navy;
            color: white;
        }
    </style>
</head>
<body>
    <!-- (omitted navbar content for brevity) -->

    <!-- Content with Form in Card -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 custom-card mb-3">
                <div class="card">
                    <div class="card-body">
                        <form  action="{{ route('withdrawx') }}" method="POST" id="investmentForm">
                            @csrf

                            <input type="hidden" name="status" value="Pending">
                            <input type="hidden" name="investment_type" value="Withdrawal">
                        
                            <div class="form-group">
                                <label for="cryptoNetwork">Select Crypto Network</label>
                                <select class="form-control" id="cryptoNetwork" name="crypto_network">
                                    <option value="bitcoin">Bitcoin</option>
                                    <option value="usdt_trc20">USDT TRC20</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="investmentAmount">Withdrawal Wallet Address</label>
                                <input type="text" class="form-control"  name="investment_wallet" placeholder="Enter your wallet address">
                            </div>
                            <div class="form-group">
                                <label for="investmentAmount">Withdrawal Amount (USD)</label>
                                <input type="number" class="form-control" id="investmentAmount" name="withdrawal_amount" placeholder="Enter amount" oninput="convertToBTC()">
                            </div>
                            <div class="form-group">
                                <label for="btcAmount">Equivalent Amount (BTC)</label>
                                <input type="text" class="form-control" id="btcAmount" name="btc_amount" placeholder="BTC amount" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Withdraw Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <!-- (omitted footer content for brevity) -->

    <!-- Bootstrap and jQuery -->
    <!-- (omitted scripts for brevity) -->

    <!-- JavaScript for BTC Conversion -->
    <script>
        function convertToBTC() {
            const btcRate = 30000; // Example conversion rate, 1 BTC = 30000 USD
            const investmentAmount = document.getElementById('investmentAmount').value;
            const btcAmount = investmentAmount / btcRate;
            document.getElementById('btcAmount').value = btcAmount.toFixed(6); // Display up to 6 decimal places
        }

   
    </script>
</body>
</html>
