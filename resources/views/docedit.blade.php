@extends('layout')
@section('title','Modifier le document')

@section('content')
<br><br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Modifier le document</h2>
            </div>
            <div class="card-body">
            <form action="{{ route('documents.update', $document->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="title">@lang('lang.text_docs_title') :</label>
                <input type="text" name="title" id="title" value="{{ $document->title }}" required>
                <br><br>
                <label for="language">@lang('lang.text_docs_lang') :</label>
                <select name="language" id="language">
                        <option value="fr" {{ $document->language == 'fr' ? 'selected' : '' }}>fr</option>
                        <option value="en" {{ $document->language == 'en' ? 'selected' : '' }}>en</option>
                </select>
                <br><br>
                <label for="document_path">Document:</label>
                <input type="file" name="document_path" id="document_path" required>
                <br><br>
                <button type="submit">@lang('lang.text_docs_upload')</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection