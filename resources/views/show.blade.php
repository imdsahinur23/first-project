@extends('layouts.app')

@section('main')

<div class="container mt-5">
                   
        <h5 style="color:yellow;">Product name : #{{ $product->name }}</h5>  
        <h5 style="color:yellow;">Product description : {{ $product->description }}</h5>  
        <img src="{{ asset('products/' . $product->image) }}" class="rounded" width="25%">
                
    

   
</div>
@endsection