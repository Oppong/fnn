<div class=" pt-16 pb-8 mt-32 " style="background-color: #3c3c3c; ">	{{-- #1e1e27; --}}
   
 <div class="container mx-auto">

	<div class="flex flex-wrap -mx-4">
	  <div class="px-4 mb-16 md:w-1/4 lg:mb-4 ">
		  	<h6 class=" text-white font-sans font-thin pb-4"><strong>WA CAMPUS  </strong> <strong style=" color: #ffa92d;">GNAAS</strong> </h6>
			<p class="text-justify text-white font-sans text-sm ">God comes to us in free and undeserved favor in the person of Jesus Christ who lived, died, and rose for us that we might belong to God and serve Christ in the world.</p> <br>

			<p class="text-justify text-white font-sans text-sm">God comes to us in free and undeserved favor in the person of Jesus Christ who lived, died </p>
	  </div>

	  <div class="px-4 mb-16 md:w-1/4 lg:mb-4 ">
		  	<h6 class=" text-white font-sans font-thin pb-4"><strong>LATEST</strong> <strong style=" color: #ffa92d;">PHOTOS </strong></h6>

            <div class="flex flex-wrap">
				 @foreach($gallery as $gallery)
				      	  <div class="pb-2 pr-2 w-1/3 md:w-1/3 ">
	                          <img src="/img/{{$gallery->image}}" alt="" class="img-fluid ">
	                      </div>   	  
	             @endforeach
             </div>
			
	  </div>

	  <div class="px-4 mb-16 md:w-1/4 lg:mb-4 ">
		  	<h6 class=" text-white font-sans font-thin pb-4"><strong>WA CAMPUS  </strong> <strong style=" color: #ffa92d;">GNAAS</strong></h6>
			<p class="text-justify text-white font-sans text-sm">God comes to us in free and undeserved favor in the person of Jesus Christ who lived, died, and rose for us that we might belong to God and serve Christ in the world.</p>
			
	  </div>

	  <div class="px-4 md:w-1/4 pb-2 lg:mb-4">
				<h6 class="text-white font-sans font-thin pb-4"><strong>USEFUL</strong> <strong style=" color: #ffa92d;">LINKS</strong></h6>
				<p><a href="/" class="text-white text-sm mb-4">Home <span style=" color: #ffa92d;">&raquo;</span></a></p>
				<p><a href="/about" class="text-white text-sm mb-4">About Us <span style=" color: #ffa92d;">&raquo;</span></a></p>
				<p><a href="/contact" class="text-white text-sm mb-4">Contact <span style=" color: #ffa92d;">&raquo;</span></a></p>
				<p><a href="/posts" class="text-white text-sm mb-4">Blog <span style=" color: #ffa92d;">&raquo;</span></a></p>
				<p><a href="/alumni" class="text-white text-sm mb-4">Alumni <span style=" color: #ffa92d;">&raquo;</span></a></p>
				<p><a href="#" class="text-white text-sm mb-4">GNAAS National <span style=" color: #ffa92d;">&raquo;</span></a></p>

				  <div class="mt-8" style="color: #ffa92d;">
					  <span class="fa-stack fa-lg mr-2">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-facebook fa-stack-1x fa-inverse" style="color: #fff; "></i>
					  </span>

					  <span class="fa-stack fa-lg mr-2">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-instagram fa-stack-1x fa-inverse" style="color: #fff; "></i>
					  </span>				      

				      <span class="fa-stack fa-lg mr-2">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-twitter fa-stack-1x fa-inverse" style="color: #fff; "></i>
					  </span>

					  <span class="fa-stack fa-lg mr-2">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-youtube-play fa-stack-1x fa-inverse" style="color: #fff; "></i>
					  </span>
			     </div>

	 </div>
	 
	</div> {{-- end of flex --}}

	<div class="w-full text-center mt-4 ">
        <p class="text-white text-sm font-sans"> &copy; Copyright 2018 <span style=" color: #ffa92d;">Wa Campus GNAAS </span> All Rights Reserved </p>
    </div> 
     	 
</div> {{-- end of container --}}


</div>


<h6 class="pt-2 pb-2 text-center bg-grey-dark" style="background-color: #222; " >
       <small class="text-white font-sans">Website Developed by: <strong ><a href="" style=" color: #ffa92d;">Amponsah</a></strong></small>
</h6>