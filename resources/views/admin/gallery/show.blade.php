@extends('admin.ash')


@section('content')


<div class="flex items-center justify-center">
	<div class="bg-white px-16 py-8 shadow-lg mt-16 rounded-lg">
		<div class="border-b py-3 text-grey-darker mb-4 font-bold "> View Image </div>
		<p class="mb-6 text-grey-dark"> <img src="/img/{{ $gallery->image}}" alt="" class="rounded-lg w-120 h-64 mx-auto shadow-lg"> </p>
		<p class="mb-6 text-grey-dark"> Title: <span class="font-bold">{{ $gallery->title}}</span> </p>
		<p class="mb-6 text-grey-dark"> Description of the Image :  <span class="font-bold">{{ $gallery->body}}</span></p>

		<a href="{{ route('gallery.index')}}" class="bg-orange hover:bg-orange-dark px-4 py-2 rounded-full no-underline hover:underline text-sm text-white">Return to List</a>
</div>


@endsection