@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">
	
	<form action="{{route('slider.store')}}" method="POST"  class="mt-16 py-8 bg-white px-32 shadow-lg rounded-lg font-sans" enctype="multipart/form-data">
		 {{ csrf_field() }}
	 <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Create Slider </div>
		<div class="mb-6">
            <label for="title" class="block text-grey-darker text-sm font-bold mb-2">
                Title
            </label>

            <input type="text" placeholder=" just a nice title for the slider" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="title" name="title">
        </div>

        <div class="mb-6">
            <label for="body" class="block text-grey-darker text-sm font-bold mb-2">
                Body
            </label>

            <input type="text" placeholder=" just a nice body for the slider" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="body" name="body">
        </div>

          <div class="mb-6">
            <label for="image" class="block text-grey-darker text-sm font-bold mb-2">
                Upload Image
            </label>

            <input type="file" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="image" name="image">
        </div>
        	
		<div >
            <button type="submit" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full mr-16">Create Slider </button>
            <a href="{{ route('slider.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
        </div>
       
            @include('partials.errors')
       
    </form>
</div>



@endsection