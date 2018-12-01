@extends('admin.ash')


@section('content')


<div class="mt-16">
	<a href="{{ route('adminusers.create' )}}" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full ml-12 mr-2 no-underline" >Create Admin User</a> 
	<input type="text" placeholder="Search" class="border border-grey-light py-2 px-3 rounded-lg shadow"> 
	
</div>

<div class="flex">
  
	<table class="w-full table-fixed shadow-lg bg-white rounded-lg font-sans mt-4 mr-12 ml-12 ">
		      <thead class="text-sm font-thin text-grey-dark border-b border-grey-light border-b border-solid">
		          <th class="py-4 pl-6">ID</th>
		          <th class="py-4 pl-6">NAME</th>
		          <th class="py-4 pl-6">EMAIL</th>
		          <th class="py-4 pl-6">CREATED AT</th>
		          <th class="py-4 pl-6">USER ROLES </th>
		          <th class="py-4 pl-6 pr-4 text-right">ACTION</th>   
	         </thead>
		      <tbody>
	       @foreach($users as $user)
	          <tr class="border-b border-t text-grey-darker text-sm">
	            <td class="py-4 pl-6">{{ $user->id}}</td>
	            <td class="py-4 pl-6">{{ $user->name}} </td>
	            <td class="py-4 pl-6">{{$user->email}}</td>
	            <td class="py-4 pl-6">{{ Carbon\Carbon::parse($user->created_at)->toFormattedDateString()}}</td>
	            <td class="py-4 pl-6">{{$user->roles()->pluck('name')->implode(' ')}}</td>
	                <td class="flex justify-end"> 
	                  <a href="{{ route('adminusers.show', $user->id )}}" class="text-grey-dark pt-5 pr-2 pl-1" title="view"><i class="fa fa-eye " ></i></a>
	                   <a href="{{ route('adminusers.edit', $user->id )}}" class="text-grey-dark pt-5 pr-2 pl-1"><i class="fa fa-pencil-square-o" title="edit"></i></a>
	               
	                  <form action="{{ route('adminusers.destroy', $user->id )}}" method="POST">
					       <input type="hidden" name="_method" value="DELETE">
					         {{csrf_field()}}
						      <button class=" pt-5 pr-2 pl-2">
						      	  <i class="fa fa-trash-o text-grey-dark " title="delete"></i>
						      </button>
				       </form>
				   

	                </td> 
	          </tr>
	       @endforeach
	      </tbody>
	    </table>

</div> {{-- end of flex --}}


@endsection