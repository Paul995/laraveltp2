<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Villes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all(); 
        return view('users', ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all(); 
        $villes = Villes::all();
        return view('create', [ 'villes' => $villes, "user" => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           //validation
        //les messages de validation sont dans dossier lang/validation.php
        $request->validate([
            //      le "name" du input     max caracter length
                        'nom' => 'required|string|max:255',
                        'password' => 'min:6|max:20',
                        'adresse' => 'required|string|max:255',
                        'telephone' => 'required|string|max:25',
                        'email' => 'required|string|max:255',
                        'date_de_naissance' => 'required|date', 
                        'ville_id' => 'required|integer'
                    ]);
            
            
                    //    mthd create([]) de eloquent fait:
                    //req: insert into tasks ([]) values ([])
                    //res: select * from tasks where id = last inserted
                    $user = User::create([
                        'nom' => $request->nom,
                        'password' => Hash::make($request->password),
                        'adresse' => $request->adresse,
                        'telephone' => $request->telephone,
                        'email' => $request->email,
                        'date_de_naissance' => $request->date_de_naissance,
                        'ville_id' => $request->ville_id
                    ]);
            //                                                                 
                    return redirect()->route('users.show', $user->id)->with('success', 'user created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return  view('show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $villes = Villes::all();

        return  view('edit', [ 'villes' => $villes, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
         //
            $request->validate([
        //      le "name" du input     max caracter length
                'nom' => 'required|string|max:255',
                'password' => 'min:6|max:20',
                'adresse' => 'required|string|max:255',
                'telephone' => 'required|string|max:25',
                'email' => 'required|string|max:255',
                'date_de_naissance' => 'required|date', 
                'ville_id' => 'required|integer'
            ]);
    
            $user->update([
                'nom' => $request->nom,
                'password' => Hash::make($request->password),
                'adresse' => $request->adresse,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'date_de_naissance' => $request->date_de_naissance,
                'ville_id' => $request->ville_id
            ]);


    
            return redirect()->route('users.show', $user->id)->with('success', 'user updated sucessfully');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('sucess', 'user supprime!! sucess');
    }





    ///////////////////////////////////////////////////////
    public function forgot(){
        return view('user.forgot');
    }

    public function email(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);
        $user = User::where('email', $request->email)->first();
        $userId = $user->id;
        $tempPassword = str::random(45);
        $user->temp_password =  $tempPassword;
        $user->save();

        $to_name= $user->name;
        $to_email= $user->email;
        $body = "<a href='".route('user.reset', [$userId,$tempPassword])."'>Click here to reset your password</a>";

        Mail::send('user.mail', ['name'=>$to_name, 'body' => $body],
            function($message) use ($to_email){
                $message->to($to_email)->subject('Reset Password');
            });
        return redirect(route('login'))->withSuccess('Please check your email to reset your password!');
    }

    public function reset(User $user, $token){
        if($user->temp_password === $token){
            return view('user.reset');
        }
        return redirect(route('user.forgot'))->withErrors('Credentials does not match');
    }

    public function resetUpdate (User $user, $token, Request $request){
        if($user->temp_password === $token){
            $request->validate([
                'password' => 'min:6|max:20|confirmed'
            ]);
            $user->password = Hash::make($request->password);
            $user->temp_password = null;
            $user->save();
            return redirect(route('login'))->withSuccess('Password reseted!');
        }
        return redirect(route('user.forgot'))->withErrors('Credentials does not match');
        
    }



}
