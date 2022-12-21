<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
	<link rel="icon" type="image/png" href="Recursos\iconos\logoIPET379.png">
    <title>IPET 379 Alfredo B. Molet</title>
    
    <link type="text/css" rel="stylesheet" href="estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--link type="text/css" rel="stylesheet" href="Recursos/bootstrap.min.css"-->
    <link type="text/css" rel="stylesheet" href="Recursos/carousel.css">
	
</head>
<body>
    <div class="container">
	
	<!--Menú-->
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
		 <a class="navbar-brand" href="#"><img src="Recursos\iconos\logoIPET379.png" class="img-fluid" alt="IPET 379" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
			  <a name="Inicio"></a>
                <a class="nav-link" href="https://www.google.com.ar/"> <span class=" px-1"><img src="Recursos/iconos/home.png" class="img-thumbnail" alt="home" width="35"></span>Inicio</a>
              </li>
           	 	<li class="nav-item dropdown">
					<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class=" px-1"><img src="Recursos/iconos/menu.png" class="img-thumbnail" alt="Especialidades" width="35"></span>Especialidades</a>
					 
					<ul class="dropdown-menu">
					  <li><a class="dropdown-item" href="#Electricidad">Electricidad</a></li>
					  <li><a class="dropdown-item" href="#Programacion">Programación</a></li>
					</ul>
				</li>		
           		<li class="nav-item">
                <a class="nav-link" href="#Galeria"><span class=" px-1"><img src="Recursos/iconos/imagen.png" class="img-thumbnail" alt="Galería" width="35"></span>Galeria</a>
              	</li>
				<li class="nav-item">
					<a class="nav-link" href="https://bloguerosdelmolet.blogspot.com/"><span class=" px-1"><img src="Recursos/iconos/blog.png" class="img-thumbnail" alt="Galería" width="35"></span>Blog</a>
				</li>
              	<li class="nav-item dropdown">
                	<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class=" px-1"><img src="Recursos/iconos/estante-para-libros.png" class="img-thumbnail" alt="nosotros" width="35"></span>Nosotros</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#Gestion">Gestion</a></li>
						<li><a class="dropdown-item" href="#Historia">Historia</a></li>
					  </ul>
				</li>
             	<li class="nav-item">
             	   <a class="nav-link" id="boton" href="includes/form.php" ><span class=" px-1"><img src="Recursos/iconos/formulario-de-contacto.png" class="img-thumbnail" alt="formulario" width="35"></span>Inscripción</a>
             	</li>
             	<li class="nav-item">
              	  <a class="nav-link" href="#Contacto"><span class=" px-1"><img src="Recursos/iconos/comunicar.png" class="img-thumbnail" alt="contacto" width="35"></span>Contactos</a>
             	</li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-link" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav> 
	<!--Fin Menú-->
	<!--Carrusel-->
     <div class="row">
         <div class="col col-sm-12 col-md-12 col-xl-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Diapositiva 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Diapositiva 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Diapositiva 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" src="Recursos/FONDOS/escuelaparra.jpg" role="img" aria-label="Marcador de posición: Primera diapositiva" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Nuestra Escuela</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
              
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Nuestra Escuela</h3>
                      <p>INSTITUTO PROVINCIAL de EDUCACIÓN TÉCNICA Nº 379</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" src="Recursos/FONDOS/electricidad.jpg" role="img" aria-label="Marcador de posición: segunda diapositiva" preserveAspectRatio="xMidYMid slice" focusable="false"><title>TÉCNICO ELECTRICISTA</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
              
                    <div class="carousel-caption d-none d-md-block">
                      <h4 class="carrusel_texto">TÉCNICO ELECTRICISTA</h4>
                      <!--p><font style="vertical-align: inherit; font-style: oblique;">Algún contenido de marcador de posición representativo para la segunda diapositiva.</font></p-->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" src="Recursos/FONDOS/programacion.jpg" role="img" aria-label="Marcador de posición: Tercera diapositiva" preserveAspectRatio="xMidYMid slice" focusable="false"><title>TÉCNICO EN PROGRAMACIÓN</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
              
                    <div class="carousel-caption d-none d-md-block">
                      <h4>TÉCNICO EN PROGRAMACIÓN</h4>
                      <!--p><font style="vertical-align: inherit; font-style: oblique;">Algo de contenido de marcador de posición representativo para la tercera diapositiva.</font></p-->
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">próximo</span>
                </button>
              </div>
         </div>
     </div>
	<!--Fin Carrusel-->
		<!--Novedades-->
		<div class="row">
			<div class="col col-sm-12 col-md-12 col-xl-12">
				<div class="card">
					<div class="card-header enlace">
						<h3 class="card-title">NOVEDADES</h3>
					</div>
					<div class="card-body">
					<h5 class="card-title">Novedades hoy</h5>
						<h6 class="card-title">Muestra de Saberes </h6>
						<p class="card-text">Viernes 25 de Noviembre de 9 A 14 hs estará la escuela abierta al público.  Pero a partir de las 7:30 ya estaremos trabajando en la escuela con el armado de Stand y demás. Sería bueno, debido al clima con altas temperaturas solicitar a los estudiantes que lleven agua con hielo, respetar remera de la escuela.</p>
						<div class="row py-5 ">
							<div class="col col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
							<div class="col col-sm-12 col-md-8 col-lg-8 col-xl-8">
								<div class="ratio ratio-21x9">
									<iframe src="Recursos\videos\Muestra MOLET.mp4" title="Muesta" allowfullscreen></iframe>
								</div>
							</div>
							<div class="col col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
						</div>
						
						
						
					<h6 class="card-title">15 de noviembre dia de la educación técnica </h6>
					<p class="card-text">#ETP | ¡Feliz Día de la Educación Técnica!

						📆 Hoy celebramos el Día de la Educación Técnica en conmemoración de la creación, en 1959, del Consejo Nacional de Educación Técnica (CONET). Este organismo tuvo como objetivo orientar la creación de escuelas técnicas y de formación en oficios en todo el país, en el marco del desarrollo de la industria nacional.
						
						🏫 En 1995 el CONET fue reemplazado por el Instituto Nacional de Educación Tecnológica (INET), que regula la enseñanza técnica e implementa políticas públicas que fortalecen la ETP en el nivel secundario, superior y en los programas de formación y capacitación para el trabajo.
						
						➡️ Desde nuestra provincia, trabajamos día a día para jerarquizar nuestra modalidad y ofrecer una propuesta educativa pública y de calidad, que acompañe la acelerada revolución tecnológica y apueste al desarrollo productivo y científico de nuestra región.
						
						🤜🏽🤛🏽  Somos una gran comunidad que, con compromiso, esfuerzo y dedicación, hace posible una mejor educación técnica y un futuro de oportunidades para las y los jóvenes cordobeses. 
						
						 🎊 ¡FELIZ DÍA!</p>
					<a target="_blank" href="https://www.youtube.com/watch?v=nC7yFnKD4l8&ab_channel=Fundaci%C3%B3nMoviPort" class="btn btn-primary">Por si querés saber mas de educación técnica</a>
					</div>
					
				</div>
					
			</div>
		</div>
