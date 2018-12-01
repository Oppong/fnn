@extends('master')
@section('title', '| Category page')

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s font-sans"><strong> {{ $gale->name }} Category </strong></h3>
      </div><!-- carousel caption -->
    </div>
  </div>
</div>


<div class="container mx-auto">
     <div class="flex flex-wrap mt-32 -mx-4">
        {{-- <p class=" w-full text-center mb-8 text-2xl font-bold font-sans " style="color: #2f557f;">{{ $category->name }} Category </p> --}}

	     	 @foreach($gale->galleries as $galler )
	     	    
			     	<div class=" px-4 w-full md:w-1/4 mb-8  ">
				     		<img src="/img/{{ $galler->image }}" alt="" class="">
				     		<p class="text-muted text-center mt-2 font-bold font-sans text-sm">{{ $galler->title }} </p>
			     	</div>
			   
			@endforeach
     </div>
   </div> {{-- end of container --}}




@endsection
