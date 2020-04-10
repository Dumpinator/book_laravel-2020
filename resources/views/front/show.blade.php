@extends('layouts.master')

@section('content')
<article>
<div class="col-md-12">
    <h1>{{ $book->title }}</h1>
    @if( is_null($book->picture) == false)
        <div class="row">
           <div class="col-xs-6 col-md-3">
                <img width="171" src="{{ asset('images/' . $book->picture->link ) }}" alt="{{ $book->picture->title }}" />
           </div>
        </div>
    @endif
    <h2>Description</h2>
    <p>{{ $book->description}}</p>
    @if( is_null($book->score) == false)
        <p>Score : {{ $book->score}}</p>
    @endif
    <h3>Le(s) auteur(s)</h3>
    <ul>
        @forelse($book->authors as $author)
        <li><a href="{{ route('show_book_author', $author->id) }}">{{ $author->name }}</a></li>
        @empty
        <li>Pas d'auteur</li>
        @endforelse
    </ul>
</div>

</article>
@endsection