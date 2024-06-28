<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('dashboard.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dossier='img_client';
        $nom_copy_fiscale=time().'fiscale'.'.'.$request->copy_fiscale->extension();
        $nom_copy_bancaire=time().'bancaire'.'.'.$request->copy_bancaire->extension();
        $request->copy_fiscale->move(public_path($dossier),$nom_copy_fiscale);
        $request->copy_bancaire->move(public_path($dossier),$nom_copy_bancaire);
        $data=$request->all();
        $data['copy_fiscale']=$dossier.'/'.$nom_copy_fiscale;
        $data['copy_bancaire']=$dossier.'/'.$nom_copy_bancaire;
        Client::create($data);
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client=Client::find($id);
        return view('dashboard.clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client=Client::find($id);
        return view('dashboard.clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client=Client::find($id);
        $dossier='img_client';
        $nom_copy_fiscale=time().'fiscale'.'.'.$request->copy_fiscale->extension();
        $nom_copy_bancaire=time().'bancaire'.'.'.$request->copy_bancaire->extension();
        $request->copy_fiscale->move(public_path($dossier),$nom_copy_fiscale);
        $request->copy_bancaire->move(public_path($dossier),$nom_copy_bancaire);
        $data=$request->all();
        $data['copy_fiscale']=$dossier.'/'.$nom_copy_fiscale;
        $data['copy_bancaire']=$dossier.'/'.$nom_copy_bancaire;
        $client->update($data);
        return redirect()->route('clients.index');
        
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client=Client::find($id);
        $client->delete();
        return redirect()->route('clients.index');
    }
}
