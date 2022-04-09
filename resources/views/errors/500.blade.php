    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Goundo</title>

    <!-- vendor css -->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('admin/lib/Ionicons/css/ionicons.css')}}lib/Ionicons/css/ionicons.css" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/starlight.css')}}">
    <link rel="stylesheet" href="{{asset('admin/image.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
  </head>

  <body>
  
          
    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v" id="maintenance">
              
      <div style="width: 30%;" class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Serveur injoignable<span class="tx-info tx-normal"></span></div>
       
        <div class="tx-center mg-b-60">Désolé....!</div>
        
             
        <div style="text-align: center;" class="form-group">
          
           <h2 style="text-align: center;" class="btn btn-info">Le serveur est indisponible pour l'instant...</h2>

        </div><!-- form-group -->
        
    
        
       
      </div><!-- login-wrapper -->

    </div><!-- d-flex -->
     
    <script src="{{asset('admin/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('admin/lib/bootstrap/bootstrap.js')}}"></script>

 <!-- start  Nice message, its CSS is above-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('js/show_password.js')}}"></script>
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

