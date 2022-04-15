<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
 


class CreerCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('creercommande');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commandes=Commande::orderBy('ModeDePaiement','asc')->paginate(5);
        return view('commande',compact('commandes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'article_commander' => ['required', 'string', 'max:255'],
            'ModeDePaiement' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);

        $commande= Commande::create([
            'article_commander' => $request->article_commander,
            'ModeDePaiement' => $request->ModeDePaiement,
            'prix' => $request->prix,
            'email' => $request->email,
           
        ]);
        
           return back()->with("success", "votre commande a ete enregistrer avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        
        return view('editCommande',compact('commande'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        $request->validate([
            'article_commander' => ['required', 'string', 'max:255'],
            'ModeDePaiement' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);

        $commande->update([
            'article_commander' => $request->article_commander,
            'ModeDePaiement' => $request->ModeDePaiement,
            'prix' => $request->prix,
            'email' => $request->email,
           
        ]);
        
           return back()->with("success", "votre commande a ete mise a jour avec succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        $article= $commande->article_commander;
        $commande->delete();
        return back()->with("successDelete", " La Commande $article supprimer avec succes!");
    }
}
