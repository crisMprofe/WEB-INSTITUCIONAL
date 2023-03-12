<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
	 <link rel="icon" type="image/png" href="Recursos\iconos\LOGOIPET WEB.png">
    <title>IPET 379 Alfredo B. Molet</title>
    
    <link type="text/css" rel="stylesheet" href="estilosF.css">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="contenedor">
        <div class="titul">
            <h2 class="h2">IPET 379 ALFREDO MOLET</h2>
            <h2 class="tit">FICHA DE REGISTRO DEL ESTUDIANTE</h2>
        </div>
        <div class="form">
          <form action="" method="POST">
                  <div class="titul2 py-5">
                    <h4>DATOS DEL ESTUDIANTE</h3>
                  </div> 
                  <div class="row">
                    <div class="col col-sm-12 col-md-1 col-xl-1">
                      <label  for="name">Apellido</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3">
                    <input tabindex="1" type="text" id="name" required>
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1">
                      <label  for="name">Nombre</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 ">
                    <input tabindex="1" type="text" id="name" required>
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 ">
                      <label for="DNI">DNI</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3">
                       <input tabindex="2" type="text" id="DNI" required>
                    </div>
                </div>
                <div class="row">
                <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                    <label for="LugarNacimiento">Lugar de Nacimiento</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                      <input tabindex="3" type="text" id="LugarNacimiento" required>  
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                      <input tabindex="3" type="date" id="fechaNacimiento" required>  
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                      <label  for="edad">Edad</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                    <input tabindex="4" type="text" id="edad" required>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col col-sm-12 col-md-1 col-xl-1 px-2 py-2">
                         <label  for="domicilio">Domicilio Calle</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3">
                        <input tabindex="5" type="text" id="domicilio" required>
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                       <label  for="calle">N°</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                         <input tabindex="6" type="text" id="CalleNumero" required>
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                        <label  for="barrio">Barrio</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                          <input tabindex="7" type="text" id="barrio" required>
                    </div>
                </div>
                <div class="row">
                     <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                           <label  for="localidad">Localidad</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                          <input tabindex="8"type="text" id="localidad">
                     </div>
                      <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                          <label  for="CP">C.P</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                           <input tabindex="9" type="text" id="CP" required>
                      </div>
                      <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                      <label  for="telParticular">Telefono Particular</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3">
                      <input tabindex="10"  type="text" id="telParticular" required>
                      </div> 
                      
                </div>
                  <div class="row">
                      <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                       <label  for="nacionalidad">Nacionalidad</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                        <input tabindex="11" type="text" id="nacionalidad" required>
                      </div>
                      <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                        <label  for="mail">Mail</label>
                       </div>
                       <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                         <input tabindex="12" type="email" id="mail"  required>  
                       </div>
                       <div class="col col-sm-12 col-md-1 col-xl-1">
                        <label for="EstudianteViveCon">Estudiante Vive con:</label>
                      </div>

                       <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                       <input type="text" tabindex="13" name="EstudianteViveCon" id="EstudianteViveCon">
                       </div>
                  </div>
                
                <hr width="95%"/>

                <div class="titul2 py-5">
                    <h4>DATOS DEL PADRE/MADRE/TUTOR</h4>
                  </div> 
                  <div class="row">
                     <div class="col col-sm-12 col-md-4 col-xl-4 radioB">  
                        <input type="radio" name="RolFamiliar" id="Padre" value="Padre">
                        <label for="Padre"> Padre </label>
                      </div>
                      <div class="col col-sm-12 col-md-4 col-xl-4 radioB">
                         <input type="radio" name="RolFamiliar" id="Madre" value="Madre">
                         <label for="Padre"> Madre </label>
                      </div>
                      <div class="col col-sm-12 col-md-4 col-xl-4 radioB">
                        <input type="radio" name="RolFamiliar" id="Tutor" value="Tutor">
                        <label for="Padre"> Tutor </label>
                      </div> 
                  </div>

                  <div class="row">
                    <div class="col col-sm-12 col-md-1 col-xl-1">
                      <label  for="name">Apellido</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3">
                    <input tabindex="15" type="text" id="name" required>
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1">
                      <label  for="name">Nombre</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 ">
                    <input tabindex="16" type="text" id="name" required>
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 ">
                      <label for="DNI">DNI</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3">
                       <input tabindex="17" type="text" id="DNI" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                    <label for="lugarNacimiento">Lugar de Nacimiento</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                      <input tabindex="18" type="text" id="lugarNacimiento" required>  
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                      <input tabindex="19" type="date" id="fechaNacimiento" required>  
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                      <label  for="Nacionalidad">Nacionalidad</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                    <input tabindex="20" type="text" id="Nacionalidad" required>
                    </div>
                    
                </div>
                <div class="row">
                  <div class="col col-sm-12 col-md-2 col-xl-2 py-2">
                      <label for="Vive">Vive</label>
                 </div>
                  <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                    <input type="radio" name="Vive" id="Vive" value="Sí">
                    <label for="Vive">Si</label>
                  </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                    <input type="radio" name="Vive" id="Vive" value="No">
                    <label for="Vive">No</label>
                  </div>
                  <div class="col col-sm-12 col-md-5 col-xl-5 py-2">
                  <label  for="ProfesiónOcupación">Profesión/Ocupación</label>
                  </div>
                  <div class="col col-sm-12 col-md-3 col-xl-3">
                        <input tabindex="21" type="text" id="ProfesiónOcupación" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-12 col-md-1 col-xl-1 px-2 py-2">
                         <label  for="domicilio">Domicilio Calle</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3">
                        <input tabindex="22" type="text" id="domicilio" required>
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                       <label  for="calle">N°</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                         <input tabindex="23" type="text" id="CalleNumero" required>
                    </div>
                    <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                        <label  for="barrio">Barrio</label>
                    </div>
                    <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                          <input tabindex="24" type="text" id="barrio" required>
                    </div>
                </div>
                <div class="row">
                     <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                           <label  for="localidad">Localidad</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                          <input tabindex="25" type="text" id="localidad">
                     </div>
                      <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                          <label  for="CP">C.P</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                           <input tabindex="26" type="text" id="CP" required>
                      </div>
                      <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                      <label  for="telParticular">Telefono Particular</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3">
                      <input tabindex="27"  type="text" id="telParticular" required>
                      </div> 
                      
                </div>
                  <div class="row">
                     <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                       <label for="celular">Celular</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                           <input tabindex="28" type="text" id="Celular" required>
                      </div>

                      <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                       <label  for="estadoCivil">Estado Civil</label>
                      </div>
                      <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                        <input tabindex="29" type="text" id="nacionalidad" required>
                      </div>
                      <div class="col col-sm-12 col-md-1 col-xl-1 py-2">
                        <label  for="empresaLaboral">Nombre Empresa donde Trabajo</label>
                       </div>
                       <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                         <input tabindex="30" type="text" id="mail"  required>  
                       </div>
                  </div>
                <div class="row">
                      <div class="col col-sm-12 col-md-3 col-xl-3">
                        <label for="email">Email</label>
                      </div>

                       <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                       <input tabindex="31" type="email" name="email" id="email">
                       </div>
                       <div class="col col-sm-12 col-md-3 col-xl-3">
                       <label for="fechaI">Fecha Inscripciòn</label>
                       </div>
                       <div class="col col-sm-12 col-md-3 col-xl-3 py-2">
                         <input tabindex="32" type="date" id="fechaI"  required>  
                       </div>
                  </div>
                  <div class="row py-5">
                  <div class="col col-sm-12 col-md-4 col-xl-4 py-2"></div>
                       <div class="col col-sm-12 col-md-4 col-xl-4 py-2">
                       
                              <button type="submit" class="btn btn-light">Enviar</button> 
                       </div>
                       <div class="col col-sm-12 col-md-4 col-xl-4 py-2">
                            <button type="reset" class="btn btn-primary">Restablecer</button>
                       </div>
                      
                </div>


          </form>
        </div>      
      </div>
      <script src="script.js"></script>
</body>
</html>
    
   
