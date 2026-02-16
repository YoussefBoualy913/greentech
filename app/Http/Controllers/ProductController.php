<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\updateproductRequest;
use App\service\ProductService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;
use App\Exports\ProducstExport;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
     use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(ProductService $service)
    {   
       if(Gate::allows('view products')){
       $products = $service->index();
        return view('products.index',compact('products'));
       }else{
        abort(304);
       }

        }
        
        /**
         * Show the form for creating a new resource.
        */
        public function create()
        {
             $this->authorize('create');
        return view('products.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request ,ProductService $service)
    {  
         $this->authorize('create');
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
    {    $this->authorize('update',$product);
         return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateproductRequest $request, Product $product,ProductService $service)
    {
         $this->authorize('update',$product);
      $service->update($request,$product);
    return redirect()->route('products.index')->with('success','Produit modifier avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,ProductService $service)
    {    $this->authorize('delete',$product);
    $service-> delete($product);
    return redirect()->route('products.index');
    } 
    
    public function export(Product $product)
    {
       $this->authorize('export',$product);
      return Excel::download(new ProducstExport, 'products.xlsx');
    }
}
