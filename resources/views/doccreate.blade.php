@extends('layout')
@section('title','Documents Create')
@section('content')

    <div class="row">
<div class="container">
    <h1>@lang('lang.text_create_doc')</h1>
    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">@lang('lang.text_docs_title') :</label>
    <input type="text" name="title" id="title" required>
    <br><br>
    <label for="language">@lang('lang.text_docs_lang') :</label>
    <select name="language" id="language">
        <option value="fr">fr</option>
        <option value="en">en</option>
    </select>
    <br><br>
    <label for="document_path">Document:</label>
    <input type="file" name="document_path" id="document_path" required>
    <br><br>
    <button type="submit">@lang('lang.text_docs_upload')</button>
</form>
</div>
@endsection