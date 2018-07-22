<html>
   <head>
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
       <link rel="stylesheet" href="{{asset('css/modal.css')}}">
       <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
       <link rel="stylesheet" href="{{asset('css/timeline.css')}}">
       <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
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


           .bgimage {
               width:100%;
               height:500px;
               background: url('images/Inna_3.jpg');
               background-repeat: no-repeat;
               background-position: center;
               background-size:cover;
               background-attachment: fixed;
           }
           .bgimage h5 {
               color:white;
               text-shadow:2px 2px #333;
           }


           marquee {
               margin-top: 5px;
               width: 100%;
           }

           .runtext-container {
               background-color:rgba(0, 0, 0, 0.5);
               background-repeat:repeat-x;

               box-shadow:0 5px 20px rgba(0, 0, 0, 0.9);

               width: 850px;
               overflow-x: hidden;
               overflow-y: visible;
               margin: 0 60px 0 30px;
               padding:0 3px 0 3px;
           }

           .main-runtext {margin: 0 auto;
               overflow: visible;
               position: relative;
               height: 40px;
           }

           .runtext-container .holder {
               position: relative;
               overflow: visible;
               display:inline;
               float:left;

           }

           .runtext-container .holder .text-container {
               display:inline;
           }

           .runtext-container .holder a{
               text-decoration: none;
               font-weight: bold;
               color:#ff0000;
               text-shadow:0 -1px 0 rgba(0,0,0,0.25);
               line-height: -0.5em;
               font-size:16px;
           }

           .runtext-container .holder a:hover{
               text-decoration: none;
               color:#6600ff;
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


   <div id="home">
       <section class="bgimage">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       {{--<h5>Hello, world! Full width Hero-unit header</h5>--}}
                       {{--<p style="color:white; font-size: 20px">This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>--}}
                       {{--<p><a href="#" class="btn btn-primary btn-large">Learn more »</a></p>--}}


                       <div class="runtext-container" style="width: 100%">
                           <div class="main-runtext">
                               <marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">
                                   {{--<div class="holder">--}}
                                       {{--<div class="text-container">--}}
                                           <p style="color:white; font-size: 20px"> Hello ! I am Inna Tarasyan. I am a Web Developer. Здравствуйте ! Я Инна Тарасян. Я Веб Разработчик ! Ողջույն: Ես Տարասյան Իննան եմ: Ես Վեբ Ծրագրավորող եմ:</p>
                                       {{--</div>--}}
                                   {{--</div>--}}
                               </marquee>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </section>



   </div>

   <div id="aboutUs">
       <div class="about-section">
           <div class="container">
               <div class="site-title text-center">
                   <h3>About Us</h3>
                   <p>A wonderful designs has takenpossession but also the leap into electronic pesetting industry  It was popularised in the 1960s with the release </p>
               </div>
               <div class="about-inner-section">
                   <div class="col-md-6 about-inner-column">
                       <h4>Eco friendly food is good for health </h4>
                       <p>Takenpossession of lorem Ipsum is simply dummy text of the printing and typesetting industry In sit amet sapien eros Integer  in tincidunt labore et dolore magna aliqua  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                       <ul>
                           <li><a href="#">Donec ut quam lscele volutri.</a></li>
                           <li><a href="#">Etiam volutpatbh quam bortis</a></li>
                           <li><a href="#">Varius fusce vit aeblandit.</a></li>
                       </ul>
                   </div>
                   <div class="col-md-6 about-right">
                       <img src="https://images.pexels.com/photos/7096/people-woman-coffee-meeting.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt=" ">
                   </div>
                   <div class="clearfix"> </div>
               </div>
           </div>
       </div>

   </div>

   <div id="skills">
       <div class="container">
           <div class="page-header">
               <h1 id="timeline" style="text-align: center">Education and Experience</h1>
           </div>
           <ul class="timeline">
               <li>
                   <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                           <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                       </div>
                       <div class="timeline-body">
                           <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                   <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                           <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
                       </div>
                   </div>
               </li>
               <li>
                   <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                       </div>
                   </div>
               </li>
               <li>
                   <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                           <hr>
                           <div class="btn-group">
                               <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                   <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                               </button>
                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="#">Action</a></li>
                                   <li><a href="#">Another action</a></li>
                                   <li><a href="#">Something else here</a></li>
                                   <li class="divider"></li>
                                   <li><a href="#">Separated link</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </li>
               <li>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                   <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                       </div>
                   </div>
               </li>
           </ul>
       </div>





   </div>

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

   <h2 style="text-align: center">Portfolio</h2>
   <ul class="nav nav-tabs">
       <li class="active"><a data-toggle="tab" href="#portfolio">Android Applications</a></li>
       <li><a data-toggle="tab" href="#menu1">Web Applications</a></li>
   </ul>

   <div class="tab-content">
       <div id="portfolio" class="tab-pane fade in active">
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

   <div id="contactUs" style="padding-top: 8%;">

       <div class="container">
           <div class="row text-center">
               <h2 class="text-uppercase">Contact us</h2>
               <br/> <br/>
               <div class="col-md-6 col-sm-6 col-xs-12">
                   <div id="map" style="width:100%;height:20em;background:yellow"></div>
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
       </div>
       <hr>
       <div class="container">
           <button onclick="topFunction()" id="topBtn" title="Go to top"> Top </button>
       </div>
       <br><br>
   </div>
   </body>
   <footer>
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
       <script src="{{ asset('js/theme/home.js') }}"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key={{$key}}&callback=myMap"></script>
       <script src="{{ asset('js/timeline.js') }}"></script>
   </footer>
</html>