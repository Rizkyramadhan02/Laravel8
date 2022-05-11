@extends('layouts.dashboard')

@section('title', 'Coba')

@section('content')
    <div class="card">
      
            <div class="card-body">
                
         
                @if(isset($count))
                <h6>Jumlah: {{ $count }} </h6>
                <h6>Masuk : {{ $group->masuk}}</h6>
                <h6> Keluar : {{ $group->keluar }}</h6>
@else
<h6>Jumlah: 0 </h6>
                <h6>Masuk : {{ $group->masuk}}</h6>
                <h6> Keluar : {{ $group->keluar }}</h6>
                @endif
            </div>
    </div>
@endsection

    
