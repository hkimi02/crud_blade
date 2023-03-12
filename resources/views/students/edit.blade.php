@extends('students.layout')
@section('content')
<div class="card">
    <div class="card-header">edit  student</div>
    <div class="card-body">
        <form action="{{ url('students/' .$student->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{$student->id }}" id="id">
        <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="text" name="email" id="email" class="form-control" value="{{$student->email}}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">phone</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{$student->phone}}">
    </div>
    <div class="mb-3 float-end">
        <button type="submit" name="submit" class="btn btn-success">update</button>
        <button type="reset" class="btn btn-secondary">cancel<button>
    </div>
    </form>
    </div>
</div>
@stop
