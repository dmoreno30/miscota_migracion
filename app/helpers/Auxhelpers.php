<?php

namespace App\helpers;

use App\Models\ContactBitrix;

class Auxhelpers
{
    private $Bitrix;
    public function LogRegister($arr, $title = '')
    {
        try {
            $log = "\n------------------------\n";
            $log .= date("Y.m.d G:i:s") . "\n";
            $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
            $log .= print_r($arr, 1);
            $log .= "\n------------------------\n";
            $filePath = __DIR__ . '/log.log';  // Usa __DIR__ para evitar problemas de ruta

            if (file_put_contents($filePath, $log, FILE_APPEND) === false) {
                throw new \Exception("No se pudo escribir en el archivo de log: $filePath");
            }
        } catch (\Exception $e) {
            error_log($e->getMessage());  // Registrar el error en el log de PHP
        }

        return true;
    }
   
}
