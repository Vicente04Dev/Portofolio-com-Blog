<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('admin.add.post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datas = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'situation_id' => 'required',
        ], [
            'title.required' => 'Dê um título ao post.',
            'short_description.required' => 'Faça uma pequena descrição sobre o post.',
            'description.required' => 'Escreva o conteúdo do seu post.',
            'category_id.required' => 'Seleciona uma categoria.'
        ]);

        if($request->file('image')){

            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();

            $file->move(public_path('upload/posts'), $filename);
        }

        posts::create([
            'title' => $datas['title'],
            'short_description' => $datas['short_description'],
            'description' => $datas['description'],
            'image' => $filename,
            'category_id' => $datas['category_id'],
            'user_id' => $datas['user_id'],
            'situation_id' => $datas['situation_id'],
        ]);

        return redirect(route('posts'))->with(['message' => 'Post publicado com sucesso', 'alert-type' => 'success']);
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
