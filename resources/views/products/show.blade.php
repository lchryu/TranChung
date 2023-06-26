@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Stock Quantity:</strong> {{ $product->stock_quantity }}</p>
    <a href="{{ route('products.edit', $product->productid) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('products.destroy', $product->productid) }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
