@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add A Product</div>
                <form class="col-md-8 pt-3" method="POST" action="/products">

                {{ csrf_field() }}

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputBrand">Brand</label>
                    <input type="text" class="form-control" id="inputBrand" placeholder="Nike" name="brand">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputDescription">Description / Colorway</label>
                    <input type="text" class="form-control" id="inputDescription" placeholder="" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Category</label>
                    <input type="text" class="form-control" id="Category" placeholder="1234 Main St" name="category">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <button type="submit" class="btn btn-primary">Create Product</button>
                </form>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-12 pt-3">
            <h1>Products</h1>
            <h2>Products should appear here</h2>

            {{ $allproducts->links() }}

            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Image</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allproducts as $product)
                    <tr>
                        <th scope="row"><img src="https://via.placeholder.com/100x80"></th>
                        <td>{{ $product->id }}</td>
                        <td><strong>{{ $product->brand }}</strong> {{ $product->description }}<br>
                            @php echo uniqid(); @endphp
                        </td>
                        <td>@php echo rand(95, 1005); @endphp.00</td>
                        <td>{{ $product->category }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
