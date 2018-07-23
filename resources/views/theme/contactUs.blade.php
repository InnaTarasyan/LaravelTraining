<div id="contactUs" style="padding-top: 8%;">

    <div class="container">
        <div class="row text-center">
            <div class="site-title text-center ">
                <h3> Contact us </h3>
            </div>
            <br/> <br/>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="map" style="width:100%;height:20em;background:yellow"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" >
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action= {{route('about','#contactUs')}} method="post">
                    {{csrf_field()}}
                    <div class="m-demo__preview">
                        <div class="form-group m-form__group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <input  class="form-control m-input m-input--square input-lg"  name="name" placeholder="Username">
                            <span style="color: red;"> {!! $errors->first('name') !!} </span>
                        </div>

                        <div class="form-group m-form__group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input type="text" class="form-control m-input input-lg" placeholder="Email" name="email">
                            <span style="color: red;"> {!! $errors->first('email') !!} </span>
                        </div>

                        <div class="form-group m-form__group row {{ $errors->has('text') ? 'has-error' : '' }}">
                            <div class="col-lg-12">
                                <textarea name="text" class="form-control" data-provide="markdown" rows="15" placeholder="Text" id="editor"></textarea>
                                <span style="color: red;"> {!! $errors->first('text') !!} </span>
                            </div>
                        </div>

                        <button type="submit" class="btn m-btn--pill  btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <button onclick="topFunction()" id="topBtn" title="Go to top"> Top </button>
    </div>
    <br><br>
</div>