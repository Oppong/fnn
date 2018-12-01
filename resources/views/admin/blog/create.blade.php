@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center w-full">
	
	<form action="{{route('blogs.store')}}" method="POST"  class="mt-16 py-8 bg-white px-32 shadow-lg rounded-lg font-sans" enctype="multipart/form-data">
		 {{ csrf_field() }}
	 <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Create Blog Post </div>

           {{-- Category for blog Post --}}
		<div class="mb-6">
            <label for="category_id" class="block text-grey-darker text-sm font-bold mb-2">
                Category
            </label>
            
          <div class="relative">
             <select name="category_id" id="category_id" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm ">
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{$category->name}}</option>
                  @endforeach     
            </select>
                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                   <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
           </div>{{--  end of relative --}}
        </div>


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
             <textarea name="body" id="editor" rows="15" class="appearance-none border border-grey-light rounded  py-2 px-3 w-full text-grey-darker text-sm"></textarea>
        </div>

          <div class="mb-6">
            <label for="image" class="block text-grey-darker text-sm font-bold mb-2">
                Upload Image For the Post
            </label>

            <input type="file" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="image" name="image">
        </div>
		
		<div >
            <button type="submit" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full mr-16"> Create Post </button>
            <a href="{{ route('blogs.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
        </div>

       
            @include('partials.errors')
       
    </form>

     
</div>



@endsection