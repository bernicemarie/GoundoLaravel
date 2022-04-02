   
  @extends('user.user_master')
 @section('user')
     <div class="sl-mainpanel" >
      

      <div class="sl-pagebody">
        
<div class="box-header with-border">
				  <h3 class="box-title">La liste de mes posts</h3>
                  <a href="{{route('post.add')}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Ajouter un Post</a>
				</div>
        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                 <th width=1>N°</th>
				<th>Auteur</th>
				<th>Titre</th>
				<th>Contenu</th>
				<th>image</th>
				<th>Date</th>
			 
				<th>Actions</th>
		
								
                </tr>
              </thead>
              <tbody>
              @foreach($allData as $key => $value)
               @if(Auth::user()->name == $value->post_author)
                <tr>
                	
                 <td>{{$key+1}}</td>
				<td>{{$value->post_author}}</td>
				<td>{{$value->post_title}}</td>
				<td>{{$value->post_content}}</td>
			<td> <img  src="{{(!empty($value->post_image))? url('upload_image/post_images/'.$value->post_image):url('upload_image/bernice.jpg') }}" style="width: 70px; height: 65px; border: 1px solid #000000"></td>
				<td>{{$value->post_date}}</td>			 
				<td>
				<a href="{{route('post.edit',$value->id)}}" class="btn btn-info" id="edit"><i class="fa fa-edit"></i></a>
                 <a href="{{route('post.delete',$value->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash-o"></i></a>
                 </td>	
                 
                </tr>
                 @endif		
                 @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

        
 
      </div><!-- sl-pagebody -->
      
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


 @endsection