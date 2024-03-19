@extends('layouts.app')


@section('content')

<div class="m-auto text-center pt-15 pb-5 container">
    <h1 class="text-6xl font-bold">All posts</h1>
</div>



<div class="container mx-auto sm:grid grid-cols-2 gap-15 py-15 px-5 border-b border-gray-300 ">
    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/343/960/620" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">How To Create Laravel Blog</h2>
        <div>
            By: <span class="text-gray-500 italic">Ahmad</span>
            <p class=" text-lg text-gray-700 py-8 leading-6 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ad
                ipsa doloribus, inventore ut velit minus quidem
                ea tempore vitae voluptates eligendi fugit maiores enim eaque distinctio eveniet error quia quo?</p>
            <a href="/"
                class="bg-gray-700 text-xs text-gray-100 px-5 py-4 uppercase rounded place-self-start hover:bg-gray-500 transistion-all duration-100">Read
                more</a>
        </div>
    </div>
</div>

<div class="container mx-auto sm:grid grid-cols-2 gap-15 py-15 px-5 border-b border-gray-300 ">
    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/343/960/620" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">How To Create Laravel Blog</h2>
        <div>
            By: <span class="text-gray-500 italic">Ahmad</span>
            <p class=" text-lg text-gray-700 py-8 leading-6 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ad
                ipsa doloribus, inventore ut velit minus quidem
                ea tempore vitae voluptates eligendi fugit maiores enim eaque distinctio eveniet error quia quo?</p>
            <a href="/"
                class="bg-gray-700 text-xs text-gray-100 px-5 py-4 uppercase rounded place-self-start hover:bg-gray-500 transistion-all duration-100">Read
                more</a>
        </div>
    </div>
</div>

@endsection