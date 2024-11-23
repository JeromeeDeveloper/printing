@extends('layouts.app')

@section('content')
<div class="dashboard-container">
 
    <div class="top-bar">
 
        <div class="search-bar">
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
        </div>
        <div class="welcome-right">
            <span>{{ date('F j, Y') }}</span>
            <a href="{{ route('dashboard.add_service') }}" class="btn">Add Service</a>
        </div>
    </div>


    <div class="metrics">
        <div class="metric-box">
            <h3>Total Orders</h3>
            <p>1,234</p>
        </div>
        <div class="metric-box">
            <h3>Total Earnings</h3>
            <p>P12,345</p>
        </div>
        <div class="metric-box">
            <h3>New Customers</h3>
            <p>456</p>
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
