@extends('template.layout')
@push('title')
Trash File
@endpush
@section('content')
<br>
    <h2>Trashed data show hear.....</h2>
    <hr>
    <br>
    <table class="table  table-striped table-bordered">     
        <thead>
            <tr>
                <th>Patient Id</th>
                <th>Patient Name</th>
                <th>Patient Mobile No</th>
                <th>Patient disease</th>
                <th>Patient Medicine</th>
                <th>Restore</th>
                <th>Delete</th>
            </tr>
        </thead>
        @forelse($hospital as $patients )
        <tbody>
            <tr>
                <td>{{$patients->id}}</td>
                <td><a href="{{route('hospital.show',$patients->id)}}">{{$patients->name}}</a></td>
                <td>{{$patients->mobile}}</td>
                <td>{{$patients->disease}}</td>
                <td>{{$patients->medicine}}</td>
                <!-- <td><button class="btn btn-info"><a href="{{route('hospital.show',$patients->id)}}">view</a></button></td> -->
                <td><form action="{{route('hospital.recover',$patients->id)}}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">Recover</button>
                </form></button></td>
                <td><form action="{{route('hospital.permenentDelete',$patients->id)}}" method="post">
                    @csrf
                    <!-- @method('') -->
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form></td>
            </tr>
        </tbody>
        @empty
        <p colspan=6>No Trashed Data Available</p>
        @endforelse
        
    </table>

@endsection