@extends('layouts.app')

@section('content')


<form class="custom-form" action="{{route('products.update', ['product' => $product->id])}}" method="POST" enctype="multipart/form-data">
@CSRF
@method('PUT')
    <h1>add new product</h1>
    <div class="row form-group">
        <div class="col-sm-4 label-column"><label class="d-block mb-3 font-bold" for="name-input-field">name </label></div>
        <div class="col-sm-6 input-column"><input type="text" name="name" id="name" class="p-2 shadow-sm form-control" required=""></div>
    </div>
    <div class="row form-group">
        <div class="col-sm-4 label-column"><label class="d-block mb-3 font-bold" for="email-input-field">price </label></div>
        <div class="col-sm-6 input-column"><input type="text" name="price" id="price" class="p-2 shadow-sm form-control"required=""></div>
    </div>
    <div class="row form-group">
        <div class="col-sm-4 label-column"><label class="d-block mb-3 font-bold">category </label></div>
        <div class="col-sm-6 input-column"><input type="text" name="category" id="category" class="p-2 shadow-sm form-control"required=""></div>
    </div>
    <div class="row form-group">
        <div class="col-sm-4 label-column"><label class="d-block mb-3 font-bold">review </label></div>
        <div class="col-sm-6 input-column"><input type="text" name="review" id="review" class="p-2 shadow-sm form-control"   required=""></div>
    </div>
    <div class="row form-group">
        <div class="col-sm-4 label-column"><label class="d-block mb-3 font-bold">product picture </label></div>
        <div class="col-sm-6 input-column"><input type="file" name="picture" id="picture" class="p-2 shadow-sm form-control"></div>
    </div>
    <button class="bg-light px-4 py-2 rounded d-block mt-4" type="submit">Send</button>
</form>



@endsection