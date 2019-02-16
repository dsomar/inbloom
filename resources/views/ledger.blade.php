@extends('layouts.app')

@section('title', 'Ledger')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Review Ledger</div>
                <p>A paginated list of all ledger activity should appear here</p>


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
            <h1>Ledger</h1>
            <h2>Your ledger should appear here</h2>

        </div>
@endsection
