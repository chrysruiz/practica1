<!DOCTYPE <!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="estilos/estilo-contacto.css">
        <link rel="preload" href="estilos/estilo-contacto.css" as="estilo">
        <link rel="preload" href="estilos/normalize.css" as="estilo"> <!--esto es para que cargue mas rapidamente y que se vean los cambios -->
    <link rel="stylesheet" href="estilos/normalize.css">
    </head>
    <body>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>Formulario de contacto</title>
            
              <!-- Enlace al documento css. no aplicable en codepen.
              <link rel="stylesheet" type="text/css" href="contact-form.css">
            -->
              
              </head>
            
            
            <body>	
              
              <!-- formulario de contacto en html y css -->  
            
                <div class="contact_form">
            
                    <div class="formulario">			
                  <h1>Formulario de contacto</h1>
                            <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
            
            
                                <form action="#" method="post">				
            
                                    
                                            <p>
                                                <label for="nombre" class="colocar_nombre">Nombre
                                                    <span class="obligatorio">*</span>
                                                </label>
                                                    <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                                            </p>
                                            <label for="telefono" class="colocar_telefono">Teléfono
                                                </label>
                                                    <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
                                            </p>
                                            <p>
                                                <label for="correo" class="colocar_email">Email
                                                    <span class="obligatorio">*</span>
                                                </label>
                                                    <input type="email" name="correo" id="email" required="obligatorio" placeholder="Escribe tu Email">
                                            </p>
                                                                            
                                            <p>
                                                <label for="asunto" class="colocar_asunto">Asunto
                                                    <span class="obligatorio">*</span>
                                                </label>
                                                    <input type="text" name="asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                                            </p>		
                                        
                                            <p>
                                                <label for="mensaje" class="colocar_mensaje">Mensaje
                                                    <span class="obligatorio">*</span>
                                                </label>                     
                                                     <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                               </p>	  								
                                        
                                            <button type="submit" name="enviar" id="enviar"><p>Enviar</p></button>
            
                                            <p class="aviso">
                                                <span class="obligatorio"> * </span>los campos son obligatorios.
                                            </p>					
                                    
                                </form>
                    </div>	
                </div>
                <footer>
                <div> 
					<button class="btn" type="button" onclick="location.href='index.php'">
						<strong>Volver a la página principal</strong>
						<div id="container-stars">
						  <div id="stars"></div>
						</div>
					  
						<div id="glow">
						  <div class="circle"></div>
						  <div class="circle"></div>
						</div>
					  </button>
					
				</div>
                </footer>
                <?php
    include("registrar.php");

    ?>
            </body>
            </html>