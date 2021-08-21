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
<h2>Tell us something about you</h2>
      



    <form action="/user-detail" method="POST">
        @csrf
        <input type="text" name="fullname" placeholder="Full Name">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="text" name="phone" placeholder="Phone">
        <input type="text" name="address" placeholder="Address">

        <input type="submit" value="Submit">


    </form>

    </div>

@endsection