<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $reports = Report::all();
        $services = Service::all();
        $userId = Auth::id();   
        return view('admin.admin', compact('reports','services','userId'));
    }
}