<!--Especialidades-->
<hr class="featurette-divider">
        <div class="row featurette">

			<h3 class="esp">ESPECIALIDADES</h3>
			<a name="Electricidad"></a>
            <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">T&EacuteCNICO ELECTRICISTA<span class="text-muted px-2">Instalaciones electricas</span></h2>
              <p class="lead">El perfil del Técnico Electricista articula e integra conjuntos de saberes agrupados en ámbitos del conocimiento humanístico, social, científico y técnico, estructurados con un nivel mayor de especificación y contextualización en función del área
                de conocimiento predominante y propio de la especialidad. Esto se lleva a cabo a través de las actividades áulicas y de taller, donde el equipo docente se encarga de realizar una integración de los aprendizajes, tanto vertical como transversal,
                que contribuye a la articulación e integración antes mencionada. Est&aacute capacitado para manifestar conocimientos, habilidades, destrezas, valores y actitudes en situaciones reales de trabajo. Se orienta a los estudiantes para afrontar los problemas una vez que ingresen a una empreza y/o en su hogar.</p>
				<!--Currícula modal--> 
				<a href="#Inicio"><img src="Recursos\iconos\arriba.png" width="25"/></a>
				<button class="mt-5 mx-5 btn btn-light" id="modalBtn" type="button" data-bs-toggle="modal" data-bs-target="#miModalE">Currícula Educativa</button>
				
				<!--Modal-->
				<div class="modal fade " id="miModalE" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" 	data-bs-backdrop="static">
					<!--tabindex para ocultar con hidden y area labeledby referencia la título-->
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
						<div class="modal-content">
								<div class="modal-header fondo">
									<h2 class="modal-title titulo" id="modalTitle">Currícula Técnico Electricista</h2>
									<button type="button" class="btn-close colorx" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body texto">
										<div class="container-fluid">
											<div class="row contenido">
													<div class="col-md-3 ms-auto">
														4º
														<ul class="elec">
														<li>Lengua y Literatura</li>
														<li>Biología</li>
														<li>Geografía</li>
														<li>Historia</li>
														<li>Inglés</li>
														<li>Educación Artística</li>
														<li>Educación Física</li>
														<li>Matemática</li>
														<li>Física</li>
														<li>Química</li>
														<li>Electrotecnica</li>
														<li>Instalaciones Electricas I</li>
														<li>Mediciones Electricas</li>
														<li>Proyecto y Representación Gráfica I</li>
												
														</ul>					 
													</div>
													<div class="col-md-3 ms-auto">
														5°
														<ul class="elec">
														<li>Lengua y Literatura</li>
														<li>Psicología</li>
														<li>Geografía</li>
														<li>Historia</li>
														<li>Inglés</li>
														<li>Educación Artística</li>
														<li>Educación Física</li>
														<li>Matemática</li>
														<li>Física</li>
														<li>Química</li>
														<li>Electronica</li>
														<li> Máquinas Eléctricas I</li>
														<li>Instalaciones Electricas II </li>
														<li>Mediciones Electricas II</li>
														<li>Proyecto y Representación Gráfica I</li>

														</ul>
														
													</div>
													<div class="col-md-3 ms-auto">
														6°
														<ul class="elec">
														<li>Lengua y Literatura</li>
														<li>Filosofía</li>
														<li>Ciudadanía y Política</li>
														<li>Inglés</li>
														<li>Educación Artística (teatro)</li>
														<li>Educación Física</li>
														<li>Análisis Matemático</li>
														<li>Economía y Gestión de la Prod. Industrial</li>
														<li>Mecanismos y Elementos de Máquinas</li>
														<li>Maquinas Electricas II</li>
														<li>Instalaciones Electricas III</li>
														<li>Automatización Industrial I</li>
														<li>Electronica Industrial </li>
														<li> Proyecto y Representación Gráfica III</li>
														
														</ul>
													</div>
													<div class="col-md-3 ms-auto">
														7°
														<ul class="elec">
														<li>Inglés Técnico</li>
														<li>Emprendimientos</li>
														<li>Marco Jurídico de las Organizaciones</li>
														<li>Higiene y Seguridad Laboral</li>
														<li>Centrales y canalizaciones Electricas</li>
														<li>Instalaciones Electricas IV</li>
														<li>Automatización Industrial II</li>
														<li>Economía y Gestión de la Produccion Industrial</li>
														<li>Electronica Industrial II</li>
														<li>Formación en Ambiente de Trabajo</li>
														</ul>
													</div>
											</div>
										</div>
								</div>
						</div>
					</div>
				</div><!--fin Modal-->	
					 
            </div>
            <div class="col-md-5">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="Recursos/imagenes/elec3.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
              
				<div class="ratio ratio-16x9">
					<iframe src="https://www.youtube.com/embed/JR4W8ScX0DM" title="YouTube video" allowfullscreen></iframe>
				</div>
                
            </div>
        </div>
