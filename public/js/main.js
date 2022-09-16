$(document).ready(function(){
	$('.btn-sideBar-SubMenu').on('click', function(){
		var SubMenu=$(this).next('ul');
		var iconBtn=$(this).children('.zmdi-caret-down');
		if(SubMenu.hasClass('show-sideBar-SubMenu')){
			iconBtn.removeClass('zmdi-hc-rotate-180');
			SubMenu.removeClass('show-sideBar-SubMenu');
		}else{
			iconBtn.addClass('zmdi-hc-rotate-180');
			SubMenu.addClass('show-sideBar-SubMenu');
		}
	});
	$('.btn-reiniciarP-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de reiniciar el perfil',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-sinRespuesta-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Sin resultados',
		text: "No se encontro el documento en el sistema",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Eliminar!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-eliminar-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de eliminar este usuario',
		text: "Podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Eliminar!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-eliminarC-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de eliminar este usuario Permanentemente',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Eliminar!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-restaurar-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de restaurar este usuario',
		text: "Podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Restaurar!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});

	$('.btn-eliminarCR-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de eliminar el formato F-03 Cédula de Registro',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Eliminar!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-eliminarDP-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de eliminar el formtato F-04 Definición de proyecto',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Eliminar!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-cancelar-carga-horaria-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de cancelar el documento Carga horaria',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		
		confirmButtonText: 'Si, Cancelar documento!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-cancelar-constancia-derecho-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de cancelar el documento Constancia derecho',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		
		confirmButtonText: 'Si, Cancelar documento!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-cancelar-carta-responsiva-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de cancelar el documento Carta responsiva',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		
		confirmButtonText: 'Si, Cancelar documento!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-cancelarF1-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de cancelar el documento F-01 Carta de Presentación',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		
		confirmButtonText: 'Si, Cancelar documento!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-cancelarF2-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de cancelar el documento F-02 Carta de Aceptación',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		
		confirmButtonText: 'Si, Cancelar documento!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-cancelarF3-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de cancelar el documento F-03 Cédula de Registro',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Cancelar documento!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-cancelarF4-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de cancelar el documento F-04 Definición de Proyecto',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Cancelar documento!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-cancelarF5-system').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: 'Estas seguro de cancelar el documento F-05 Carta de Liberación',
		text: "No podras revertir esta acción",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#dc3545',
		confirmButtonText: 'Si, Cancelar documento!',
		cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	$('.btn-menu-dashboard').on('click', function(){
		var body=$('.dashboard-contentPage');
		var sidebar=$('.dashboard-sideBar');
		if(sidebar.css('pointer-events')=='none'){
			body.removeClass('no-paddin-left');
			sidebar.removeClass('hide-sidebar').addClass('show-sidebar');
		}else{
			body.addClass('no-paddin-left');
			sidebar.addClass('hide-sidebar').removeClass('show-sidebar');
		}
	});

	$('.btn-Notifications-area').on('click', function(){
		var NotificationsArea=$('.Notifications-area');
		if(NotificationsArea.css('opacity')=="0"){
			NotificationsArea.addClass('show-Notification-area');
		}else{
			NotificationsArea.removeClass('show-Notification-area');
		}
	});

	$('.btn-search').on('click', function(){
		swal({
		  title: 'What are you looking for?',
		  confirmButtonText: '<i class="zmdi zmdi-search"></i>  Search',
		  confirmButtonColor: '#03A9F4',
		  showCancelButton: true,
		  cancelButtonColor: '#F44336',
		  cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> Cancel',
		  html: '<div class="form-group label-floating">'+
			  		'<label class="control-label" for="InputSearch">write here</label>'+
			  		'<input class="form-control" id="InputSearch" type="text">'+
				'</div>'
		}).then(function () {
		  swal(
		    'You wrote',
		    ''+$('#InputSearch').val()+'',
		    'success'
		  )
		});
	});

	$('.btn-modal-help').on('click', function(){
		$('#Dialog-Help').modal('show');
	});
});

(function($){
    $(window).on("load",function(){
        $(".dashboard-sideBar-ct").mCustomScrollbar({
        	theme:"light-thin",
        	scrollbarPosition: "inside",
        	autoHideScrollbar: true,
        	scrollButtons: {enable: true}
        });
        $(".dashboard-contentPage, .Notifications-body").mCustomScrollbar({
        	theme:"dark-thin",
        	scrollbarPosition: "inside",
        	autoHideScrollbar: true,
        	scrollButtons: {enable: true}
        });
    });
})(jQuery);