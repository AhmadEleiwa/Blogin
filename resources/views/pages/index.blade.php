@extends('layouts.app')
@section('content')

{{-- HERO SECTION --}}
<div class="hero-img flex flex-col items-center justify-center">
    <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">Welcome to my blog</h1>
    <a class="bg-gray-100 text-xl text-gray-700 px-5 py-4 uppercase rounded-lg hover:bg-transparent hover:text-gray-100 hover:border-gray-100 border transition duration-100"
        href="/">Start Reading</a>
</div>

{{-- Post --}}
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

{{-- Blog Categories --}}

<div class="text-center p-15 bg-green-500 text-gray-100">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <span class="font-bold text-xl py-3">UX Desgin</span>
        <span class="font-bold text-xl py-3">Programming</span>
        <span class="font-bold text-xl py-3">Graphic Design</span>
        <span class="font-bold text-xl py-3">Science</span>
        <span class="font-bold text-xl py-3">Engineering</span>
        <span class="font-bold text-xl py-3">Art</span>
        <span class="font-bold text-xl py-3">Business</span>
        <span class="font-bold text-xl py-3">Photography</span>
    </div>
</div>


{{-- Recent Posts --}}

<div class="container mx-auto text-center py-15">
    <h2 class="text-5xl fonty-bold py-10">Recent Post</h2>
    <p class="text-gray-400 leading-5 px-10">Contented get distrusts certainty nay are frankness concealed Contented get
        distrusts certainty nay are frankness concealed Contented get distrusts certainty nay are frankness concealed
        Contented get distrusts certainty nay are frankness concealed</p>

</div>
<div class="sm:grid grid-cols-2 mx-auto w-4/5">
    <div class="flex bg-gray-700 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">
            <ul class="md:flex text-xs gap-2">
                <li
                    class="bg-gray-100 text-gray-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-gray-500 hover:text-gray-100 transition-all duration-100">
                    <a href="">PHP</a>
                </li>
                <li
                    class="bg-gray-100 text-gray-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-gray-500 hover:text-gray-100 transition-all duration-100">
                    <a href="">Langauges</a>
                </li>
                <li
                    class="bg-gray-100 text-gray-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-gray-500 hover:text-gray-100 transition-all duration-100">
                    <a href="">Backend</a>
                </li>
            </ul>
            <h3 class=" text-base py-10 leading-6">
                Contented get distrusts certainty nay are frankness concealed
                ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects.
                End
                sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte
            </h3>

            <a href="/"
                class="bg-transparent text-sm border-2 font-bold text-gray-100 py-4 px-5 uppercase rounded-lg inline-block my-1 md:my-0 hover:bg-gray-500 hover:text-gray-100 transition-all duration-100">Read
                more</a>
        </div>
    </div>
    <div class="flex">
        <img class="obect-cover" src="https://picsum.photos/id/242/960/620" alt="">
    </div>
</div>
@endsection