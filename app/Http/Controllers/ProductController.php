<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(3);
       
        return view('products.index',compact('products'));

        }
        
        /**
         * Show the form for creating a new resource.
        */
        public function create()
        {
        return view('products.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'stock' => 'required|integer|min:0',
        'price' => 'required|numeric|min:0',
        'categoryname' => 'required|string|exists:categories,name'
    ]);
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time().'_'.Str::slug($request->name).'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('products', $filename, 'public');
        $validated['image_url'] = '/storage/'.$path;
    }
    $category = Category::where('name',$validated['categoryname'])->first();
 
    $product = Product::create([
        'name'        => $validated['name'],
        'description' => $validated['description'],
        'image_url'   => $validated['image_url'],
        'stock'       => $validated['stock'],
        'price'       => $validated['price'],
        'category_id' => $category->id,    ]);

    return redirect()->route('products.index')->with('success','Produit créé avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
         return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'stock' => 'required|integer|min:0',
        'price' => 'required|numeric|min:0',
        'categoryname' => 'required|string|exists:categories,name'
    ]);
     $category = Category::where('name',$validated['categoryname'])->first();
     $product->update([
        'name'        => $validated['name'],
        'description' => $validated['description'],
        'stock'       => $validated['stock'],
        'price'       => $validated['price'],
        'category_id' => $category->id,    ]);
    return redirect()->route('products.index')->with('success','Produit modifier avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    { 
        $product->delete();
        return redirect()->route('products.index');
    }
}
