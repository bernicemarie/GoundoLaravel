   @extends('admin.admin_master')
 @section('admin')
<div class="container">
    <div class="row">
        <div class="col">
           <form method="post" action="{{route('post.update',$userData->id)}}" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="col-12">                        
                             
        
                             <div class="row">
                            <div class="col-md-6">
                                  <div class="form-group">
                                <h5>Auteur<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input readonly value="{{$userData->post_author}}"  type="text" name="post_author" class="form-control" value="{{Auth::user()->name}}">
                                     </div>
                                      @error('post_author')
                                  <span class="text-danger">{{$message}}</span>
                                     @enderror
                            </div>
                            <div class="form-group">
                                <h5>Titre<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{$userData->post_title}}"   type="text" name="post_title" class="form-control">
                                     </div>
                                      @error('post_title')
                                  <span class="text-danger">{{$message}}</span>
                                     @enderror
                            </div> 
                            <div class="form-group">
                                <h5>Date<span class="text-danger">*</span></h5>
                                <div class="controls">
                                     <input  value="{{$userData->post_date}}"  name="post_date" type="date" class="form-control" >
                                            
                                     </div>
                                      @error('post_date')
                                  <span class="text-danger">{{$message}}</span>
                                     @enderror
                            </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                <h5>Contenu <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <textarea name="post_content" cols="15" rows="15" id="body" maxlength="30">{{$userData->post_content}}</textarea>
                                     </div>
                                            @error('post_content')
                                         <span class="text-danger">{{$message}}</span>
                                          @enderror
                            </div> 
                             <div class="form-group">
                                <h5>Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                   <input id="image" name="post_image" type="file" class="form-control">
                                </div>
                                 @error('post_image')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>  
                            <div class="form-group">
                                
                              <div class="controls">
                                  <img id="showImage" src="{{(!empty($userData->post_image))? url('upload_image/post_images/'.$userData->post_image):url('upload_image/bernice.jpg')}}" style="width: 100px; height: 100px; border: 1px solid #000000;">  

                                </div>
                            </div> 
                            </div>
                        </div>
                             
                             
                             
                        </div>
                         
                      </div>
                        
                         
                         
                         <div class="form-group text-center" style="padding-top:25px ;"> 
  <button type="submit" class="btn btn-info" name="submit">Modifier</button>
  <a href="{{route('post.view')}}">
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