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
       <link rel="stylesheet" href="{{asset('css/home.css')}}">
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

   <div id="education">
       <div class="container">
           <div class="site-title text-center ">
               <h3>Education and Experience</h3>
           </div>
           <ul class="timeline">
               <li>
                   <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">American University of Armenia</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Department of Computer Science (CIS).
                               Master’s degree.<br>
                               (2011 – 2014)
                           </p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                   <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">State Engineering University of Armenia</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Control and Informatics in Technical Systems.
                               Department of Cybernetics.
                               Master's  degree. <br>
                               (2010 – 2012)
                           </p>
                       </div>
                   </div>
               </li>
               <li>
                   <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">State Engineering University of Armenia</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Control and Informatics in Technical Systems.
                               Department of Cybernetics.
                               Bachelor degree.<br/>
                               (2006– 2010)
                           </p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                   <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Microsoft Innovation Center. Yerevan</h4>
                       </div>
                       <div class="timeline-body">
                           <p>C++ training (Level 1), C++ training (Level 2).<br>
                               C# training (Level 2), Course of ADO.NET & ASP.NET<br>
                               (2011 – 2012)
                           </p>
                       </div>
                   </div>
               </li>
               <li>
                   <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Iguana system. Yerevan.</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Web Developer. Implemented inner system enhancement and bugs correction, improvements on design and functionality, worked with databases<br>
                               (December 2017 – May 2018)</p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                   <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Helix Consulting LLC. Yerevan.</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Web Developer.Maintaining performance of existing client websites.<br>
                               (September 2017 – December 2017)
                           </p>
                       </div>
                   </div>
               </li>
               <li>
                   <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">SoftCode LLC. Yerevan</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Web Developer.
                               Maintaining performance of existing client websites.
                               Suggesting improvements on design and functionality. <br>
                               (February 2016 – July 2017)
                           </p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                   <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                   <div class="timeline-panel">
                       <div class="timeline-heading">
                           <h4 class="timeline-title">Rosgosstrakh Armenia Insurance CJSC. Yerevan</h4>
                       </div>
                       <div class="timeline-body">
                           <p>Web Developer. Implemented inner system enhancement and bugs correction, improvements on design and functionality, worked with databases.<br>
                               (January 2015 – May 2015)
                           </p>
                       </div>
                   </div>
               </li>
               {{--<li>--}}
                   {{--<div class="timeline-panel">--}}
                       {{--<div class="timeline-heading">--}}
                           {{--<h4 class="timeline-title">Mussum ipsum cacilds</h4>--}}
                       {{--</div>--}}
                       {{--<div class="timeline-body">--}}
                           {{--<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>--}}
                       {{--</div>--}}
                   {{--</div>--}}
               {{--</li>--}}
               {{--<li class="timeline-inverted">--}}
                   {{--<div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>--}}
                   {{--<div class="timeline-panel">--}}
                       {{--<div class="timeline-heading">--}}
                           {{--<h4 class="timeline-title">Mussum ipsum cacilds</h4>--}}
                       {{--</div>--}}
                       {{--<div class="timeline-body">--}}
                           {{--<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>--}}
                       {{--</div>--}}
                   {{--</div>--}}
               {{--</li>--}}
           </ul>
       </div>

       <div id="skills">
           <div class="site-title text-center ">
               <h3> Skills </h3>
           </div>

           <table border=0 class="rectangle-list" style="text-align: center;  margin-left:auto; margin-right:auto;">
               <tr>
                   <td>
                       <ol>
                           <li><p>Knowledge of PHP, CSS, XHTML and JavaScript</p></li>
                           <li><p>Knowledge of Laravel, CodeIgniter frameworks</p></li>
                           <li><p>Experience with design patterns</p></li>
                           <li><p>Knowledge of SQL</p></li>
                           <li><p>Experience with Node.js, AngularJS, LESS, Git and Grunt technologies.</p></li>
                           <li><p>Integrating new technologies into web properties</p></li>
                           <li><p>Knowledge of languages: Armenian fluent, Russian fluent, English Fluent (Toefl IBT, GRE)</p></li>
                       </ol>
                   </td>
               </tr>
           </table>
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
   {{--@if (count($errors) > 0)--}}
       {{--<div class="alert alert-danger">--}}
           {{--<ul>--}}
               {{--@foreach ($errors->all() as $error)--}}
                   {{--<li>{{ $error }}</li>--}}
               {{--@endforeach--}}
           {{--</ul>--}}
       {{--</div>--}}
   {{--@endif--}}

   <br/>

   <div class="site-title text-center ">
       <h3>Portfolio </h3>
   </div>

   <ul class="nav nav-tabs" style=" display: flex;justify-content: center;">
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

   @if(session('status'))
       <div class="alert alert-success">
           {{ session('status') }}
       </div>
   @endif


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


   </body>
   <footer >
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
       <script src="{{ asset('js/theme/home.js') }}"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key={{$key}}&callback=myMap"></script>
       <script src="{{ asset('js/timeline.js') }}"></script>
       <script src="{{asset('/js/ckeditor/ckeditor.js') }}"></script>
       <script>
           CKEDITOR.replace("editor")
       </script>
   </footer>
</html>