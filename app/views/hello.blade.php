@extends('master')

@section('content')
    {{ Form::open(array('route' => 'fizzbuzz', 'method' => 'POST')) }}
        <div class="form-group">
            <label for="userName">Name</label>
            <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="userEmail1">Email address</label>
            <input type="email" class="form-control" id="userEmail1" name="userEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="userDateOfBirth">Password</label>
            <input type="text" class="form-control" id="userDateOfBirth" name="userDateOfBirth" placeholder="MM/DD/YYYY">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    {{ Form::close() }}
@stop