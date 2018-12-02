@extends('master')
@section('title', ' | Blog page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/blog.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s"><strong> Our Blog Page</strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s"> Inspirational and Christian Life Books</p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>


<div class="container">
    <div class="flex flex-wrap mt-32 -mx-4">

      <div class="w-full md:w-2/3 mb-4">
         <div class="flex flex-wrap ">
            @foreach($posts as $post)
                 <div class="  w-full md:w-1/2 pb-4 px-4">
                      <img src="/img/{{ $post->image }}" alt="" class="">
                      <a href="/posts/{{ $post->id }}"><h5 class="font-sans text-muted pt-3 pb-1 pl-2 ">{{ $post->title }}</h5></a>
                      <p class="pl-2" > <small style="color: #ffa92d;">Posted  {{ $post->created_at->diffForHumans()}} <i class="fa fa-clock-o"></i></small> &nbsp; <small> <i class="fa fa-comments text-muted" > </i>  {{ $post->comments->count() }}</small> </p>
                      <div class="px-2 text-justify text-sm pb-2"><p class=" font-sans text-sm">{!! substr($post->body, 0, 200 ) !!} ...</p></div>
                      <p class="pl-2 text-sm pb-2">Posted In <strong style="color: #ffa92d;">{{ $post->category->name}}</strong> Category</p>
                      <a href="/posts/{{ $post->id }}" class="text-sm pl-2" style="color: #ffa92d;">Readmore &raquo;</a>
                 </div>
            @endforeach
        </div> {{-- end of inner flex --}}

      </div> {{-- end of w-2/3 --}}

    <div class=" w-full md:w-1/3 px-2 ">    
          <h5 class=" w-full mb-1 font-sans text-muted ">Latest Post</h5>
          @foreach($recent as $recent)
              <div class="w-full ">
                 <div class="flex items-center">
                     <img src="/img/{{ $recent->image }}" alt="" class="w-16 h-16">
                     <div class="ml-2">
                        <a href="/posts/{{ $recent->id }}"><h6 class="font-sans text-muted pt-3 pb-1 pl-2 ">{{ $recent->title }}</h6></a>
                         <div class="px-2 text-justify text-sm pb-2"><p class=" font-sans text-sm">{!! substr($recent->body, 0, 80 ) !!} ...</p></div>
                     </div>
                  </div>
              </div>
              <hr style="border: solid 1px #eee;">
          @endforeach

         <h5 class=" w-full mb-1 font-sans text-muted mt-8 mb-2 ">Categories</h5> 
         @foreach($category as $category) 
              <a href="/cats/{{$category->id}}" class="text-dark"><h6>{{ $category->name }}</h6></a>
              <hr style="border: solid 1px #ffa92d;;">
         @endforeach
    </div> {{-- end of w-1/3 --}}

  </div> {{-- end of flex --}}


    <div class="mt-4">
      {{ $posts->links() }}
    </div>  

</div> {{-- end of container --}}




@endsection



@section('footer')

    @include('partials.footer')

@endsection