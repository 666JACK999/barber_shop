<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="modal.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	 <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Barber_shop</title>
        <meta name="author" content="iThemesLab">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="img/logo.png">
        <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
 
  <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cPlayfair+Display:400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="imagen.css">
        
        <link rel="stylesheet" href="assets/css/vendor/rev_slider/settings.css">
        <link rel="stylesheet" href="assets/css/vendor/rev_slider/navigation.css">
  
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  
        <link rel="stylesheet" href="assets/css/vendor/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/vendor/owl.theme.css">
        
        <link rel="stylesheet" href="assets/css/vendor/bootstrap-datepicker.standalone.css">
  
        <link rel="stylesheet" href="assets/css/style.css">
 
        <link rel="stylesheet" href="assets/css/responsive.css">
        <div class="header navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="index-2.html">
                                        <img src="img/cuevas.jpg" width="80" alt="">
                                    </a>
                                </div> 

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <div class="top-right-contact text-right pull-right hidden-sm hidden-xs">
                                        <i class="fa fa-phone-square"></i> (+52) 6311895500)
                                    </div> <!--top-right-contact-->
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="barber_shop.php">Inicio</a></li>
                                        <li><a href="acercade.php">Acerca de</a></li>
                                        <li><a href="servicios.php">Servicios</a></li>
                                        <li><a href="#">Reservas</a></li>
                                        <li><a href="contacto.php">Contacto</a></li>
                                        <li><a href="index.php"><font color="red">SALIR</font></a></li>
                                    </ul>
                                    
                                </div>
                            </div> 
                        </nav>

                    </div> 
                    
                </div>
            </div> 
        </div>      

	<body>

<section id="slide">
				<img src="img/slide-3.jpg" width="1500" height="1000">
			</section>
		<div style="width: 1000px; height: -5px; border: 1px black; "></div>
		<div id="principal">
			<header>
			</header>
			<section id="categorias">
				<section id="formulario">
					<h2 class="titulo-contacto">Envianos un mensaje</h2>
					<div id="form">

						<form name="cotacto" method="POST" action="#">
							<i class="bi bi-emoji-dizzy-fill"></i>
							<label for="nombre">Nombre:</label><br>
							<input type="text" name="nombre" placeholder="Ingrese su nombre"><br>

							<label for="correo">Numero De Telefono:</label><br>
							<input type="text" name="correo" placeholder="Ingrese su Numero De Telefono"><br>

							<label for="asunto">Tipo De Corte:</label><br>
							<input type="text" name="asunto" placeholder="Ingrese su tipo de corte"><br>
							<label for="nombre">Hora</label><br>
							<textarea name="mensaje" placeholder="Hora de su cita"></textarea>
							<br>
							<hr>
							<script type="text/javascript">
								function alerta(){
									alert("Gracias por agendar tu cita, nos pondremos en contacto contigo!!");
								}
							</script>
							<input type="submit" onclick="alerta()" name="enviar" class="enviar">
							
	
						</form>

					</div>

					<div id="datos">
							Telefono Fijo: <strong>6311234567</strong><br>
							Telefono Celular: <strong>6313201220</strong><br>
							E-Mail: <strong>16340614@itnogales.edu.mx</strong><br>
							Direccion: <strong>Avenida Tecnologico #237 Local 1 Colonia La Granja, Heroica Nogales, 84065</strong><br>
							Horario: <strong>Horario de atencion de 10 a.m. a 8p.m.</strong>
						</div>

				</section>

				<section id="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3408.9141921037053!2d-110.94827708485467!3d31.30611668144109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86d15391d2132765%3A0xb9ac237cdca3e39f!2sCuevas%20Barber%20Shop!5e0!3m2!1ses!2smx!4v1624845421228!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
				</section>
				
			</section><!--/categorias-->

			<section id="info">
				<!--<section id="izq">
					
						<img src="img/redes.png" align="left" width="150" class="img">
						<h2>Bienvenidos a mi web</h2>
					<p class="parrafo">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<br><br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Duis aute irure dolor in reprehenderit in voluptate velit esse.
					</p>
				</section>
				<section id="der">
					<h2>Video de la semana</h2>
					<iframe width="290" height="290" src="https://www.youtube.com/embed/UAW7tGAgew4" frameborder="0" allowfullscreen></iframe></section>
			</section><!--/info-->
			<hr>
			

			
		</div>

	</body>
</html>