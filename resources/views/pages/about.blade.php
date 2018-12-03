@extends('master')
@section('title', '| About us page')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s font-sans"><strong> About Us </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s font-sans"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem a quaerat asperiores cupiditate dolores. Quaerat cum, animi voluptatem ipsum qui! </p>
      </div><!-- carousel caption -->
    </div>
  </div>
</div>


<div class="container">

     <div class="flex flex-wrap mt-5 mb-16 mx-2">
        <h4 class="text-muted w-full text-center pb-16">About Us</h4>
            <div class="w-full pb-8 md:w-1/3  px-2">
                <div class="text-center pb-4 font-sans"><i class=" icon-linegraph text-2xl " style="color: #ffa92d; "></i></div>
                <h5 class="text-muted text-center pb-2 font-sans">WHO WE ARE</h5>
                <p class="text-center text-sm font-sans">GNAAS Stands for Ghana National association of Adventist Students. In 1980/81, Seventh-day Adventist young people in public universities conceived the idea.</p>
            </div>
            <div class="w-full md:w-1/3 pb-4 px-2">
                <div class="text-center pb-8 font-sans"><i class=" icon-globe text-2xl  " style="color: #ffa92d;"></i></div>
                <h5 class="text-muted text-center pb-2 font-sans">WHAT WE STAND FOR</h5>
                <p class="text-center text-sm font-sans">They wanted to find out whether they could make a difference in the church and in the world by taking seriously the claims of Biblical Adventism.</p>
            </div>
            <div class="w-full md:w-1/3 pb-4 px-2">
                 <div class="text-center pb-8 font-sans"><i class=" icon-genius text-2xl " style="color: #ffa92d;"></i></div>
                <h5 class="text-muted text-center pb-2 font-sans">OUR CORE BELIEFS </h5>
                <p class="text-center text-sm font-sans">Seventh-day Adventist beliefs are meant to permeate your whole life. Growing out of scriptures that paint a compelling portrait of God. </p>
            </div>
        </div><!-- end of flex -->

</div>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/ab.jpg" alt="First slide" height="200" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-6 text-uppercase font-sans mb-4"><strong> About Us </strong></h3>
        <p class="text-p text-white text-center font-sans"> <div class="flex flex-wrap justify-between">
            <div>
                <h5 class="">Alumni </h5>
                <p class="counter">90000</p>
            </div>
            <div>
                <h5 class="">In School </h5>
                <p>600</p>
            </div>
            <div>
                <h5 class="">Total </h5>
                <p>600</p>
            </div>
        </div> </p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>


<div class="container">

     <div class="flex flex-wrap mt-5 mx-2 mb-16">
            <div class="w-full md:w-1/2 pb-4 px-2">
                <div class="text-center pb-4 font-sans"><i class=" icon-document text-2xl  " style="color: #ffa92d;"></i></div>
                <h5 class="text-muted text-center pb-2 font-sans">MESSAGE FROM THE PRESIDENT</h5>
                <p class="text-center text-sm font-sans">They wanted to find out whether they could make a difference in the church and in the world by taking seriously the claims of Biblical Adventism.</p>
            </div>
            <div class="w-full md:w-1/2 pb-4 px-2">
                 <div class="text-center pb-4 font-sans"><i class=" icon-book-open text-2xl " style="color: #ffa92d;"></i></div>
                <h5 class="text-muted text-center pb-2 font-sans">HISTORY OF GNAAS UDS WA CAMPUS </h5>
                <p class="text-center text-sm font-sans">Seventh-day Adventist beliefs are meant to permeate your whole life. Growing out of scriptures that paint a compelling portrait of God. </p>
            </div>
        </div><!-- end of flex -->

</div>


<div class="container">

     <div class="flex flex-wrap mt-5 mx-2">
            <div class="w-full md:w-1/2 pb-4 px-2">
                <h5 class="text-muted text-center pb-2 font-sans">MEETING TIME FOR CAMPUS STUDENTS</h5>
                <div class="flex">
  
	<table class="w-full table-fixed shadow bg-white rounded-lg font-sans ">
		      <thead class="text-sm font-thin text-grey-dark border-b border-grey-light border-b border-solid">
		          <th class="py-4 pl-6">DAY</th>
		          <th class="py-4 pl-6">PROGRAME</th>
		          <th class="py-4 pl-6">TIME</th>
	         </thead>
		      <tbody>
	            <tr class="border-b border-t text-grey-darker text-sm">
                        <td class="py-2 pl-6">Sunday</td>
                        <td class="py-2 pl-6">Bible Studies </td>
                        <td class="py-2 pl-6">7:00pm - 8:00pm</td>
                    </tr>
                    <tr class="border-b border-t text-grey-darker text-sm">
                        <td class="py-2 pl-6">Wednesday</td>
                        <td class="py-2 pl-6">Prayer </td>
                        <td class="py-2 pl-6">7:00pm - 8:00pm</td>
                    </tr>
                    <tr class="border-b border-t text-grey-darker text-sm">
                        <td class="py-2 pl-6">Friday</td>
                        <td class="py-2 pl-6">Youth Programme </td>
                        <td class="py-2 pl-6">5:30pm - 8:00pm</td>
                    </tr>
	          </tr>
	      </tbody>
	    </table>

</div> {{-- end of flex --}}
            </div>

            <div class="w-full md:w-1/2 px-2">
                <h5 class="text-muted text-center pb-2 font-sans">MEETING TIME FOR BAMAHU STUDENTS </h5>
                
                <table class="w-full table-fixed shadow bg-white rounded-lg font-sans ">
		      <thead class="text-sm font-thin text-grey-dark border-b border-grey-light border-b border-solid">
		          <th class="py-4 pl-6">DAY</th>
		          <th class="py-4 pl-6">PROGRAME</th>
		          <th class="py-4 pl-6">TIME</th>
	         </thead>
		      <tbody>
	            <tr class="border-b border-t text-grey-darker text-sm">
                        <td class="py-2 pl-6">Sunday</td>
                        <td class="py-2 pl-6">Bible Studies </td>
                        <td class="py-2 pl-6">7:00pm - 8:00pm</td>
                    </tr>
                    <tr class="border-b border-t text-grey-darker text-sm">
                        <td class="py-2 pl-6">Wednesday</td>
                        <td class="py-2 pl-6">Prayer </td>
                        <td class="py-2 pl-6">7:00pm - 8:00pm</td>
                    </tr>
                    <tr class="border-b border-t text-grey-darker text-sm">
                        <td class="py-2 pl-6">Friday</td>
                        <td class="py-2 pl-6">Youth Programme </td>
                        <td class="py-2 pl-6">5:30pm - 8:00pm</td>
                    </tr>
	          </tr>
	      </tbody>
	    </table>
            </div>
        </div><!-- end of flex -->

</div>





@endsection