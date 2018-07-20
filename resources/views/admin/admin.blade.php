@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Home</div>
                    @if (count($errors) > 0)
                        <div class="box error-box alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="wrap_result"></div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="w3-container">
                            <h1> Hello Admin </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


