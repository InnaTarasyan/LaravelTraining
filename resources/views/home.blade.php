@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="w3-container">
                            <h2>List of Applications</h2>

                            <div style="overflow-x:auto;">
                                <table class="w3-table w3-striped">
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>URL</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($applications as $application)
                                        <tr>
                                            <td>
                                                <a href="{{ route('applications.show', ['id' => $application->id]) }}">
                                                    {{ $application->name }}
                                                </a>
                                            </td>
                                            <td>
                                                {!! mb_strimwidth($application->desc, 0, 50, "...")  !!}
                                            <td>
                                                <img src="{{ asset('/images/apps/'.$application->img) }}" alt="{{$application->name}}" title="{{$application->name}}"  style="width: 50%;"/>
                                            </td>
                                            <td>
                                                <a href="{{ $application->url }}">{{ $application->url }}</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('applications.edit', [ 'id' => $application->id ]) }}">
                                                    <button class="button button-blue">Edit</button>
                                                </a>
                                                {!! Form::open(['url' => route('applications.destroy', ['id'=>$application->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                                                    {{ method_field('DELETE') }}
                                                    {!! Form::button('Delete', ['class' => 'button button-red','type'=>'submit']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <br/>
                        <a href=" {{ route('add') }}">
                            <button class="button button-green">Add New Application</button>
                        </a>
                        <br/>
                        <div class="center">
                            <div class="pagination">

                                @if($applications->lastPage() > 1)
                                    @if($applications->currentPage() !== 1)
                                        <a href="{{ $applications->url(($applications->currentPage() - 1)) }}">{!! Lang::get('pagination.previous') !!} </a>
                                    @endif

                                    @for($i = 1; $i <= $applications->lastPage(); $i++)
                                        @if($applications->currentPage() == $i)
                                            <a class="selected active disabled">{{ $i }}</a>
                                        @else
                                            <a href="{{ $applications->url($i) }}">{{ $i }}</a>
                                        @endif
                                    @endfor

                                    @if($applications->currentPage() !== $applications->lastPage())
                                        <a href="{{ $applications->url(($applications->currentPage() + 1)) }}">{!! Lang::get('pagination.next') !!} </a>
                                    @endif
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


