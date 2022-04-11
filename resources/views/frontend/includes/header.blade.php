 @php
 use App\Models\Cours;
 $cours = Cours::all();
 @endphp
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{url('/')}}"><span>Goun</span>do</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>

          <li class="drop-down">
            <a href="#"> 
            @if(session()->get('language') == 'francais') Langue
            @else Language 
            @endif
          </a>
            <ul>
              @if(session()->get('language') == 'francais')
              <li><a href="{{route('english')}}">English</a></li>
              @else
              <li><a href="{{route('francais')}}">Francais</a></li>
              @endif
            </ul>
          </li>
           <li class="drop-down"><a href="#about">@if(session()->get('language') == 'francais') Cours
            @else Training Materials @endif</a>

          
            <ul>
                @foreach($cours as $value)
                <li><a href="{{$value->cours_content}}"  target='_blank' >{{$value->cours_title}}</a></li>
               @endforeach
            </ul>
           
          </li>

          <li><a href="#services">Services</a></li>
        
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="{{route('contact.send')}}">Contact</a></li>
          <li><a href="{{route('dashboard')}}">
            @if(session()->get('language') == 'francais') Mon Espace
            @else My Area @endif
          </a>
        </li>
          @auth
          @else
          <li><a href="{{route('login')}}">Connexion</a></li>
          @endauth

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header>