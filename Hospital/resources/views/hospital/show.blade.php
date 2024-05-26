@extends('template.layout')

@section('content')

<h1>Patients details..</h1>


<!-- <h4>Name</h4>
<h6>{{$hospital->name}}</h6> -->

<h4>Medicines</h4>
<h6>{{$hospital->medicine}}</h6>

<h4>Disease</h4>
<h6>{{$hospital->disease}}</h6>

@php 
    $i=1;
@endphp
<ul>
    @forelse($hospital->getVisits as $visit)
        <li>
            <label for="">Visits {{$i++}}</label>
            <p>{{ $visit->med_diseases }}</p>
        </li>
    @empty
        <li>No visits available...</li>
    @endforelse
        
</ul>

<form action="{{route('visit.store')}}" method="post">
    @csrf
    <input type="hidden" name="patient_id" value="{{ $hospital->id }}">
    <div class="form-group">
    <label>Example textarea</label>
    <textarea name="med_diseases" class="form-control"></textarea>
    </div><br>
    <input type="submit" name="" value="Visit info" class="btn btn-primary">
</form>

@endsection