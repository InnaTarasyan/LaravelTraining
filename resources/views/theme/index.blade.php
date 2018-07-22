<html>
   <head>
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
       <link rel="stylesheet" href="{{asset('css/modal.css')}}">
       <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
       <style>
           #topBtn {
               display: none;
               position: fixed;
               bottom: 20px;
               right: 30px;
               z-index: 99;
               font-size: 18px;
               border: none;
               outline: none;
               background-color: red;
               color: white;
               cursor: pointer;
               padding: 15px;
               border-radius: 4px;
           }

           #topBtn:hover {
               background-color: #555;
           }
       </style>
   </head>
   <body>

   <nav class="navbar navbar-default">
       <div class="container-fluid">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Projects</a>
           </div>
           <div id="navbar" class="navbar-collapse collapse">
               @if($menu)
                   {!! $menu !!}
               @endif
           </div><!--/.nav-collapse -->
       </div><!--/.container-fluid -->
   </nav>



   <!-- The Modal -->
   <div id="myModal" class="modal">

       <!-- The Close Button -->
       <span class="close">&times;</span>

       <!-- Modal Content (The Image) -->
       <img class="modal-content" id="img01">

       <!-- Modal Caption (Image Text) -->
       <div id="caption"></div>
   </div>

   <br/>
   @if (count($errors) > 0)
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif


   @if(session('status'))
       <div class="alert alert-success">
           {{ session('status') }}
       </div>
   @endif
   <br/>

   <h2 style="text-align: center">My Applications</h2>
   <ul class="nav nav-tabs">
       <li class="active"><a data-toggle="tab" href="#home">Android Applications</a></li>
       <li><a data-toggle="tab" href="#menu1">Web Applications</a></li>
   </ul>

   <div class="tab-content">
       <div id="home" class="tab-pane fade in active">
           <h3 style="text-align: center">Android Applications</h3>
           <p>
               <div class="container">
                   <h2>Android Apps Table</h2>
                   <input type="hidden" id="apps_route" value="{{ route('datatable.get_android_apps', ['type' => 'apps']) }}">
                   <br/>
                   <div class="table-responsive">
                       <table class="table table-striped" id="apps">
                           <thead>
                           <tr>
                               <th> Name </th>
                               <th> Desc </th>
                               <th> Image </th>
                               <th> Url </th>
                               <th> Download Count </th>
                           </tr>
                           </thead>
                       </table>
                   </div>
               </div>
           </p>
       </div>
       <div id="menu1" class="tab-pane fade">
           <h3 style="text-align: center"> Web Applications</h3>
           <p>
           <div class="container">
               <h2>Web Apps Table</h2>
               <input type="hidden" id="web_route" value="{{ route('datatable.get_web_apps', ['type' => 'web']) }}">
               <br/>
               <div class="table-responsive">
                   <table class="table table-striped" id="web" style="width: 100%">
                       <thead>
                       <tr>
                           <th> Name </th>
                           <th> Desc </th>
                           <th> Image </th>
                           <th> Url </th>
                       </tr>
                       </thead>
                   </table>
               </div>
           </div>
           </p>
       </div>
   </div>

   <div id="aboutUs" style="padding-top: 8%;">

       <div class="container">
           <div class="row text-center">
               <h2 class="text-uppercase">About us</h2>
               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                   Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
               <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.A small river named Duden flows by their place and supplies it with the necessary regelialia.
                   It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
           </div>
       </div>
       <hr>
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12">
                   <div id="map" style="width:100%;height:30em;background:yellow"></div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                   <h2 class="text-uppercase">About us <sup class="badge">with video</sup></h2>
                   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                       Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                   <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.A small river named Duden flows by their place and supplies it with the necessary regelialia.
                       It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
               </div>
           </div>
       </div>
       <hr>
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12">
                   <h2 class="text-uppercase">About us <sup class="badge">with image</sup></h2>
                   <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                       Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                   <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.A small river named Duden flows by their place and supplies it with the necessary regelialia.
                       It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                   <form action="{{ route('about') }}" method="post">
                       {{csrf_field()}}
                       <div class="m-demo__preview">
                           <div class="form-group m-form__group">
                               <input  class="form-control m-input m-input--square"  name="name" placeholder="Username">
                           </div>

                           <div class="form-group m-form__group">
                               <input type="text" class="form-control m-input" placeholder="Email" name="email">
                           </div>

                           <div class="form-group m-form__group row">
                               <div class="col-lg-12">
                                   <textarea name="text" class="form-control" data-provide="markdown" rows="10" placeholder="Text"></textarea>
                               </div>
                           </div>

                           <button type="submit" class="btn m-btn--pill  btn-primary">
                               Submit
                           </button>
                       </div>
                   </form>
               </div>
           </div>
           <button onclick="topFunction()" id="topBtn" title="Go to top"> Top </button>
       </div>
       <br><br>
   </div>
   <div id="skills">Skills</div>
   <div id="home">
       <a href="#">Home</a>
   </div>
   </body>
   <footer>
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
       <script src="{{ asset('js/theme/home.js') }}"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key={{$key}}&callback=myMap"></script>
   </footer>
</html>