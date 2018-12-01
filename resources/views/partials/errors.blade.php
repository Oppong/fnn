
@if($errors->count())

   <div class="mt-4 py-2 px-2 bg-red-light text-white rounded-lg">
	   <ul>
			
		@foreach($errors->all() as $error)
		
		     <li> {{ $errors}} </li>

		@endforeach
	    </ul>
    </div>
@endif