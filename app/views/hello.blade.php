@extends('master')

@section('content')

    @if($errors->count() > 0)
        <div class="bg-danger">
            @foreach( $errors->all() as $message )
                <p>{{ $message }}</p>
            @endforeach
        </div>
    @endif

    {{ Form::open(array('route' => 'fizzbuzz', 'method' => 'POST')) }}
        <div class="form-group {{{ $errors->has('userName') ? 'has-error' : '' }}} ">
            <label for="userName">Name</label>
            <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter name">
        </div>
        <div class="form-group {{{ $errors->has('userEmail') ? 'has-error' : '' }}} ">
            <label for="userEmail">Email address</label>
            <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Enter email">
        </div>
        <div class="form-group {{{ $errors->has('userDateOfBirth') ? 'has-error' : '' }}} ">
            <label for="userDateOfBirth">Date of Birth</label>
            <input type="text" class="form-control" id="userDateOfBirth" name="userDateOfBirth" placeholder="MM/DD/YYYY">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    {{ Form::close() }}
@stop