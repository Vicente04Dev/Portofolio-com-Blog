<?php

namespace App\Http\Controllers;

use App\Models\situation;
use Illuminate\Http\Request;
use App\Models\testimonials;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = testimonials::all();
        $situations = situation::all();
        return view('admin.testimonials', compact(['datas', 'situations']));
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
        //
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
    public function edit(Request $request, int $id)
    {
        $data = testimonials::find($id);

        $data->situation_id = $request['situation_id'];

        $data->save();

        return redirect()->back()->with(['message' => 'Testemunho foi actualizado com sucesso', 'alert-type' => 'success']);
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
    public function destroy(int $id)
    {
        $data = testimonials::find($id);

        $data->delete();

        return redirect()->back()->with(['message' => 'Testemunho removido com sucesso', 'alert-type' => 'success']);
    }
}
