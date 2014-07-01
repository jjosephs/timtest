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
        <div class="form-group">
            <label for="userName">Name</label>
            <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="userEmail">Email address</label>
            <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="userDateOfBirth">Password</label>
            <input type="text" class="form-control" id="userDateOfBirth" name="userDateOfBirth" placeholder="MM/DD/YYYY">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    {{ Form::close() }}
@stop