@extends('template.layout')

@section('content')
<h3>All  Hospital information display here...</h3>


<div class="row">
         <div class="col-md-8"></div>
        <div class="col-md-4"><a href="{{route('hospital.create')}}" class="btn btn-primary">+Post</a></div>
</div><br>
<table class="table table-stripped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Patient name</th>
                <th>Mobile no</th>
                <th>Disease</th>
                <th>Patient medicine</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($patients as $patient)
            <tr>
                <td>{{$patient->id}}</td>
                <td><a href="{{route('hospital.show',$patient->id)}}">{{$patient->name}}</a></td>
                <td>{{$patient->mobile}}</td>
                <td>{{$patient->disease}}</td>
                <td>{{$patient->medicine}}</td>
                <td>
                    <a href="{{route('hospital.edit',$patient->id)}}" class="btn btn-warning">Edit me!!</a>
                </td>
                <td>
                    <form action="{{route('hospital.destroy',$patient->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="trash" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @empty
            <tr><td>No data available..</td></tr>
            @endforelse
        </tbody>
</table>
@endsection