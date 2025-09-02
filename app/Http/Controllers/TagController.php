<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\News;
use App\Models\Tag; // Assuming you have a Tag model
use Illuminate\Support\Facades\Storage;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // This method should return a view for listing tags.
        $tags = Tag::orderByDesc('id')->get();
        return view('_admin.tags.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // This method should return a view for creating a new tag.
        $news = News::all(); // Fetch all news for potential tag association
        return view('_admin.tags.tagCreate.index', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // This method should handle the storage of a new tag.
        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name',
            'description' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'O nome da tag é obrigatório.',
            'name.unique' => 'Esta tag já existe.',
            'name.max' => 'O nome da tag não pode ter mais de 255 caracteres.',
            'description.max' => 'A descrição não pode ter mais de 1000 caracteres.',
        ]);

        Tag::create([
            'name' => $request->name,
            'description' => $request->description,
        ], [
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.tags.index')->with('success', 'Tag criada com sucesso!');
        return redirect()->back()->with('error', 'Erro ao criar a tag. Por favor, tente novamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
        // This method should return a view for showing a specific tag.
        return view('_admin.tags.tagViews.index', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
        // This method should return a view for editing a specific tag.
        $news = News::all(); // Fetch all news for potential tag association
        return view('_admin.tags.tagEdit.index', compact('tag', 'news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,' . $tag->id,
            'description' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'O nome da tag é obrigatório.',
            'name.unique' => 'Esta tag já existe.',
            'name.max' => 'O nome da tag não pode ter mais de 255 caracteres.',
            'description.max' => 'A descrição não pode ter mais de 1000 caracteres.',
        ]);

        $tag->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.tags.index')->with('success', 'Tag atualizada com sucesso!');
        return redirect()->back()->with('error', 'Erro ao atualizar a tag. Por favor, tente novamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
        // This method should handle the deletion of a tag.
        $tag->delete();

        return redirect()->route('admin.tag.index')->with('success', 'Tag deletada com sucesso!');
        return redirect()->back()->with('error', 'Erro ao deletar a tag. Por favor, tente novamente.');
    }
}