<hr class="featurette-divider">
	<a name="Programacion"></a>
        <div class="row featurette">
        	<div class="col-md-7 order-md-2">
					<h2 class="featurette-heading fw-normal lh-1">T&EacuteCNICO EN PROGRAMACI&OacuteN. <span class="text-muted px-2">Aplicaciones y diseño web </span></h2>
					<p class="lead">El perfil del T&eacutecnico en Programaci&oacuten articula e integra conjuntos de saberes agrupados en ámbitos del conocimiento humanístico, social, científico y técnico, estructurados con un nivel mayor de especificación y contextualización en función del área de conocimiento predominante y propio de la especialidad. Esto se lleva a cabo a través de las actividades áulicas y de taller, donde el equipo docente se encarga de realizar una integración de los aprendizajes, tanto vertical como transversal,
						que contribuye a la articulaci&oacuten e integraci&oacuten antes mencionada. Est&aacute capacitado para manifestar conocimientos, habilidades, destrezas, valores y actitudes en situaciones reales de trabajo. Se forma a los estudiantes en el diseño y construcción de paginas web y aplicaciones.</p>
						<!--Currícula modal--> 
						<a href="#Inicio"><img src="Recursos\iconos\arriba.png" width="25"/></a>
								<button class="mt-5 mx-5 btn btn-light" id="modalBtn" type="button" data-bs-toggle="modal" data-bs-target="#miModal">Currícula Educativa</button>
								<button class="mt-5 mx-5 btn btn-light" id="btnJuego" type="button" onclick="location.href='JUEGO/index.php'">A jugar</button>

						<!--Modal-->
				<div class="modal fade " id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" 	data-bs-backdrop="static">
					<!--tabindex para ocultar con hidden y area labeledby referencia la título-->
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
						<div class="modal-content">
								<div class="modal-header fondo">
									<h2 class="modal-title titulo" id="modalTitle">Currícula Técnico en Programación</h2>
									<button type="button" class="btn-close colorx" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body texto">
										<div class="container-fluid">
											<div class="row contenido">
													<div class="col-md-3 ms-auto">
														4º
														<ul>
														<li>Lengua y Literatura</li>
														<li>Biología</li>
														<li>Geografía</li>
														<li>Historia</li>
														<li>Inglés</li>
														<li>Educación Artística</li>
														<li>Educación Física</li>
														<li>Matemática</li>
														<li>Física</li>
														<li>Química</li>
														<li>Informática Aplicada I</li>
														<li>Lógica Matemática</li>
														<li>Programación</li>
														</ul>					 
													</div>
													<div class="col-md-3 ms-auto">
														5°
														<ul>
														<li>Lengua y Literatura</li>
														<li>Psicología</li>
														<li>Geografía</li>
														<li>Historia</li>
														<li>Inglés</li>
														<li>Educación Artística</li>
														<li>Educación Física</li>
														<li>Matemática</li>
														<li>Física</li>
														<li>Química</li>
														<li>Informática Aplicada II</li>
														<li>Sistemas de Información</li>
														<li>Programación II</li>
														</ul>
														
													</div>
													<div class="col-md-3 ms-auto">
														6°
														<ul>
														<li>Lengua y Literatura</li>
														<li>Filosofía</li>
														<li>Ciudadanía y Política</li>
														<li>Inglés</li>
														<li>Educación Artística</li>
														<li>Educación Física</li>
														<li>Análisis Matemático</li>
														<li>Economía y Gestión de la Prod. Industrial</li>
														<li>Estadística</li>
														<li>Recursos Humanos</li>
														<li>Sistemas y Telecomunicaciones</li>
														<li>Programación III</li>
														</ul>
													</div>
													<div class="col-md-3 ms-auto">
														7°
														<ul>
														<li>Inglés Técnico</li>
														<li>Marco Jurídico de las Act. Industriales</li>
														<li>Higiene y Seguridad Laboral</li>
														<li>Base de Datos II</li>
														<li>Laboratorio de Informática</li>
														<li>Aplicación de Nuevas Tecnologías</li>
														<li>Formación de Ambiente de Trabajo</li>
														</ul>
													</div>
											</div>
										</div>
								</div>
					</div>
					/div>
					</div>
				</div><!--fin Modal-->			
			</div>
            <div class="col-md-5 order-md-1">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="Recursos\imagenes\prog3.jpg" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="75%" height="75%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
              
				<div class="ratio ratio-16x9">
					<iframe src="https://www.youtube.com/embed/IodXxGhvRcM" title="YouTube video" allowfullscreen></iframe>
				</div>
              
            </div>
        </div>
