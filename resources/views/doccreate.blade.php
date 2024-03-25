@extends('layout')
@section('title','Documents Create')
@section('content')

    <div class="row">
<div class="container">
    <h1>Ajouter un document</h1>
    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title :</label>
    <input type="text" name="title" id="title" required>
    <br><br>
    <label for="language">language :</label>
    <select name="language" id="language">
        <option value="fr">fr</option>
        <option value="en">en</option>
    </select>
    <br><br>
    <label for="document">Document:</label>
    <input type="file" name="document" id="document" required>
    <br><br>
    <button type="submit">Upload Document</button>
</form>
</div>
@endsection