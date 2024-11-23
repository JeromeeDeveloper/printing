@extends('layouts.app')

@section('content')
  
    <div class="top-bar">
        <input type="text" class="search-bar" placeholder="Search...">
        <div class="icons">
            <i class="fas fa-moon"></i>
            <i class="fas fa-bell"></i>
        </div>
    </div>


    <h1>Overall Sales</h1>

 
    <div class="filters-actions">
        <select class="dropdown">
            <option value="all">All Status</option>
            <option value="delivered">Delivered</option>
            <option value="pending">Pending</option>
            <option value="cancelled">Cancelled</option>
            <option value="cancelled">Cancelled</Cption>
            <option value="exchanged">Exchanged</option>
        </select>
        <button class="btn-search-orders">Search Orders</button>
    </div>

   
    <label class="services-label">All Availed Services</label>


    <div class="table-container">
        <table class="sales-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Product Price</th>
                    <th>Ordered On</th>
                    <th>Payment Method</th>
                    <th>Delivery Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>Kem</td>
                    <td>P120</td>
                    <td>2024-11-22</td>
                    <td>Credit Card</td>
                    <td>Shipped</td>
                    <td>
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Jane Smith</td>
                    <td>P90</td>
                    <td>2024-11-21</td>
                    <td>PayPal</td>
                    <td>Processing</td>
                    <td>
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

   
    <div class="pagination">
        <button class="pagination-btn">Previous</button>
        <span class="page-info">Page 1 of 5</span>
        <button class="pagination-btn">Next</button>
    </div>
@endsection
