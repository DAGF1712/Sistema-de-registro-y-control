   function validacionPersonal(){
   const nombre = document.getElementById("nombre")
   const apellido = document.getElementById("apellido")
   const cedula = document.getElementById("cedula")
   const direccion = document.getElementById("direccion")
   const telefono = document.getElementById("telefono")
   const cargo = document.getElementById("cargo")
   const formulario = document.getElementById("formulario")
   const parrafoError = document.getElementById("warning");
   const parrafoExito = document.getElementById("exito")

   formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    let error = false
    parrafoError.innerHTML = ""

    if(nombre.value.length <=3){
      warning += `El nombre no es valido (Min 3 caracteres) <br>`
      error = true
    }

    if(apellido.value.length <=3){
      warning += `El apellido no es valido (Min 3 caracteres) <br>`
      error = true
    }

    if(cedula.value.length <=6){
      warning += `La cedula no es valida (Min 6 caracteres) <br>`
      error = true
    }

    if(direccion.value.length <=5){
      warning += `La direccion no es valida (Min 5 caracteres) <br>`
      error = true
    }

    if(telefono.value.length <=7){
      warning += `El telefono no es valido (Min 7 caracteres)<br>`
      error = true
    }

    if(cargo.value == 0){
      warning += `Por favor, seleccione un cargo <br>`
      error = true
    }

    if (error){
        mostrarError()
    }

    else{
         enviar()
    }

    function mostrarError(){
         parrafoError.style.display = "block";
         parrafoError.innerHTML = warning
   }


   function enviar() {  
         parrafoExito.style.display = "block";
         parrafoExito.innerHTML = "El registro fue exitoso!"
        setTimeout(function(){ 
         document.registroPersonal.submit();
   }, 1500); } 

 })}


   function validacionEstudiante(){
   const nombre = document.getElementById("nombre")
   const apellido = document.getElementById("apellido")
   const cedula = document.getElementById("cedula")
   const direccion = document.getElementById("direccion")
   const telefono = document.getElementById("telefono")
   const catedra = document.getElementById("catedra")
   const agrupaciones = document.getElementById("agrupaciones")
   const formacion = document.getElementById("formacion")
   const formulario = document.getElementById("formulario")
   const parrafoError = document.getElementById("warning");
   const parrafoExito = document.getElementById("exito")

   formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    let error = false
    parrafoError.innerHTML = ""

    if(nombre.value.length <=3){
      warning += `El nombre no es valido (Min 3 caracteres) <br>`
      error = true
    }

    if(apellido.value.length <=3){
      warning += `El apellido no es valido (Min 3 caracteres) <br>`
      error = true
    }

    if(cedula.value.length <=6){
      warning += `La cedula no es valida (Min 6 caracteres) <br>`
      error = true
    }

    if(direccion.value.length <=5){
      warning += `La direccion no es valida (Min 5 caracteres) <br>`
      error = true
    }

    if(telefono.value.length <=7){
      warning += `El telefono no es valido (Min 7 caracteres)<br>`
      error = true
    }

    if(catedra.value == 0 && agrupaciones.value == 0 && formacion.value == 0){
      warning += `Por favor, elija una categoria de estudio <br>`
      error = true
    }

    if (error){
        mostrarError()
    }

    else{
         enviar()
    }

    function mostrarError(){
         parrafoError.style.display = "block";
         parrafoError.innerHTML = warning
   }


   function enviar() {  
         parrafoExito.style.display = "block";
         parrafoExito.innerHTML = "El registro fue exitoso!"
        setTimeout(function(){ 
         document.registroEstudiante.submit();
   }, 1500); } 

 })}

