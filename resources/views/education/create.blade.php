@extends('layouts.app')
@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    <div class="container">
    <h2>Education Details</h2>




    <form action="/education" method="POST">
        @csrf
        <input type="text" name="school_name" placeholder="School Name">
        <input type="email" name="school_location" placeholder="School Location">
        <input type="text" name="degree" placeholder="Phone">
        <input type="text" name="field_of_study" placeholder="Address">
        <input type="text" name="graduation_start_date" placeholder="Address">
        <input type="text" name="graduation_end_date" placeholder="Address">

        

        <input type="submit" value="Submit">


    </form>

    </div>

@endsection