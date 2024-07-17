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
    <!-- Sticky Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <a class="navbar-brand" href="#"><img src="logo.png" alt="Brand Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="investmentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-chart-line"></i> Investments
                    </a>
                    <div class="dropdown-menu" aria-labelledby="investmentsDropdown">
                        <a class="dropdown-item" href="#">Invest Now</a>
                        <a class="dropdown-item" href="#">Withdraw</a>
                        <a class="dropdown-item" href="#">Transactions</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-piggy-bank"></i> Savings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>
                </li>
            </ul>
            <!-- User Management Dropdown -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userManagementDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>{{$user->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userManagementDropdown">
                        <a class="dropdown-item" href="logout">Sign Out</a>
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
                    <h2>Welcome, {{$user->name}}!</h2>
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
                                <h5 class="card-title">0.00USD</h5>
                                <p class="card-text">Total Investments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">0.00USD</h5>
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
                        <button class="btn btn-primary btn-block">Request for a loan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8 custom-card mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">0.00USD</h5>
                        <p class="card-text">You have no active Investments</p>
                        <a href="plans"><button class="btn btn-secondary btn-block">Invest now!</button></a>
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
