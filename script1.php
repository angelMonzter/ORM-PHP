<?php

    $carpeta= $_POST['nombre'];
    
    mkdir($carpeta);

    if (isset($_POST['php'])) {
       mkdir($carpeta."/php");
       $archivo = fopen($carpeta."/php/php","w+b");
       
    if( $archivo == false ) {
      echo "Error al crear el archivo";
    }
    else{
        if (isset($_POST['alta'])) {
          // Escribir en el archivo:
           fwrite($archivo, "");
        }
         // Fuerza a que se escriban los datos pendientes en el buffer:
          fflush($archivo);
          // Cerrar el archivo:
          fclose($archivo);
      }
    }

    
?>