@extends('layouts.app')

@section('content')


<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Feed
        </h1>
    </div>
</div>

{{--show msg if successfully posted--}}

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

{{--condition to show button if user logged in--}}

 @if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a href="/blog/create" class="bg-red-700 uppercase bg-transparent text-gray-100 text-xs font-bold py-3 px-5 rounded-3xl">
            PIN IMAGE
        </a>
    </div>
 @endif

 @foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
             <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                 {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                 By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                 {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-red-700 text-gray-100 text-lg font-bold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

{{--            condition to check if user is the same as post creator--}}
             @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a href="/blog/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                 <span class="float-right">
                 <form action="/blog/{{ $post->slug }}" method="post">
                     @csrf
                     @method('delete')

                     <button class="text-red-700 pr-3" type="submit">
                         Delete
                     </button>



                 </form>
                 </span>
             @endif
        </div>
    </div>

    {{--TILES--}}

    <div class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-1 xl:-mx-1">

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1 xl:w-1/4">
            <!-- Column Content -->
        </div>

    </div>
    {{--END TILES --}}


@endforeach

@endsection
