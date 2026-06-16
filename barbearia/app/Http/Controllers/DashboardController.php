<?php

namespace App\Http\Controllers;

use App\Models\Client; 
use App\Models\Service;
use App\Models\Appointment;

class DashboardController extends Controller
{
    public function index()
    {
        $totalClientes = Client::count();
        $totalServicos = Service::count();
        $totalAgendamentos = Appointment::count();

        return view('dashboard', compact('totalClientes', 'totalServicos', 'totalAgendamentos'));
    }
}
