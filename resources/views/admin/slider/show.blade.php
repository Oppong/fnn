@extends('admin.ash')


@section('content')


<div class="flex items-center justify-center">
	<div class="bg-white px-16 py-8 shadow-lg mt-16 rounded-lg">
		<div class="border-b py-3 text-grey-darker mb-4 font-bold "> View Slider </div>
		<p class="mb-6 text-grey-dark"> <img src="/img/{{ $slider->image}}" alt="" class="rounded-lg w-120 h-64 mx-auto shadow-lg"> </p>
		<p class="mb-6 text-grey-dark"> Title: <span class="font-bold">{{ $slider->title}}</span> </p>
		<p class="mb-6 text-grey-dark"> Body of the Slider Text:  <span class="font-bold">{{ $slider->body}}</span></p>

		<a href="{{ route('slider.index')}}" class="bg-orange hover:bg-orange-dark px-4 py-2 rounded-full no-underline hover:underline text-sm text-white">Return to List</a>
</div>


@endsection