@extends('template.layout')

@section('content')

    <h1>Details about patients...............</h1>
    <hr>
    <button type="submit" class="btn btn-dark float-end mb-3 py-2"><a href="{{route('hospital.create')}}">Add Case +</a></button>

    @auth
    <!-- <p>welcome, {{auth()->user()->name}} to myHospital</p> -->
    <p>welcome, {{Auth::user()->name}} to myHospital</p>
    @endauth

    <!-- {{Auth::user()}} -->
    <!-- {{auth()->user()}} -->

    @guest
    <p>Welcome! guest, please login for more information<a href="http://localhost:8000/login"> login</a></p>
    @endguest

    <table class="table  table-striped table-bordered">
        <thead>
            <tr>
                <th>Patient Id</th>
                <th>Patient Name</th>
                <th>Patient Mobile No</th>
                <th>Patient disease</th>
                <th>Patient Medicine</th>
                @auth
                <th>Edit</th>
                <th>Delete</th>
                @endauth
            </tr>
        </thead>
        
        @foreach($patient as $patients )
        <tbody>
            <tr>
                <td>{{$patients->id}}</td>
                <td><a href="{{route('hospital.show',$patients->id)}}">{{$patients->name}}</a></td>
                <td>{{$patients->mobile}}</td>
                <td>{{$patients->disease}}</td>
                <td>{{$patients->medicine}}</td>
                <!-- <td><button class="btn btn-info"><a href="{{route('hospital.show',$patients->id)}}">view</a></button></td> -->
                @auth
                <td><button class="btn btn-warning"><a href="{{route('hospital.edit',$patients->id)}}">Edit</a></button></td>
                <td><form action="{{route('hospital.destroy',$patients->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Trash</a></button>
                </form></td>
                @endauth
            </tr>
        </tbody>
        @endforeach
        
    </table>

    {{$patient->links()}}

@endsection