@extends('layouts.master')
@section('content')



    <div class="pl-10 ml-10 pb-10 mb-10">

        <h1 class="text-orange-400 font-bold mb-4 pt-10 pl-10">Tüm Kategoriler</h1>
    

    @foreach($categories as $category)
    
    <div class="p-20 bg-grey">
        
        <div class="bg-white rounded-lg shadow-2xl md:flex">
          <img src="https://images.unsplash.com/photo-1593642532744-d377ab507dc8" alt="Laptop on Desk" class="md:w-1/3 rounded-t-lg md:rounded-l-lg md:rounded-t-none" />
          <div class="p-6">
            
            <h2 class="font-bold text-xl md:text-3xl mb-2 text-orange-700"><a href="{{ route('categories.show', $category) }}" class="text-blue-700 text-sm font-bold uppercase pb-10">{{ $category->name }}</a></h2>
            <p class="text-orange-700">
                <ul>
                    @foreach($category->posts as $post)
                  <li><a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}<br/>
                    </a></li>
                    @endforeach
              </ul>
              
            </p>
            
          </div>
      
        </div>
      </div>
    


    
    
    @endforeach

    
</div>

@endsection