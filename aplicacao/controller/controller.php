<?php
 /**
 *
 * @set controller directory path
 *
 * @param string $path
 *
 * @return void
 *
 */
 
 /*Os c�digos s�o apenas exemplos! N�O S�O DE AUTORIA DO GRUPO!*/
 
 function setPath($path) {

        /*** check if path i sa directory ***/
        if (is_dir($path) == false)
        {
                throw new Exception ('Invalid controller path: `' . $path . '`');
        }
        /*** set the path ***/
        $this->path = $path;
}
