@extends('layouts.app')

@section('content')
    <div class="add-service-page">

        <div class="add-service-top-bar">
            <div class="search-bar-dashboard">
                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="add-service-search-bar" placeholder="Search...">
            </div>
            <div class="add-service-icons">
                <i class="fas fa-moon"></i>
                <i class="fas fa-bell"></i>
            </div>
        </div>
        

        <h1>Add Service</h1>

        <form action="{{ route('dashboard.store_service') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="add-service-form">
              
                <div class="add-service-column">
                    <div class="form-group">
                        <label for="service_title">Service Title</label>
                        <input type="text" id="service_title" name="service_title" class="add-service-input">
                    </div>
                    <div class="form-group">
                        <label for="service_description">Service Description</label>
                        <textarea id="service_description" name="service_description" class="add-service-textarea"></textarea>
                    </div>
                    <h3>General Info</h3>
                    <div class="form-group">
                        <label for="shop_name">Shop Name</label>
                        <input type="text" id="shop_name" name="shop_name" class="add-service-input">
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" id="brand" name="brand" class="add-service-input">
                    </div>
                    <div class="form-group">
                        <label for="original_price">Original Price</label>
                        <input type="number" id="original_price" name="original_price" class="add-service-input">
                    </div>
                    <div class="form-group">
                        <label for="discounts">Discounts</label>
                        <input type="text" id="discounts" name="discounts" class="add-service-input">
                    </div>
                    <div class="form-group">
                        <label for="sites_available">Sites Available</label>
                        <input type="text" id="sites_available" name="sites_available" class="add-service-input">
                    </div>
                    <div class="form-group">
                        <label for="colors">Colors</label>
                        <input type="text" id="colors" name="colors" class="add-service-input">
                    </div>
                </div>

              
                <div class="add-service-column">
                    <h2>Publish</h2>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" class="add-service-select">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="visibility">Visibility</label>
                        <select id="visibility" name="visibility" class="add-service-select">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <h3>Public Schedule</h3>
                    <div class="form-group">
                        <label for="schedule_date">Select Date</label>
                        <input type="date" id="schedule_date" name="schedule_date" class="add-service-input">
                    </div>
                    <h3>Service Category</h3>
                    <div class="form-group">
                        <label for="service_category">Category</label>
                        <select id="service_category" name="service_category" class="add-service-select">
                            <option value="category_1">Category 1</option>
                            <option value="category_2">Category 2</option>
                        </select>
                    </div>
                    <h3>Product Tags</h3>
                    <div class="form-group">
                        <label for="tags">Enter Tags</label>
                        <input type="text" id="tags" name="tags" class="add-service-input" placeholder="Comma-separated tags">
                    </div>
                    <div class="form-group">
                        <label for="additional_text">Additional Text</label>
                        <textarea id="additional_text" name="additional_text" class="add-service-textarea"></textarea>
                    </div>
                </div>
            </div>

       
            <h3>Service Sample Image</h3>
            <div class="form-group">
                <label for="sample_image">Add Product Main Image</label>
                <input type="file" id="sample_image" name="sample_image" class="add-service-file-input">
            </div>

            <h3>Add Additional Product Image</h3>
            <div class="form-group">
                <input type="file" id="additional_images" name="additional_images[]" multiple class="add-service-file-input">
            </div>

      
            <button type="submit" class="add-service-submit-btn">Submit</button>
        </form>
    </div>
@endsection