<hr class="featurette-divider">
<!--Galería-->
<a name="Galeria"></a>
      			<div class="row p-5">
				<h3 class="h3 py-3">GALERÍA IPET N° 379</h3>
				<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
					
						<img src="Recursos\imagenes\a.jpg" 
							  alt="IPET N°379" width="350">
				  
				</div>
				<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
					
						<img src="Recursos\imagenes\f8.jpg"
							  alt="IPET N°379" width="350">
				  
				</div>
				<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
					
						<img src="Recursos\imagenes\f5.jpg"
							  alt="IPET N°379" width="350">
				  
				</div>
				<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
					
						<img src="Recursos\imagenes\f3.jpg"
							  alt="IPET N°379" width="350">
				  
				</div>
				<div class="row p-5">
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						
							<img src="Recursos\imagenes\t.jpg"
								  alt="IPET N°379" width="350">
					  
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						
							<img src="Recursos\imagenes\t2.jpg"
								  alt="IPET N°379" width="350">
					  
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						
							<img src="Recursos\imagenes\Escuela(1).jpeg"
								  alt="IPET N°379" width="350">
					  
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						
							<img src="Recursos\imagenes\Escuela (6).jpeg"
								  alt="IPET N°379" width="350">
					  
					</div>  
				</div>
					
				<div class="row p-5">
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\Escuela (3).jpeg" 
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\f.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\g.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\imag1.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
				</div>
				<div class="row p-5">
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\imag2.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\imag3.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\imag4.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\f4.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
				</div>	
				<div class="row p-5">
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\imag9.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\imgA1.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\imgB.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
					<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
						<figure>
							<img src="Recursos\imagenes\imgC.jpg"
								  alt="IPET N°379" width="350">
					  </figure>
					</div>
				</div>
						
				<div class="row p-5">
							<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
								<figure>
									<img src="Recursos\imagenes\imag6.jpg"
										  alt="IPET N°379" width="350">
							  </figure>
							</div>
							<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
								<figure>
									<img src="Recursos\imagenes\imag7.jpg"
										  alt="IPET N°379" width="350">
							  </figure>
							</div>
							<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
								<figure>
									<img src="Recursos\imagenes\imag8.jpg"
										  alt="IPET N°379" width="350">
							  </figure>
							</div>
							<div class="col g-col-sm-12 g-col-md-3 g-col-xl-3 r_gal">
								<figure>
									<img src="Recursos\imagenes\imgD.jpg"
										  alt="IPET N°379" width="350">
							  </figure>
							</div>
						</div>	
					<a href="#Inicio"><img src="Recursos\iconos\arriba.png" width="25"/></a>	
			</div>                 
