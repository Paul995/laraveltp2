@extends('layout')

@section('content')
<div class="container">
    <h1>Forum</h1>



    @foreach ($posts as $post)
        <div class="article-forum">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <!-- Boutons Modifier et Supprimer pour l'auteur -->
            <p class="small"><i>{{ $post->user ? $post->user->nom : "Unknown user" }}</i></p> <!-- Afficher l'ID de l'auteur -->
          
            @if ($post->user_id == auth()->id())
                <a href="{{ route('forum.edit', $post->id) }}">@lang('lang.text_btn_edit')</a>
                <form action="{{ route('forum.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">@lang('lang.text_btn_delete')</button>
                </form>
                
            @endif
        </div>
    @endforeach
    <!-- Formulaire de création d'un nouvel article -->
    @auth
    <div class="add-article">
        <h2>Ajouter un nouvel article</h2>
        <form action="{{ route('forum.store') }}" method="POST">
            @csrf <!-- CSRF token for security -->
            <div class="form-group">
                <label for="title">Titre de l'article:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Contenu de l'article:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publier</button>
        </form>
    </div>
    @endauth

    <!-- (Voir exemple ci-dessous) -->
</div>
@endsection
