<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumPost;

class ForumPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = ForumPost::all(); // Ou utilisez une pagination si nécessaire
    return view('forum', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'language' => 'required|in:en,fr',
            'content' => 'required',
        ]);
    
        $post = new ForumPost();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->language = $request->language;
        $post->user_id = auth()->id(); // Assurez-vous que l'utilisateur est connecté
        $post->save();
    
        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = ForumPost::findOrFail($id);

    if ($post->user_id !== auth()->id()) {
        abort(403);
    }

    return view('forumedit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valider les données reçues du formulaire
        $request->validate([
            'title' => 'required|string|max:255', // Le titre est requis et ne doit pas dépasser 255 caractères
            'content' => 'required|string', // Le contenu est requis et doit être une chaîne de caractères
        ]);

        // Trouver l'article par son ID
        $post = ForumPost::findOrFail($id);

        // Vérifier si l'utilisateur actuellement connecté est l'auteur de l'article
        if ($post->user_id != auth()->id()) {
            // Si non, rediriger l'utilisateur avec un message d'erreur
            return back()->with('error', 'Vous n\'êtes pas autorisé à modifier cet article.');
        }

        // Mettre à jour l'article avec les nouvelles valeurs
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Rediriger l'utilisateur vers la page du forum avec un message de succès
        return redirect()->route('forum.index')->with('success', 'Article modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Trouver l'article par son ID
        $post = ForumPost::findOrFail($id);

        // Vérifier si l'utilisateur actuellement connecté est l'auteur de l'article
        if ($post->user_id != auth()->id()) {
            // Si non, rediriger l'utilisateur avec un message d'erreur
            return back()->with('error', 'Vous n\'êtes pas autorisé à supprimer cet article.');
        }

        // Supprimer l'article
        $post->delete();

        // Rediriger l'utilisateur vers la page du forum avec un message de succès
        return redirect()->route('forum.index')->with('success', 'Article supprimé avec succès.');
    }
}
