@extends('template.layout')

@section('content')
<h1>all details are here...</h1>

@php
    $i=1;
@endphp

@auth
    <p>welcome,{{$user->name}} to my blog</p>
@endauth

@guest
    <p>Welcome,Guest!!Please login for more information <a href="">Login link</a></p>
@endguest
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
        <th>s#</th>
        <th>Title</th>
        <th>user name</th>
        <th>User Email</th>
        @auth
        <th>Edit</th>
        <th>Delete</th>
        @endauth
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->getUser->name}}</td>
            <td>{{$post->getUser->email}}</td>
            @auth 
            <td><input type="button" class="btn btn-warning" value="Edit"></td>
            <td><input type="button" class="btn btn-danger" value="Delete"></td>
            @endauth
        </tr>    
        @empty
        <tr>
            <td colspan=6>no data available...</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{$posts->links()}}

@endsection