@extends('layouts.app')


@section('content')

<div class="m-auto text-center pt-15 pb-5 container">
    <h1 class="text-6xl font-bold">All posts</h1>
</div>

@foreach ( $posts as $post )
    


<div class="container mx-auto sm:grid grid-cols-2 gap-15 py-15 px-5 border-b border-gray-300 ">
    <div class="flex">
        <img class="object-cover" src="{{$post->image_path}}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post->title}}</h2>
        <div>
            By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
            <p class=" text-lg text-gray-700 py-8 leading-6 ">{{$post->description}}</p>
            <a href="/blog/{{$post->slug}}"
                class="bg-gray-700 text-xs text-gray-100 px-5 py-4 uppercase rounded place-self-start hover:bg-gray-500 transistion-all duration-100">Read
                more</a>
        </div>
    </div>
</div>
@endforeach

@endsection