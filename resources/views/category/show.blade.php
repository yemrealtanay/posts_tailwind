@extends('layouts.master')
@section('content')



<div class="pt-6 pb-12 bg-gray-300">  
    <div id="card" class="">
      <h2 class="text-center uppercase text-4xl xl:text-5xl">{{ $category->name }}</h2>
      <a class="ml-10 px-4 py-2 bg-indigo-200 border border-b-4 border-r-2 border-indigo-400 rounded-sm text-gray-800 font-semibold text-sm uppercase" href="{{ route('categories.edit', $category) }}">Kategori Düzenle</a>
      <!-- container for all cards -->
      <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
        @foreach ($category->posts as $post)
            
        
        <!-- card -->
        <div v-for="card in cards" class="flex flex-col md:flex-row overflow-hidden
                                          bg-white rounded-lg shadow-xl  mt-4 w-100 mx-2">
          <!-- media -->
          <div class="h-64 w-auto md:w-1/2">
            <img class="inset-0 h-full w-full object-cover object-center" :src="card.img" />
          </div>
          <!-- content -->
          <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
            <h3 href="{{ route('posts.show', $post) }}"class="font-semibold text-lg leading-tight truncate">{{ $post->title }}</h3>
        </div>
        </div><!--/ card-->
        @endforeach
      </div><!--/ flex-->
    </div>
  </div>

@endsection