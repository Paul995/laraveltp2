@extends('layout')
@section('title','Documents')
@section('content')
<a href="{{route('documents.create')}}"><button id="create">+ @lang('lang.text_create_doc')</button></a><br><br><br>
<div class="container">
    <h1>Documents partagés</h1>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('lang.text_docs_title')</th>
                <th>@lang('lang.text_docs_lang')</th>
                <th>@lang('lang.text_docs_shared')</th>
                <th>Actions</th>
                <th>@lang('lang.text_docs_view')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documents as $document)
            <tr>
                <td>{{ $document->title }}</td>
                <td>{{ $document->language }}</td>
                <td>{{ $document->user->nom ?? 'Utilisateur non existant' }}</td>
                <td>
                    <!-- Les actions Modifier/Supprimer ici si l'utilisateur est l'auteur -->
                    @if ($document->user_id == auth()->id())
                <a href="{{ route('documents.edit', $document->id) }}"><img src="{{ asset('icons/editer.svg') }}" style="width:30px;" alt="Edit icon"></a>

                <form action="{{ route('documents.destroy', $document->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">@lang('lang.text_btn_delete')</button>
                </form>
                
                 @endif
                </td>
                <td>
                   <a href="{{ asset($document->document_path)}}" target="_blank" class="btn">@lang('lang.text_docs_view')</a>
                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
    <!-- Pagination -->
    {{ $documents->links() }}
</div>
@endsection