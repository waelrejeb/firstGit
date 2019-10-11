@extends('master')
@section('content')
<div></div>

<form method="post"  action="{{route('update_Livre',['id'=>$livre->id])}}" >

   @csrf
    <ul>
        <li>
        <label>titre:</label>
            <input type="text" name="titre" value="{{old('titre',$livre->titre)}}" required>
            @error('titre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </li>
         <li>
        <label>auteur:</label>
            <input type="text" name="auteur" value="{{old('auteur',$livre->auteur)}}" required>
            </li>
             <li>
        <label>nbre de pages:</label>
            <input type="text" name="nbre_pages" value="{{old('nbre_pages',$livre->nbre_pages)}}" required>
            </li>
         <li>
        <label>description:</label>
        <textarea name="description"   value="{{old('description')}}"   required>{{$livre->description}}</textarea>
          
        </li>
          <select name="category_id" id="category_id">
  @foreach($categories as $categ)
    <option value="{{$categ->id}}">{{$categ->name}}</option>
 @endforeach
  </select>
        
         <li>
      
            <input type="submit" value ="Ajouter">
        </li>


    </ul>
</form>
@endsection