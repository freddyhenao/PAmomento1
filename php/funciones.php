<?php
function calculaTuiempo($fechaInicio, $fechaFin){
    // Indice 0=años
    // Indice 1 = meses
    // Indice 2 = dias
    // Indice 11 = total dias
    $datetime1=date_create($fechaInicio);
    $datetime2=date_create($fechaFin);
    $interval=date_diff();

    $tiempo[]=array();

    foreach ($interval as $valor){
         $tiempo[]=$valor;
    }
    
    return $tiempo;

}

?>