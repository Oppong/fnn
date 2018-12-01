@extends('admin.ash')


@section('content')


<div class="flex items-center justify-center">
	<div class="bg-white px-16 py-8 shadow-lg mt-16 rounded-lg">
		<div class="border-b py-3 text-grey-darker mb-4 font-bold "> View Blog Post </div>
		<p class="mb-6 text-grey-dark"> <img src="/img/{{ $blog->image}}" alt="" class="rounded-lg w-120 h-64 mx-auto shadow-lg"> </p>
		<p class="mb-6 text-grey-dark"> Title: <span class="font-bold">{{ $blog->title}}</span> </p>
		<p class="text-grey-dark">Posted by <strong> Admin {{--{{ $post->user->name}}--}} </strong> on <small><strong> {{ $blog->created_at->toFormattedDateString()}}</strong></small></p>
		<p class="mb-6 text-grey-dark">  <span class="font-sans"> {!! ($blog->body)  !!} </span></p>
		<p class="font-sans mb-6"> Posted In {{ $blog->category->name}} Category</p> 

		<a href="{{ route('blogs.index')}}" class="mt-8 bg-orange hover:bg-orange-dark px-4 py-2 rounded-full no-underline hover:underline text-sm text-white">Return to List</a>
</div>


@endsection