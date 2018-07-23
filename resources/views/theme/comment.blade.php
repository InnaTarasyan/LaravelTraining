@foreach($items as $item)
    <li id="li-comment-{{ $item->id }}" class="comment even {{ ($item->user_id == $application->user_id) ?  'bypostauthor odd' : ''}}">
        <div id="comment-{{ $item->id }}" class="comment-container">
            <div class="comment-author vcard">
                 @set($hash, isset($item->email) ? md5($item->email) : md5($item->user->email))
                <img alt="" src="https://www.gravatar.com/avatar/{{$hash}}?d=mm&s=55" class="avatar" height="55" width="50" />
                <cite class="fn">{{$item->user->name or $item->name}}</cite>
                {!! $item->user && $item->user->hasRole('Admin') ? '<p style="color:red">Administrator</p>': '' !!}
            </div>
            <!-- .comment-author .vcard -->
            <div class="comment-meta commentmetadata">
                <div class="intro">
                    <div class="commentDate">
                        <a href="#comment-2">
                            {{ is_object($item->created_at) ? $item->created_at->format('F d, Y \a\t H:i') : ''}}</a>
                    </div>
                    <div class="commentNumber">#&nbsp;</div>
                </div>
                <br/>
                <div class="comment-body">
                    <p> {!! $item['text'] !!}</p>
                </div>
                <div class="reply group">
                    <a class="comment-reply-link" href="#respond" onclick="return addComment.moveForm(&quot;comment-{{$item->id}}&quot;, &quot;{{$item->id}}&quot;, &quot;respond&quot;, &quot;{{$item->application_id}}&quot;)">Reply</a>
                </div>
                <!-- .reply -->
            </div>
            <!-- .comment-meta .commentmetadata -->
        </div>
        <!-- #comment-##  -->

        @if(isset($com[$item->id]))
            <ul class="children">
                @include('theme.comment',['items'=>$com[$item->id]])
            </ul>
        @endif

    </li>


@endforeach