 @extends('admin.admin_master')
 @section('admin')
     <div class="sl-mainpanel" >
      

      <div class="sl-pagebody">
        
<div class="box-header with-border">
				  <h3 class="box-title">La liste des utilisateurs</h3>
                  <a href="{{route('user.add')}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Ajouter un utilisateur</a>
				</div>
        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                 <th width=1>N°</th>
								<th>Nom</th>
								<th width="1">Email</th>
								<th>Role</th>
								<th>Status</th>
                <th>Image</th>
								<th>Actions</th>
								
                </tr>
              </thead>
              <tbody>
              	 @foreach($allData as $key => $user)
                <tr>
                 <td>{{$key+1}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>{{$user->status}}</td>
                <td> <img  src="{{(!empty($user->user_image))? url('upload_image/user_images/'.$user->user_image):url('upload_image/bernice.jpg') }}" style="width: 70px; height: 65px; border: 1px solid #000000"></td>
								<td><a href="{{route('user.edit',$user->id)}}" class="btn btn-info" id="edit"><i class="fa fa-edit"></i></a>
                              <a href="{{route('user.statuson',$user->id)}}" class="btn btn-info" id="edit"><i class="fa fa-edit">On</i></a>
                              <a href="{{route('user.statusoff',$user->id)}}" class="btn btn-danger" id="edit"><i class="fa fa-edit">Off</i></a>
                            <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash-o"></i></a>
                                </td>
								 
                </tr>
                 @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

        
 
      </div><!-- sl-pagebody -->
      
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


 @endsection