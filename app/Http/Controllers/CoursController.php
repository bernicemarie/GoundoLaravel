<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\User;
use Auth;

class CoursController extends Controller
{
     public function CoursView(){
       $data['cours']= Cours::all();
       $data['user']= User::where('id',Auth::user()->id)->first();
        if(Auth::user()->role == 'admin')
           return view('admin.pages.cours.view_cours',$data);
       else  
          
          return view ('user.pages.cours.view_cours',$data);
    }
     public function CoursAdd(){

        if(Auth::user()->role == 'admin')

           return view('admin.pages.cours.add_cours');
       else  
          
          return view ('user.pages.cours.add_cours');
    }

     public function CoursStore(Request $request){
        $validatedData = $request->validate([
          'cours_title'=> 'required:cours|max:255',
          'cours_content'=> 'required:cours|mimes:pdf',
          'cours_date'=> 'required:cours|max:255',
        ],
        [
        'cours_title.required'=>'Ce champ est obligatoire',
        'cours_date.required'=>'Ce champ est obligatoire',
        'cours_content.required'=>'Ce champ est obligatoire',
        'cours_content.mimes'=>'Donnez un fichier au format PDF',
        

        ]
    );
         $data = new Cours();
         $data->cours_author = Auth::user()->id;
         $data->cours_title = $request->cours_title;
         $data->cours_date = $request->cours_date;
         if ($request->file('cours_content')) {
             $file = $request->file('cours_content');
            /* @unlink(public_path('upload_image/event_image/'.$user->image));*/
             $filename = $file->getClientOriginalName();
              $file->move(public_path('cours'),$filename);
             $data['cours_content']= $filename;
              }
        
        $data->save();
        
        $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('cours.view')->with($notification); ; 
         

    }

      public function CoursEdit($id){
         $data['cours']= Cours::find($id);
          if(Auth::user()->role == 'admin')
           return view('admin.pages.cours.edit_cours',$data);
       else 
          
          return view ('user.pages.cours.edit_cours',$data);
}

  public function CoursUpdate(Request $request, $id){
         $validatedData = $request->validate([
          'cours_title'=> 'required:cours|max:255',
          'cours_content'=> 'required:cours|mimes:pdf',
          'cours_date'=> 'required:cours|max:255',
        ],
        [
        'cours_title.required'=>'Ce champ est obligatoire',
        'cours_date.required'=>'Ce champ est obligatoire',
        'cours_content.required'=>'Ce champ est obligatoire',
        'cours_content.mimes'=>'Donnez un fichier au format PDF',
        

        ]
    );
         $data = Cours::find($id);
         $data->cours_title = $request->cours_title;
         if ($request->file('cours_content')) {
             $file = $request->file('cours_content');
             @unlink(public_path('cours/'.$data->cours_content));
             $filename = $file->getClientOriginalName();
             $file->move(public_path('cours'),$filename);
             $data['cours_content']= $filename;
              }
        $data->save();
        
        $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('cours.view')->with($notification); ; 
         

    }

     public function CoursDelete($id){
         $data = Cours::find($id);
          @unlink(public_path('cours/'.$data->cours_content));
          $data->delete();
         
         $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('cours.view')->with($notification); 
        

}
}
