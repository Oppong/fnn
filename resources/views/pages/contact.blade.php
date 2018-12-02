@extends('master')
@section('title', '| Contact us page')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/grr.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s font-sans"><strong> Contact Us </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s font-sans"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem a quaerat asperiores cupiditate dolores. Quaerat cum, animi voluptatem ipsum qui! </p>
      </div><!-- carousel caption -->
    </div>
  </div>
</div>


<div class="container ">
     <div class="flex flex-wrap -mx-2 mt-16">

			<div class="w-full md:w-1/2 px-2">
                <h5 class="text-muted" >GET <span style=" color: #ffa92d;">IN TOUCH</span></h5>
                <address class="text-dark">WA-CAMPUS GNAAS</address>
                  
                  <address class="text-dark"> <i class="icon-map" style=" color:#ffa92d; font-size: 16px;">&nbsp; </i> UDS WA-CAMPUS </address>
                  
                  <address class="text-dark"> <i class="icon-mobile" style=" color:#ffa92d; font-size: 16px;"> &nbsp; </i>Telephone:+233045667890 </address> 

                  <address class="text-dark"><i class="icon-envelope" style=" color:#ffa92d; font-size: 16px;"> &nbsp; </i>gnaasudswacampus@gmail.com</address> 
                  <address class="text-dark mb-8"><i class="icon-global" style=" color:#ffa92d; font-size: 16px;"> &nbsp; </i> www.gnaasudswacampus.org</address>
          </div><!--end of col -->


          <div class="col-md-6  col-12 pb-2">
               <h5 class="text-muted">SEND US <span style=" color: #ffa92d;"> A MESSAGE </span></h5>
                  <form action="/contact" method="POST">
                       <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="eg. Irene Kesse">
                       </div>

                       <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="eg. irenekesse@example.com" id="email">
                       </div>

                       <div class="form-group">
                          <label for="subject">Subject</label>
                          <input type="text" name="subject" class="form-control" id="subject">
                       </div>

                       <div class="form-group">
                          <label for="message">Mesage</label>
                          <textarea class="form-control" name="body" id="message"></textarea>
                       </div>

                       <div class="form-group">
                          <button class="btn btn-outline-secondary">Submit</button>
                       </div>

                  </form>
             </div>


   </div><!-- end of row -->
 </div>





@endsection