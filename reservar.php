<?php 
require_once "libs/navbar.php" ;
?>
<div class="content">
			<div class="wrap">
			<!---start-contact---->
			<div class="section group">	
					<div class="col span_1_of_3">
				<div class="contact-form">
					<h3>Contacta con nosotros</h3>
					  <form method="post" id="formulario" action="libs/enviarReserva.php">
						  <div>
							  <span><label>Nombre</label></span>
							  <span><input name="nombre" type="text" required="required" class="textbox"></span>
						  </div>
						  <div>
							  <span><label>Correo Electronico</label></span>
							  <span><input name="email" required="required" type="text" class="textbox"></span>
						  </div>
						  <div>
							   <span><label>Teléfono</label></span>
							  <span><input name="telefono" required="required" type="text" class="textbox"></span>
						  </div>
						  <div>
							  <span><label>Información reserva</label></span>
							  <span><textarea required="required" name="info"> Día -  Hora - Nº de comensales</textarea></span>
						  </div>
						 <div>
								 <span><input type="submit" class="mybutton" value="Enviar"></span>
						</div>
					  </form>

				  </div>
				</div>	
			</div>					
				<div class="col span_2_of_3">
					<div class="contact_info">
			    	 	<h3>Encuentranos aquí </h3>
			    	 		<div class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12792.071489398713!2d-4.4801232!3d36.722132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb85ffb2266620c6!2sBoca+Llena!5e0!3m2!1ses!2ses!4v1560552014522!5m2!1ses!2ses" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Información :</h3>
						    	<strong>Dirección</strong>
						   		<p>Av. Parménides, 10, 29010 Málaga</p>
						   		<p>España</p>
				   		<p>Tel:0034 951 57 22 86</p>
				   		<p>Fax: 0034 951 57 22 87</p>
				 	 	<p>Email: <span><a href="info@bocallena.es">info@bocallena.es</a></span></p>
				   		<p>Siguenos en nuestras redes: <span><a href="https://www.instagram.com/bocallenateatinos/">Instagram</a></span>, <span><a href="https://www.facebook.com/Bocallenateatinos/">Facebook</a></span></p>
				   </div>
				</div>				
			  
			  </div>
			<!---End-contact---->
			<div class="clear"> </div>
		</div>
<?php
require_once "libs/footer.php";