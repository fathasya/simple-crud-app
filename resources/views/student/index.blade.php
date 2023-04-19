@extends('student.app')

@section('content')

<div class="d-flex justify-content-between align-content-center">
    <h3>Students Table</h3>
    <a href="/student/add" class="btn btn-primary">Add Student</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)            
        <tr>
            <th scope="row">{{ $student->id }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="/student/update/{{ $student->id }}" class="btn btn-warning text-white">Edit</a>
                <a href="/student/delete/{{ $student->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $students->links() }}

@endsection