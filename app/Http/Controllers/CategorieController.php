<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Categorie::all();
        return view("admin.table.show",compact("cats"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.forms.categories', ['type' => 'categorie.store']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = upload('categorie', $request);
        Categorie::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
        ]);
        $succ = 'تم بنجاح';

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cat = Categorie::where('id',$id)->first();
        return view('admin.forms.categories', ['type' => 'categorie.update','cat'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $image = upload('categorie', $request);
        $categorie->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image,
        ]);
        if($request->hasFile('image'))
        {
            delete($request->old_img);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($categorie)
    {
        $cat = Categorie::find($categorie);
        delete($cat->image);
        $cat->delete();
    }
}