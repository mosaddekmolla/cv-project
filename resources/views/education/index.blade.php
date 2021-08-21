@extends('layouts.app')
@section('content')

    @foreach($education as $e)
    {
        <p>
            <h4>{{ $e->school_name }}</h4>
        
        </p>
    }

    @endforeach


@endsection