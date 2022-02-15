@extends('layouts.main-layout')
@section('content')

<div class="container-page-create-postcard">
    
    <h2>Crea un nuovo Postcard</h2>
    
    <form action="{{ route('postcard.store') }}" method="POST" enctype="multipart/form-data">
    
        @method('POST')
        @csrf
    
        <label for="sender">Sender</label>
        <input type="text" name="sender">
        <label for="address">Address</label>
        <input type="text" name="address">
        <label for="text">Text</label>
        <input type="text" name="text">
        <label for="image">Image</label>
        <input type="file" name="image">
    
        <input class="btn btn-primary" type="submit" value="CREA">
    
    </form>

</div>

@endsection