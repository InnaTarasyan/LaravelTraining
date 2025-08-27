<div id="contactUs" style="padding-top: 8%;" aria-labelledby="contact-heading">

    <div class="container">
        <div class="row text-center">
            <div class="site-title text-center ">
                <h3 id="contact-heading">Contact</h3>
            </div>
            <br/> <br/>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="map" role="img" aria-label="Location map" style="width:100%;height:20em;background:yellow"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" >
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action= {{route('about','#contactUs')}} method="post" aria-describedby="contact-help">
                    {{csrf_field()}}
                    <div class="m-demo__preview">
                        <div class="form-group m-form__group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="contact-name" class="sr-only">Name</label>
                            <input id="contact-name" class="form-control m-input m-input--square input-lg"  name="name" placeholder="Your name" aria-required="true">
                            <span style="color: red;"> {!! $errors->first('name') !!} </span>
                        </div>

                        <div class="form-group m-form__group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="contact-email" class="sr-only">Email</label>
                            <input id="contact-email" type="email" class="form-control m-input input-lg" placeholder="Email" name="email" aria-required="true">
                            <span style="color: red;"> {!! $errors->first('email') !!} </span>
                        </div>

                        <div class="form-group m-form__group row {{ $errors->has('text') ? 'has-error' : '' }}">
                            <div class="col-lg-12">
                                <label for="contact-text" class="sr-only">Message</label>
                                <textarea name="text" class="form-control" data-provide="markdown" rows="8" placeholder="How can I help?" id="contact-text" aria-required="true"></textarea>
                                <span style="color: red;"> {!! $errors->first('text') !!} </span>
                            </div>
                        </div>

                        <button type="submit" class="btn m-btn--pill  btn-primary">
                            Submit
                        </button>
                        <p id="contact-help" class="text-muted" style="margin-top:8px">I aim to reply within 1–2 business days.</p>
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