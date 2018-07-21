<html>
   <head>
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
   </head>
   <body>
   {{--@if(isset($menu))--}}
       {{--{!! $menu !!}--}}
   {{--@endif--}}


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
               {{--<ul class="nav navbar-nav">--}}
                   @if($menu)
                       {!! $menu !!}
                   @endif
                   {{--<li class="active"><a href="#">Home</a></li>--}}
                   {{--<li><a href="#">About</a></li>--}}
                   {{--<li><a href="#">Contact</a></li>--}}
                   {{--<li class="dropdown">--}}
                       {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                       {{--<ul class="dropdown-menu">--}}
                           {{--<li><a href="#">Action</a></li>--}}
                           {{--<li><a href="#">Another action</a></li>--}}
                           {{--<li><a href="#">Something else here</a></li>--}}
                           {{--<li role="separator" class="divider"></li>--}}
                           {{--<li class="dropdown-header">Nav header</li>--}}
                           {{--<li><a href="#">Separated link</a></li>--}}
                           {{--<li><a href="#">One more separated link</a></li>--}}
                       {{--</ul>--}}
                   {{--</li>--}}
               {{--</ul>--}}
               {{--<ul class="nav navbar-nav navbar-right">--}}
                   {{--<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>--}}
                   {{--<li><a href="../navbar-static-top/">Static top</a></li>--}}
                   {{--<li><a href="../navbar-fixed-top/">Fixed top</a></li>--}}
               {{--</ul>--}}
           </div><!--/.nav-collapse -->
       </div><!--/.container-fluid -->
   </nav>

   <h2>Dynamic Tabs</h2>
   <ul class="nav nav-tabs">
       <li class="active"><a data-toggle="tab" href="#home">Android Applications</a></li>
       <li><a data-toggle="tab" href="#menu1">Web</a></li>

   </ul>

   <div class="tab-content">
       <div id="home" class="tab-pane fade in active">
           <h3>Android Applications</h3>
           <p>
           <div class="container">
               <h2>Basic Table</h2>
               <input type="hidden" id="apps_route" value="{{ route('datatable.getapps') }}">
               <br/>
               <div class="table-responsive">
                   <table class="table" id="apps">
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
       <div id="menu1" class="tab-pane fade">
           <h3> Web Applications</h3>
           <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       </div>
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