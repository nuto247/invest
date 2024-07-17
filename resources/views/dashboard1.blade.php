<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VortexIncome</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        /* Adding bottom border to cards */
        .custom-card .card {
            border-bottom: 10px solid #000; /* Black border, adjust color as needed */
        }
        /* Full width buttons */
        .btn-full-width {
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Sticky Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <a class="navbar-brand" href="#"><img src="logo.png" alt="Brand Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="investmentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Investments
                    </a>
                    <div class="dropdown-menu" aria-labelledby="investmentsDropdown">
                        <a class="dropdown-item" href="#">Invest Now</a>
                        <a class="dropdown-item" href="#">Withdraw</a>
                        <a class="dropdown-item" href="#">Transactions</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Savings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
            <!-- User Management Dropdown -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userManagementDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userManagementDropdown">
                        <a class="dropdown-item" href="#">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Welcome Message -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="custom-card mb-3">
                    <h2>Welcome, Administrator!</h2>
                    <p>At a glance summary of your account. Have fun!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card mb-3">
                    <!-- Placeholder for future content -->
                </div>
            </div>
        </div>
    </div>

    <!-- Content with 3 Column Cards -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 custom-card mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">0.00USD</h5>
                        <p class="card-text">Available Balance</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8 custom-card mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">0.00USD</h5>
                        <p class="card-text">Total Invested and Total Withdrawal</p>
                        
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
                        <button class="btn btn-primary btn-full-width">Request for a loan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8 custom-card mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">0.00USD</h5>
                        <p class="card-text">My Investments</p>
                        <button class="btn btn-secondary btn-full-width">See all investments</button>
                    </div>
                </div>
            </div>
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
</body>
</html>
