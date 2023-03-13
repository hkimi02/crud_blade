@extends('students.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                        <h2>students list</h2>
                        <div class="card my-4">
                            <h5 class="card-header">search</h5>
                            <form class="card-body" action="/search" method="GET" role="search">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="search..." name="searchName" value="{{isset($searchName) ? $searchName : ''}}" oninput="this.form.submit()">
                                    <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit">Go!</button>
                                </span>
                                </div>
                            </form>
                        </div>
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
                                    <a href="{{ url('/students/' . $student->id . '/edit')}}" title="Edit student" class="btn btn-warning">Edit</a>


                                    <button title="delete student" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$student->id}}">delete</button>


  <!-- Modal -->
<div class="modal fade" id="staticBackdrop{{$student->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          do u really wanna delete this student ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{ url('/students/' . $student->id)}}" method="POST" style="display:inline">
            @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" >delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>

                                </td>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                    <div class="d-inline-block card" style="height:300px">
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
