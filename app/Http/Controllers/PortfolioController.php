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
        $datas = portfolio::all();
        return view('admin.portfolio', compact('datas'));
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
    public function edit(int $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $data = portfolio::find($id);

        $data['name'] = $request['name'];
        $data['short_description'] = $request['short_description'];
        $data['description'] = $request['description'];

        $data->save();

        return redirect()->back()->with(['message' => 'Portfolio alterado com sucesso', 'alert-type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $data = portfolio::find($id);

        unlink(public_path("upload/portfolio/$data->image"));
        $data->delete();

        return redirect()->back()->with(['message' => 'Portofolio removido com sucesso', 'alert-type' => 'success']);
    }
}
