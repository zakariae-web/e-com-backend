<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\product;

class products extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $products = Product::query();

    // filter the products by category
    if ($request->has('category')) {
        $category = $request->category;
        if ($category !== 'all') {
            $products->where('category', $category);
        }
    }

    // search for products by name 
    if ($request->has('name')) {
        $name = $request->name;
        $products->where('name', 'LIKE', '%' . $name . '%');
    }


    return view('products.index', [
        'products' => $products->get()
    ]);
}

    
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create',product::class);
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_extension = $request -> picture -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'imgs/products';
        $request -> picture -> move($path,$file_name);

        $products = new product();
        $products->name =$request->input('name');
        $products->price =$request->input('price');
        $products->category =$request->input('category');
        $products->review =$request->input('review');
        $products['picture']= $file_name;
        $products->save();
       return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = product ::findorfail($id);
        return view('products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {

        $this->authorize('update',product::class);
        $products = product::findorfail($id);
        return view('products.edit', [
            'product' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = product::findorfail($id);
        $file_extension = $request -> picture -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'imgs/products';
        $request -> picture -> move($path,$file_name);

        
        $products->name =$request->input('name');
        $products->price =$request->input('price');
        $products->category =$request->input('category');
        $products->review =$request->input('review');
        $products['picture']= $file_name;
        $products->save();
       return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $this->authorize('delete',product::class);
        $products = product::findorfail($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}
