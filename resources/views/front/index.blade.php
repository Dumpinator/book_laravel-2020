@extends('layouts.master')

@section('title')
Page des books 
@endsection

@section('content')

@foreach ($books as $book)
    <p>{{ $book->title }}</p>
   
    <p>Les auteurs si ils existent du livre </p>
    <ul>
    @forelse($book->authors as $author)
        <li>{{ $author->name }}</li>
    @empty
        <li>Aucun auteur pour ce livre </li>
    @endforelse
    </ul>
@endforeach

@endsection


@section('sidebar')
@parent
<p>On ajoute quelque chose à la sidebar</p>
{{ "<script>alert('xss')</script>" }}
@endsection