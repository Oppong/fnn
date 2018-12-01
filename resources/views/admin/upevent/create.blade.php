@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">
	
	<form action="{{route('upevent.store')}}" method="POST"  class="mt-16 py-8 bg-white px-32 shadow-lg rounded-lg font-sans">
		 {{ csrf_field() }}
	 <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Create Event </div>
		<div class="mb-6">
            <label for="title" class="block text-grey-darker text-sm font-bold mb-2">
                Title
            </label>

            <input type="text" placeholder=" Caption for the event" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="title" name="title">
        </div>

        <div class="mb-6">
            <label for="content" class="block text-grey-darker text-sm font-bold mb-2">
                Content
            </label>

            <input type="text" placeholder=" A little description for the Event" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="content" name="content">
        </div>

        <div class="mb-6">
            <label for="content" class="block text-grey-darker text-sm font-bold mb-2">
                Date
            </label>

            <input type="date" placeholder=" " class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="date" name="date">
        </div>

        <div class="mb-6">
            <label for="content" class="block text-grey-darker text-sm font-bold mb-2">
                Time
            </label>

            <input type="time" placeholder=" " class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="time" name="time">
        </div>

         <div class="mb-6">
            <label for="content" class="block text-grey-darker text-sm font-bold mb-2">
                Venue
            </label>

            <input type="text" placeholder=" " class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="venue" name="venue">
        </div>


        	
		<div >
            <button type="submit" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full mr-16">Create Event </button>
            <a href="{{ route('upevent.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
        </div>
       
            @include('partials.errors')
       
    </form>
</div>



@endsection