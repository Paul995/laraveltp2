<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SharedDocument;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class SharedDocumentController extends Controller
{

    //////////////////////////
    public function index()
    {
        $documents = SharedDocument::with('user')->paginate(10); // Récupère 100 documents par page
        return view('docindex', compact('documents'));
    }


    public function create()
    {
        return view('doccreate');
    }
////////////////////////////////

    public function store(Request $request)
    { 
        $request->validate([
            'title' => 'required',
            'language' => 'required',
            'document_path' => 'required|file|mimes:pdf,jpg,jpeg,png|max:10000',
        ]);
        
      

        $document = $request->file('document_path');
        $docuName = time() . '_' . $document->getClientOriginalName();
        $document->move(public_path('documents'), $docuName);

        $documentModel = new SharedDocument();
        $documentModel->title = $request->title;
        $documentModel->language = $request->language;
        $documentModel->document_path = 'documents/' . $docuName; 
        $documentModel->user_id = auth()->user()->id;
    
       
        $documentModel->save();

        return redirect()->route('documents.index')->with('success', 'Document uploaded successfully.');
    }

////////////////////////////////////////////

    public function edit(string $id)
    {
        
        $document = SharedDocument::findOrFail($id);

    if ($document->user_id !== auth()->id()) {
        abort(403);
    }

    return view('docedit', compact('document'));
    }


//////////////

    public function update(Request $request, string $id)
    {
        // Valider les données reçues du formulaire
    $request->validate([
        'title' => 'required',
        'language' => 'required',
        'document_path' => 'sometimes|file|mimes:pdf,jpg,jpeg,png|max:10000', // Use 'sometimes' if the file upload is optional
    ]);

    // Trouver le document par son ID
    $document = SharedDocument::findOrFail($id);

    // Vérifier si l'utilisateur actuellement connecté est l'auteur du document
    if ($document->user_id != auth()->id()) {
        // Si non, rediriger l'utilisateur avec un message d'erreur
        return back()->with('error', 'Vous n\'êtes pas autorisé à modifier ce document.');
    }

    // Check if a new file was uploaded
    if ($request->hasFile('document_path')) {
        $file = $request->file('document_path');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('documents'), $filename);

        // Update the document_path to the new file
        $document->document_path = 'documents/' . $filename;
    }

    // Update the other fields
    $document->title = $request->title;
    $document->language = $request->language;
    $document->save();

        // Rediriger l'utilisateur vers la page du forum avec un message de succès
        return redirect()->route('documents.index')->with('success', 'Article modifié avec succès.');
    }



//////////////////////////////////

    public function destroy(string $id)
    {
     
        // Trouver l'article par son ID
        $document = SharedDocument::findOrFail($id);

         //  dd('Destroy method called with ID: ' . $id);
       
        // Vérifier si l'utilisateur actuellement connecté est l'auteur de l'article
        if ($document->user_id != auth()->id()) {
            // Si non, rediriger l'utilisateur avec un message d'erreur
            return back()->with('error', 'Vous n\'êtes pas autorisé à supprimer ce document.');
        }

        // Supprimer l'article
        $document->delete();

        // Rediriger l'utilisateur vers la page du forum avec un message de succès
        return redirect()->route('documents.index')->with('success', 'Article supprimé avec succès.');
    }


}

