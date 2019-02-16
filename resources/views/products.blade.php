@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add A Product</div>
                <form class="col-md-8 pt-3" >
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputBrand">Brand</label>
                    <input type="text" class="form-control" id="inputBrand" placeholder="Nike">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputDescription">Description / Colorway</label>
                    <input type="text" class="form-control" id="inputDescription" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Category</label>
                    <input type="text" class="form-control" id="Category" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <!-- <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                    </div>
                </div> -->
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

        </div>
@endsection
