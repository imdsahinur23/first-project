@extends('layouts.app')

@section('main')
    <div class="container mt-5">
    <div class="container">                     
        <h1 style="color:yellow;">Product edit #{{ $product->name }}</h1>                 
    </div>
    <form method="post" action="{{ route('update', $product->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT');
        <div class="form-group">
            <label for="name" style="color:yellow;" >Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$product->name) }}" placeholder="Enter name" >
            @if($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }} </span>
            @endif
        </div>
        <div class="form-group">
            <label for="message" style="color:yellow;">Description:</label>
            <textarea class="form-control" id="message" rows="4" name="description"  placeholder="Enter description">{{ old('description', $product->description) }}</textarea>
            @if($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }} </span>
            @endif
        </div>

        <div class="form-group">
            <label for="image" style="color:yellow;">Image:</label>
            <input type="file" class="form-control" id="email" value="{{ old('image') }}" name="image" >
            @if($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }} </span>
            @endif
        </div>
       
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection