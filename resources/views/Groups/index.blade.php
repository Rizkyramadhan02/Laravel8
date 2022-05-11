@extends('layouts.dashboard')

@section('title', 'Groups')

@section('content')

    <a href="/groups/create" class="btn btn-primary  mb-3">Tambah group</a>
    <div class="row">
        @foreach ($groups as $group)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a style="text-decoration:none" href="/groups/{{ $group['id'] }}"
                            class="card-title">{{ $group['name'] }}</a>
                        <p class="card-text">{{ $group['description'] }}</p>
                        <hr>
                        <a href="/groups/addmember/{{ $group['id'] }}" class="btn btn-primary mb-3">Tambah Anggota Teman</a>
                        <ul class="list-group">

                            @forelse ($group->friends as $id => $friend)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{$id+1}} .
                                    {{ $friend->nama }}
                                    <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger">x</button>
                                    </form>
                                </li>
                            @empty
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Anggota kosong
                                </li>
                            @endforelse
                        </ul>
                        <hr>
                        <a style="text-decoration:none" href="/groups/{{ $group['id'] }}/edit"
                            class="btn btn-warning">Edit
                            group</a>
                        <form action="/groups/{{ $group['id'] }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="card-link btn btn-danger">Delete group</a>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div>
            <div>
                {{ $groups->links() }}
            </div>
        @endsection
