<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = contacts::get()->first();
        return view('admin.contacts', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datas = contacts::get('id')->first();

        $validData = $request->validate([
            'phone_number' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'behance' => 'required',
            'email' => 'required',
            'address' => 'required',
        ], [
            'phone_number.required' => 'Digite o número de telemóvel.',
            'facebook.required' => 'Digite o link do seu perfil do facebook.',
            'linkedin.required' => 'Digite o link do seu perfil do linkedin',
            'instagram.required' => 'Digite o link do seu perfil do instram.',
            'behance.required' => 'Digite o link do seu perfil do behance.',
            'email.required' => 'Digite o seu endereço de email.',
            'address.required' => 'Digite a sua localização.',
        ]);

        $datas->phone_number = $validData['phone_number'];
        $datas->facebook = $validData['facebook'];
        $datas->linkedin = $validData['linkedin'];
        $datas->instagram = $validData['instagram'];
        $datas->behance = $validData['behance'];
        $datas->email = $validData['email'];
        $datas->address = $validData['address'];

        $datas->save();

        return redirect()->back()->with(['message' => 'Dados actualizados com sucesso', 'alert-type' => 'success']);

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
