@extends('master')
@section('content')

<form method="post"  action="{{route('post_ajouter_Category')}}">
 @csrf
  <div class="form-group">
  
    <label for="categories">nom de categorie:</label>
      @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <input  name="name"  type="text" class="form-control" value="name" required>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
   @foreach($categories as $categorie)
    <tr>
      <th scope="row"></th>
      <td>
      {{$categorie->name}}</td>
  
    </tr>
    @endforeach
  </tbody>
</table>


  

      
  @endsection