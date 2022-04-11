 <!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:00:33 GMT -->
<head>        
        <!-- META SECTION -->
        <title>Goundo</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
                        
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{asset('user/css/theme-default.css')}}"/>
        <!-- EOF CSS INCLUDE -->    
         <!-- CDN TOASTR CSS -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    
    </head>
<script async src="../../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9822210293833673",  
    enable_page_level_ads: true
  });
</script>
 

    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
           @include('user.body.sidebar')
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                 @yield('user')                      
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX--> 

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{asset('user/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{asset('user/js/plugins/icheck/icheck.min.js')}}"></script>  
        <script type="text/javascript" src="{{asset('user/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}">
            
        </script>
        <script type="text/javascript" src="{{asset('user/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('user/js/plugins/morris/raphael-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/plugins/morris/morris.min.js')}}"></script>       
        <script type="text/javascript" src="{{asset('user/js/plugins/rickshaw/d3.v3.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/plugins/rickshaw/rickshaw.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('user/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('user/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>                
        <script type='text/javascript' src="{{asset('user/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
        <script type="text/javascript" src="{{asset('user/js/plugins/owl/owl.carousel.min.js')}}"></script>                 
        
        <script type="text/javascript" src="{{asset('user/js/plugins/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        
         
           
        

         <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{asset('user/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('user/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/plugins/tableexport/tableExport.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/plugins/tableexport/jquery.base64.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/plugins/tableexport/html2canvas.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/plugins/tableexport/jspdf/libs/sprintf.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/plugins/tableexport/jspdf/jspdf.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/plugins/tableexport/jspdf/libs/base64.js')}}"></script>        
        <!-- END THIS PAGE PLUGINS--> 



        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('user/js/settings.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('user/js/actions.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/textedit.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('user/js/demo_dashboard.js')}}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->  

    
    <!--  Nice confimation modal with sweethalet -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script type="text/javascript">
    $(function(){
      $(document).on('click','#delete',function(e){
      e.preventDefault();
      var link = $(this).attr("href");

      Swal.fire({
  title: 'Etes-vous sûr?',
  text: "La suppression sera permanente!",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Annuler',
  confirmButtonText: 'Oui, Suprimer!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href =link
    Swal.fire(
      'Suppression faite!',
      'La ligne a été supprimée.',
      'success'
    )
  }
})
      });
    });
  </script>
   <script type="text/javascript">
    $(function(){
      $(document).on('click','#edit',function(e){
      e.preventDefault();
      var link = $(this).attr("href");

      Swal.fire({
  title: 'Etes-vous sûr?',
  text: "La mise à jour!",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Annuler',
  confirmButtonText: 'Oui, Editer!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href =link
     
  }
})
      });
    });
  </script>

   <!-- End  Nice confimation modal with sweethalet -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
 <!-- End  Nice message -->       
    </body>
 
</html>  






