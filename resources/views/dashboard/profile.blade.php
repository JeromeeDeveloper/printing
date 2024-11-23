@extends('layouts.app')

@section('content')
    <div class="profile-page">
  
        <div class="profile-top-bar">
            <input type="text" class="profile-search-bar" placeholder="Search...">
            <div class="profile-icons">
                <i class="fas fa-moon"></i>
                <i class="fas fa-bell"></i>
            </div>
        </div>

   
        <h1>Profile</h1>

    
        <div class="profile-header">
            <img src="{{ asset('images/profile.png') }}" alt="Profile Image" class="profile-img">
            <div class="profile-info">
                <h2>kem</h2>
                <p>Manager</p>
            </div>
        </div>


        <h2>Personal Information</h2>
        <form class="profile-personal-info-form">
            <div class="profile-form-row">
                <div class="profile-form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="profile-form-control" placeholder="First Name">
                </div>
                <div class="profile-form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="profile-form-control" placeholder="Last Name">
                </div>
            </div>
            <div class="profile-form-row">
                <div class="profile-form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="profile-form-control" placeholder="Email">
                </div>
                <div class="profile-form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" id="mobile" name="mobile" class="profile-form-control" placeholder="Mobile Number">
                </div>
            </div>
            <div class="profile-form-row">
                <div class="profile-form-group profile-full-width">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="profile-form-control" placeholder="Address">
                </div>
            </div>
        </form>

   
        <h2>Business Information</h2>
        <form class="profile-business-info-form">
            <div class="profile-form-row">
                <div class="profile-form-group">
                    <label for="business_name">Business Name</label>
                    <input type="text" id="business_name" name="business_name" class="profile-form-control" placeholder="Business Name">
                </div>
                <div class="profile-form-group">
                    <label for="contact_no">Contact Number</label>
                    <input type="tel" id="contact_no" name="contact_no" class="profile-form-control" placeholder="Contact Number">
                </div>
            </div>
            <div class="profile-form-row">
                <div class="profile-form-group">
                    <label for="business_email">Business Email</label>
                    <input type="email" id="business_email" name="business_email" class="profile-form-control" placeholder="Business Email">
                </div>
                <div class="profile-form-group">
                    <label for="taxpayer">Taxpayer ID</label>
                    <input type="text" id="taxpayer" name="taxpayer" class="profile-form-control" placeholder="Taxpayer ID">
                </div>
            </div>
            <div class="profile-form-row">
                <div class="profile-form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" class="profile-form-control" placeholder="Location">
                </div>
                <div class="profile-form-group">
                    <label for="about">About</label>
                    <textarea id="about" name="about" class="profile-form-control" rows="3" placeholder="About"></textarea>
                </div>
            </div>
            <div class="profile-form-row">
                <div class="profile-form-group">
                    <label for="account_no">Account Number</label>
                    <input type="text" id="account_no" name="account_no" class="profile-form-control" placeholder="Account Number">
                </div>
                <div class="profile-form-group">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="logo" class="profile-form-control-file">
                </div>
            </div>
        </form>
    </div>
@endsection
