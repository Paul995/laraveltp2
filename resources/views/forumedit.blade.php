@extends('layout')
@section('title','Modifier l\'article')

@section('content')
<br><br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Modifier l'article</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('forum.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
                        @if($errors->has('title'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Contenu</label>
                        <textarea name="content" id="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
                        @if($errors->has('content'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('content') }}
                            </div>
                        @endif
                    </div>
                  
                    <button type="submit" class="btn btn-primary" value="Sauvegarder les modifications">Sauvegarder</button>
                    <a href="{{ route('forum.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection