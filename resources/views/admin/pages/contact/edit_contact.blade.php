@extends('admin.admin_master')
@section('admin')
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{route('contact.update',$contact->id)}}">
                        @csrf
                      <div class="row">
                        <div class="col-12">                        
                             
        
                             <div class="row">
                            <div class="col-md-6">
                                  <div class="form-group">
                                <h5>Email<span class="text-danger">*</span></h5>
                                <div class="controls">
                                     <input value="{{$contact->email}}"  type="email" name="email" class="form-control">
                                 </div>
                                      @error('email')
                                  <span class="text-danger">{{$message}}</span>
                                     @enderror
                            </div>
                            <div class="form-group">
                                <h5>Adresse<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{$contact->adresse}}"  type="text" name="adresse"class="form-control">
                                     </div>
                                      @error('adresse')
                                  <span class="text-danger">{{$message}}</span>
                                     @enderror
                            </div> 
                            
                            </div>
                            <div class="col-md-6">
                                 
                             <div class="form-group">
                                <h5>Téléphone<span class="text-danger">*</span></h5>
                                <div class="controls">
                                   <input value="{{$contact->telephone}}"   type="text" name="telephone" class="form-control">
                                </div>
                                 @error('telephone')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>  
                            
                            </div>
                        </div>
                             
                             
                             
                        </div>
                         
                      </div>
                        
                         
                         
                         <div class="form-group text-center" style="padding-top:25px ;"> 
  <button type="submit" class="btn btn-info" name="submit">Modifier</button>
  <a href="{{route('contact.view')}}">
  <button type="button"  class="btn btn-danger">Annuler</button></a>
</div>
                    </form> 
        </div>
    </div>
</div>
	 

 @endsection