@extends('layouts.main-layout')
@section('content')

    @auth

        <div class="container-auth">
            Benvenuto {{ Auth::user()->name }}
            <a class="btn btn-danger" href="{{ route('logout') }}">LOGOUT</a>
        </div>

        <h2 class="container-create">
            <a href="{{ route('postcard.create') }}">Create a new postcard</a>
        </h2>
        

    @else
    
        <h3>REGISTER</h3>
        
        <form action="{{ route('register') }}" method="POST">

            @method('POST')
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Password</label>
            <input type="password" name="password">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation">

            <input class="btn btn-secondary" type="submit" value="REGISTRATI">

        </form>

        <br><br>

        <h3>LOGIN</h3>

        <form action="{{ route('login') }}" method="POST">

            @method('POST')
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Password</label>
            <input type="password" name="password">

            <input class="btn btn-secondary" type="submit" value="LOGIN">

        </form>
    
    @endauth

    <postcards-component></postcards-component>

@endsection