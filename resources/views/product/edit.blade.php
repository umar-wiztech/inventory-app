@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ url('/product') }}">product</a>
        <div class="row justify-content-center">
            <form method="post" action="{{route('product.update', $product->id)}}">
            @csrf()
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" value="{{ $product->name }}" required class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="sku">sku:</label>
                    <input type="text" value="{{ $product->sku }}" required class="form-control" id="sku" name="sku">
                </div>
                <div class="form-group">
                    <label for="price">sku:</label>
                    <input type="text" value="{{ $product->price }}" required class="form-control" id="price" name="price">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection
