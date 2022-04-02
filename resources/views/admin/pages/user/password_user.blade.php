  @extends('admin.admin_master')
 @section('admin')
<div class="container">
    <div class="row">
        <div class="col">
          <form method="post" action="{{route('password.store')}}">
						@csrf
					  <div class="row">
						<div class="col-12">						
							 
		
							 <div class="row">
							<div class="col-md-6">
								 <div class="form-group">
								<h5>Rôle <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="role" id="select" required class="form-control" disabled>
										
									<option value="admin" {{($profile->role == "admin" ? "selected": " ")}}>Administrateur</option>
										<option value="operateur" {{($profile->role == "operateur" ? "selected": " ")}}>Operateur</option>
									</select>
									     
								</div>
							</div>
							<div class="form-group">
								<h5>Nom complet <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="text" name="name" class="form-control" value="{{$profile->name}}" readonly> </div>
								 
							</div> 
							<div class="form-group">
								<h5>E-mail <span class="text-danger">*</span></h5>
								<div class="controls">
									<input  type="text" name="email" class="form-control" value="{{$profile->email}}"  data-validation-required-message="Ce champ est obligatoire" readonly>
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
  <button type="submit" class="btn btn-info" name="submit">Ajouter</button>
  <a href="{{route('dashboard')}}">
  <button type="button"  class="btn btn-danger">Annuler</button></a>
</div>
					</form>
        </div>
    </div>
</div>
	 

 @endsection