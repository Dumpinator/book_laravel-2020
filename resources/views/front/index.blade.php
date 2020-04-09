@extends('layouts.master')

@section('title')
Page des books 
@endsection

@section('content')

@foreach ($books as $book)
    <p>{{ $book->title }}</p>
@endforeach

@endsection


@section('sidebar')
@parent
<p>On ajoute quelque chose à la sidebar</p>
@endsection