@extends('layouts.app')

@section('content')
<div class="container">
    <section class="absolute w-full">
        <div class="absolute top-0 w-full h-full bg-blue-900"></div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-2/5 px-4 pt-32">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                        {{-- <div class="rounded-t mb-0 px-6 py-6">
                            <div class="text-center mb-3">
                                <h6 class="text-gray-600 text-sm font-bold">Sign in with</h6></div>
                            <div class="btn-wrapper text-center">
                                <button class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;"><img alt="..." class="w-5 mr-1" src="https://demos.creative-tim.com/tailwindcss-starter-project/static/media/github.4ffd4fe7.svg">Github</button>
                                <button class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;"><img alt="..." class="w-5 mr-1" src="https://demos.creative-tim.com/tailwindcss-starter-project/static/media/google.87be59a1.svg">Google</button>
                            </div>
                            <hr class="mt-6 border-b-1 border-gray-400">
                        </div> --}}
                        <div class="flex-auto px-2 lg:px-10 py-10 pt-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
                                    <input id="email" type="email" placeholder="Email" name="email" style="transition: all 0.15s ease 0s;" required autocomplete="email" autofocus
                                        class="@error('email') is-invalid @enderror px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" style="transition: all 0.15s ease 0s;"
                                        class="@error('password') is-invalid @enderror px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" >
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" name="remember" id="remember" id="customCheckLogin" type="checkbox"
                                        class="form-checkbox text-gray-800 ml-1 w-5 h-5" style="transition: all 0.15s ease 0s;"
                                        {{ old('remember') ? 'checked' : '' }}>
                                        <span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span>
                                    </label>
                                </div>

                                <div class="text-center mt-6">
                                    <button type="submit" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white bg-blue-900 hover:border-transparent hover:text-blue-900 hover:bg-white mt-4 lg:mt-0">
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