<!--Gestion DIRECTIVA-->

		<div class="container marketing">
			<div class="row">
				<a name="Gestion"></a>
			<h3 class="h3 py-3">GESTIÓN DIRECTIVA-ADMINISTRATIVA</h3>
			  <div class="col-lg-3">
				 <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="Recursos\imagenes\Directora.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>
				 <h4 class="fw-normal fuente py-2">Directora</h4>
				 <p>Lic. Prof. Vanesa Carolina Díaz</p>
				 <p>Inició su función en el cargo Directivo de nuestra escuela el 23 de Agosto del 2018</p>
			  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-3">
				 <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="Recursos\imagenes\ApoyoDir.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>
				 <h4 class="fw-normal fuente py-2">Apoyo de Dirección</h4>
				 <p>Lic. Prof. Gisel Oviedo</p>
				 <p>Inició su función en el cargo como Apoyo de Dirección el 03 de mayo del año 2021</p>
			  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-3">
				 <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="Recursos/imagenes/Danisa.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>
				 <h4 class="fw-normal fuente py-2">Secretaria</h4>
				 <p>Prof. Danisa Pinta</p>
				 <p>Inició su función en el cargo de Secretaria el 9 de Octubre del año 2013.</p>
			  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-3">
				<img class="bd-placeholder-img rounded-circle" width="140" height="140" src="Recursos\imagenes\CoordCurso.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>
				<h4 class="fw-normal fuente py-2">Coordinadora de Curso</h4>
				<p>Prof. &Aacutengela Tocalli</p>
				<p>Inició su función en el cargo como Coordinadora de Curso el 11 de Octubre del año 2017</p>
			  </div><!-- /.col-lg-4 -->
		  </div><!-- /.row -->
	   </div>
		<div class="row">
			<a name="Historia"></a>
			<h3 class="h3 py-3">HISTORIA</h3>
			<div class="col col col-sm-12 col-md-12 col-xl-12">
				<div class="card text-center">
					<div class="card-header tituloN ccolor" ><i>Nuestra historia...</i></div>
					<div class="card-body">
					  <h5 class="card-title"><b>Así comenzamos</b></h5>
					  <p class="card-text historia">En el año 2005, a partir de la demanda de matrícula para el CBU y la falta de espacio físico para albergar una mayor cantidad de estudiantes en el I.P.E.M. 73, “Margarita Weild de Paz” Directivos y personas allegadas a la Institución deciden buscar, dentro de la localidad de La Calera, un espacio para la apertura de una nueva Comunidad Educativa.
						En una primera instancia el lugar que se consigue es la ex comisaría, sita en Gral. Cabrera 670 de Bº 9 de julio, donde se da comienzo de las actividades el 21 de abril de 2005, bajo la Resol. Nº 1292 del 21/04/2005, contando con tres secciones
						de 1º año, una de 2º año y dos de 3º año.
						Los estudiantes provienen de diferentes barrios de La Calera y los docentes pertenecen al entonces IPEM 73 y otros colegios de la zona. Durante el 2005 y el 2009 la organización administrativa, pedagógica e institucional estaba a cargo de la Coordinadora Lic. Ana Pereyra. 
						En el año 2006 se mantiene la matrícula, cerrándose una división de 1º año y abriéndose una de 2º año. En el 2007 la Institución se consolida dentro de la Comunidad, contando con dos secciones de 1º, 2º y 3º en dos turnos: mañana y tarde. El trabajo de docentes, padres y personas interesadas en la educación de la Comunidad, hacen posible este sueño: el egreso de la 3ª Promoción, pero la 1ª con los estudiantes que comenzaron en el Anexo.
						En Marzo del año 2008, el IPEM 73 Anexo se traslada al viejo edificio del IPEM 73 ya que éste pasa a ocupar su nuevo predio, en Bº Minetti, III Sección. Ahora el Anexo comienza a funcionar en la Calle Avellaneda 685. El 14 de Octubre de 2010 se
						crea, mediante Resolución 497/10 el “Programa de Inclusión y Terminalidad” para jóvenes de 14 a 17 años de edad que han abandonado o no comenzaron la Escuela Secundaria. Dicho programa logra su Primera Promoción de Bachiller en Cs Sociales
						en el 2012. En abril de 2011 se crea el cargo de Coordinadora, nombrando a la Prof. Verónica Manini y en Diciembre el de Coordinadora de Curso, a cargo de la Prof. Diana Carboni. A fines de 2012 se logra la Primer Promoción de Técnicos de
						Nivel Medio en Electricidad, siendo la Segunda y última del Plan de 6 años en el 2013. También el 2012 comienza el 4to año del Plan Nuevo de 7 años, cuya Primera Promoción de Técnico Electricista es en el 2015.
						El 15 de Agosto de 2013, se logra la desanexación y nace el IPET 379 propiamente dicho. Se asigna un cargo Administrativo y otro Directivo, que es ocupado por la Prof. Mirtha Bonzi, hasta entonces Vice directora del IPETYM 73.
					</p>
						
					  <!--a href="#" class="btn btn-primary">Go somewhere</a-->
					</div>
					<div class="card-footer text-muted" id="ccolor">
					 
					</div>
				 </div>
			</div>
			</br>
			</br>
			<a href="#Inicio"><img src="Recursos\iconos\arriba.png" width="25"/></a>
		</div>
	<a name="Contacto"></a>
	<div class="row py-3">
		<h3 class="h3">CONTACTO</h3>
		<div class="col col-sm-12 col-md-3 col-lg-3 col-xl-3 py-2">
		<h4><b>Domicilio</b></h4>
		<p>Calle Avellaneda 685</br>La Calera, Córdoba, Argentina</p>	
		<h4 ><b>Contacto</b></h4>
		<p >Teléfono: +54 3543 468993</br>Gmail: <a href="mailto:informacion.IPET379Molet@gmail.com">informacion.IPET379Molet@gmail.com</a></p>
		<h4><b>Horario</b></h4>
		<p >Lun-Vie: 8am-6:30pm</p>
		</div>
		
		<div class="col col-sm-12 col-md-4 col-lg-4 col-xl-4 py-2">
			<div class="row py-2">
				<div class="col col-sm-12 col-md-4 col-lg-4 col-xl-4 px-3 py-2">
					<a href="https://www.facebook.com/groups/356053711237554"><img class="mx-2" src="Recursos/iconos/facebook.png" width="50" alt="facebook"></a>
				</div>
				<div class="col col-sm-12 col-md-4 col-lg-4 col-xl-4 px-3 py-2">
					<a href="#"><img class="mx-2" src="Recursos/iconos/whatsapp.png" width="50"alt="whatssap"></a>
				</div>
				<div class="col col-sm-12 col-md-4 col-lg-4 col-xl-4 px-2 py-2">
					<a href="https://www.instagram.com/ipet379molet/"><img class="mx-2" src="Recursos/iconos/instagram.png" width="55" alt="ig"></a>
				</div>
			</div>
			
			</break>
			<div class="row py-2">
			<form action="mailto:informacion.IPET379Molet@gmail.com" method="post" enctype="text/plain" mt-2>
				<label for="validationCustom01" class="form-label">Nombre</label>
					<input type="text" class="form-control" id="validationCustom01" name="nombre" required>
				
				<label for="exampleInputEmail1" class="form-label">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp">

				<label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
					</br>
					<button type="submit" class="btn btn-info">Enviar</button>
			</form>
			</div>
		</div>
		<div class="col col-sm-12 col-md-1 col-lg-1 col-xl-1 py-2">

		</div>
		<div class="col col-sm-12 col-md-4 col-lg-4 col-xl-4 py-2">
			<h4><b>Ubicación en mapa</b></h4>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19273.756534593893!2d-64.35344903269056!3d-31.35481247839675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942d6208309d73fb%3A0x12d6fb945e3fbe23!2sIPET%20379!5e0!3m2!1ses-419!2sar!4v1606938175225!5m2!1ses-419!2sar"
					width="350" height="300" frameborder="3" style="border:3;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mapa"></iframe>		
		</div>
	<a href="#Inicio"><img src="Recursos\iconos\arriba.png" width="25"/></a>		
	</div>
	<footer class="ffinal">
		<h4 class="footer">IPET 379 "ALFREDO BENOIT MOLET" - Avellaneda 685 - Centro - LA CALERA - CÓRDOBA</h4>
		<h5 class="promos">7° B - Promos 2020/2021/2022</h5>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</body>
</html>