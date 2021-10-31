@extends('layouts.app')

@section('content')


    <div class="w-4/5 m-auto text-center">
        <div class="py-15 m-auto text-center">
            <h1 class="text-4xl">
                Create post
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="w-4/5 m-auto pt-20">
      <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          <input type="text" name="title" placeholder="Title" class="bg-transparent block border-b-2 w-full h-20 text-3xl outline-none">

          <textarea name="description" placeholder="Description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

          <div class="bg-grey-lighter pt-15">


                  <input type="file" name="image" class="form-control @error('file') is-invalid @enderror" value="{{ old('file') }}">
                  @error('file')
                  <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                  </span>
                  @enderror

          </div>
            <button type="submit" class="uppercase mt-15 bg-red-700 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit post
            </button>
      </form>
  </div>





@endsection
