 @include('frontend.includes.all_header')

<body>

  <!-- ======= Header ======= -->
  @include('frontend.includes.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
 

  <!-- End Hero -->

  <main id="main">
@yield('accueil_contenu')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   @include('frontend.includes.footer')
 <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  
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

   <!-- start  Nice message, its CSS is above-->
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

