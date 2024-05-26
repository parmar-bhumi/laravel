@extends('template.layout')

@section('content')
<h1>Create a blog post here...</h1>

<form action="{{route('mypost.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label>Subtitle</label>
    <input type="text" name="subtitle" class="form-control" placeholder="enter subtitlle">
  </div>
  <div class="form-group">
    <label>Body content</label>
    <textarea class="form-control" name="body_content" placeholder="enter body_content"></textarea>
  </div><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection