@extends('template.layout')

@section('content')
  <h1>Edit patient information here...</h1>
  <!-- {{$hospital}} -->
<form action="{{route('hospital.update',$hospital->id)}}" method="post">
  @csrf
  @method('put')
  <div class="form-group">
    <label>Patient name</label>
    <input type="text" name="name" value="{{$hospital->name}}" class="form-control" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label>Mobile no</label>
    <input type="text" name="mobile" value="{{$hospital->mobile}}"  class="form-control" placeholder="Enter the mobile number">
  </div>
  <div class="form-group">
  <label>Disease</label>
  <textarea class="form-control" name="disease" placeholder="Disease">{{$hospital->disease}}"</textarea>
  <div class="form-group">
  <label>Patient medicine</label>
  <textarea class="form-control" name="medicine" placeholder=" patient medicine" id="editor">{{$hospital->medicine}}"</textarea>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
</div>
  <input type="submit" value="Edit me!!" class="btn btn-primary">
</form>
@endsection

@section('script-tags')
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
@endsection

