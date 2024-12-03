@extends('layouts.app')

@section('main')

    <table class="table table-hover mt-2" style="color:yellow;">
    <thead>
      <tr>
        <th>Slno</th>
        <th>Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td><a href="products/{{ $product->id }}/show" class="text-light">{{ $product->name }}</a></td>
        <td><img src="products/{{ $product->image }}" class="rounded-circle" width="40" height="40"></td>
        <td><a href="products/{{ $product->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
        <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
      </td>
      </tr>
      @endforeach
    </tbody>
    </table>
   {{ $products->links() }}
@endsection