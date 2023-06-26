@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mt-3">
        <h1>Product List</h1>
        <div class="mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->productid }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->stock_quantity }}</td>
                    <td> 
                        <a href="{{ route('products.show', $product->productid) }}"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('products.edit', $product->productid) }}"><i class="bi bi-pencil-square"></i></a>
                        {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form> --}}
                        <a href="#"
                            onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this product?')) { document.getElementById('delete-form-{{ $product->productid }}').submit(); }"
                            title="Delete"><i class="bi bi-trash3"></i></a>
                        <form id="delete-form-{{ $product->productid }}" action="{{ route('products.destroy', $product->productid) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
