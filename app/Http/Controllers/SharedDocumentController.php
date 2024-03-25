<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SharedDocument;
use Illuminate\Support\Facades\Storage;

class SharedDocumentController extends Controller
{
    public function index()
    {
        $documents = SharedDocument::with('user')->paginate(10); // Récupère 100 documents par page
        return view('docindex', compact('documents'));
    }


    public function create()
    {
        return view('doccreate');
    }
    
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'language' => 'required|string',
    //         'document' => 'required|file|mimes:pdf,zip,doc,docx|max:2048',
    //     ]);

    //     $file = $request->file('document');
    //     $path = $request->file('document')->store('documents', 'public');// Stocke le fichier dans storage/app/public/documents

    //     $document = new SharedDocument([
    //         'title' => $request->title,
    //         'document_path' => $path,
    //         'language' => $request->language,
    //         'user_id' => auth()->id(),
    //     ]);
    //     $document->save();

    //     return redirect()->route('documents.index')->with('success', 'Document partagé avec succès.');
    // }



public function store(Request $request)
    { 
        $request->validate([
            'title' => 'required',
            'language' => 'required',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);
        
      

        $document = $request->file('file');
        $docuName = time() . '_' . $document->getClientOriginalName();
        $docuPath = $document->move(public_path('img'), $docuName);

        $documentModel = new SharedDocument();
        $documentModel->title = $request->title;
        $documentModel->language = $request->language;
        $documentModel->document_path = 'img/' . $docuName; 
        $documentModel->user_id = auth()->user()->id;
    
       
        $documentModel->save();

        return redirect()->route('documents.index')->with('success', 'Document uploaded successfully.');
    }

}

