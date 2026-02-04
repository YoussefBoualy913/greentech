<?php
namespace App\service;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\updateproductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductService
{


public function index()
{
  return   $products = Product::with('category')->latest()->paginate(3);

}

 public function store(StoreproductRequest $request)
    {
        $validated = $request->all();
    
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
    }

    public function update(updateproductRequest $request ,Product $product)
    {
     $validated = $request->all();
     $category = Category::where('name',$validated['categoryname'])->first();
     $product->update([
        'name'        => $validated['name'],
        'description' => $validated['description'],
        'stock'       => $validated['stock'],
        'price'       => $validated['price'],
        'category_id' => $category->id,    ]);
    }

    public function  delete(Product $product)
    {
 
     $product->delete();

    }

}