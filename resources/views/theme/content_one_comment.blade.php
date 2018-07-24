<li id="li-comment-{{$data['id']}}" class="comment even borGreen">
    <div id="comment-{{$data['id']}}" class="comment-container">
        <div class="comment-author vcard" style="overflow-x: auto">
            <img alt="" src="https://www.gravatar.com/avatar/{{$data['hash']}}?d=mm&s=75" class="avatar" height="75" width="75" />
            <br/>
            <cite class="fn">{{$data['name']}}</cite>
        </div>
        <div class="comment-meta commentmetadata">
            <div class="intro">
               {{ $data['created_at']->format('F d, Y \a\t H:i') }}
               <br/>
            </div>
            <div class="comment-body">
                <p> {!! $data['text'] !!}</p>
                <br/>
            </div>
        </div>
    </div>
</li>