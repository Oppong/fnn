@extends('master')
@section('title', '| Alumni page')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s font-sans"><strong> Alumni Page </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s font-sans"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem a quaerat asperiores cupiditate dolores. Quaerat cum, animi voluptatem ipsum qui! </p>
      </div><!-- carousel caption -->
    </div>
  </div>
</div>


<div class="container ">
     <div class="flex flex-wrap -mx-2 mt-16">
       <h4 class="text-muted w-full text-center pb-8 font-sans">Alumni Executives </h4>

			<div class="w-full md:w-1/4 px-2  ">
			   <div class="flex items-center mb-4">
				   <img src="/img/do.jpg" class="rounded-full shadow w-16 h-16 mr-2 flex-no-shrink" >
				   <div>
				   	  <h6 class="text-muted font-sans"> Whats Your Name</h6>
				   	  <p class="text-sm font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				   </div>
			    </div> {{-- end of inner flex --}}
			</div>	

			<div class="w-full md:w-1/4 px-2  ">
			   <div class="flex items-center mb-4">
				   <img src="/img/do.jpg" class="rounded-full shadow w-16 h-16 mr-2 flex-no-shrink" >
				   <div>
				   	  <h6 class="text-muted font-sans"> Whats Your Name</h6>
				   	  <p class="text-sm font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				   </div>
			    </div> {{-- end of inner flex --}}
			</div>	

			<div class="w-full md:w-1/4 px-2  ">
			   <div class="flex items-center mb-4">
				   <img src="/img/do.jpg" class="rounded-full shadow w-16 h-16 mr-2 flex-no-shrink" >
				   <div>
				   	  <h6 class="text-muted font-sans"> Whats Your Name</h6>
				   	  <p class="text-sm font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				   </div>
			    </div> {{-- end of inner flex --}}
			</div>	

			<div class="w-full md:w-1/4 px-2  ">
			   <div class="flex items-center mb-4">
				   <img src="/img/do.jpg" class="rounded-full shadow w-16 h-16 mr-2 flex-no-shrink" >
				   <div>
				   	  <h6 class="text-muted font-sans"> Whats Your Name</h6>
				   	  <p class="text-sm font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				   </div>
			    </div> {{-- end of inner flex --}}
			</div>	

     </div> {{-- end of main flex --}}

			<div class="flex flex-wrap mt-8 -mx-2">

				<div class="w-full md:w-1/4 px-2  ">
			   <div class="flex items-center mb-4">
				   <img src="/img/do.jpg" class="rounded-full shadow w-16 h-16 mr-2 flex-no-shrink" >
				   <div>
				   	  <h6 class="text-muted font-sans"> Whats Your Name</h6>
				   	  <p class="text-sm font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				   </div>
			    </div> {{-- end of inner flex --}}
			</div>	

			<div class="w-full md:w-1/4 px-2  ">
			   <div class="flex items-center mb-4">
				   <img src="/img/do.jpg" class="rounded-full shadow w-16 h-16 mr-2 flex-no-shrink" >
				   <div>
				   	  <h6 class="text-muted font-sans"> Whats Your Name</h6>
				   	  <p class="text-sm font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				   </div>
			    </div> {{-- end of inner flex --}}
			</div>	

			<div class="w-full md:w-1/4 px-2  ">
			   <div class="flex items-center mb-4">
				   <img src="/img/do.jpg" class="rounded-full shadow w-16 h-16 mr-2 flex-no-shrink" >
				   <div>
				   	  <h6 class="text-muted font-sans"> Whats Your Name</h6>
				   	  <p class="text-sm font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				   </div>
			    </div> {{-- end of inner flex --}}
			</div>	

			<div class="w-full md:w-1/4 px-2  ">
			   <div class="flex items-center mb-4">
				   <img src="/img/do.jpg" class="rounded-full shadow w-16 h-16 mr-2 flex-no-shrink" >
				   <div>
				   	  <h6 class="text-muted font-sans"> Whats Your Name</h6>
				   	  <p class="text-sm font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
				   </div>
			    </div> {{-- end of inner flex --}}
			</div>	
			</div>


</div> {{-- end of container --}}


<div class="container">
	<div class="flex flex-wrap mt-16 -mx-4">
		<h4 class="text-muted w-full text-center pb-8 font-sans">Upcoming Events </h4>
				
			
				  @foreach($alumni as $alumni)

				  <div class=" px-4 w-full md:w-1/2 mb-4  ">
						<div class="flex items-center shadow-sm rounded px-4 py-6 border border-grey-dark">
				
						
						<div class="mr-8">
							{{ $alumni->date }}
						</div>

						<div>
							<h5 class="pb-2 font-sans font-bold text-sm" style=" color: #ffa92d;">{{ $alumni->title }}</h5>
							<p class="text-grey-darker pb-1"> <i class="fa fa-map-marker"></i> {{ $alumni->venue }} </p>
							<p class="text-grey-darker pb-1"> <i class="fa fa-clock-o"></i> {{ $alumni->time }}</p>
							<p class="font-normal leading-normal">{{ $alumni->content }}</p>

						</div>

					</div>
			    </div>

				  @endforeach

	</div> {{-- flex --}}


<div class="container">
	<div class="flex flex-wrap mt-16 -mx-4">
		<h4 class="text-muted w-full text-center pb-8 font-sans">ALUMNI LIST </h4>

	<div class="px-4 w-full text-center ">

		<table class="w-full table-fixed shadow bg-white rounded-lg font-sans ">
			<caption class="text-center">Alumni List from <strong>2006 to Date</strong> </caption>
			<thead>
				<th class="py-4 pl-6">Name</th>
				<th class="py-4 pl-6">Year of Completion</th>
			</thead>
			<tbody>
			@foreach($lists as $list)
				<tr class="border-b border-t text-grey-darker text-sm">
					<td class="py-2 pl-6">{{ $list->name }}</td>
					<td class="py-2 pl-6"><strong>{{ $list->year }}</strong></td>
				</tr>
			@endforeach
			</tbody>
		</table>	

	</div>

</div>




@endsection