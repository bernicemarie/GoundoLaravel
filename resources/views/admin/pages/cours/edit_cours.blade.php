@extends('admin.admin_master')
@section('admin')
<div class="container">
    <div class="row">
        <div class="col">
           <form method="POST" action="{{route('cours.update',$cours->id)}}" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="col-12">                        
                             
        
                             <div class="row">
                            <div class="col-md-6">
                                  <div class="form-group">
                                <h5>Auteur<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input  value="{{$cours->user->name}}"  type="text" name="cours_author" class="form-control">
                                     </div>
                                      @error('cours_author')
                                  <span class="text-danger">{{$message}}</span>
                                     @enderror
                            </div>
                            <div class="form-group">
                                <h5>Titre<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{$cours->cours_title}}"   type="text" name="cours_title" class="form-control">
                                     </div>
                                      @error('cours_title')
                                  <span class="text-danger">{{$message}}</span>
                                     @enderror
                            </div> 
                            
                            </div>
                            <div class="col-md-6">
                                 
                             <div class="form-group">
                                <h5>Contenu<span class="text-danger">*</span></h5>
                                <div class="controls">
                                   <input value="{{$cours->cours_content}}"  name="cours_content" type="file" class="form-control">
                                </div>
                                 @error('cours_content')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>  
                            <div class="form-group">
                                <h5>Date<span class="text-danger">*</span></h5>
                                <div class="controls">
                                     <input  value="{{$cours->cours_date}}"  name="cours_date"  class="form-control" >
                                            
                                     </div>
                                      @error('cours_date')
                                  <span class="text-danger">{{$message}}</span>
                                     @enderror
                            </div>
                            
                            </div>
                        </div>
                             
                             
                             
                        </div>
                         
                      </div>
                        
                         
                         
                         <div class="form-group text-center" style="padding-top:25px ;"> 
  <button type="submit" class="btn btn-info" name="submit">Modifier</button>
  <a href="{{route('cours.view')}}">
  <button type="button"  class="btn btn-danger">Annuler</button></a>
</div>
                    </form> 
        </div>
    </div>
</div>
	 

 @endsection