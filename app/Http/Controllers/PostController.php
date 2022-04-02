<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Auth;

class PostController extends Controller
{
    public function PostView(){
       $data['allData']= Post::all();
       $data['user']= User::where('id',Auth::user()->id)->first();
        return view ('user.pages.posts.view_post',$data);
    }
     public function PostAdd(){
       
        return view ('user.pages.posts.add_post');
    }

     public function PostStore(Request $request){
        $validatedData = $request->validate([
          'post_author'=> 'required:posts|max:255',
          'post_title'=> 'required:posts|max:255',
          'post_content'=> 'required:posts|max:255',
          'post_image'=> 'required:posts|max:255',
          'post_date'=> 'required:posts|max:255',
        ],
        [
        'post_author.required'=>'Ce champ est obligatoire',
        'post_title.required'=>'Ce champ est obligatoire',
        'post_date.required'=>'Ce champ est obligatoire',
        'post_content.required'=>'Ce champ est obligatoire',
        'post_image.required'=>'Ce champ est obligatoire',
        

        ]
    );
         $data = new Post();
         $data->post_author = $request->post_author;
         $data->post_title = $request->post_title;
         $data->post_date = $request->post_date;
         $data->post_content = $request->post_content;
         if ($request->file('post_image')) {
             $file = $request->file('post_image');
            /* @unlink(public_path('upload_image/event_image/'.$user->image));*/
             $filename = date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload_image/post_images'),$filename);
             $data['post_image']= $filename;
              }
        
        $data->save();
        
        $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('post.view')->with($notification); ; 
         

    }

      public function PostEdit($id){
         $data['userData']= Post::find($id);
       return view ('user.pages.posts.edit_post',$data);
}

  public function PostUpdate(Request $request, $id){
        $validatedData = $request->validate([
          'post_author'=> 'required:posts|max:255',
          'post_title'=> 'required:posts|max:255',
          'post_content'=> 'required:posts|max:255',
          'post_image'=> 'required:posts|max:255',
          'post_date'=> 'required:posts|max:255',
        ],
        [
        'post_author.required'=>'Ce champ est obligatoire',
        'post_title.required'=>'Ce champ est obligatoire',
        'post_date.required'=>'Ce champ est obligatoire',
        'post_content.required'=>'Ce champ est obligatoire',
        'post_image.required'=>'Ce champ est obligatoire',
        

        ]
    );
         $data = Post::find($id);
         $data->post_author = $request->post_author;
         $data->post_title = $request->post_title;
         $data->post_date = $request->post_date;
         $data->post_content = $request->post_content;
         if ($request->file('post_image')) {
             $file = $request->file('post_image');
            @unlink(public_path('upload_image/post_images/'.$data->post_image));
             $filename = date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload_image/post_images'),$filename);
             $data['post_image']= $filename;
              }
        $data->save();
        
        $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('post.view')->with($notification); ; 
         

    }

     public function PostDelete($id){
         $data = Post::find($id);
          @unlink(public_path('upload_image/post_images/'.$data->post_image));
          $data->delete();
         
         $notification=['message'=>'Action réalisée',
                        'alert-type'=>'success'
                         ];
        
        return Redirect()->route('post.view')->with($notification); 
        

}
}
