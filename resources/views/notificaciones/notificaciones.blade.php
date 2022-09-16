@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Revisa los siguientes errores
</div>
@endif

@if ($message = Session::get('aceptado'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif

@if ($message = Session::get('pendiente'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif

@if ($message = Session::get('observaciones'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif

@if ($message = Session::get('sinRespuesta'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif

@if ($message = Session::get('errorPDF'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{$message}} </strong>
</div>
@endif
@if ($message = Session::get('usuarioR'))
	<script>
		Swal.fire(
			'Usuario reiniciado!',
			'SU PROCESO ESTANCIA/ESTADIA HA SIDO REINICIADA',
			'success'
		)
	</script>
@endif

@if ($message = Session::get('eliminar'))
	<script>
		Swal.fire(
			'Eliminado!',
			'El usuario a sido elimidado',
			'success'
		)
	</script>
@endif

@if ($message = Session::get('eliminarC'))
	<script>
		Swal.fire(
			'Eliminado!',
			'El usuario a sido elimidado',
			'success'
		)
	</script>
@endif

@if ($message = Session::get('restaurar'))
	<script>
		Swal.fire(
			'Restaurado!',
			'El usuario a sido Restaurado',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('eliminarF03'))
	<script>
		Swal.fire(
			'Eliminado!',
			'F03 elimidado',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('eliminarF04'))
	<script>
		Swal.fire(
			'Eliminado!',
			'F04 elimidado',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('cancelar_carga_horaria'))
	<script>
		Swal.fire(
			'Cancelada!',
			'Carga horaria Cancelada',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('cancelar_constancia_derecho'))
	<script>
		Swal.fire(
			'Cancelada!',
			'Constancia de derecho IMSS Cancelada',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('cancelar_carta_responsiva'))
	<script>
		Swal.fire(
			'Cancelada!',
			'Carta responsiva Cancelada',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('cancelarf01'))
	<script>
		Swal.fire(
			'Cancelado!',
			'F01 Cancelado',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('cancelarf02'))
	<script>
		Swal.fire(
			'Cancelado!',
			'F02 Cancelado',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('cancelarf03'))
	<script>
		Swal.fire(
			'Cancelado!',
			'F03 Cancelado',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('cancelarf04'))
	<script>
		Swal.fire(
			'Cancelado!',
			'F04 Cancelado',
			'success'
		)
	</script>
@endif
@if ($message = Session::get('cancelarf05'))
	<script>
		Swal.fire(
			'Cancelado!',
			'F05 Cancelado',
			'success'
		)
	</script>
@endif
