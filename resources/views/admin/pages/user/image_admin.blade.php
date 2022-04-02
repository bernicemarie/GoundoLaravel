 @extends('admin.admin_master')
 @section('admin')
<div class="container">
    <div class="row">
        <div class="col" style="padding-top:50px ;">
            <form method="post" action="{{route('image.update',$profile->id)}}" enctype="multipart/form-data">
						@csrf
					  <div class="row">
						<div class="col-12">			
							 <div class="row">
							<div class="col-md-6">
								 
							<div class="form-group">
								<h5>Nom complet <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="text" name="name" class="form-control" value="{{$profile->name}}"  style="font-size:25px;"> </div>
								 
							</div> 
							<div class="form-group">
								<h5>E-mail <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="text" name="email" class="form-control" value="{{$profile->email}}"  data-validation-required-message="Ce champ est obligatoire" style="font-size:25px;">
									 </div>
									     
							</div>
							
							</div>
							<div class="col-md-6">
								  <div class="form-group">
                                <h5>Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                   <input id="image" name="user_image" type="file" class="form-control">
                                </div>
                                 @error('user_image')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>  
                            <div class="form-group">
                                
                              <div class="controls">
                                  <img id="showImage" src="{{(!empty($profile->user_image))? url('upload_image/user_images/'.$profile->user_image):url('upload_image/bernice.jpg')}}" style="width: 100px; height: 100px; border: 1px solid #000000;">  

                                </div>
                            </div>  
							   
							</div>
						</div>
							 
							 
							 
						</div>
						 
					  </div>
						
						 
						 
					<div class="form-group text-center" style="padding-top:25px ;"> 
  <a href="{{route('dashboard')}}">
  <button type="button"  class="btn btn-danger">Annuler</button>
</a>
 <button type="submit" class="btn btn-info" name="submit">Modifier</button>
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