<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
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
   

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'address' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string'],
            'date' => ['required', 'date'],
            'payment' => ['required', 'string'],
        ]);

        Report::create([
            'address' => $request->address,
            'contact' => $request->contact,
            'date' => $request->date,
            'time'=>$request->time,
            'payment'=>$request->payment,
            "user_id" => Auth::user()->id,
            "service_id" => $request->service,
            'status' => 1,
        ]);

        return redirect()->route('dashboard');
    }

    public function create()
    {
        $services = Service::all();
        return view('report.create', compact('services'));
    }
}
