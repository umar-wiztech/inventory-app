@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ url('/product') }}">product</a>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>SKU</th>
                        <th>Price</th>
                        @if (auth()->user()->role_id != 3)
                            <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>{{ $product->price }}</td>
                            @if (auth()->user()->role_id != 3)
                                <td>
                                    @if (in_array(auth()->user()->role_id, [1, 2]))
                                        <a href="{{ url('product/edit/' . $product->id) }}">edit</a>
                                    @endif
                                    @if (in_array(auth()->user()->role_id, [1]))
                                        <a href="{{ url('product/delete/' . $product->id) }}">delete</a>
                                    @endif
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