function validacionUsuario(){
   const usuario = document.getElementById("usuario")
   const contrasena = document.getElementById("contrasena")
   const formulario = document.getElementById("formularioUsuarios")
   const tipoUsuario = document.getElementById("tipoUsuario")
   const parrafoError = document.getElementById("warningUsuarios");
   const parrafoExito = document.getElementById("exitoUsuarios")

   formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    let error = false
    parrafoError.innerHTML = ""

    if(usuario.value.length <=3){
      warning += `El usuario no es valido (Min 4 caracteres) <br>`
      error = true
    }

    if(contrasena.value.length <=3){
      warning += `La contraseña noo es valida (Min 4 caracteres) <br>`
      error = true
    }

    if(tipoUsuario.value == 0){
      warning += `Por favor, seleccione un tipo de usuario <br>`
      error = true
    }

    if (error){
        mostrarError()
    }

    else{
         enviar()
    }

    function mostrarError(){
         parrafoError.style.display = "block";
         parrafoError.innerHTML = warning
   }


   function enviar() {  
         parrafoExito.style.display = "block";
         parrafoExito.innerHTML = "El registro fue exitoso!"
        setTimeout(function(){ 
         document.registroUsuarios.submit();
   }, 1500); } 

 })}

   function validacionEditarEstudiante(){
   const nombre = document.getElementById("nombre")
   const apellido = document.getElementById("apellido")
   const cedula = document.getElementById("cedula")
   const direccion = document.getElementById("direccion")
   const telefono = document.getElementById("telefono")
   const catedra = document.getElementById("catedra")
   const agrupaciones = document.getElementById("agrupaciones")
   const formacion = document.getElementById("formacion")
   const formulario = document.getElementById("formulario")
   const parrafoError = document.getElementById("warning");
   const parrafoExito = document.getElementById("exito")

   formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    let error = false
    parrafoError.innerHTML = ""

    if(nombre.value.length <=3){
      warning += `El nombre no es valido (Min 3 caracteres) <br>`
      error = true
    }

    if(apellido.value.length <=3){
      warning += `El apellido no es valido (Min 3 caracteres) <br>`
      error = true
    }

    if(cedula.value.length <=6){
      warning += `La cedula no es valida (Min 6 caracteres) <br>`
      error = true
    }

    if(direccion.value.length <=5){
      warning += `La direccion no es valida (Min 5 caracteres) <br>`
      error = true
    }

    if(telefono.value.length <=7){
      warning += `El telefono no es valido (Min 7 caracteres)<br>`
      error = true
    }

    if(catedra.value == 0 && agrupaciones.value == 0 && formacion.value == 0){
      warning += `Por favor, elija una categoria de estudio <br>`
      error = true
    }

    if (error){
        mostrarError()
    }

    else{
         enviar()
    }

    function mostrarError(){
         parrafoError.style.display = "block";
         parrafoError.innerHTML = warning
   }


   function enviar() {  
         parrafoExito.style.display = "block";
         parrafoExito.innerHTML = "Los datos han sido editados!"
        setTimeout(function(){ 
         document.registroEstudiante.submit();
   }, 1500); } 
 })}

function validacionEditarPersonal(){
   const nombre = document.getElementById("nombre")
   const apellido = document.getElementById("apellido")
   const cedula = document.getElementById("cedula")
   const direccion = document.getElementById("direccion")
   const telefono = document.getElementById("telefono")
   const cargo = document.getElementById("cargo")
   const formulario = document.getElementById("formulario")
   const parrafoError = document.getElementById("warning");
   const parrafoExito = document.getElementById("exito")

   formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    let error = false
    parrafoError.innerHTML = ""

    if(nombre.value.length <=3){
      warning += `El nombre no es valido (Min 3 caracteres) <br>`
      error = true
    }

    if(apellido.value.length <=3){
      warning += `El apellido no es valido (Min 3 caracteres) <br>`
      error = true
    }

    if(cedula.value.length <=6){
      warning += `La cedula no es valida (Min 6 caracteres) <br>`
      error = true
    }

    if(direccion.value.length <=5){
      warning += `La direccion no es valida (Min 5 caracteres) <br>`
      error = true
    }

    if(telefono.value.length <=7){
      warning += `El telefono no es valido (Min 7 caracteres)<br>`
      error = true
    }

    if(cargo.value == 0){
      warning += `Por favor, seleccione un cargo <br>`
      error = true
    }

    if (error){
        mostrarError()
    }

    else{
         enviar()
    }

    function mostrarError(){
         parrafoError.style.display = "block";
         parrafoError.innerHTML = warning
   }


   function enviar() {  
         parrafoExito.style.display = "block";
         parrafoExito.innerHTML = "Los datos han sido editados!"
        setTimeout(function(){ 
         document.registroPersonal.submit();
   }, 1500); } 

 })}


function validacionBusqueda(){
   const busqueda = document.getElementById("barraBusqueda")
   const formulario = document.getElementById("busqueda")
   const parrafoVacio = document.getElementById("vacio");

   formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    parrafoVacio.innerHTML = ""
    error=false

    if(busqueda.value.length <=6){
      warning += `Por favor rellene el campo de busqueda <br>`
      error = true
    }

    if (error){
        mostrarError()
    }

    else{
         enviar()
    }

    function mostrarError(){
         parrafoVacio.style.display = "block";
         parrafoVacio.innerHTML = warning
   }


   function enviar() {  
        setTimeout(function(){ 
         document.busqueda.submit();
   }, 1000); } 

 })}

function validacionBusquedaUsuario(){
   const busqueda = document.getElementById("barraBusqueda")
   const formulario = document.getElementById("busqueda")
   const parrafoVacio = document.getElementById("vacio");

   formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warning = ""
    parrafoVacio.innerHTML = ""
    error=false

    if(busqueda.value.length <=3){
      warning += `Por favor rellene el campo de busqueda <br>`
      error = true
    }

    if (error){
        mostrarError()
    }

    else{
         enviar()
    }

    function mostrarError(){
         parrafoVacio.style.display = "block";
         parrafoVacio.innerHTML = warning
   }


   function enviar() {  
        setTimeout(function(){ 
         document.busqueda.submit();
   }, 1000); } 

 })}