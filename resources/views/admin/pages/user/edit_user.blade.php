@extends('admin.admin_master')
@section('admin')
<div class="container">
    <div class="row">
        <div class="col">
          <form method="post" action="{{route('user.update',$userData->id)}}" enctype="multipart/form-data">
						@csrf
					  <div class="row">
						<div class="col-12">						
							 
		
							 <div class="row">
							<div class="col-md-6">
								 <div class="form-group">
								<h5>Rôle <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="role" id="select" required class="form-control">
										
									<option value="admin" {{($userData->role == "admin" ? "selected": " ")}}>Administrateur</option>
										<option value="operator" {{($userData->role == "operator" ? "selected": " ")}}>Operateur</option>
									</select>
									     @error('role')
                                    <span class="text-danger">{{$message}}</span>
                                      @enderror
								</div>
							</div>
							<div class="form-group">
								<h5>E-mail <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="text" name="email" class="form-control" value="{{$userData->email}}"  data-validation-required-message="Ce champ est obligatoire" disabled>
									 </div>
									     
							</div>
							 <div class="form-group">
                                <h5>Fonction <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input  type="text" name="function" class="form-control" required> 
                                </div>
                                            @error('function')
                                         <span class="text-danger">{{$message}}</span>
                                          @enderror
                            </div> 
							</div>
							<div class="col-md-6">
								 <div class="form-group">
								<h5>Nom complet <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="text" name="name" class="form-control" value="{{$userData->name}}" required data-validation-required-message="Ce champ est obligatoire"> </div>
									   @error('name')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
							</div> 
							 <div class="form-group">
								<h5>Mot de passe <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="password" name="password" class="form-control"  required data-validation-required-message="Ce champ est obligatoire"  placeholder=""> 
								</div>
							</div>  
							 <div class="form-group">
                                <h5>Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                   <input id="image" name="user_image" type="file" class="form-control">
                                </div>
                                 @error('post_image')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>  
                            <div class="form-group">
                                
                                <div class="controls">
                                  <img id="showImage" src="{{(!empty($userData->user_image))? url('upload_image/user_images/'.$userData->user_image):url('upload_image/bernice.jpg')}}" style="width: 100px; height: 100px; border: 1px solid #000000;">  


                                </div>
                            </div> 
							</div>
						</div>
							 
							 
							 
						</div>
						 
					  </div>
						
						 
						 
					<div class="form-group text-center" style="padding-top:25px ;"> 
  <button type="submit" class="btn btn-info" name="submit">Ajouter</button>
  <a href="{{route('user.view')}}">
  <button type="button"  class="btn btn-danger">Annuler</button></a>
</div>
					</form>
        </div>
    </div>
</div>
	 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

 @endsection