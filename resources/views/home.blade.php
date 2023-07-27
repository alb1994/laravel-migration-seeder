@extends('layouts.app')

@section('content')
@foreach($comic as $comic)
    <h4>{{$comic->title}}</h4>
@endforeach
@endsection
