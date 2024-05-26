@extends('template.layout')
@section('content')
<h1>Add blog post here...</h1>
@php
  if($errors->any()){
  echo "<ul>";
    foreach($errors->all()as $error){
      echo "<li>$error</li>";
    }  
  echo "</ul>";
  }
 @endphp 
<form action="{{route('myblog.store')}}" method="post">
    @csrf   
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control"  placeholder="Enter title">
    @error('title')
      <span>{{$message}}</span>
    @enderror
    <span>My error goes here...</span>
  </div>
  <div class="form-group">
    <input type="hidden" name="user_id" value="1">
    <label>subtitle</label>
    <input type="text" name="subtitle" class="form-control" placeholder="Enter subttitle">
    @error('subtitle')
      <span>{{$message}}</span>
    @enderror
  </div>
  <div class="form-group">
  <label>body content</label>
  <textarea class="form-control" name="body_content" placeholder="body_content" id="editor"></textarea>
  @error('body_content')
      <span>{{$message}}</span>
    @enderror
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>

</div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@section('script-tags')
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
@endsection