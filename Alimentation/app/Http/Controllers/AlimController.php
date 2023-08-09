<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\roles;
use App\Models\category;
use App\Models\produit;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AlimController extends Controller
{
//pour l'accueil
    public function afficheAccueil(){
        return view('accueil');
    }
//pour l'inscription
    public function afficheInscrip(){
        return view('inscrip');
    }   
    public function enregistrement(Request $request){
$u=new User();
$u->firstname=$request->input('firstname');
$u->lastname=$request->input('lastname');
$u->email=$request->input('email');
$u->password=  Hash::make($request->password);
$u->role_id=2;
$u->save();
        return view('inscrip');
    }

    //cela permet de connecter.

public function afficheConnexion(){
    return view('conn');
}

   public function connexion(Request $request){
      $identifiants = $request->validate([
        'email'=>'required|email',
        'password'=> 'required'
       ]);
       if (Auth::attempt($identifiants)&& Auth::user()->role_id === 1) {
        $request->session()->regenerate();
        return 'ok je suis admin';
       } elseif(Auth::attempt($identifiants)&& Auth::user()->role_id === 2) {
        $request->session()->regenerate();
        return 'ok je suis gerant';
       }else{
      return back()->with('status','identifiants incorrects');
       }
       
      }

   //pour l'ajout d'un produit   
        public function ajoutproduit()
       {
           $categories = category::all();
           return view('produit',compact('categories'));
       }


       public function produit()
       {
           //$produits = produit::all();
           return view('produit',compact('produits'));
       }




       public function index()
       {
        $produits = produit::all();
           return view('index',compact('produits'));
       }




   
       public function storeproduit(Request $request)
       {
     
           $request->validate([
               'name' => 'required|string',
               'prix' => 'required|integer',
               'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
               'description' => 'required|string',
               'category' => 'required|string',
           ]);
           if ($request->file('photo')) {
               $photo = $request->file('photo')->store('public/picture');
               $name = explode('/', $photo)[2];
               $input['photo'] = $name;
           };
   
                produit::create([
               'name'=> $request->name,
               'prix'=>$request->prix,
               'photo'=>$name,
               'description'=>$request->description,
               'categorie_id'=> $request->category,
               // 'user_id'=> Auth::user()->id,
           ]);
           return redirect('index');
       }
       public function update(Request $request, produit $produit)
       {
           $validatedData = $request->validate([
               'name' => 'required',
               'prix' => 'required',
               'photo' => 'required',
               'description' => 'required',
               // autres règles de validation pour les champs
           ]);
   
           $produit->update($validatedData);
   
           return redirect()->route('produit')->with('success', 'Utilisateur mis à jour avec succès');
       }
   
       public function destroy( $id)
       {
           produit::find($id)->delete();
   
           return redirect()->route('index')->with('success', 'Utilisateur supprimé avec succès');
       }




    public function affichePresent($id)
    {
        $produit = Produit::findOrFail($id);

        return view('present', compact('produit'));
    }







       
   
   }
   
   
   



    