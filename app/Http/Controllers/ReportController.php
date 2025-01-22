<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::where('user_id', Auth::user()->id)->get();
        $services = Service::all();
        $userId = Auth::id();   
        return view('report.index', compact('reports','services','userId'));
    }
    public function store(Request $request, Report $report){
        $data = $request -> validate([
            'address' => 'string',
            'contact' => 'string',
            'date' => 'date',
            'time' => 'time',
            'user_id' => Auth::user()->id,
            'status_id' => 1,
        ]);

        return redirect()->route('report');
    }
}
