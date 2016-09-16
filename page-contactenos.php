<!-- Header principal -->
<?php get_header(); ?>

	<div class="contactenos">
	
		<div class="container left miga__de__pan">
			<?php echo breadcrumbs(); ?>
		</div>


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<!-- Formulario de login Iladiba -->
			<div class="container">
				<div class="ten columns offset-by-one content__contactenos">
					<h3 class="titulo3 center"><?php the_title(); ?></h3> 
					<div class="row">
						<div class="six columns">
							<span>* Campos obligatorios</span>
											
								<form action="">
									<div class="">
										<span>* Campos obligatorios</span>
												<div class="form-group">
													<label>Enviar a:</label>
													<select class="twelve columns">
														<option value="">Seleccione</option>	
													  	<option value="Suscripciones">Suscripciones</option>
													</select>
												</div>
									</div>							
									<div class="row ">
										<div class="six columns">
											<div class="form-group">
												<label>Nombre</label>
												<input type="text">
											</div>
										</div>
										<div class="six columns">
											<div class="form-group">
												<label>Apellidos</label>
												<input type="text">
											</div>
										</div>
									</div>
									<div class="row ">
										<div class="six columns">
											<div class="form-group">
												<label>E-mail</label>
												<input type="text">
											</div>
										</div>
										<div class="six columns">
											<div class="form-group">
												<label>Fax</label>
												<input type="text">
											</div>
										</div>
									</div>
									<div class="row ">
										<div class="twelve columns">
											<div class="form-group">
												<label>Compañia</label>
												<input type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="six columns">
											<div class="form-group">
												<label>País</label>
												<select>
													<option value="">Seleccione</option>	
												  	<option value="colombia">Colombia</option>
												  	<option value="panama">Panamá</option>
												</select>
											</div>
										</div>
										<div class="six columns">
											<div class="form-group">
												<label>Ciudad</label>
												<select>
													<option value="">Seleccione</option>
												  	<option value="bogota">Bogotá</option>
												  	<option value="Valledupar">Valledupar</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row ">
										<div class="twelve columns">
											<div class="form-group">
												<label>Temas de Interés*</label>
												<textarea name="" id=""  rows="40"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="one columns">
											<div class="form-group">
												<input type="checkbox" name="politicas" value="politicas">
											</div>
										</div>
										<div class="eleven columns">
											Quiero recibir la Newsletter de ILADIBA a mi E-mail
										</div>
									</div>
									<div class="row">
										<div class="btn__ingrese">
											<input type="submit" value="Limpiar todo &gt;">
											<input type="submit" value="Enviar &gt;">
										</div>
									</div>
								</form>
						</div>

						<!-- Texto de suscribirse -->
						<div class="five columns offset-by-one text__suscribirse">
							<h4>¿Quieres Pautar con Nosotros?:</h4>
							<ul>
								<li>Tener acceso a todos los artículos del Portal.</li>
								<li>Poder descargar la revista ILADIBA.</li>
								<li>Obtener la última información sintetizada sobre temas de interés en el área de la salud.</li>
								<li>Recibir el newsletter ILADIBA en su correo electrónico.</li>
							</ul>

							<h4>¿Quieres Trabajar con nosotros?:</h4>
							<ul>
								<li>Tener acceso a todos los artículos del Portal.</li>
								<li>Poder descargar la revista ILADIBA.</li>
								<li>Obtener la última información sintetizada sobre temas de interés en el área de la salud.</li>
								<li>Recibir el newsletter ILADIBA en su correo electrónico.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


			<div class="section mapa" id="mapa"></div>
	</div>




 <script>
var script = document.createElement('script');
 script.type = 'text/javascript';
 script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCHNMZUE3liYTkvJ-otc-A1wG8FcLL1aPU&v=3' +
     '&signed_in=false&callback=initMap';
 document.body.appendChild(script);/**/
 console.log('SE DEBE CAMBIAR EL API')
