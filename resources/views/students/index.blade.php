@extends('students.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                        <h2>students list</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/students/create')}}" class="btn btn-success" title="add new student">add new</a>
                    <table class="table mt-5">
                        @isset($message)
                        <div class="alert alert-success">{{ $message }}</div>
                        @endisset

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>email</th>
                                <th>mobile</th>
                                <th>operations</th>
                            </tr>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone}}</td>
                                <td>
                                    <a href="{{ url('/students/' . $student->id)}}" title="view student" class="btn btn-primary">view</a>
                                    <a href="" title="Edit student" class="btn btn-warning">Edit</a>
                                    <a href="" title="delete student" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
