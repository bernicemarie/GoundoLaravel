 <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{route('dashboard')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Tableau de bord</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
         
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="menu-item-label">Publications</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('post.view')}}" class="nav-link">Les Publications</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="menu-item-label">Cours</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('cours.view')}}" class="nav-link">Mes Cours</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="menu-item-label">Contact</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('contact.view')}}" class="nav-link">Mes Contacts</a></li>
        </ul>
         <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="menu-item-label">Utilisateurs</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('user.view')}}" class="nav-link">Liste utilisateurs</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="menu-item-label">Mon Profile</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('password.view')}}" class="nav-link">Changer mot de passe</a></li>
          <li class="nav-item"><a href="{{route('image.view')}}" class="nav-link">Changer mon image</a></li>
        </ul>
         <a href="" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">A venir</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Quitter l'application?</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('app.logout')}}" class="nav-link">Fermer l'application</a></li>
        </ul>
         
        
      
         
      </div><!-- sl-sideleft-menu -->

      <br>
    </div>