@extends('layouts.dashboard')

@section('title', 'Friends')

@section('content')
    <a href="/friends/create" class=" btn btn-primary mb-3 card-link btn-primary">Tambah Teman</a>
    <div class="row">
        @foreach ($friends as $friend)
            <div class="col-md-4" >
                <div class="card" >
                <div class="card-body">
                    <a style="text-decoration:none" href="/friends/{{ $friend['id'] }}"
                        class="card-title">{{ $friend['nama'] }}</a>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
                    <p class="card-text">{{ $friend['alamat'] }}</p>

                    <a style="text-decoration:none" href="/friends/{{ $friend['id'] }}/edit"
                        class="card-link btn btn-warning">Edit Teman</a>
                    <form action="/friends/{{ $friend['id'] }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="card-link btn btn-danger">Delete Teman</a>
                    </form>
                </div>
            </div>
            </div>
        @endforeach
    </div>

    <div>
        {{ $friends->links() }}
    </div>
@endsection
