<?php
//--------------- CONVERTIR LA FECHA EN TEXTO ---------------//
if(!function_exists('__getDay'))
{
  function __getDay($date = NULL)
  {
    $fecha = substr($date, 0, 10);
    $numeroDia = date('d', strtotime($date));
    $fechaText = $numeroDia;
    return $fechaText;
  }
}
//--------------- CONVERTIR LA FECHA EN TEXTO ---------------//
if (!function_exists('__getMonth'))
{
  function __getMonth($date = NULL)
  {
    $fecha = substr($date, 0, 10);
    $mes = date('F', strtotime($date));
    $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
    $fechaText = $nombreMes;
    return $fechaText;
  }
}
//--------------- CONVERTIR LA FECHA EN TEXTO ---------------//
if (!function_exists('__getYear'))
{
  function __getYear($date = NULL)
  {
    $fecha = substr($date, 0, 10);
    $anio = date('Y', strtotime($date));
    $fechaText = $anio;
    return $fechaText;
  }
}
//--------------- CONVERTIR LA FECHA EN TEXTO ---------------//
if (!function_exists('__convertDateToLetter'))
{
  function __convertDateToLetter($date = NULL)
  {
    $fecha = substr($date, 0, 10);
    $numeroDia = date('d', strtotime($date));
    $dia = date('l', strtotime($date));
    $mes = date('F', strtotime($date));
    $anio = date('Y', strtotime($date));
    $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $nombredia = str_replace($dias_EN, $dias_ES, $dia);
    $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
    // $fechaText = $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
    $fechaText = $nombreMes . " " . $numeroDia . ", " . $anio;
    return $fechaText;
  }
}
//--------------- DETERMINAR LOS DÍAS RESTANTES A UNA FECHA ESPECIFICA ---------------//
if(!function_exists('__getDays'))
{
  function __getDays($date = NULL)
  { 
    // Convert the target date to a DateTime object
    $targetDateTime = new DateTime($date);
    // Get the current date
    $currentDateTime = new DateTime();
    // Calculate the interval between the current date and the target date
    $interval = $currentDateTime->diff($targetDateTime);
    // Get the remaining days from the interval
    $remainingDays = $interval->format('%a');
    return $remainingDays;
  }
}
//--------------- OBETNER EDAD ---------------//
if(!function_exists('__getAge'))
{
  function __getAge($fecha_nacimiento = NULL)
  { 
    $nacimiento = new DateTime($fecha_nacimiento);
    $date = new DateTime(date("Y-m-d"));
    $diferencia = $date->diff($nacimiento);
    return $diferencia->format("%y");
  }
}