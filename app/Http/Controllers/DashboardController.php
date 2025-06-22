// app/Http/Controllers/DashboardController.php
<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Access\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}