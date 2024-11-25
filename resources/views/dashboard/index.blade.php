@extends('layouts.app')

@section('content')
<div class="dashboard-container">
 
    <div class="top-bar">
 
        <div class="search-bar-dashboard">
            <span class="search-icon">
                <i class="fas fa-search"></i> 
            </span>
            <input type="text" placeholder="Search...">
        </div>
        

        <div class="top-icons">
            <i class="fas fa-moon"></i>
            <i class="fas fa-bell"></i>
        </div>
    </div>

  
    <div class="welcome-bar">
        <div class="welcome-text">
            <h2>Hello, Welcome Back!</h2>
            <p>Here’s what’s happening with your business today</p>
        </div>
        <div class="welcome-right">
            <span class="span">
                {{ date('F j, Y') }}
                <i class="fas fa-calendar-alt"></i> 
            </span>
            <a href="{{ route('dashboard.add_service') }}" class="btn2">
                <i class="fas fa-plus"></i>
                Add Service
            </a>
        </div>
        
    </div>


    <div class="metrics">
        <div class="metric-box">
            <div class="metric-left">
                <h3>Total Orders</h3>
                <p>36,778</p>
            </div>
            <div class="metric-right">
                <i class="fas fa-arrow-up"></i> +5.21%
            </div>
        </div>
        <div class="metric-box">
            <div class="metric-left">
                <h3>Total Earnings</h3>
                <p>P12,345</p>
            </div>
            <div class="metric-right">
                <i class="fas fa-arrow-up"></i> +3.14%
            </div>
        </div>
        <div class="metric-box">
            <div class="metric-left">
                <h3>New Customers</h3>
                <p>456</p>
            </div>
            <div class="metric-right">
                <i class="fas fa-arrow-down"></i> -1.12%
            </div>
        </div>
    </div>
    


    <div class="chart-location">
        <div class="chart">
            <h3>Category Sales</h3>
            <div id="sales-chart">[Chart Placeholder]</div>
        </div>
        <div class="location">
            <h3>Location</h3>
            <div id="location-map">[Location Placeholder]</div>
        </div>
    </div>

    <div class="best-sellers">
        <h3>Best Sellers</h3>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Sales</th>
                    <th>Ratings</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td>
                    <td>P500</td>
                    <td>300</td>
                    <td>4.8</td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>P400</td>
                    <td>250</td>
                    <td>4.5</td>
                </tr>
                <tr>
                    <td>Product 3</td>
                    <td>P350</td>
                    <td>200</td>
                    <td>4.3</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
