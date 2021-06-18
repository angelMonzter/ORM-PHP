<?php
    
     mkdir("mysql");
     
     if( file_exists("datos1.txt") == true )
        echo "<p>El archivo existe</p>";
    else
        echo "<p>El archivo no se ha encontrado</p>";

    // Abrir el archivo, creándolo si no existe
    $archivo = fopen("datos.php", "w+b");    
    if( $archivo == false )
      echo "Error al crear el archivo";
    else
      echo "El archivo ha sido creado";
    fclose($archivo);   // Cerrar el archivo

    // Abrir el archivo, creándolo si no existe:
    $archivo = fopen("datos.txt","w+b");
    if( $archivo == false ) {
      echo "Error al crear el archivo";
    }
    else
    {
        // Escribir en el archivo:
         fwrite($archivo, "Estamos probando\r\n");
         fwrite($archivo, "el uso de archivos ");
         fwrite($archivo, "en PHP");
        // Fuerza a que se escriban los datos pendientes en el buffer:
         fflush($archivo);
    }
    // Cerrar el archivo:
    fclose($archivo);
?>