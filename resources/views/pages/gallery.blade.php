@extends('master')
@section('title', '| Gallery page')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s font-sans"><strong> GALLERY PAGE </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s font-sans"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem a quaerat asperiores cupiditate dolores. Quaerat cum, animi voluptatem ipsum qui! </p>
      </div><!-- carousel caption -->
    </div>
  </div>
</div>

        <div class="container">
            
            	<h4 class="text-muted w-full text-center mt-16 pb-16">Latest Photos </h4>
                  
                    <div class=" flex flex-wrap -mx-4">
		            	   @foreach($gales as $gale)
		            	       <div class="w-1/4  mb-4 px-4">
		            	       	   <a href="/galleryshow/{{$gale->id}}" class="text-muted font-sans text-sm text-uppercase"><h6> {{ $gale->name }} </a></h6> 
		            	       </div> 
		            	   @endforeach
                    </div>
               <div class="flex flex-wrap mt-5 mx-2">

					@foreach($gall as $gall)
					      	  <div class=" w-full md:w-1/4  px-2 mb-4">
		                          <img src="/img/{{$gall->image}}" alt="" class="img-fluid ">
		                          <p class="text-muted text-center mt-2 font-bold font-sans text-sm">{{ $gall->gale->name }} - Category</p>
		                      </div>   	  
		             @endforeach
             </div>
			
	    </div><!-- end of container -->

@endsection