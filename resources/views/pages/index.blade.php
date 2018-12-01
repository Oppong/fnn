@extends('welcome')
@section('title', '| Homepage')

@section('content')

<div class="flex flex-wrap">
	<div class="w-full md:w-1/2 py-8" style="background-color: #2f557f;">
		<div class="text-center pb-2"><span class="icon-shield text-white text-2xl "></span></div>
		<h4 class="text-center text-white pb-1 font-black">Our Mission</h4>
		<p class="text-white px-4 text-center text-sm py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur.</p>
	</div>

	<div class="w-full md:w-1/2 py-8" style=" background-color: #ffa92d;">
		<div class="text-center pb-2 text-white"><span class="icon-megaphone text-2xl "></span></div>
		<h4 class="text-center pb-1 font-black text-white">Our Belief</h4>
		<p class=" px-4 text-center py-2 text-sm text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur.</p>
	</div>
</div>


<div class="container">
	<div class="flex flex-wrap">
		<div class="w-1/2">
			
		</div>
	</div>
</div>

<div class="container">
	<div class="flex flex-wrap mt-32 -mx-4">
		<p class=" w-full text-center mb-8 text-2xl font-bold font-sans text-grey-darker" style="color: #2f557f;">UPCOMING EVENTS </p>
				
			
				  @foreach($upevent as $upevent)

				  <div class=" px-4 w-full md:w-1/3 mb-8  ">
						<div class="flex items-center shadow-sm rounded px-4 py-6 border border-grey-dark">
				
						
						<div class="mr-8">
							{{ $upevent->date }}
						</div>

						<div>
							<h5 class="pb-2 font-sans font-bold text-sm" style=" color: #ffa92d;">{{ $upevent->title }}</h5>
							<p class="text-grey-darker pb-1"> <i class="fa fa-map-marker"></i> {{ $upevent->venue }} </p>
							<p class="text-grey-darker pb-1"> <i class="fa fa-clock-o"></i> {{ $upevent->time }}</p>
							<p class="font-normal leading-normal">{{ $upevent->content }}</p>

						</div>

					</div>
			    </div>

				  @endforeach

	</div> {{-- flex --}}
</div> {{-- end of container --}}


<div class="flex  ">
	<div class="w-full py-16  md:py-32 mt-32" style="background-image: url(../img/h1.jpg); background-size: cover;">
		<div class="flex items-center">
			<p class="text-white text-center mx-auto text-sm md:text-3xl">“ But, beloved, be not ignorant of this one thing, <br> that one day is with the Lord as a thousand years, and a thousand years as one day.” <br>
			<em>2 Peter 3:8</em></p>
		</div>
	</div>
</div>

  
<div class="container mx-auto">
     <div class="flex flex-wrap mt-32 -mx-4">
        <p class=" w-full text-center mb-8 text-2xl font-bold font-sans " style="color: #2f557f;">LATEST NEWS </p>

	     	 @foreach($posts as $post )
	     	    
			     	<div class=" px-4 w-full md:w-1/3 mb-8  ">
			     		<div class=" rounded-lg">
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


