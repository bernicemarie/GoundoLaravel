 @php
 use App\Models\Post;
 $post = Post::all();
 @endphp
 <section id="hero">

    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">
     @foreach($post as $key => $value)
        <!-- Slide 1 -->
       
        <div class="carousel-item {{$key == 0 ? 'active' : ''}}" style=" background-size:cover;
 background-image: url('{{'upload_image/post_images/'.$value->post_image}}')">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>{{$value->post_author}}<span></span></h2>
              <p> {{$value->post_title}}.</p>
              <div class="text-center"><a href="" class="btn-get-started">Tout est du Goundo</a></div>
            </div>
          </div>
        </div>
        @endforeach
         

        
        

      </div>



      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
     
  </section>
  