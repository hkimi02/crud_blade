@extends('students.layout')
@section('content')
<div class="card">
    <div class="card-header">create new student</div>
    <div class="card-body">
        <form action="{{ url('students') }}" method="post">
        @csrf
        <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">phone</label>
        <input type="text" name="phone" id="phone" class="form-control">
    </div>
    <div class="mb-3 float-end">
        <button type="submit" name="submit" class="btn btn-success">submit</button>
        <button type="reset" class="btn btn-secondary">cancel<button>
    </div>
    </form>
    </div>
</div>
@stop
