<!DOCTYPE html>
<html lang="es">
    @include('plantilla/admin/head')
<body>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		@include('plantilla/admin/navBar')

		<!-- Content page -->
		<div class="container p-3">
			<div class="page-header">
			  <h2 class="text-titles">Cambiar contraseña <small>(Admin)</small></h2>
			</div>
		</div>
		<div class="row">
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                        <form method="POST" action="{{route('admin_editar.index')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" class="form-control form-control-lg text-center"
                                        name="name" value="{{ auth()->user()->name }}" disabled />
                                        <label class="form-label" for="name">Nombre Usuario(Matricula)</label>
                                    </div>                                  
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg text-center" name="password"/>
                                        <label class="form-label" for="password">Contraseña</label>
                                    </div>
                                </div> 
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg text-center"
                                        name="email" value="{{ auth()->user()->email }}" disabled/>
                                        <label class="form-label" for="email">Email(UPQROO)</label>
                                    </div>
                                </div>      
                                @error('password')
                                    <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror                        
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Guardar</button>
                                    </div>
                                </div>                                  
                            </div>
                            
                            
                        </form>
                </div>
            </div>
		</div>
			
			
	</section>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>