var styles = [
 {
   "featureType": "landscape.man_made",
   "elementType": "geometry.fill",
   "stylers": [
     { "visibility": "on" },
     { "color": "#bab9bb" }
   ]
 },{
   "featureType": "road.highway",
   "elementType": "geometry.fill",
   "stylers": [
     { "color": "#8c8d8f" }
   ]
 },{
   "featureType": "road.highway",
   "elementType": "geometry.stroke",
   "stylers": [
     { "visibility": "on" },
     { "color": "#808080" }
   ]
 },{
   "featureType": "water",
   "elementType": "geometry.fill",
   "stylers": [
     { "visibility": "on" },
     { "color": "#9fa0a2" }
   ]
 },{
   "featureType": "poi.park",
   "elementType": "geometry.fill",
   "stylers": [
     { "visibility": "off" },
     { "color": "#aeafb1" }
   ]
 },{
   "featureType": "poi.school",
   "elementType": "geometry.fill",
   "stylers": [
     { "visibility": "on" },
     { "color": "#a5a6a8" }
   ]
 },{
   "featureType": "poi.park",
   "elementType": "geometry",
   "stylers": [
     { "visibility": "on" },
     { "color": "#9fa0a2" }
   ]
 },{
   "featureType": "poi.business",
   "elementType": "geometry.fill",
   "stylers": [
     { "visibility": "on" },
     { "color": "#9fa0a2" }
   ]
 },{
   "featureType": "poi",
   "elementType": "labels.text",
   "stylers": [
     { "visibility": "off" }
   ]
 },{
   "featureType": "poi",
   "elementType": "labels.icon",
   "stylers": [
     { "visibility": "off" }
   ]
 },{
   "featureType": "poi",
   "elementType": "geometry",
   "stylers": [
     { "visibility": "off" }
   ]
 },{
   "featureType": "road.arterial",
   "elementType": "geometry.fill",
   "stylers": [
     { "visibility": "on" },
     { "color": "#cecfd1" }
   ]
 },{
   "featureType": "road.local",
   "elementType": "geometry",
   "stylers": [
     { "visibility": "on" },
     { "color": "#cecfd1" }
   ]
 },{
   "featureType": "road.local",
   "elementType": "geometry.stroke",
   "stylers": [
     { "visibility": "on" },
     { "color": "#a9aaac" }
   ]
 },{
 }
];
var tk_data;
function initMap(sites) {
 tk_data = {
   name: "Editorial Maldonado S.A ",
   direccion:'Calle 30A No. 6- 22',
   telefono:'+57(1) 232 5817',
   latlng: new google.maps.LatLng(4.61657,-74.06768)
 };
 var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
 var centerMap = new google.maps.LatLng(4.61657,-74.06768);
 var myOptions = {
     zoom: 16,
     center: centerMap,
     backgroundColor:'#CCCCCC',
     mapTypeId: google.maps.MapTypeId.ROADMAP,
     zoomControl: true, 
    // scrollwheel: false,  
     disableDoubleClickZoom: true
 };
 map = new google.maps.Map(document.getElementById("mapa"), myOptions);
 map.mapTypes.set('map_style', styledMap);
 map.setMapTypeId('map_style');
   
 infowindow = new google.maps.InfoWindow({
           content: "Cargando...",
           backgroundColor: '#cecfd1',
     borderWidth: 1,
     borderColor: '#2c2c2c'
 });
 var image = { url: 'library/images/marker.png'};
 marker = new google.maps.Marker({
   position: {lat: 4.61657, lng: -74.06768},
   map: map,
   icon:image,
   title: tk_data.name,
   html: '<b>'+tk_data.name+'</b><br>'+tk_data.direccion+'<br>'+tk_data.telefono
 });
 google.maps.event.addListener(marker, "click", function () {
   infowindow.setContent(this.html);
   infowindow.open(map, this);
 });

}

 </script>
<!-- Footer principal -->
<?php get_footer(); ?>