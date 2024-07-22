<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.services');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add.service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required'
        ], [
            'name.required' => 'O nome do serviço é obrigatório.',
            'short_description.required' => 'Digite uma breve descrição sobre você.',
            'description.required' => 'Faça uma descrição em detalhes sobre este serviço',
        ]);

        if($request->file('icon')){

            $file = $request->file('icon');

            $filename = date('YmdHi').$file->getClientOriginalName();

            $file->move(public_path('upload/services'), $filename);
        }

        services::create([
            'name' => $data['name'],
            'short_description' => $data['short_description'],
            'description' => $data['description'],
            'icon' => $filename,
        ]);

        return redirect()->back()->with(['message' => 'Serviço cadastrado com sucesso', 'alert-type' => 'success']);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
