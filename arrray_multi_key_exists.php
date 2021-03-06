<?php

/**
 * Función que utiliza array_key_exists con un array de keys en vez de un único key.
 * 
 * @Author  Albert Sabaté
 * @date    25/01/2013
 * 
 * @param   array       $arrKeys
 * @param   array       $array
 * @param   boolean     $match      dejar esta variable sin settear.
 * 
 * @return  boolean     true si encuentra todos los keys (case sensitive)
 * 
 */
function array_multi_key_exists(array $arrKeys, array $array, $match = true) {
    $matched = array_key_exists(array_shift($arrKeys), $array);

    if ($match === false) return false;

    if (count($arrKeys) != 0)
        $result = array_multi_key_exists($arrKeys, $array, $matched);
    else
        $result = $matched;

    return $result;
}

?>