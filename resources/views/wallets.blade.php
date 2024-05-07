@extends('layout.main')
@section('title','Wallets')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-4">
                                <div class="page-title-content">
                                    <h3>Wallets</h3>
                                    <p class="mb-2">Welcome To Expense Tracker</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="breadcrumbs"><a href="{{ route('get.index') }}">Home </a>
                                    <span><i class="fi fi-rr-angle-small-right"></i></span>
                                    <a href="#">Wallets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wallet-tab">
                <div class="row g-0">
                    <div class="col-xl-3">
                        <div class="nav d-block">
                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <div class="wallet-nav active" data-bs-toggle="pill" data-bs-target="#a1">
                                        <div class="wallet-nav-icon">
                                            <span><i class="fi fi-rr-bank"></i></span>
                                        </div>
                                        <div class="wallet-nav-text">
                                            <h3>City Bank</h3>
                                            <p>$221,478</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="wallet-nav" data-bs-toggle="pill" data-bs-target="#a2">
                                        <div class="wallet-nav-icon">
                                            <span><i class="fi fi-rr-credit-card"></i></span>
                                        </div>
                                        <div class="wallet-nav-text">
                                            <h3>Debit Card</h3>
                                            <p>$221,478</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="wallet-nav" data-bs-toggle="pill" data-bs-target="#a3">
                                        <div class="wallet-nav-icon">
                                            <span><i class="fi fi-brands-visa"></i></span>
                                        </div>
                                        <div class="wallet-nav-text">
                                            <h3>Visa Card</h3>
                                            <p>$221,478</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="wallet-nav" data-bs-toggle="pill" data-bs-target="#a4">
                                        <div class="wallet-nav-icon">
                                            <span><i class="fi fi-rr-money-bill-wave-alt"></i></span>
                                        </div>
                                        <div class="wallet-nav-text">
                                            <h3>Cash</h3>
                                            <p>$221,478</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-card-link">
                            <h5 class="mb-0">Add new wallet</h5>
                            <a class="btn-tab" data-target="add-new-account" href="javascript:void(0)">
                                <i class="fi fi-rr-square-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="tab-content wallet-tab-content">
                            <div class="tab-pane show active" id="a1">
                                <div class="wallet-tab-title">
                                    <h3>City Bank</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="wallet-total-balance">
                                                    <p class="mb-0">Total Balance</p>
                                                    <h2>$221,478</h2>
                                                </div>
                                                <div class="funds-credit">
                                                    <p class="mb-0">Personal Funds</p>
                                                    <h5>$32,500.28</h5>
                                                </div>
                                                <div class="funds-credit">
                                                    <p class="mb-0">Credit Limits</p>
                                                    <h5>$2500.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="credit-card visa">
                                            <div class="type-brand">
                                                <h4>Debit Card</h4>
                                                <img src="{{ asset('assets') }}/images/cc/visa.png" alt="">
                                            </div>
                                            <div class="cc-number">
                                                <h6>1234</h6>
                                                <h6>5678</h6>
                                                <h6>7890</h6>
                                                <h6>9875</h6>
                                            </div>
                                            <div class="cc-holder-exp">
                                                <h5>Saiful Islam</h5>
                                                <div class="exp"><span>EXP:</span><strong>12/21</strong></div>
                                            </div>
                                            <div class="cc-info">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-5">
                                                        <div class="d-flex">
                                                            <p class="me-3">Status</p>
                                                            <p><strong>Active</strong></p>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="me-3">Currency</p>
                                                            <p><strong>USD</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="ms-3">
                                                                <p>Credit Limit</p>
                                                                <p><strong>2000 USD</strong></p>
                                                            </div>
                                                            <div id="circle3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="stat-widget-1">
                                            <h6>Total Balance</h6>
                                            <h3>$ 432568</h3>
                                            <p>
                                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                                Last month <strong>$24,478</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="stat-widget-1">
                                            <h6>Monthly Expenses</h6>
                                            <h3>$ 432568</h3>
                                            <p>
                                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                                Last month <strong>$24,478</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Balance Overtime</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas id="chartjsBalanceOvertime"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Transaction History</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="transaction-table">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 table-responsive-sm">
                                                            <thead>
                                                            <tr>
                                                                <th>Category</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Currency</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                                                                Beauty</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-teal-500 fi fi-rr-receipt"></i>
                                                                                Bills &
                                                                                Fees</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-cyan-500 fi fi-rr-car-side"></i>
                                                                                Car</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                                                                Education</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                                                                Entertainment</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="a2">
                                <div class="wallet-tab-title">
                                    <h3>Debit Card</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="wallet-total-balance">
                                                    <p class="mb-0">Total Balance</p>
                                                    <h2>$221,478</h2>
                                                </div>
                                                <div class="funds-credit">
                                                    <p class="mb-0">Personal Funds</p>
                                                    <h5>$32,500.28</h5>
                                                </div>
                                                <div class="funds-credit">
                                                    <p class="mb-0">Credit Limits</p>
                                                    <h5>$2500.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="credit-card visa">
                                            <div class="type-brand">
                                                <h4>Debit Card</h4>
                                                <img src="{{ asset('assets') }}/images/cc/visa.png" alt="">
                                            </div>
                                            <div class="cc-number">
                                                <h6>1234</h6>
                                                <h6>5678</h6>
                                                <h6>7890</h6>
                                                <h6>9875</h6>
                                            </div>
                                            <div class="cc-holder-exp">
                                                <h5>Saiful Islam</h5>
                                                <div class="exp"><span>EXP:</span><strong>12/21</strong></div>
                                            </div>
                                            <div class="cc-info">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-5">
                                                        <div class="d-flex">
                                                            <p class="me-3">Status</p>
                                                            <p><strong>Active</strong></p>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="me-3">Currency</p>
                                                            <p><strong>USD</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="ms-3">
                                                                <p>Credit Limit</p>
                                                                <p><strong>2000 USD</strong></p>
                                                            </div>
                                                            <div id="circle4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="stat-widget-1">
                                            <h6>Total Balance</h6>
                                            <h3>$ 432568</h3>
                                            <p>
                                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                                Last month <strong>$24,478</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="stat-widget-1">
                                            <h6>Monthly Expenses</h6>
                                            <h3>$ 432568</h3>
                                            <p>
                                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                                Last month <strong>$24,478</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Balance Overtime</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas id="chartjsBalanceOvertime2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Transaction History</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="transaction-table">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 table-responsive-sm">
                                                            <thead>
                                                            <tr>
                                                                <th>Category</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Currency</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                                                                Beauty</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-teal-500 fi fi-rr-receipt"></i>
                                                                                Bills &
                                                                                Fees</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-cyan-500 fi fi-rr-car-side"></i>
                                                                                Car</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                                                                Education</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                                                                Entertainment</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="a3">
                                <div class="wallet-tab-title">
                                    <h3>Visa Card</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="wallet-total-balance">
                                                    <p class="mb-0">Total Balance</p>
                                                    <h2>$221,478</h2>
                                                </div>
                                                <div class="funds-credit">
                                                    <p class="mb-0">Personal Funds</p>
                                                    <h5>$32,500.28</h5>
                                                </div>
                                                <div class="funds-credit">
                                                    <p class="mb-0">Credit Limits</p>
                                                    <h5>$2500.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="credit-card visa">
                                            <div class="type-brand">
                                                <h4>Debit Card</h4>
                                                <img src="{{ asset('assets') }}/images/cc/visa.png" alt="">
                                            </div>
                                            <div class="cc-number">
                                                <h6>1234</h6>
                                                <h6>5678</h6>
                                                <h6>7890</h6>
                                                <h6>9875</h6>
                                            </div>
                                            <div class="cc-holder-exp">
                                                <h5>Saiful Islam</h5>
                                                <div class="exp"><span>EXP:</span><strong>12/21</strong></div>
                                            </div>
                                            <div class="cc-info">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-5">
                                                        <div class="d-flex">
                                                            <p class="me-3">Status</p>
                                                            <p><strong>Active</strong></p>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="me-3">Currency</p>
                                                            <p><strong>USD</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="ms-3">
                                                                <p>Credit Limit</p>
                                                                <p><strong>2000 USD</strong></p>
                                                            </div>
                                                            <div id="circle5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="stat-widget-1">
                                            <h6>Total Balance</h6>
                                            <h3>$ 432568</h3>
                                            <p>
                                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                                Last month <strong>$24,478</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="stat-widget-1">
                                            <h6>Monthly Expenses</h6>
                                            <h3>$ 432568</h3>
                                            <p>
                                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                                Last month <strong>$24,478</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Balance Overtime</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas id="chartjsBalanceOvertime3"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Transaction History</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="transaction-table">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 table-responsive-sm">
                                                            <thead>
                                                            <tr>
                                                                <th>Category</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Currency</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                                                                Beauty</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-teal-500 fi fi-rr-receipt"></i>
                                                                                Bills &
                                                                                Fees</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-cyan-500 fi fi-rr-car-side"></i>
                                                                                Car</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                                                                Education</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                                                                Entertainment</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="a4">
                                <div class="wallet-tab-title">
                                    <h3>Cash</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="wallet-total-balance">
                                                    <p class="mb-0">Total Balance</p>
                                                    <h2>$221,478</h2>
                                                </div>
                                                <div class="funds-credit">
                                                    <p class="mb-0">Personal Funds</p>
                                                    <h5>$32,500.28</h5>
                                                </div>
                                                <div class="funds-credit">
                                                    <p class="mb-0">Credit Limits</p>
                                                    <h5>$2500.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="credit-card visa">
                                            <div class="type-brand">
                                                <h4>Debit Card</h4>
                                                <img src="{{ asset('assets') }}/images/cc/visa.png" alt="">
                                            </div>
                                            <div class="cc-number">
                                                <h6>1234</h6>
                                                <h6>5678</h6>
                                                <h6>7890</h6>
                                                <h6>9875</h6>
                                            </div>
                                            <div class="cc-holder-exp">
                                                <h5>Saiful Islam</h5>
                                                <div class="exp"><span>EXP:</span><strong>12/21</strong></div>
                                            </div>
                                            <div class="cc-info">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-5">
                                                        <div class="d-flex">
                                                            <p class="me-3">Status</p>
                                                            <p><strong>Active</strong></p>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="me-3">Currency</p>
                                                            <p><strong>USD</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="ms-3">
                                                                <p>Credit Limit</p>
                                                                <p><strong>2000 USD</strong></p>
                                                            </div>
                                                            <div id="circle2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="stat-widget-1">
                                            <h6>Total Balance</h6>
                                            <h3>$ 432568</h3>
                                            <p>
                                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                                Last month <strong>$24,478</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="stat-widget-1">
                                            <h6>Monthly Expenses</h6>
                                            <h3>$ 432568</h3>
                                            <p>
                                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                                Last month <strong>$24,478</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Balance Overtime</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas id="chartjsBalanceOvertime4"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Transaction History</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="transaction-table">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 table-responsive-sm">
                                                            <thead>
                                                            <tr>
                                                                <th>Category</th>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                                <th>Currency</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                                                                Beauty</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-teal-500 fi fi-rr-receipt"></i>
                                                                                Bills &
                                                                                Fees</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-cyan-500 fi fi-rr-car-side"></i>
                                                                                Car</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                                                                Education</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                            <span class="table-category-icon"><i
                                                                                    class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                                                                Entertainment</span>
                                                                </td>
                                                                <td>
                                                                    12.12.2023
                                                                </td>
                                                                <td>
                                                                    Grocery Items and Beverage soft drinks
                                                                </td>
                                                                <td>
                                                                    -32.20
                                                                </td>
                                                                <td>USD</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.add-new-account')
    @include('components.add-bank')
@endsection
@section('page-js')
    <script src="{{ asset('assets') }}/js/plugins/chartjs-line-balance-overtime.js"></script>
    <script>
        $('.btn-tab').on('click', function () {
            window.scrollTo(0, 0);
            const target = this.getAttribute('data-target');
            $('.content-body').hide();
            $(`#${target}`).show();
        });
        $('#addBankForm').parsley().on('form:submit', function (formInstance) {
            ajaxCall('{{ route('wallets.store') }}', formInstance.$element.serialize(), function (response) {
                if (response.success) {

                }
            }, formInstance.$element.find('button[type="submit"]'));
            return false;
        });
    </script>
@endsection
