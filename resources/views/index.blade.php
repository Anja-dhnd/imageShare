@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">

            <a href="/blog" class="uppercase bg-red-700 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                DISCOVER MORE
            </a>
        </div>
    </div>
</div>

{{--{{ $posts }}--}}

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        Pin what you like, like what others pin
    </h2>

    <span class="font-bold block text-3xl py-1">
        Food
    </span>
    <span class="font-bold block text-3xl py-1">
        Landscapes
    </span>
    <span class="font-bold block text-3xl py-1">
        Portrait
    </span>
    <span class="font-bold block text-3xl py-1">
        Art
    </span>
    <span class="font-bold block text-3xl py-1">
    And much more
    </span>
</div>

<div class="text-center py-15">
    <h2 class="text-4xl font-bold py-10">
        Some posts
    </h2>

    <div class="row-span-2">
        <div class="grid grid-cols-3 px-10 gap-2">
            <div class="flex justify-center items-center">
                <a class="cursor-pointer" href="#">
                    <div class="hover:scale-105 transform transition-all duration-500">
                        <img class="h-30 rounded-lg"
                             src="https://picsum.photos/400/300?random=1" alt="image" />
                    </div>
                </a>
            </div>
            <div class="flex justify-center items-center">
                <a class="cursor-pointer" href="#">
                    <div class="hover:scale-105 transform transition-all duration-500">
                        <img class="h-30 my-10 rounded-lg"
                             src="https://picsum.photos/400/300?random=2" alt="image" />
                    </div>
                </a>
            </div>
            <div class="flex justify-center items-center">
                <a class="cursor-pointer" href="#">
                    <div class="hover:scale-105 transform transition-all duration-500">
                        <img class="h-30 rounded-lg"
                             src="https://picsum.photos/400/300?random=3" alt="image" />
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row-span-2">
        <div class="grid grid-cols-3 px-10 gap-2">
            <div class="flex justify-center items-center">
                <a class="cursor-pointer" href="#">
                    <div class="hover:scale-105 transform transition-all duration-500">
                        <img class="h-30 rounded-lg"
                             src="https://picsum.photos/400/300?random=4" alt="image" />
                    </div>
                </a>
            </div>
            <div class="flex justify-center items-center">
                <a class="cursor-pointer" href="#">
                    <div class="hover:scale-105 transform transition-all duration-500">
                        <img class="h-30 rounded-lg"
                             src="https://picsum.photos/400/300?random=5" alt="image" />
                    </div>
                </a>
            </div>
            <div class="flex justify-center items-center">
                <a class="cursor-pointer" href="#">
                    <div class="hover:scale-105 transform transition-all duration-500">
                        <img class="h-30 rounded-lg"
                             src="https://picsum.photos/400/300?random=6" alt="image" />
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
