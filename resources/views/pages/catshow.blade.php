@extends('master')
@section('title', '| Category page')

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s font-sans"><strong> {{ $category->name }} Category </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s font-sans"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem a quaerat asperiores cupiditate dolores. Quaerat cum, animi voluptatem ipsum qui! </p>
      </div><!-- carousel caption -->
    </div>
  </div>
</div>


<div class="container mx-auto">
     <div class="flex flex-wrap mt-32 -mx-4">
        {{-- <p class=" w-full text-center mb-8 text-2xl font-bold font-sans " style="color: #2f557f;">{{ $category->name }} Category </p> --}}

	     	 @foreach($category->posts as $post )
	     	    
			     	<div class=" px-4 w-full md:w-1/3 mb-8  ">
			     		<div class="shadow rounded-lg">
				     		<img src="/img/{{ $post->image }}" alt="" class="">
				     		<a href="/posts/{{ $post->id }}"><h5 class="font-sans font-bold pt-3 pb-1 pl-2 " style="color: #2f557f;">{{ $post->title }}</h5></a>
				     		<p class="pl-2" > <small style=" color: #ffa92d;">Posted  {{ $post->created_at->diffForHumans()}} <i class="fa fa-clock-o"></i></small> </p>
				     		<div class="px-2 text-justify"><p class=" font-sans">{!! substr($post->body, 0, 200 ) !!} ...</p></div>
						     	 <div class=" flex items-center justify-between mt-4 pb-4">
						     	 	<p class="ml-4">By Admin</p>
		                             <div>
		                             	<i class="fa fa-comments text-grey-dark mr-4"></i>
							     		<i class="fa fa-bullhorn text-grey-dark mr-4"></i>
							     		<i class="fa fa-whatsapp text-grey-dark mr-4"></i>
		                             </div>
						     		
						     	 </div> {{-- By Admin --}}
				     	</div> {{-- shadow --}}	
			     	</div>
			   
			@endforeach
     </div>
   </div> {{-- end of container --}}




@endsection
