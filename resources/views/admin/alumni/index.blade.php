@extends('admin.ash')


@section('content')

<div class="mt-16">
	<a href="{{ route('alumni.create' )}}" class="bg-blue-dark hover:bg-blue px-4 text-white text-sm py-2 rounded-full ml-12 mr-2 no-underline" >Create Event</a>


	<input type="text" placeholder="Search" class="border border-grey-light py-2 px-3 rounded-lg shadow"> 
</div>

<div class="flex">
	
	<table class="w-full table-fixed shadow-lg bg-white rounded-lg font-sans mt-4 mr-12 ml-12 ">
		      <thead class="text-sm font-thin text-grey-dark border-b border-grey-light border-b border-solid">
		          <th class="py-4 pl-6">ID</th>
		          <th class="py-4 pl-6">TITLE</th>
		          <th class="py-4 pl-6">DATE</th>
		          <th class="py-4 pl-6">VENUE</th>
		          <th class="py-4 pl-6">TIME</th>
		          <th class="py-4 pl-6">CONTENT</th>
		          <th class="py-4 pl-6 pr-4 text-right">ACTION</th>   
	         </thead>
		      <tbody>
	       @foreach($upevents as $upevent)
	          <tr class="border-b border-t text-grey-darker text-sm">
	            <td class="py-4 pl-6">{{ $upevent->id}}</td>
	            <td class="py-4 pl-6">{{ $upevent->title }} </td>
	            <td class="py-4 pl-6">{{$upevent->date}}</td>
	            <td class="py-4 pl-6">{{$upevent->venue}}</td>
	            <td class="py-4 pl-6">{{$upevent->time}}</td>
	            <td class="py-4 pl-6">{{$upevent->content}}</td>
	                <td class="flex justify-end"> 
	                  <a href="{{ route('alumni.show', $upevent->id )}}" class="text-grey-dark pt-5 pr-2 pl-2" title="view"><i class="fa fa-eye " ></i></a>
	                   <a href="{{ route('alumni.edit', $upevent->id )}}" class="text-grey-dark pt-5 pr-2 pl-2"><i class="fa fa-pencil-square-o" title="edit"></i></a>
	                   <form action="{{ route('alumni.destroy', $upevent->id)}}" method="POST">
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