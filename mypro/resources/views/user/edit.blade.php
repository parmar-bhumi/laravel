@extends('template.layout')
@section('content')
<form action="{{route('myblog.update',$myblog->id)}}" method="post">
    @csrf   
    @method('patch')
  <div class="form-group">
    <label>Title</label>
    <input type="text" value="{{$myblog->title}}" name="title" class="form-control"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <input type="hidden" name="user_id" value="1">
    <label>subtitle</label>
    <input type="text" value="{{$myblog->title}}" name="subtitle" class="form-control" placeholder="Enter subttitle">
  </div>
  <div class="form-group">
  <label>body content</label>
  <textarea class="form-control" name="body_content" placeholder="body_content" id="editor">
    {{$myblog->body_content}}
  </textarea>
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