@extends('master')
@section('content')
<div></div>

<form method="post"  action="{{route('post_ajouter_Livre')}}" >

 @csrf
 <div class="form-group">
  <label>titre:</label>
  <input type="text" name="titre" class="form-control" value="{{old('titre')}}" required></div>
  @error('titre')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>auteur:</label>
    <input type="text" name="auteur" value="{{old('auteur')}}" required>
  </div>
  <div class="form-group">
    <label>nbre de pages:</label>
    <input type="text" name="nbre_pages" value="{{old('nbre_page')}}" required>
  </div>
  <div class="form-group">
    <label>description:</label>
    <textarea name="description"   value="{{old('description')}}"   required></textarea>

  </div>
  <label for="category_id">Choose a category:</label>

  <select name="category_id" id="category_id">
  @foreach($categories as $categ)
    <option value="{{$categ->id}}">{{$categ->name}}</option>
 @endforeach
  </select>

    <ul>
     <li>

      <input type="submit" value ="Ajouter">
    </li>


  </ul>
</form>
@endsection<div class="form-group">
<label for="exampleFormControlInput1">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
