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
                        <form action=" {{ route('permissions.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="short-table white">
                                <table style="width: 100%">
                                    <thead>
                                    <th>Permissions</th>
                                    @if(!$roles->isEmpty())
                                        @foreach($roles as $item)
                                            <th>{{ $item->name}}</th>
                                        @endforeach
                                    @endif
                                    </thead>
                                    <tbody>
                                    @if(!$permissions->isEmpty())
                                        @foreach($permissions as $val)
                                            <tr>
                                                <td>{{ $val->name }}</td>
                                                @if(!$roles->isEmpty())
                                                    @foreach($roles as $role)
                                                        <td>
                                                            @if($role->hasPermission($val->name))
                                                                <input checked type="checkbox" value="{{$val->id}}" name="{{ $role->id }}[]">
                                                            @else
                                                                <input type="checkbox" value="{{$val->id}}" name="{{ $role->id }}[]">
                                                            @endif
                                                        </td>
                                                    @endforeach
                                                @endif
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>

                            </div>
                            <input class="btn button-green" type="submit" value="Update" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection