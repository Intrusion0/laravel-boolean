@extends('layouts.main-layout')
@section('content')

    <h2 class="container-create">
        <a href="{{ route('postcard.create') }}">Create a new postcard</a>
    </h2>

    <postcards-component></postcards-component>

@endsection