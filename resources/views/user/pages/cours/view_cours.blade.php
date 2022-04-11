    
  @extends('user.user_master')
 @section('user')

  <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Basic</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
               <!--  <div style="font-size:50%"  class="page-title">                    
                    <a href="{{route('post.add')}}">
                      <button  class="btn btn-info">Ajouter une publication</button>
                    </a>
                </div> -->
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   <a href="{{route('cours.add')}}">
                                       <button  class="btn btn-info">Ajouter un cours</button>
                                        </a>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Exportation des données</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='img/icons/json.png' width="24"/> JSON</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='img/icons/xml.png' width="24"/> XML</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='img/icons/sql.png' width="24"/> SQL</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
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
               @if(Auth::user()->id == $value->cours_author)
                <tr>
                  
                 <td>{{$key+1}}</td>
        <td>{{$value->user->name}}</td>
        <td>{{$value->cours_title}}</td>
        <td><a href="{{(public_path('cours/'.$value->cours_content))}}">{{$value->cours_content}}</a></td>
        <td>{{$value->cours_date}}</td>       
        <td>
        <a href="{{route('cours.edit',$value->id)}}" class="btn btn-info" id="edit"><i class="fa fa-edit"></i></a>
        <a href="{{route('cours.delete',$value->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-trash-o"></i></a>
                 </td>  
                 
                </tr>
                 @endif   
                 @endforeach
              </tbody>
                                    </table>                                    
                                    
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                            
                            <!-- START DEFAULT TABLE EXPORT -->
                           
                            <!-- END DEFAULT TABLE EXPORT -->

                        </div>
                    </div>

                </div>       
   
 @endsection

