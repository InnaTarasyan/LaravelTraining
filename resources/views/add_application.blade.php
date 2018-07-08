@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/style.css') }}" />
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Application</div>
                    @if (count($errors) > 0)
                        <div class="box error-box alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="card-body">
                        {!! Form::open([ 'url' => (isset($application->id)) ? route('applications.update',['articles'=>$application->id]) : route('applications.store') ,'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                        {{ csrf_field() }}
                        {!! Form::text('name',isset($application->name) ? $application->name  : old('name'), ['placeholder'=>'Add Application Name']) !!}
                        {!! Form::text('url',isset($application->url) ? $application->url  : old('url'), ['placeholder'=>'Add Application URL']) !!}

                        {!! Form::textarea('desc', isset($application->desc) ? $application->desc  : old('desc'), ['id'=>'editor1','class' => 'form-control']) !!}

                        @if(isset($application->img))
                            {{ Html::image(asset('/images/apps/'.$application->img),'',['style'=>'width:400px']) }}
                        @endif
                        {!! Form::file('img', ['class' => 'filestyle','data-buttonText'=>'Upload Image','data-buttonName'=>"btn-primary",'data-placeholder'=>"Upload Image"]) !!}

                        {!! Form::button('Submit', ['class' => 'btn btn-success','type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        jQuery.noConflict();
        (function( $ ) {
            $(function() {
                CKEDITOR.replace("editor1")
            });
        })(jQuery);
    </script>
@endsection
