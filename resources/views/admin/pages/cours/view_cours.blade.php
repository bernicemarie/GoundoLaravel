@extends('admin.admin_master')
 @section('admin')
  <div class="sl-mainpanel">
      

      <div class="sl-pagebody">
        
<div class="box-header with-border">
                  <h3 class="box-title">La liste de mes posts</h3>
                  <a href="{{route('cours.add')}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Ajouter un Post</a>
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
        <th>Date</th>
       
        <th>Actions</th>
    
                
                </tr>
              </thead>
              <tbody>
              @foreach($cours as $key => $value)
              
                <tr>
                  
                 <td>{{$key+1}}</td>
        <td>{{$value->user->name}}</td>
        <td>{{$value->cours_title}}</td>
        <td><a href="{{(public_path('cours/'.$value->cours_content))}}">{{$value->cours_content}}</a></td>
        <td>{{$value->cours_date}}</td>       
        <td>
             @if(Auth::user()->id == $value->cours_author)
        <a href="{{route('cours.edit',$value->id)}}" class="btn btn-info" id="edit"><i class="fa fa-edit"></i></a>
         @endif   
        <a href="{{route('cours.delete',$value->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash-o"></i></a>
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