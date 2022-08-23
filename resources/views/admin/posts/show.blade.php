@extends('admin.layouts.base')

@section('mainContent')
    <h1>{{ $post->title }}</h1>
    <h2>Written by: {{ $post->user->name }}</h2>
    
   {{--  //nel primo caso in cui non abbiamo la foto ne uscira una di deafault --}}
   {{--  <img src="{{ asset($post->image ? 'storage/' . $post->image : 'img/fallback.png') }}" alt="{{ $post->title }}"> --}}
    
   {{-- nel secondo caso al posto dell' immagine di default uscirà la scritta --}}
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image)}}" alt="{{ $post->title }}">
    @endif
    <h3>In category: {{ $post->category->name }}</h3>
    <div class="tags">
        @foreach ($post->tags as $tag)
            <span class="tag">{{ $tag->name }}</span>
        @endforeach
    </div>
    <p>{{ $post->content }}</p>
@endsection
