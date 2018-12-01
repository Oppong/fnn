@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">


	
	<form action="{{route('adminusers.store')}}" method="POST" class="mt-16 py-8 bg-white px-16 shadow-lg rounded-lg font-sans">
		 {{ csrf_field() }}
            <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Create Admin User </div>
		         <div class="mb-6">
                     <label for="name" class="block text-grey-darker text-sm font-bold mb-2">
                         Name
                     </label>

                     <input type="text" placeholder="eg. amponsah" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="name" name="name">
                 </div>
		
		         <div class="mb-6">
                     <label for="email" class="block text-grey-darker text-sm font-bold mb-2">
                         Email
                     </label>

                     <input type="email" placeholder="info@example.com" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="email" name="email">
                 </div>

                  <div class="mb-6">
                        <label for="roles" class="block text-grey-darker text-sm font-bold mb-2">
                            Roles
                        </label>  
     
                        @foreach($roles as $role)
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}" class="ml-2 mr-1">{{$role->name}}

                        @endforeach    
               
                 </div>

                 <div class="mb-6">
                     <label for="password" class=" text-grey-darker text-sm font-bold mb-2">
                        Password
                     </label>

                     <input type="password" placeholder="password" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="password" name="password">
                 </div>

                 <div class="mb-6">
                     <label for="password" class=" text-grey-darker text-sm font-bold mb-2">
                        Confirm Password
                     </label>

                     <input type="password" placeholder="password" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="password_confirmation" name="password_confirmation">
                 </div>

                 <div >
                     <button type="submit" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full mr-16">Add Admin User </button>
                     <a href="{{ route('adminusers.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
                 </div>

                  <div class="mt-4 py-2 px-2 bg-red-light text-white rounded-lg">
                       @include('partials.errors')
                  </div>
	</form>

    <div class="mt-4">
        @include('partials.errors')
    </div>
</div>



@endsection