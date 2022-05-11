@extends('layouts.dashboard')

@section('title', 'Coba')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Nama teman : {{ $friend['nama'] }}</h3>
            <h3>No tlp teman : {{ $friend['no_tlp'] }}</h3>
            <h3>Alamat teman : {{ $friend['alamat'] }}</h3>
            <h3>Data History:</h3>
            <ul border="1">
            @foreach ($history as $data)
            <li>
                <td>{{ $data->groups->name }}</td>
                <td>{{$data->details}}</td>
            </li>
        @endforeach
        </ul>
        </div>
    </div>
@endsection

    
