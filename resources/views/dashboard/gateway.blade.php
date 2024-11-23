@extends('layouts.app')

@section('content')
   
    <div class="top-bar">
        <input type="text" class="search-bar" placeholder="Search...">
        <div class="icons">
            <i class="fas fa-moon"></i>
            <i class="fas fa-bell"></i>
        </div>
    </div>


    <h1>Order Detail</h1>
    <p>Order ID: <strong>12345</strong></p>

   
    <div class="info-boxes">
     
        <div class="info-box">
            <h2>Customer Details</h2>
            <div class="customer-details">
                <img src="{{ asset('images/customer.png') }}" alt="Customer" class="customer-img">
                <div class="customer-info">
                    <p><strong>KEM</strong></p>
                    <p><i class="fas fa-envelope"></i> kem.kem@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +1 123 456 7890</p>
                </div>
            </div>
        </div>

        <div class="info-box">
            <h2>Shipping Address</h2>
            <p>123 Main Street, Suite 400<br>Cityville, CA 12345</p>
        </div>

  
        <div class="info-box">
            <h2>Payment Details</h2>
            <p><strong>Transactions:</strong> #TX12345</p>
            <p><strong>Payment Method:</strong> Credit Card</p>
            <p><strong>Total Amount:</strong> P200</p>
        </div>
    </div>

   
    <h2>Product Details</h2>
    <div class="table-container">
        <table class="product-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Product ID</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sample Product A</td>
                    <td>#P123</td>
                    <td>P50</td>
                    <td>2</td>
                    <td>P100</td>
                </tr>
                <tr>
                    <td>Sample Product B</td>
                    <td>#P456</td>
                    <td>P100</td>
                    <td>1</td>
                    <td>P100</td>
                </tr>
            </tbody>
        </table>
    </div>

  
    <div class="details-boxes">
   
        <div class="details-box">
            <h2>Delivery Details</h2>
            <p><strong>Delivery Method:</strong> Express Shipping</p>
            <p><strong>Expected Date:</strong> 2024-11-30</p>
        </div>

   
        <div class="details-box">
            <h2>Total Bill</h2>
            <p><strong>Subtotal:</strong> P200</p>
            <p><strong>Discount:</strong> P0</p>
            <p><strong>Logistics:</strong> P20</p>
            <p><strong>Tax:</strong> P10</p>
            <p><strong>Total:</strong> P230</p>
        </div>
    </div>


    <div class="bottom-section">
     
        <div class="order-status">
            <h2>Order Status</h2>
            <p><strong>Status:</strong> Shipped</p>
        </div>

       
        <div class="previous-orders">
            <h2>Previous Orders</h2>
            <ul>
                <li>#O123 - P100</li>
                <li>#O124 - P50</li>
                <li>#O125 - P150</li>
            </ul>
        </div>
    </div>
@endsection
