@extends('student.app')

@section('content')
  <div class="d-flex justify-content-center align-items-center">
    <form action="/student/{{ $students->id }}" method="POST" class="w-50 p-4 rounded shadow">
      <h4 class="text-center mb-3">Update Data</h4>
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value={{ $students->name }}>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value={{ $students->email }}>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="phone" name="phone" value={{ $students->phone }}>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection