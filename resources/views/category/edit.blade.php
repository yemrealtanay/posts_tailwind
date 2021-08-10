@extends('layouts.master')
@section('content')



<div class="bg-blue-200 py-32 px-10">
    <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
      <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-5">
          <label for="name" class="block mb-2 font-bold text-gray-600">Kategori Adı</label>
          <input class="border border-gray-300 shadow p-3 w-full rounded" id="inpname" type="text" name="name" placeholder={{$category->name}}>
        </div>
        
        <button type="submit" class="block w-full bg-blue-500 text-blue-100 rounded-lg p-4 font-bold">Güncelle</button>
      </form>
      <hr>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="block w-full bg-red-500 text-white rounded-lg p-4 font-bold">Kategoriyi Sil</button>
                    </form>
    </div>
  </div>



@endsection