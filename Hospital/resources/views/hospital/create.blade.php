@extends('template.layout')

@section('content')
<h1>Add patient information here...</h1>
<form action="{{route('hospital.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label class="form-label">Patient name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label class="form-label">Mobile no</label>
    <input type="number" name="mobile"  class="form-control" placeholder="Enter the mobile number">
  </div>
  <div class="form-group">
  <label >Disease</label>
  <textarea class="form-control" name="disease" placeholder="Disease"></textarea>
  <div class="form-group">
  <label>Patient medicine</label>
  <textarea class="form-control" name="medicine" placeholder=" patient medicine" id="editor"></textarea>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@section('script-tags')
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
@endsection

