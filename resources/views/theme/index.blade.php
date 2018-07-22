<html>
   <head>
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
       <link rel="stylesheet" href="{{asset('css/modal.css')}}">
       <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
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


   <h2>Dynamic Tabs</h2>
   <ul class="nav nav-tabs">
       <li class="active"><a data-toggle="tab" href="#home">Android Applications</a></li>
       <li><a data-toggle="tab" href="#menu1">Web Applications</a></li>
   </ul>

   <div class="tab-content">
       <div id="home" class="tab-pane fade in active">
           <h3>Android Applications</h3>
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
           <h3> Web Applications</h3>
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

   <div id="aboutUs">About Us</div>
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
   </footer>
</html>