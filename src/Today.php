<?php

/**
 * Test files autoload.
 */

class Today
{
    public static function now()
    {
        $time = time();

        date_default_timezone_set('America/Mexico_City');
        echo date("Y-m-d : h",$time);
    }
}