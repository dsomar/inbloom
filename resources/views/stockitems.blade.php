@extends('layouts.app')

@section('title', 'Inventory')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add Inventory</div>
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
                <button type="submit" class="btn btn-primary">Add Item</button>
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
            <h1>Inventory</h1>
            <h2>Inventory should appear here</h2>

        </div>
@endsection
