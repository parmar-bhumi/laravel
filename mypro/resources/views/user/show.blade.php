@extends('template.layout')
@section('content')
<h1>View post</h1>

<h4>Title</h4>
<h6>{{$myblog->title}}</h6>
<h4>Subtitle</h4>
<h6>{{$myblog->subtitle}}</h6>
<h4>Body content</h4>
<h4>{{$myblog->body_content}}</h4>
@endsection