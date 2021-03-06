      @php
    $profile = DB::table('users')->where('id',Auth::user()->id)->first();
    @endphp
  <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="{{route('home')}}">Goundo</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                         
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{(!empty($profile->user_image))? url('upload_image/user_images/'.$profile->user_image):url('upload_image/bernice.jpg')}}"  alt="Image Utilisateur" class="img-circle">
                            </div>
                           <!--  <div class="profile-data">
                                <div class="profile-data-name">{{Auth::user()->name}}</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div> -->
                             
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{route('dashboard')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Tableau de bord</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Publications</span></a>
                        <ul>
                                                                
                                    <li><a href="{{route('post.view')}}">Mes Publications</a></li>
                                                               
                        </ul>
                    </li> 
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Cours</span></a>
                        <ul>
                                                                
                                    <li><a href="{{route('cours.view')}}">Mes cours</a></li>
                                                               
                        </ul>
                    </li> 
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Mon Profile</span></a>
                        <ul>
                                                                
                                    <li><a href="{{route('password.view')}}">Changer mot de passe</a></li>
                                    <li><a href="{{route('image.view')}}">Changer mon image</a></li>
                                                             
                        </ul>
                    </li>
                    <li>
                        <a href=""><span class="fa fa-file-text-o"></span> <span class="xn-text">A Venir...</span></a>
                         
                    </li> 
                     <li>
                        <a href="{{route('app.logout')}}"><span class="fa fa-file-text-o"></span> <span class="xn-text">Fermer l'application</span></a>
                         
                    </li>  
                </ul>
                <!-- END X-NAVIGATION -->
            </div>