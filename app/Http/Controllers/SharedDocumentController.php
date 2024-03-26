<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SharedDocument;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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
    //     // $request->validate([
    //     //     'title' => 'required|string|max:255',
    //     //     'language' => 'required|string',
    //     //     'document' => 'required|file|mimes:pdf,zip,doc,docx|max:2048',
    //     // ]);

    //     $file = $request->file('document_path');
    //     print_r($file);
    //     die;
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


}

