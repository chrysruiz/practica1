
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <link rel="preload" href="estilos/normalize.css" as="estilo"> <!--esto es para que cargue mas rapidamente y que se vean los cambios -->
    <link rel="stylesheet" href="estilos/normalize.css"> <!--mando a llamar el arcvhivo normalize que se ubica en la CARPETA estilo-->
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="estilos/estilo.css" as="estilo">
    <link rel="stylesheet" href="estilos/estilo.css"> 
    
    
       
</head>
<body>
    <header>
         <h1 class="titulo">Chrystian Ruiz <span>Freelancer</span> </h1>
    </header>
<div class="nav-bg">
    <nav class="navegacion-principal contenedor">
        <a href="#">Inicio</a>
        <a href="index.html">Sobre Mi</a>
        <a href="#">Clientes</a>
        <a href="contacto.php">Contacto</a>      
    </nav>
</div>

<section class="hero"> <!--es usara para ingresar una imagen en esta seccion en particular-->
    <div class="contenido-hero">
       <h2>Diseño y Desarrollo Web <span> Freelancer</span></h2>

        <div class="ubicacion">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
               <circle cx="12" cy="11" r="3" />
               <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
            </svg>
                <p>Ciudad de Mexico,Tlahuac</p>
        </div>
<button class="beautiful-button" onclick="window.open('https://maps.app.goo.gl/GBX8K5WHoTEq8LkU6', '_blank')">Contactar</button>

    </div> <!--.contenido-hero-->
</section>
   
<main class="contenedor sombra">
     <h2>Mis Servicios</h2>
      <h2 id="h2">¿Necesitas una presencia en línea impactante?</h2>

    <div class="servicios">
        <section class="servicio">
            <h3>DISEÑO WEB CREATIVO</h3>
        <div class="iconos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
                <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
            </svg>
        </div>
          
          <p>Soy un creador apasionado de páginas web con experiencia en diseño estático y dinámico.
            Mi objetivo es plasmar tus visiones en una interfaz atractiva y funcional</p>
            
        </section>
   
        <section class="servicio">
            <h3>Aplicaciones Web</h3>
        <div class="iconos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="4" y1="10" x2="4" y2="16" />
                <line x1="20" y1="10" x2="20" y2="16" />
                <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                <line x1="8" y1="3" x2="9" y2="5" />
                <line x1="16" y1="3" x2="15" y2="5" />
                <line x1="9" y1="18" x2="9" y2="21" />
                <line x1="15" y1="18" x2="15" y2="21" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 7c-3 0 -4 3 -4 5.5c0 3 2 7.5 4 7.5c1.088 -.046 1.679 -.5 3 -.5c1.312 0 1.5 .5 3 .5s4 -3 4 -5c-.028 -.01 -2.472 -.403 -2.5 -3c-.019 -2.17 2.416 -2.954 2.5 -3c-1.023 -1.492 -2.951 -1.963 -3.5 -2c-1.433 -.111 -2.83 1 -3.5 1c-.68 0 -1.9 -1 -3 -1z" />
                <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
            </svg>
        </div>
            <p>“Diseñando experiencias digitales que marcan la diferencia.”<br>

              “Convierte ideas en interfaces atractivas y funcionales.”<br>
              “Código limpio, experiencias brillantes.”</p>
        </section>
   
        <section class="servicio">
            <h3>Seguridad-Informatica</h3>
          <div class="iconos"> 
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="3" y="5" width="18" height="14" rx="3" />
                <line x1="3" y1="10" x2="21" y2="10" />
                <line x1="7" y1="15" x2="7.01" y2="15" />
                <line x1="11" y1="15" x2="13" y2="15" />
            </svg>
          </div>   
             <p>“Protegiendo tu mundo digital, una línea de código a la vez.” 🔒💻<br>
                “Protegiendo tus datos, construyendo confianza digital.” 🔒🔐
             </p>
        </section>
    </div> <!--cierre servicios-->

  
    <section>
       
    </section>
    
</main>  


    
    <footer class="footer">
        <p>Todo los derechos reservados. Chrystian Ruiz Freenlancer</p>
    </footer>
   
    </body>

    </html>
    




