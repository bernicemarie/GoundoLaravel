@extends('admin.admin_master')
@section('admin')
     
            <b>All Brand</b>
            <b style="float:right;">   Hi.. <b>{{Auth::user()->name}}</b>
           
            </b>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="py-12">
       <div class="container">
       <div class="row">

        
       <div class="col-md-8">
       <div class="card">
       <div class="card-header">Edition Contact</div>
       <div class="card-body">
       <form method="POST" action="{{route('update.contact',$contact->id)}}">
      @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input value="{{$contact->email}}"  type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('emaol')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse</label>
    <input value="{{$contact->adresse}}"  type="text" name="adresse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('adresse')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Téléphone</label>
    <input value="{{$contact->telephone}}"   type="text" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('telephone')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div> 
  <div class="form-group"> 
  <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
  <button type="reset" class="btn btn-danger">Annuler</button>
</div>
</form>
       </div>
       </div>
       </div>
       </div>
       </div>

    </div>
@endsection

<script type="text/javascript">
    $(document).ready(function(){
    $('#image').change(function(e){
     var reader = new FileReader();
     reader.onload=function(e){
        $('#showImage').attr('src',e.target.result);
     }
     reader.readAsDataURL(e.target.files['0']);
    });
    });


  </script>