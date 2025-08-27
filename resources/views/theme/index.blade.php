@extends('theme.base')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
    <link rel="stylesheet" href="{{asset('css/timeline.css')}}">
    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('content')
   @include('theme.menu')
   @include('theme.home')
   @include('theme.aboutUs')
   @include('theme.education')

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
   <br/>

   @include('theme.myportfolio')
   @include('theme.contactUs')

   @endsection
   @section('js')
       <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
       <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
       <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
       <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
       <script src="{{ asset('js/theme/home.js') }}"></script>

       @if(isset($key))
           <script src="https://maps.googleapis.com/maps/api/js?key={{$key}}&callback=myMap"></script>
       @endif

       <script src="{{ asset('js/timeline.js') }}"></script>
       <script>
           (function(){
               if (window.CKEDITOR) {
                   var el = document.getElementById('contact-text');
                   if (el) {
                       CKEDITOR.replace('contact-text');
                   }
               }
           })();
       </script>
   @endsection
</html>