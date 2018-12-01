<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Official Website for UDS GNAAS Wa-Campus">
        <meta name="keywords" content="UDS GNAAS Wa-Campus, Alumni,">
        <title>GNAAS UDS Wa-Campus @yield('title') </title>     
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/banner.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/et-line@1.0.1/style.min.css">
    </head>
    <body class="bg-white">

 <nav class="navbar navbar-expand-md navbar-dark " style="background-color: #fff;">
        <a class="navbar-brand text-white font-weight-bold" href="/"><img src="/img/loggo.png" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-reorder" style="color: #2f557f;"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav ml-auto links flex align-items-center">   
        <a class="p-2 text-dark" href="/">Home</a>
        <a class="p-2 text-dark" href="/about">About Us</a>
        <a class="p-2 text-dark" href="/contact">Contact Us</a>
        <a class="p-2 text-dark" href="/alumni">Alumni</a>
        <a class="p-2 text-dark" href="/posts">Blog</a>
        <a class="p-2 text-dark" href="/gallery">Gallery</a>
      
        <p class="text-white small">
            @if(Auth::check())
              {{ Auth::user()->name }}
            @endif
        </p>
        
          </ul>
        </div>
 </nav>
  

         <main>
            @yield('content')
        </main>
  

  @include('partials.footer')


          <script src="js/app.js"></script>
    </body>
</html>
