<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\updateproductRequest;
use App\service\ProductService;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductService $service)
    {
       $products = $service->index();
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
    public function store(StoreproductRequest $request ,ProductService $service)
    {
       $service->store($request);
       
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
    public function update(updateproductRequest $request, Product $product,ProductService $service)
    {
      $service->update($request,$product);
    return redirect()->route('products.index')->with('success','Produit modifier avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,ProductService $service)
    { 
        $service-> delete($product);
        return redirect()->route('products.index');
    } 
}
