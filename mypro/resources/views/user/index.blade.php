@extends('template.layout')

@section('content')
<h1>All information will be displayed here... </h1>
<div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4"><a href="{{route('myblog.create')}}" class="btn btn-primary">+Post</a></div>
</div>
<table class="table table-stripped table-hover table-sm table">
    <thead>
        <tr>
            <th>Id</th>
            <td>Title</td>
            <td>Subtitle</td>
            <td>view</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
    </thead>
    <tbody>
    @forelse($myblogs as $myblog)
        <tr>
            <td>{{$myblog->id}}</td>
            <td>{{$myblog->title}}</td>
            <td>{{$myblog->subtitle}}</td>
            <td><a href="{{route('myblog.show',$myblog->id)}}" class="btn btn-sm btn-primary">View me</a></td>
            <td><a class="btn btn-sm btn-warning"href="{{route('myblog.edit',$myblog->id)}}">Edit me</a></td>
            <td>
                <form action="{{route('myblog.destroy',$myblog->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete me" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan=6>No data avialable...</td>
        </tr>
@endforelse
    </tbody>
</table>

@endsection