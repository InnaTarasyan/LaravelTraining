@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/add_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Добавить Пользователя </div>
                    @if (count($errors) > 0)
                        <div class="box error-box alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="card-body">
                        <h3 class="title_page"> Добавить Пользователя </h3>

                        <div class="hentry group">

                            {!! Form::open(['url' => (isset($user->id)) ? route('users.update',['user'=>$user->id]) : route('users.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

                            <ul style="list-style-type: none;">
                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <br />
                                        <span class="sublabel"> Имя пользователя: </span><br />
                                    </label>
                                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                                        {!! Form::text('name',isset($user->name) ? $user->name : old('name'), ['placeholder'=>'Введите имя пользователя']) !!}
                                    </div>
                                </li>

                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <br />
                                        <span class="sublabel"> Login </span><br />
                                    </label>
                                    <div class="input-prepend">
                                        {!! Form::text('login',isset($user->login) ? $user->name : old('login'), ['placeholder'=>'Введите логин пользователя']) !!}
                                    </div>
                                </li>

                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <br />
                                        <span class="sublabel"> Email </span><br />
                                    </label>
                                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                                        {!! Form::text('email',isset($user->email) ? $user->email : old('email'), ['placeholder'=>'Введите емаил пользователя']) !!}
                                    </div>
                                </li>

                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <br />
                                        <span class="sublabel"> Пароль: </span><br />
                                    </label>
                                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                                        {!! Form::password('password') !!}
                                    </div>
                                </li>

                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <br />
                                        <span class="sublabel"> Повторить пароль </span><br />
                                    </label>
                                    <div class="input-prepend" ><span class="add-on"><i class="icon-user"></i></span>
                                        {!! Form::password('password_confirmation') !!}
                                    </div>
                                </li>


                                <li class="text-field">
                                    <label for="name-contact-us">
                                        <br />
                                        <span class="sublabel"> Roles </span><br />
                                    </label>
                                    <div class="input-prepend">
                                        {!! Form::select('role_id',$roles, isset($user) ? $user->roles()->first()->id : null) !!}
                                    </div>
                                </li>


                                @if(isset($user->id))
                                    <input type="hidden" name="_method" value="PUT">
                                @endif

                                <li class="submit-button">
                                    {!! Form::button('Сохранить', ['class' => 'btn btn-the-salmon-dance-3','type'=>'submit']) !!}
                                </li>

                            </ul>

                            {!! Form::close() !!}
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection