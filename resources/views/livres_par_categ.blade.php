@extends('master')
@section('content')
<ul class="list-group">
@foreach($categorie->livres as $livre)
  <a class="list-group-item list-group-item-primary" href="{{route('voirLivre',$categorie->id)}}">titre:{{$livre->titre}}</a>

 @endforeach


</ul>


@endsection
