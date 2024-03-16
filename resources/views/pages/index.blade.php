@extends('layouts.app')
@section('content')

{{-- HERO SECTION --}}
<div class="hero-img flex flex-col items-center justify-center">
    <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">Welcome to my blog</h1>
    <a class="bg-gray-100 text-xl text-gray-700 px-5 py-4 uppercase rounded-lg hover:bg-transparent hover:text-gray-100 hover:border-gray-100 border transition duration-100"
        href="/">Start Reading</a>
</div>


<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
    <div class="mx-2 md:mx-0"><img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt=""></div>
    <div class="flex flex-col items-start justify-center m-10 sm:m-0">
        <h2 class="font-bold text-4xl text-gray-700  uppercase my-5">How to be an expert in 2024</h2>
        <p class="font-bold text-gray-600 pt-2 text-xl">You can find more information about how to be an expert in 2024
        </p>
        <p class="py-4 text-gray-500 text-sm leading-5">Contented get distrusts certainty nay are frankness concealed
            ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End
            sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte
            sympathize was.</p>
        <a href="/" class="bg-gray-700 text-gray-100 px-5 py-4 uppercase rounded place-self-start">Read more</a>
    </div>
</div>
@endsection