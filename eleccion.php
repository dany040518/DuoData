<?php
    $opcionSeleccionada = $_POST['opciones'];

    if($opcionSeleccionada=='PYTHON'){
        header("Location: python/python.html");
    }else{
        header("Location: java/java.html");
    }
?>