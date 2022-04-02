 @extends('user.user_master')
 @section('user')
<div class="container">
    <div class="row">
        <div class="col" style="padding-top:50px ;">
          <form method="post" action="{{route('password.store')}}">
						@csrf
					  <div class="row">
						<div class="col-12">						
							 
		
							 <div class="row">
							<div class="col-md-6">
								 
							<div class="form-group">
								<h5>Nom complet <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="text" name="name" class="form-control" value="{{$profile->name}}" readonly style="font-size:25px;"> </div>
								 
							</div> 
							<div class="form-group">
								<h5>E-mail <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="text" name="email" class="form-control" value="{{$profile->email}}"  data-validation-required-message="Ce champ est obligatoire" readonly style="font-size:25px;">
									 </div>
									     
							</div>
							
							</div>
							<div class="col-md-6">
								 <div class="form-group">
								<h5>Actuel mot de passe<span class="text-danger">*</span></h5>
								<div class="controls">
								<input  type="password" name="current_password" class="form-control"  required data-validation-required-message="Ce champ est obligatoire"  placeholder="Votre actuel mot de passe" > 
								</div>
							</div>  
							 <div class="form-group">
								<h5>Nouveau mot de passe<span class="text-danger">*</span></h5>
								<div class="controls">
								<input  type="password" name="password" class="form-control"  required data-validation-required-message="Ce champ est obligatoire"  placeholder="Votre nouveau mot de passe"> 
								</div>
							</div>  
							<div class="form-group">
								<h5>Confirmer mot de passe <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="password" name="confirm_password" class="form-control"  required data-validation-required-message="Ce champ est obligatoire"  placeholder="Confirmer votre mot de passe"> 
								</div>
							</div>  
							</div>
						</div>
							 
							 
							 
						</div>
						 
					  </div>
						
						 
						 
					<div class="form-group text-center" style="padding-top:25px ;"> 
  <a href="{{route('dashboard')}}">
  <button type="button"  class="btn btn-danger">Annuler</button>
</a>
 <button type="submit" class="btn btn-info" name="submit">Ajouter</button>
</div>
					</form>
        </div>
    </div>
</div>
	 

 @endsection