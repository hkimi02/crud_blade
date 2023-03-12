@extends('students.layout')
@section('content')
<div class="card shadow-lg">
    <div class="card-header">information of {{$student->name}}</div>
    <div class="card-body">
    <h3 class="text-center"><small class="text-muted">name </small> {{$student->name}}</h3>
    <h3 class="text-center"><small class="text-muted">email</small> : {{$student->email}}</h3>
    <h3 class="text-center"><small class="text-muted">phone</small> : {{$student->phone}}</h3>
    </div>
</div>
@stop
