@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comments.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Application Details</div>
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
                            <div style="text-align: center">
                                <h4>Application {{$application->name}}</h4>
                                <br/>
                                <div>
                                    {!! $application->desc !!}
                                </div>
                                <br/>
                                <div>
                                    {{ Html::image(asset('/images/apps/'.$application->img),'',['style'=>'width:400px']) }}
                                </div>
                            </div>
                            <br/>
                            <div>
                                <h5>Comments</h5>
                                <br/>
                                <div>
                                    @if(count($application->comments) > 0)
                                        @set($com, $application->comments->groupBy('parent_id'))
                                        <ol class="commentlist group">
                                            @foreach($com as $k => $comments)
                                                @if($k !== 0)
                                                    @break
                                                @endif
                                                @include('admin.comment',['items' => $comments])
                                            @endforeach
                                        </ol>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br/>

                        <!-- END TRACKBACK & PINGBACK -->
                        <div id="respond">
                            <h3 id="reply-title">Leave a <span>Reply</span> <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small></h3>
                            <form action="{{ route('comments.store') }}" method="post" id="commentform">
                                <p class="comment-form-comment"><label for="comment">Your comment</label><textarea id="comment" name="text" cols="45" rows="8"></textarea></p>
                                <div class="clear"></div>
                                <p class="form-submit">
                                    {{ csrf_field() }}
                                    <input id="comment_post_ID" type="hidden" name="comment_post_ID" value="{{ $application->id }}" />
                                    <input id="comment_parent" type="hidden" name="comment_parent" value="0" />
                                    <input name="submit" type="submit" id="submit" value="Post Comment" />
                                </p>
                            </form>
                        </div>
                        <!-- #respond -->
                    </div>
                    <!-- END COMMENTS -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('/js/comment-reply.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/myscripts.js') }}"></script>
@endsection


