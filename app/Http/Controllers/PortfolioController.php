<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.portfolio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add.portfolio');
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
            'name.required' => 'O nome do portfolio é obrigatório.',
            'short_description.required' => 'Digite uma breve descrição sobre você.',
            'description.required' => 'Faça uma descrição em detalhes sobre este portfolio',
        ]);

        if($request->file('image')){

            $file = $request->file('image');

            $filename = date('YmdHi').$file->getClientOriginalName();

            $file->move(public_path('upload/portfolio'), $filename);
        }

        portfolio::create([
            'name' => $data['name'],
            'short_description' => $data['short_description'],
            'description' => $data['description'],
            'image' => $filename,
        ]);

        return redirect()->back()->with(['message' => 'Portfolio cadastrado com sucesso', 'alert-type' => 'success']);
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
