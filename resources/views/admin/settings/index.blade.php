@extends('admin.ash')


@section('content')

<div class="mt-16">
	<a href="" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full ml-12 mr-2 no-underline" >Add Settings </a>

	<input type="text" placeholder="Search" class="border border-grey-light py-2 px-3 rounded-lg shadow"> 
</div>

<div class="flex items-center justify-center ">


	<div class="w-5/6">

<form action="{{route('slider.store')}}" method="POST"  class="mt-16 py-8 bg-white px-32 shadow-lg rounded-lg font-sans" enctype="multipart/form-data">
		 {{ csrf_field() }}
	

		  <div class="mb-6">
		    <label for="meta_descr" class="block text-grey-darker text-sm font-bold mb-2">Meta Description</label>
		    
		      <input type="text" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="meta_descr" name="meta_description">
		   
		  </div>

			<br>

		  <div class="mb-6">
		    <label for="meta_keyword" class="block text-grey-darker text-sm font-bold mb-2">Meta Keyword</label>
		   
		      <input type="text" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="meta_keyword"  name="meta_keyword">
		   
		  </div>

			<br>

		   <div class="mb-6">
		    <label for="phone" class="block text-grey-darker text-sm font-bold mb-2">Phone</label>
		   
		      <input type="text" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="phone" name="phone">
		  
		  </div>

			<br>

		 <div class="mb-6">
		    <label for="email" class="block text-grey-darker text-sm font-bold mb-2">Email</label>
		   
		      <input type="email" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="email" name="email" >
		    
		  </div>

		<br>

		 <div class="mb-6">
		    <label for="address" class="block text-grey-darker text-sm font-bold mb-2"> Address </label>
		  
		      <input type="text" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="address" name="address" >
		 
		  </div>

		<br>

		<h5 class="text-center font-weight-bold"> Urls for Social Media Handles</h5>
		<br>

		 <div class="mb-6">
		    <label for="twitter" class="block text-grey-darker text-sm font-bold mb-2"> Twiiter </label>
		    
		      <input type="text" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="twitter" name="twitter" >
		    
		  </div>

		<br>

		 <div class="mb-6">
		    <label for="facebook" class="block text-grey-darker text-sm font-bold mb-2"> Facebook </label>
		   
		      <input type="text" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="facebook" name="facebook" >
		    
		  </div>

		<br>

		 <div class="mb-6">
		    <label for="instagram" class="block text-grey-darker text-sm font-bold mb-2"> Instagram </label>
		    
		
		      <input type="text" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm  " id="instagram" name="instagram" >

		  </div>

		  <div class="mb-6">
		    <label for="youtube" class="block text-grey-darker text-sm font-bold mb-2"> Youtube </label>

		      <input type="text" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="youtube" name="youtube" >

		  </div>

		   <div class="mb-6">
		    <label for="linkedin" class="block text-grey-darker text-sm font-bold mb-2"> LinkedIn </label>
		
		      <input type="text" class="appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="linkedin" name="linkedin" >
		  
		  </div>


        <div >
            <button type="submit" class=" mt-6 bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full mr-16">Add Settings </button>
        </div>

        <div class="mt-4 py-2 px-2 bg-red-light text-white rounded-lg">
            @include('partials.errors')
        </div>
    </form>

</div> {{-- end of w-full --}}

</div> {{-- end of flex --}}

@endsection