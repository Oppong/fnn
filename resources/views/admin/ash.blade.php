<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uds Wa-Campus Admin Panel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="{{asset('js/ckeditor.js')}}"></script>

             <style>
        .ck-editor__editable {
            min-height: 400px;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
</style>
       
    </head>
    <body class="bg-grey-lightest font-sans">
                  
    <div class="flex flex-wrap">

         <div class="min-h-screen w-1/6 bg-blue-darker text-white ">

             <div class="bg-black px-5 py-5">
                <div class="flex items-center">

                    <div class="flex-no-shrink mr-4">
                        <img src="/img/7.jpeg" alt="" class="w-8 h-8 rounded-full">
                    </div>
                    <div class="">
                        <p>Admin Panel </p>
                    </div>

                </div>{{-- end of flex --}}
             </div>{{-- end of x and y padding --}}

              <ul class="list-reset text-white mt-8">
                        <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="#" class="text-white pl-4 no-underline text-sm  ">
                                <i class="fa fa-cog mr-3"></i>
                                Dasboard
                            </a>
                        </li>

                      
                         <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('adminusers.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-user mr-3"></i>
                                Admin Users
                            </a>
                        </li>

                         <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('users.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-users mr-3"></i>
                                 Users
                            </a>
                        </li>
                  
                         <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('roles.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-user-o mr-3"></i>
                                Roles
                            </a>
                        </li>
                    
                         <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('permissions.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-address-book mr-3"></i>
                                Permission
                            </a>
                        </li>          

                         <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('slider.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-image mr-3"></i>
                                Slider
                            </a>
                        </li>
                         <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('upevent.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-calendar mr-3"></i>
                                Upcoming Events
                            </a>
                        </li>
                         <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('alumni.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-bandcamp mr-3"></i>
                                Alumni Upcoming Events
                            </a>
                        </li>
                        <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('lists.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-archive mr-3"></i>
                                Alumni List
                            </a>
                        </li>
                        <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('cats.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-list mr-3"></i>
                                Category
                            </a>
                        </li>
                         <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('blogs.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-book mr-3"></i>
                                Post
                            </a>
                        </li>
                        <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('gale.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-building-o mr-3"></i>
                                Category for Gallery
                            </a>
                        </li>
                        <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('gallery.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-camera mr-3"></i>
                                Gallery
                            </a>
                        </li>
                        <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{route('settings.index')}}" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-cog mr-3"></i>
                                Website Settings 
                            </a>
                        </li>
                        {{-- <li class="mb-1 hover:bg-blue-dark py-2">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="text-white pl-4 no-underline text-sm ">
                                <i class="fa fa-sign-out mr-3"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                           </form>
                        </li>      --}}                                                       
              </ul>
         </div>{{-- end of w-1/6 --}}


          <div class=" relative w-5/6">
              <nav class="bg-white shadow px-6 py-6 flex justify-between">
                   <div class="">
                       Amp
                   </div>

                   <div class="text-sm text-grey-dark dropdown">
                         @if(Auth::check())
                            Welcome {{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i>

                            <div class=" dropdown-content bg-white shadow-lg rounded">

                                <ul class="list-reset">
                                    <li class="border-b border-grey-lighter px-2 py-3 text-sm flex">
                                        <i class="fa fa-bell mr-2"></i> 
                                        Notification 
                                    </li>

                                    <li class="border-b border-grey-lighter px-2 py-3 text-sm flex">
                                        <a href="{{route('adminsettings.index')}}" class="text-grey-dark  no-underline text-sm ">
                                            <i class="fa fa-cog mr-2"></i> 
                                            Settings 
                                        </a>
                                    </li>

                                {{-- Logout  --}}
                                    <li class="px-2 py-3"> 
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="text-grey-dark  no-underline text-sm ">
                                            <i class="fa fa-sign-out mr-2"></i>
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                       </form>
                                    </li>
                                {{-- end of logout --}}

                                </ul>
                            </div>
                
                         @endif
                    </div>

             </nav><!-- nav -->

                 @yield('content')

             </div><!-- end of main content -->

            
         </div>
    </div><!-- flex wrap -->

            <script>
                ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
            </script>

    </body>
</html>
