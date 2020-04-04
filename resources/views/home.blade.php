@extends('layouts.app')

{{-- @include('partials.sidenav') --}}
@section('content')
<div class="container flex h-screen">
    <div class="bg-blue-900 w-1/6 pl-5">
        <p class="text-gray-200 bold mb-5 underline">{{ Auth::user()->name }}</p>
        <ul class="text-white">
            <li class="py-3">Equities</li>
            <li class="py-3">Bonds</li>
            <li class="py-3">Currencies</li>
            <li class="py-3">Real Estate</li>
        </ul>
    </div>
    <div class="bg-gray-100">
        other part
    </div>
</div>
@endsection
