@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                        <h3 class="title_page"> Menus </h3>
                        <div id="content-page" class="content group">
                            {!! Form::open(['url' => (isset($menu->id)) ? route('menus.update', ['menus'=>$menu->id]) : route('menus.store'), 'class'=>'contact-form', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                            <ul>
                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <span class="sublabel">
                                            Заголовок:
                                        </span>
                                        <br />
                                    </label>
                                    <div class="input-prepend">
                                        {!! Form::text('title',isset($menu->title) ? $menu->title  : old('title'), ['placeholder'=>'Введите название пункта']) !!}
                                    </div>
                                </li>
                                <br/>
                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <span class="sublabel">
                                            Родитель:
                                        </span>
                                        <br />
                                    </label>
                                    <div class="input-prepend">
                                        {!! Form::select('parent', $menus, isset($menu->parent) ? $menu->parent : null) !!}
                                    </div>
                                </li>
                                <br/>
                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <span class="label"> Путь:</span>
                                        <br />
                                    </label>
                                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                                        {!! Form::text('path',(isset($menu->path)) ? $menu->path  : old('path'), ['placeholder'=>'Введите название пункта']) !!}
                                    </div>
                                </li>
                                @if(isset($menu->id))
                                    <input type="hidden" name="_method" value="PUT">
                                @endif
                                <br/>
                                <li class="submit-button">
                                    {!! Form::button('Сохранить', [ 'class' => 'btn button-green', 'type'=>'submit' ]) !!}
                                </li>
                            </ul>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection