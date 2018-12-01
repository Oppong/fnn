@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">
	
	<form action="{{route('lists.update', $list->id)}}" method="POST"  class="mt-16 py-8 bg-white px-32 shadow-lg rounded-lg font-sans" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
		 {{ csrf_field() }}
	 <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Update Category</div>
		<div class="mb-6">
            <label for="name" class="block text-grey-darker text-sm font-bold mb-2">
                Name
            </label>

            <input type="text" placeholder=" just a nice title for the slider" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="name" name="name" value="{{ $list->name}}">
        </div>

        <div class="mb-6">
            <label for="year" class="block text-grey-darker text-sm font-bold mb-2">
                Year of Completion
            </label>

            <input type="text" placeholder=" 2015" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="year" name="year" value="{{ $list->year}}">
        </div>

		
		<div >
            <button type="submit" class="bg-teal-dark hover:bg-teal px-4 text-white text-sm py-2 rounded-full mr-16">Update Category </button>
            <a href="{{ route('lists.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
        </div>
    </form>
</div>



@endsection