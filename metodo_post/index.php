
<!DOCTYPE HTML>
<html lang="es"> <!--Podemos establecer el lenguaje en este caso Español-->
    
        <head><!--El elemento HTML <head> no provee de información general (metadatos) acerca del documento, incluyendo su título 
            y enlaces a scripts y hojas de estilos.-->

        <title>formulario</title><!--Ponemos el título de deseemos-->
        
        <meta charset="utf-8">
        <!--El elemento meta con atributo charset en un documento HTML está destinado a indicar la codificación 
        de caracteres utilizados (charset).En otras palabras con esa etiqueta estableces que símbolo o carácter 
        de código representa un carácter en lenguaje humano, el más utilizado es el UTF-8, pero no es el único.-->
        
    </head>
    
    <body>


        <!--La diferencia entre los métodos get y post radica en la forma de enviar los datos a la página cuando se pulsa el 
        botón “Enviar”. Mientras que el método GET envía los datos usando la URL, el método POST los envía de forma que no 
        podemos verlos (en un segundo plano u "ocultos" al usuario). -->

        <form action="welcome.php" method="post">
            <!--El elemento HTML form (<form>) representa una sección de un documento que contiene 
            controles interactivos que permiten a un usuario enviar información a un servidor web. -->

            Name: <input type="text" name="name"><br>
            <!--El elemento HTML <input> se usa para crear controles interactivos para formularios basados en la web con 
            el fin de recibir datos del usuario--> 
            
            <!--El atributo type:representa a un campo de entrada de texto, el atributo requerido TYPE se usa para 
             especificar un tipo de medio.--> 

            <!--El atributo name permite a un script acceder a su contenido. Es preferible utilizar los dos atributos 
            con el mismo identificador, por motivos de compatibilidad. El atributo action indica la página a la que se 
            envían los datos del formulario.-->
            E-mail: <input type="text" name="email"><br>

            <input type="submit">
            <!--El elemento button , teniendo el valor "submit" es su atributo type , representa un botón que, cuando es 
            presionado, envía el formulario ( form ) al que pertenece. -->
        </form>

    </body>
</html>

