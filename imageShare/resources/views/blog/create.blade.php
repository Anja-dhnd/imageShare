@extends('layouts.app')

@section('content')


    <div class="w-4/5 m-auto text-center">
        <div class="py-15 m-auto text-left">
            <h1 class="text-6xl">
                Create post
            </h1>
        </div>
    </div>

  <div class="w-4/5 m-auto pt-20">
      <form action="/blog" method="post" enctype="multipart/form-data">

          @csrf

          <input type="text" name="title" placeholder="Title" class="bg-gray-0 block border-b-2 w-full h-20 text-6xl outline-non">

          <textarea name="description" placeholder="Description" class="py-20 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none"></textarea>

          <div class="bg-grey-lighter pt-15">
              <label
          </div>

      </form>
  </div>





@endsection
