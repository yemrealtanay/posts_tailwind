@extends('layouts.master')
@section('content')



<div class="bg-blue-200 py-32 px-10">
    <h1 class="text-center pb-10 uppercase text-4xl xl:text-5xl">Post Ekle</h1>
    <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
      <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 font-bold text-gray-600">Kategori Seç</label>
        </div>
        <select name="category_id" class="border border-gray-300 shadow p-3 w-full rounded mb-5">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <div class="mb-5">
          <label for="name" class="block mb-2 font-bold text-gray-600">Post Başlığı</label>
          <input class="border border-gray-300 shadow p-3 w-full rounded" id="inpname" type="text" name="title">
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2 font-bold text-gray-600">Post İçeriği</label>
            
            <textarea class="border h-64 border-gray-300 shadow p-3 w-full rounded" id="inpcontent" type="text" rows="5" name="content"></textarea>
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2 font-bold text-gray-600">Resim Ekle</label>
            <label for="product_image" class="flex flex-col items-center justify-center border-4 border-gray-300 border-dashed rounded h-36 px-6 text-lg text-gray-600 focus:outline-none focus:ring focus:border-blue-300 cursor-pointer"" autocomplete="off">
            <svg class="w-8 h-8 text-gray-600
            " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg>
            <span class="mt-2 text-base leading-normal text-blue-500 font-bold">Resim Seçmek için Tıkla</span>
            <input type="file" id="product_image" class="hidden"/>
            </label>
        <p class="py-2 text-gray-400">Ekleyeceğiniz resim formatı sadece .png ya da .jpg olmalıdır </p>
        </div>
      
        
        <button type="submit" class="block w-full bg-blue-500 text-blue-100 rounded-lg p-4 font-bold">Kaydet</button>
      </form>
    </div>
  </div>



@endsection