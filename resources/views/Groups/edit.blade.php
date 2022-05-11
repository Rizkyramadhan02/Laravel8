@extends('layouts.dashboard')

@section('title', 'Groups')

@section('content')
<form action="/groups/{{ $group['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ old('name') ? old('name') : $group['name'] }}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="{{ old('description') ? old('description') : $group['description'] }}">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection