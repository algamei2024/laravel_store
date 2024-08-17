<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prods = product::all();

        return view('admin.table.show', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        $type = 'product.store';

        return view('admin.forms.products', compact('categories', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = upload('product', $request);
        product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
        ]);
        $succ = 'تم بنجاح';

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Categorie::all();
        $prod = Product::where('id', $id)->first();

        return view('admin.forms.products', ['type' => 'product.update', 'prod' => $prod, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $image = upload('product', $request);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
        ]);
        if ($request->hasFile('image')) {
            delete($request->old_img);
        }

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $prod = Product::find($product);
        delete($prod->image);
        $prod->delete();

        return 'success';
    }
}
