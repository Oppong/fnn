@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">

		<form action="{{route('adminsettings.store')}}" method="POST"  class="mt-16 py-8 bg-white px-32 shadow-lg rounded-lg font-sans" enctype="multipart/form-data">
		 {{ csrf_field() }}
	 <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Admin Settings </div>
		<div class="mb-6">
            <label for="text" class="block text-grey-darker text-sm font-bold mb-2">
               About Admin
            </label>

            <input type="ext" placeholder=" about admin" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="text" name="text">
        </div>

          <div class="mb-6">
            <label for="image" class="block text-grey-darker text-sm font-bold mb-2">
                Upload Image
            </label>

            <input type="file" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="image" name="image">
        </div>



		
		<div >
            <button type="submit" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full mr-16">Add Settings </button>
            <a href="{{ route('adminsettings.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
        </div>



   </form>
</div>


@endsection