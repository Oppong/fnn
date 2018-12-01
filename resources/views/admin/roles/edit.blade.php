@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">
	
	<form action="{{ route('roles.update',  $role->id )}}" method="POST" class="mt-16 py-8 bg-white px-16 shadow-lg rounded-lg font-sans">
        <input type="hidden" name="_method" value="PATCH">
		 {{ csrf_field() }}


				<div class="border-b py-3 text-grey-darker mb-4 font-bold "> Update Role </div>
		         <div class="mb-6">
                     <label for="name" class="block text-grey-darker text-sm font-bold mb-2">
                         Name
                     </label>

                     <input type="text" placeholder="eg. Editor" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="name" name="name" value="{{ $role->name }}">
                 </div>

                <div class="mb-6"> 
     
                        <h4 class="block text-grey-darker text-sm font-bold mb-2">Assign Permission </h4>

                        @foreach($permissions as $permission)
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">{{$permission->name}}
                        @endforeach  
               
                 </div>
			
			     <div >
                     <button type="submit" class="bg-teal-dark hover:bg-teal px-4 text-white text-sm py-2 rounded-full mr-16">Update Roles</button>
                     <a href="{{ route('roles.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
                 </div>

	</form>
</div>



@endsection