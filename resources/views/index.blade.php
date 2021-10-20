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

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        Pin what you like, like what you see
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

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
    </p>
</div>

@endsection
