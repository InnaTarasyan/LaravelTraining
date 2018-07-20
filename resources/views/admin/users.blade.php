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
                    <div class="card-header"> Пользователи </div>
                    @if (count($errors) > 0)
                        <div class="box error-box alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="card-body">
                        <h3 class="title_page"> Пользователи </h3>
                        <div class="short-table white">
                            <table style="width: 100%">
                                <thead>
                                <tr>
                                    <th class="align-left">ID</th>
                                    <th> Имя пользователя </th>
                                    <th> Email пользоваытеля</th>
                                    <th> Роль </th>
                                    <th> Логин </th>
                                    <th> Действие </th>
                                </tr>
                                </thead>
                                <br/>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="align-left">{{$user->id}}</td>
                                        <td class="align-left">{!! Html::link(route('users.edit',['user'=>$user->id]), $user->name) !!}</td>
                                        <td class="align-left">{{$user->email}}</td>
                                        <td> {{ $user->roles()->pluck('name')->implode(',')  }}</td>
                                        {{--<td> {{$user->roles->implode('name', ', ')}}</td>--}}
                                        <td> {{ $user->login }}</td>
                                        <td>
                                            {!! Form::open(['url' => route('users.destroy',['user'=>$user->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                                            {{ method_field('DELETE') }}
                                            {!! Form::button('Удалить', ['class' => 'btn button-red','type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        {!! Html::link(route('users.create'),'Добавить пользователя',['class' => 'btn button-green']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection