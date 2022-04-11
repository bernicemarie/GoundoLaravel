<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Auth;

class ContactController extends Controller
{
     public function ContactSend(){
        $data['contact'] = Contact::first();
        return view('frontend.includes.contact', $data);
    }

    public function ContactView(){
     $data['contact'] = contact::latest()->get();
     return view('admin.pages.contact.view_contact',$data);
    }


  public function ContactStore(Request $request){
     
       
        $validated = $request->validate([
            'adresse' => 'required|unique:contacts|max:255',
            'email' => 'required|unique:contacts|max:255',
            'telephone' => 'required|unique:contacts|max:255',

            
        ],
        [ 
            'adresse.required' => 'Entrez une adresse',
            'email.required' => 'Entrez une adresse élètronique',
            'email.unique' => 'Cette adresse existe dejà',
            'telephone.required' => 'Entrez un numéro de téléphone',
            
        ]
    );
         
    $contact = new Contact;
    $contact->adresse = $request->adresse;
    $contact->email = $request->email;
    $contact->telephone = $request->telephone;
    $contact->user_id = Auth::user()->id; 
    $contact->save();
   $notification=['message'=>'Ajout réussi en totalité!',
                        'alert-type'=>'success'
                         ];
    return Redirect()->route('contact.view')->with($notification);
    }

     public function ContactEdit($id){
     $display['contact'] = Contact::find($id);
     return view('admin.pages.contact.edit',$display);
    }

    
    public function ContactUpdate(Request $request, $id){
      $validated = $request->validate([
            'adresse' => 'required|unique:contacts|max:255',
            'email' => 'required|unique:contacts|max:255',
            'telephone' => 'required|unique:contacts|max:255',

            
        ],
        [ 
            'adresse.required' => 'Definissez une adresse',
            'email.required' => 'Definissez une adresse élèctronique',
            'telephone.required' => 'Definissez un téléphone',
            'adresse.unique' => 'Cette adresse existe déjà',
            'email.unique' => 'Entrez une adresse élèctronique',
            'telephone.unique' => 'Ce numéro existe déjà',
            
        ]
    );
         
    $contact = Contact::find($id);
    $contact->adresse = $request->adresse;
    $contact->email = $request->email;
    $contact->telephone = $request->telephone;
    $contact->user_id = Auth::user()->id; 
    $contact->save();
   $notification=['message'=>'Modification effectué!',
                        'alert-type'=>'success'
                         ];
    return Redirect()->route('contact.view')->with($notification);
    }

    public function ContactDelete($id){
    $contact = Contact::find($id);
    $contact->delete();
     $notification=['message'=>'Suppression effectuée!',
                        'alert-type'=>'success'
                         ];
    return Redirect()->route('contact.view')->with($notification);
    }
}
