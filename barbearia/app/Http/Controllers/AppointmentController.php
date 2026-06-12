<?php

namespace App\Http\Controllers;

use App\Models\{Appointment, Client, Service};
use App\Http\Requests\AppointmentRequest;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with(['client', 'service'])->whereDate('data_agenda', today())->orderBy('hora_agenda')->get();
        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::orderBy('nome')->gent();
        $services = Service::active()->orderBy('nome')->get();
        return view('appointments.create', compact('clients', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentRequest $request)
    {
        Appointment::create($request->validate());
        return redirect()->route('appointments.index')->with('success', 'Agendamento criado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        $clients = Clients::orderBy('nome')->get();
        $services = Service::active()->orderBy('nome')->get();
        return view ('appointments.edit', compact ('appointment', 'clients', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->validated());
        return redirect()->route('appointments.index')->with('success', 'Agendamento atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Agendamento cancelado!');
    }
}
