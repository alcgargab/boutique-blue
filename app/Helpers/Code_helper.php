<?php
    //--------------- GENERADOR DE CÓDIGO ---------------//
    if(!function_exists('__generatorCode')) {
        function __generatorCode($items = NULL, $letters = NULL, $numbers = NULL, $capitalLetters = NULL, $specialCharacters = NULL)
        { 
            // TRUE O FALSE EN LA OPCIÓN QUE QUIERAS AÑADIR
            $opc_letras = $letters; //  FALSE para quitar las letras
            $opc_numeros = $numbers; // FALSE para quitar los números
            $opc_letrasMayus = $capitalLetters; // FALSE para quitar las letras mayúsculas
            $opc_especiales = $specialCharacters; // FALSE para quitar los caracteres especiales
            $longitud = $items;
            $code = "";
            $letras ="abcdefghijklmnopqrstuvwxyz";
            $numeros = "1234567890";
            $letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $especiales ="|@#~$%()=^*+[]{}-_";
            $listado = "";
            if ($opc_letras == TRUE) {
            $listado .= $letras;
            }
            if ($opc_numeros == TRUE) {
            $listado .= $numeros;
            }
            if($opc_letrasMayus == TRUE) {
            $listado .= $letrasMayus;
            }
            if($opc_especiales == TRUE) {
            $listado .= $especiales;
            }
            str_shuffle($listado);
            $max = strlen($listado)-1;
            for ($i=1; $i<=$longitud; $i++) {
                $code[$i] = $listado[mt_rand(0,$max)];
                str_shuffle($listado);
            }
            return $code;
        }
    }
//--------------- FUNCIÓN PARA REEMPLAZAR UN CARACTER ---------------//
if(!function_exists('__replace_space'))
{
    function __replace_space($cadena = NULL)
    {
        // $cadena = utf8_decode($cadena);
        $cadena = trim($cadena);
        $query_caracteres = array(' ',':',';','.','?','¿','!','¡','%','$','#','&','(',')','=','+','@');
        $query_replace = array('_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_');
        $cadena = str_replace($query_caracteres, $query_replace, $cadena);
        return $cadena;
    }
}
//--------------- FUNCIÓN PARA REEMPLAZAR UN ACENTO ---------------//
if(!function_exists('__replace'))
{
    function __replace($cadena = NULL)
    {
        // $cadena = utf8_decode($cadena);
        $cadena = trim($cadena);
        $query_caracteres = array('Á','À','Â','Ä','á','à','ä','â','ª','É','È','Ê','Ë','é','è','ë','ê','Í','Ì','Ï','Î','í','ì','ï','î','Ó','Ò','Ö','Ô','ó','ò','ö','ô','Ú','Ù','Û','Ü','ú','ù','ü','û','Ñ','ñ','Ç','ç');
        $query_replace = array('a','a','a','a','a','a','a','a','a','e','e','e','e','e','e','e','e','i','i','i','i','i','i','i','i','o','o','o','o','o','o','o','o','u','u','u','u','u','u','u','u','n','n','c','c');
        $cadena = str_replace($query_caracteres, $query_replace, $cadena);
        return $cadena;
    }
}