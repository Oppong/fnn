@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">
	
	<form action="{{route('cats.store')}}" method="POST"  class="mt-16 py-8 bg-white px-32 shadow-lg rounded-lg font-sans">
		 {{ csrf_field() }}
	 <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Create a Category </div>
		<div class="mb-6">
            <label for="name" class="block text-grey-darker text-sm font-bold mb-2">
                Name
            </label>

            <input type="text" placeholder=" a name for your category" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="name" name="name">
        </div>

		<div >
            <button type="submit" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full mr-16">Add Category </button>
            <a href="{{ route('cats.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
        </div>

         
              @include('partials.errors')
          
    </form>

  
    
</div>



@endsection