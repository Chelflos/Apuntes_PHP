<html>
<body>
    
Welcome: <?php echo $_POST["name"]; ?><br>

Tu dirección de mail es: <?php echo $_POST["email"]; ?>

</body>
</html>

<!--El método POST transmite datos de una página PHP a otra. A diferencia del método GET, estos datos no están visibles en la URL. 
De ahí que este método sea el más utilizado.
Todos los datos que están contenidos en un formulario se envían a la otra página PHP a través del método POST y se reciben en una 
tabla superglobal $_POST.--!>