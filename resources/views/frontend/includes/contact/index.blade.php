  
@extends('admin.admin_master')
@section('admin')
   
    <div class="py-12">
       <div class="container">
       <div class="row">

       <div class="col-md-9">
       <div class="card">
       @if(session('success'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
       <div class="card-header">All Brand </div>
       
       <table class="table table-bordered table-hover">
  
    <tr>
      <th >N°</th>
      <th scope="col">Email</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col" width="5%">Ajouté Par</th>
      <th scope="col">Actions</th>
    </tr>
     @foreach($contact as $key => $value)
    <tr>
      <td>{{$key+1}} </td>
      <td>{{$value->email}}</td>
      <td>{{$value->adresse}}</td>
      <td>{{$value->telephone}}</td>
      <td>{{$value->user->name}}</td>
      <td>
       <a href="{{route('edit.contact',$value->id)}}" onClick="return confirm('Are u sure...???')" class="btn btn-primary">Edit</a>
       <a href="{{route('delete.contact',$value->id)}}" onClick="return confirm('Are u sure...???')" class="btn btn-danger">Delete</a>
      </td>
    </tr>
     @endforeach

      </table>
      {{$contact->links()}}
     </div>
       </div>
       <div class="col-md-3">
       <div class="card">
       <div class="card-header">Add Category</div>
       <div class="card-body">
       <form method="POST" action="{{route('contact')}}">
       @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse</label>
    <input  type="text" name="adresse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('adresse')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Téléphone</label>
    <input  type="text" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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