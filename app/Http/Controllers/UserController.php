<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
     public function UserView(){
       $data['allData']= User::all();
        return view ('admin.pages.user.view_user',$data);
    }
    public function UserAdd(){
       
        return view ('admin.pages.user.add_user');
    }

    public function UserStore(Request $request){
        $validatedData = $request->validate([
          'email'=> 'required|unique:users|max:255',
          'name'=> 'required:users|max:255',
          'role'=> 'required:users|max:255',
        ],
        [
        'email.required'=>'Ce champ doit avoir @',
        'email.unique'=>'Cette adresse est déjà prise!',
        'name.required'=>'Ce champ est obligatoire',
        'role.required'=>'Ce champ est obligatoire',

        ]
    );
         $data = new User();
         $data->role = $request->role;
         $data->email = $request->email;
         $data->name = $request->name;
         $data->password = bcrypt($request->password);
          if ($request->file('user_image')) {
             $file = $request->file('user_image');
            /* @unlink(public_path('upload_image/event_image/'.$user->image));*/
             $filename = date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload_image/user_images'),$filename);
             $data['user_image']= $filename;
              }
        
          
        $data->save();
        
        $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('user.view')->with($notification); ; 
         

    }

    public function UserEdit($id){
         $editData['userData']= User::find($id);
        return view ('admin.pages.user.edit_user',$editData);

}
 public function UserUpdate(Request $request, $id){
        $validatedData = $request->validate([
          'name'=> 'required:users|max:255',
          'role'=> 'required:users|max:255',
        ],
        [
        
        'name.required'=>'Ce champ est obligatoire',
        'role.required'=>'Ce champ est obligatoire',

        ]
    );
          $data = User::find($id);
         $data->role = $request->role;
         $data->name = $request->name;
         $data->password = bcrypt($request->password);
          if ($request->file('user_image')) {
             $file = $request->file('user_image');
            @unlink(public_path('upload_image/user_images/'.$data->user_image));
             $filename = date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload_image/user_images'),$filename);
             $data['user_image']= $filename;
              }
          
        $data->save();
        $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('user.view')->with($notification); 
         

    }
    public function UserDelete($id){
         $data = User::find($id)->delete();
         
         $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('user.view')->with($notification); 
        

}
public function UserStatusOn($id){
         $data = User::find($id);
        $data->status = '1'; 
        $data->save();
         $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('user.view')->with($notification); 
    }
         
    public function UserStatusOff($id){
         $data = User::find($id);
        $data->status = '0'; 
        $data->save();
        $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('user.view')->with($notification); 
         
}
  
    public function PasswordView(){
    $id = Auth::user()->id;
  $user['profile']= User::find($id);
   if(Auth::user()->role == 'admin')
    return view('admin.pages.user.password_user',$user);
    else 
    return view('user.pages.user.password_user',$user);
    
    } 
    
     public function PasswordStore(Request $request){
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password,$hashedPassword)){
            $user = User::find(Auth::id());
            if($request->password == $request->current_password && $request->confirm_password == $request->current_password ) {
           $notification=['message'=>'Donnez un nouveau mot de passe',
                        'alert-type'=>'error'
                         ];
           return Redirect()->back()->with($notification); 
            } 
            else if ($request->password == $request->confirm_password) {
            $user->password= Hash::make($request->password);
            $user->save();
            Auth::logout();
             return Redirect()->route('login'); 
            }
             else{
                $notification=['message'=>'Confirmer bien votre nouveau mot de passe',
                        'alert-type'=>'error'
                         ];
           return Redirect()->back()->with($notification); 
        }
            

        }
        else{
            $notification=['message'=>'Donner votre mot de passe actuel',
                        'alert-type'=>'error'
                         ];
            return Redirect()->back()->with($notification); 
        }
         /*$data = User::find(Auth::user()->id);
         $data->password = bcrypt($request->password) ;
        $data->save();
        $notification=['message'=>'Mot de pass modifié avec succès',
                        'alert-type'=>'success'
                         ];*/
       /* return Redirect()->route('profile.view')->with($notification); */
         

    }

     public function ImageView(){
       $id = Auth::user()->id;
       $data['profile']= User::find($id);
       if(Auth::user()->role == 'admin')
    return view('admin.pages.user.image_admin',$data);
    else 
        return view ('user.pages.user.image',$data);
    }

    public function ImageUpdate(Request $request){
        $validatedData = $request->validate([
          'user_image'=> 'required:users|max:255',
          
        ],
        [
        
        'user_image.required'=>'Ce champ est obligatoire',
        

        ]
    );
            $id = Auth::user()->id;
            $data = User::find($id);
            if ($request->file('user_image')) {
             $file = $request->file('user_image');
            @unlink(public_path('upload_image/user_images/'.$data->user_image));
             $filename = date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload_image/user_images'),$filename);
             $data['user_image']= $filename;
              }
          
        $data->save();
        $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('dashboard')->with($notification); 
         

    }

}
