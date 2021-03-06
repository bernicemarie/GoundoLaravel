 @extends('admin.admin_master')
 @section('admin')
  <div class="col-md-12"> 
  <div class="row">
     <div class="col-md-8">      
  <div class="sl-mainpanel">
      

      <div class="sl-pagebody">
        
 
        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
             <thead>
                <tr>
                  <th >N°</th>
      <th scope="col" width="10%">Email</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Actions</th>
    
                
                </tr>
              </thead>
              <tbody>
              @foreach($contact as $key => $value)
    <tr>
      <td>{{$key+1}} </td>
      <td>{{$value->email}}</td>
      <td>{{$value->adresse}}</td>
      <td>{{$value->telephone}}</td>
     <!--  <td>{{$value->user->name}}</td> -->
      <td>
       <a href="{{route('contact.edit',$value->id)}}" onClick="return confirm('Are u sure...???')" class="btn btn-primary">Edit</a>
       <a href="{{route('contact.delete',$value->id)}}" onClick="return confirm('Are u sure...???')" class="btn btn-danger">Delete</a>
      </td>
    </tr>
     @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
 
      </div><!-- sl-pagebody -->
      
    </div><!-- sl-mainpanel -->
    </div>
     <div class="col-md-3" style="padding-top:25px ;">
       <div class="card">
       <div class="card-header">Ajouter un contact</div>
       <div class="card-body">
       <form method="POST" action="{{route('contact.store')}}">
       @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">Adresse</label>
    <input  type="text" name="adresse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('adresse')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div> 
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">Téléphone</label>
    <input  type="text" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('telephone')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div> 
    <div class="form-group text-center" style="padding-top:25px ;"> 
  <button type="submit" class="btn btn-info" name="submit">Ajouter</button>
  <button type="reset"  class="btn btn-danger">Annuler</button>
</div>
</form>
       </div>
       </div>
       
       </div>
    </div>
    </div>
    <!-- ########## END: MAIN PANEL ########## -->

 
 @endsection