@extends('master')

@section('content')
    {{{ $userData['userName'] }}}
    {{{ $userData['userEmail'] }}}
    {{{ $userData['userDateOfBirth'] }}}

    @for($count = 1; $count <= 100; $count++)
        @if(($count % 3 == 0) && ($count % 5 == 0))
            <p>FizzBuzz</p>
        @elseif(($count % 3 == 0))
            <p>Fizz</p>
        @elseif(($count % 5 == 0))
            <p>Buzz</p>
        @else
            <p>{{ $count }}</p>
        @endif
    @endfor

@stop