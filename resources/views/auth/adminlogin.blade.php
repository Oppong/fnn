@extends('layouts.app')

@section('content')

  <div class="w-full min-h-screen flex items-center justify-center bg-grey-lighter">

          <form action="{{  route('admin.store') }}" method="POST" class="bg-white shadow-lg py-8 px-6 rounded-lg ">
             {{ csrf_field()}}

                 <p class="text-center text-xl mb-4"> Admin Login </p>

                 <div class="mb-4">
                     <label for="email" class="text-grey-darker text-sm font-bold">
                         Email
                     </label>

                     <input type="email" placeholder="info@example.com" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker" id="email" name="email">
                 </div>

                 <div class="mb-4">
                     <label for="password" class="text-grey-darker text-sm font-bold">
                        Password
                     </label>

                     <input type="password" placeholder="password" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker" id="password" name="password">
                 </div>

                  <div class=" mb-4">
                        <label class="w-3/4 ml-auto">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="text-sm text-grey-dark"> {{ __('Remember Me') }}</span>
                        </label>
                  </div>

                  <div class="">
                            <button type="submit" class="bg-blue hover:bg-blue-dark text-white text-sm py-2 px-4 rounded-full mr-3">
                                {{ __('Login') }} &nbsp; <i class="fa fa-user text-white"></i>
                            </button>
                            <a class="no-underline hover:underline text-blue-darker text-sm" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                  </div>

                  <div class="mt-4">
                      @include('partials.errors')
                  </div>
             
          </form>

  </div>

@endsection
