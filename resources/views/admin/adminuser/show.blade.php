@extends('admin.ash')


@section('content')


<div class="flex items-center justify-center">
	<div class="bg-white px-16 py-8 shadow-lg mt-16 rounded-lg">
		<div class="border-b py-3 text-grey-darker mb-4 font-bold "> View Admin User </div>
		<p class="mb-6 text-grey-dark"> Name:  {{ $user->name}} </p>
		<p class="mb-6 text-grey-dark"> email: {{ $user->email}} </p>

		<a href="{{ route('adminusers.index')}}" class="bg-orange hover:bg-orange-light px-4 py-2 rounded-full no-underline hover:underline text-sm text-white">Return to List</a>		
		

	</div>
</div>


@endsection