@extends('master')
@section('title', ' | Blog page')


@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div style=" background-color: black; "><img class="d-block w-100" src="/img/{{ $post->image }}" style="width: 1366px; height: 400px; opacity: 0.3; " ></div>
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase "><strong> {{ $post->title }} </strong></h3>
        <p class="text-p text-white text-center animated ">{!! substr($post->body, 0, 100 ) !!} ...</p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div> {{-- end of carousel --}}

<div class="container">

	{{-- mian post --}}

	 <div class="w-full " style="margin-top: 70px;">
		<h5 class="font-sans text-muted pt-3 pb-1 pl-2 ">{{ $post->title }}</h5>
	    <p class="pl-2" > <small style="color: #ffa92d;">Posted  {{ $post->created_at->diffForHumans()}} <i class="fa fa-clock-o"></i></small>  &nbsp; <span class="text-sm text-grey-dark"><small>By Admin </small> </small> &nbsp; <small> <i class="fa fa-comments text-muted" > </i>  {{ $post->comments->count() }}</small></span></p>
	    <div class="px-2 text-justify text-sm pb-2 mt-4"><p class=" font-sans text-sm">{!! $post->body!!} </p></div>
	    <p class="pl-2 text-sm pb-2 font-bold"> Posted In <strong style="color: #ffa92d;">{{ $post->category->name}}</strong> Category</p>
	    <hr style="border: solid 1px #eee;">
	  </div><!-- end of main styling -->

{{-- write a comment for a post --}}
	<div class="mt-4">
		<h5><strong class="font-sans">Post Comment</strong> </h5>
		  <form action="/comments/{{ $post->id}}" method="Post" class="pt-2">
		       {{ csrf_field() }}

		       <div class="mb-4">
                     <label for="name" class="text-grey-darker text-sm font-bold">
                         Your Name
                     </label>

                     <input type="text" placeholder="irene kesse" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker" id="name" name="name">
                 </div>

                  <div class="mb-4">
                     <label for="body" class="text-grey-darker text-sm font-bold">
                         Your Comment
                     </label>

                     <textarea type="text"class=" appearance-none border border-grey-light rounded-lg  py-2 px-3 w-full text-grey-darker" id="body" name="body" cols="20" rows="5" required></textarea>
                 </div>

		      <div class="class="mb-4"">
		        <button type="submit" class=" text-white text-sm py-2 px-4 rounded-full mr-3" style="background-color: #2f557f;">Post Comment</button>
		      </div>
		  </form>
 </div> {{-- end of post comments --}}
{{-- show comments for a post --}}
 <br>
	  <h5 class="text-sm mt-8"><strong style="color: #ffa92d; ">{{ $post->comments->count() }} </strong> Comment(s) for this Post. </h5>
<div class="mt-4 pl-8">
 @foreach($post->comments as $comment)
    <p class="font-sans"> <strong style="color: #ffa92d;  ">{{ $comment->name }}</strong> &nbsp; <span class="text-muted small">{{$comment->created_at->toDayDateTimeString() }}</span> </p>
    <p class="font-sans text-sm">{{ $comment->body }}</p>
    <hr>
@endforeach
</div>


 
</div> {{-- end of container --}}
@endsection



@section('footer')

	@include('partials.footer')

@endsection