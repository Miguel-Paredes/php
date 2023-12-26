<?php
    echo $_FILES['fichero']['name']."<br>";
    echo $_FILES['fichero']['tmp_name']."<br>";
    echo $_FILES['fichero']['type']."<br>";
    echo $_FILES['fichero']['error']."<br>";
    echo $_FILES['fichero']['size']."<br>";

    if(mime_content_type($_FILES['fichero']['tmp_name']) != "image/jepg" &&
       mime_content_type($_FILES['fichero']['tmp_name']) != "image/png"
    ){
        echo "Tipo de fichero no admitido";
        exit();
    }
    // Transformando a Mb
    if(($_FILES['fichero']['size']/1024)>3072){
        echo "El archivo supera el peso permitido";
        exit();
    }

    if (!file_exists("archivos")){
        if(!mkdir("archivos",0777)){
            echo "Error al crear el directorio";
            exit();
        } 
    }
    chmod("archivos",0777);
    if(move_uploaded_file($_FILES['fichero']['tmp_name'], "archivos/".$_FILES['fichero']['name'])){
        echo "Archivo subido con exito";
    }else{
        echo "No se ha subido con exito el archivo";
    }