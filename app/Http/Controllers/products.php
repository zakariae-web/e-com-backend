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
    public function index()
    {
        return view('products.index', [
            'products' => product::all()
           ]);
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
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
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
        $products = product::findorfail($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}
