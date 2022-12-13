<!DOCTYPE html>
<html lang="es">
@include('plantilla/alumno/head')	
<body>
@include('plantilla/alumno/navBar')	
	
	<div class="container-fluid colorbg">

			<div class="titulo">
			 	 <h2 class="estiloTitulo">Formatos <small>(Estancias/Estadías)</small></h2>
			</div>
			<div class="contenedor">
					<div class="carta">
					<h4>Estancias</h4>
							<img src="{{asset("/css/documentos.png") }}">
							
							<div class="row">
								<a href="{{ route('estancia1.index',[1]) }}">Estancias 1</a>
							</div>
							<div class="row">
								<a href="{{ route('estancia1.index',[2]) }}">Estancias 2</a>
							</div>
						</div>
						<div class="carta">
						<h4>Estadias</h4>
							<img src="{{asset("/css/documentos.png") }}">
							
							<div class="row">
								<a href="{{ route('estancia1.index',[3]) }}">Estadias</a>
								</div>
								<div class="row">
								<a href="{{ route('estancia1.index',[4]) }}">Estadias Nacionales</a>
								</div>
					
						</div>
				<div class="carta">
							<h4>Servicio Social</h4>
								<img src="{{asset("/css/documentos.png") }}">
								
								<div class="row">
								<a href="{{ route('estancia1.index',[5]) }}">Servicio Social</a>
								</div>
								
				</div>
				<div class="estiloAviso">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
											<div class="carousel-item active imgtam">
												<img src="{{asset("/css/calendario1.png") }}" >
											</div>
											<div class="carousel-item imgtam">
													<img src="{{asset("/css/calendario2.png") }}">
											</div>
											<div class="carousel-item imgtam">
													<img src="{{asset("/css/calendario3.png") }}">
											</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
						</button>
			</div>
		</div>


			</div>
		
				
	</div>
@include('plantilla/alumno/footer')
</body>

</html>