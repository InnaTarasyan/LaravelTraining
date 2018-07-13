@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
@endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    @if (count($errors) > 0)
                        <div class="box error-box alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="card-body">
                        <h3 class="title_page"> Permissions </h3>
                        <div class="short-table white">
                            <table style="width: 100%">
                                <thead>
                                    <th> Name </th>
                                    <th> Link </th>
                                    <th> Delete </th>
                                </thead>
                                <br/>
                                <tbody>
                                    @if($menus)
                                        @include('custom-menu-items', array('items' => $menus->roots(),'paddingLeft' => ''))
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        {!! HTML::link(route('menus.create'),'Добавить  пункт',['class' => 'btn button-green']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection