@php
 use App\Models\Post;
 $post = Post::all();
 @endphp

@extends('frontend.master_accueil') 
@include('frontend.includes.slider')
@section('accueil_contenu')
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nous Concernant</strong></h2>
        </div>
          
        <div  class="row content">
         
          <div class="col-lg-6" data-aos="fade-right">
            <h2></h2>
            <h3></h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              
            </p>
          </div>
        </div>
       
      </div>
    </section><!-- End About Us Section -->

   
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
 
        <div class="section-title">
          <h2>Nos Images</strong></h2>
          <!--  <h4></h4> -->
          
        </div>
      
        <div class="row">
           @foreach($post as $value)

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div >
              <div>
                  <img src="{{(!empty($value->post_image))? url('upload_image/post_images/'.$value->post_image):url('upload_image/bernice.jpg') }}" style="width:200px; height: 200px;" class="img-fluid" alt="">
                <i></i>
              </div>
               <h4>{{$value->post_title}}</h4>

            </div>
             
          </div>
           @endforeach
        </div>
         
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        
      </div>
    </section><!-- End Portfolio Section -->

     
    @endsection
