@extends('template.layout')

@section('content')
<br>
<h3>Show the patient details </h3>
<hr>
<br>
<h4>Patient Id:</h4>
<p>{{$hospital->id}}</p>

<h4>Patient Name:</h4>
<p>{{$hospital->name}}</p>

<h4>Patient Mobile No:</h4>
<p>{{$hospital->mobile}}</p>

<h4>Patient disease:</h4>
<p>{{$hospital->disease}}</p>

<h4>Patient Medicine:</h4>
<p>{{$hospital->medicine}}</p>
    

<br>
@php
    $i=1;
@endphp

<ul>
    
    @forelse($hospital->getvisit as $visit)
    <li>
        <label for="" class="form-label"><h5><strong>Visit {{$i++}}</strong></h5></label>
        <p>{{$visit->med_diseases}}</p>
    </li>
    @empty
    <p>No Visits Available</p>
    @endforelse
   
</ul>

<hr>
<form action="{{route('visit.store')}}" method="post">
    @csrf
<div class="mb-3">
      <input type=hidden name="patient_id" value="{{$hospital->id}}">
      <label  class="form-label"><h4><strong>Patient Visit History</strong></h4></label>
      <textarea class="form-control" name="med_diseases" scols="30" rows="3"></textarea>
      <input type=submit  class="btn btn-primary mt-3" value="Visit info">
    </div>
</form>

@endsection