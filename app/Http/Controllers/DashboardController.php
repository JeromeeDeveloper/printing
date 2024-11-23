<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function products()
    {
        return view('dashboard.products');
    }

    public function sales()
    {
        return view('dashboard.sales');
    }

    public function gateway()
    {
        return view('dashboard.gateway');
    }

    public function addService()
    {
        return view('dashboard.add_service');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function storeService(Request $request)
    {
        // Validate the form data
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        // Logic to store the service (e.g., database save) can go here

        return redirect()->route('dashboard.index')->with('success', 'Service added successfully!');
    }
}
