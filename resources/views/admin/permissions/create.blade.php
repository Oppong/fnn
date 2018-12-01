@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">
	
	<form action="{{route('permissions.store')}}" method="POST" class="mt-16 py-8 bg-white px-16 shadow-lg rounded-lg font-sans">
		 {{ csrf_field() }}
            <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Add Permission </div>
		         <div class="mb-6">
                     <label for="name" class="block text-grey-darker text-sm font-bold mb-2">
                         Name
                     </label>

                     <input type="text" placeholder="eg. amponsah" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="name" name="name">
                 </div>

                  <div class="mb-6">
                        <label for="roles" class="block text-grey-darker text-sm font-bold mb-2">
                            Roles
                        </label>  
     
                     @if(!$roles->isEmpty())
                            <h4>Assign Permission to Roles</h4>

                        @foreach($roles as $role)
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}">{{$role->name}}
                        @endforeach  

                     @endif  
               
                 </div>

                 <div >
                     <button type="submit" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full mr-16">Add Permission </button>
                     <a href="{{ route('permissions.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
                 </div>

                 <div class="mt-4 py-2 px-2 bg-red-light text-white rounded-lg">
                      @include('partials.errors')
                 </div>
	</form>

    
</div>



@endsection