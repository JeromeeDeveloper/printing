@extends('layouts.app')

@section('content')
<div class="products-container">
   
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


    <div class="filters-and-table">
       
        <div class="filters">
            <h3>Filters</h3>
            <div class="filter-group">
                <label>Categories</label>
                <div class="checkboxes">
                    <label><input type="checkbox"> Electronics</label>
                    <label><input type="checkbox"> Furniture</label>
                    <label><input type="checkbox"> Clothing</label>
                </div>
            </div>

            <div class="filter-group">
                <label>Available Shops</label>
                <div class="checkboxes">
                    <label><input type="checkbox"> Shop A</label>
                    <label><input type="checkbox"> Shop B</label>
                    <label><input type="checkbox"> Shop C</label>
                </div>
            </div>

            <div class="filter-group">
                <label>Price</label>
                <div class="price-range">
                    <input type="number" id="price-min" class="price-input" value="0" min="0" max="1000" step="10">
                    <input type="range" id="price-range-min" value="0" min="0" max="1000" step="10">
                    <input type="range" id="price-range-max" value="1000" min="0" max="1000" step="10">
                    <input type="number" id="price-max" class="price-input" value="1000" min="0" max="1000" step="10">
                </div>
            </div>
            

            <div class="filter-group">
                <label>Discounts</label>
                <div class="checkboxes">
                    <label><input type="checkbox"> 10% Off</label>
                    <label><input type="checkbox"> 20% Off</label>
                    <label><input type="checkbox"> 50% Off</label>
                </div>
            </div>

            <div class="filter-group">
                <label>Ratings</label>
                <div class="checkboxes">
                    <label><input type="checkbox"> ★★★★☆</label>
                    <label><input type="checkbox"> ★★★☆☆</label>
                    <label><input type="checkbox"> ★★☆☆☆</label>
                </div>
            </div>

           
        </div>

      
        <div class="products-table">
            <div class="product_title">
            <h3>Products</h3>
            <div class="filter-buttons">
                <button class="btn">Search</button>
                <a href="{{ route('dashboard.add_service') }}" class="btn">Add Service</a>
            </div>
        </div>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Orders</th>
                        <th>Published On</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product A</td>
                        <td>P100</td>
                        <td>250</td>
                        <td>Nov 20, 2024</td>
                        <td><button class="btn">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Product B</td>
                        <td>P200</td>
                        <td>150</td>
                        <td>Nov 18, 2024</td>
                        <td><button class="btn">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Product C</td>
                        <td>P50</td>
                        <td>400</td>
                        <td>Nov 15, 2024</td>
                        <td><button class="btn">Edit</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

   
    <div class="pagination">
        <a href="#">&laquo; Prev</a>
        <a href="#">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">Next &raquo;</a>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const minRange = document.getElementById("price-range-min");
    const maxRange = document.getElementById("price-range-max");
    const minInput = document.getElementById("price-min");
    const maxInput = document.getElementById("price-max");


    function syncMin() {
        if (parseInt(minRange.value) > parseInt(maxRange.value)) {
            minRange.value = maxRange.value;
        }
        minInput.value = minRange.value;
    }

    function syncMax() {
        if (parseInt(maxRange.value) < parseInt(minRange.value)) {
            maxRange.value = minRange.value;
        }
        maxInput.value = maxRange.value;
    }

    function syncMinInput() {
        if (parseInt(minInput.value) > parseInt(maxInput.value)) {
            minInput.value = maxInput.value;
        }
        minRange.value = minInput.value;
    }

    function syncMaxInput() {
        if (parseInt(maxInput.value) < parseInt(minInput.value)) {
            maxInput.value = minInput.value;
        }
        maxRange.value = maxInput.value;
    }


    minRange.addEventListener("input", syncMin);
    maxRange.addEventListener("input", syncMax);
    minInput.addEventListener("input", syncMinInput);
    maxInput.addEventListener("input", syncMaxInput);
});

</script>
@endsection
