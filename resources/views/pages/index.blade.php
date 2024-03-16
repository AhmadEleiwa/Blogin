@extends('layouts.app')
@section('content')

{{-- HERO SECTION --}}
<div class="hero-img flex flex-col items-center justify-center">
    <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">Welcome to my blog</h1>
    <a class="bg-gray-100 text-xl text-gray-700 px-5 py-4 uppercase rounded-lg hover:bg-transparent hover:text-gray-100 hover:border-gray-100 border transition duration-100"
        href="/">Start Reading</a>
</div>


<div class="container">
    <div><img src="https://picsum.photos/id/239/960/620" alt=""></div>
    <div>
        <h2>How to be an expert in 2024</h2>
    </div>
</div>
@endsection