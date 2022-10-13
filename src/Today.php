<?php

/**
 * Test files autoload.
 */

class Today
{
    public static function now()
    {
        $time = time();     // Time.

        date_default_timezone_set('America/Mexico_City');   // Timezone.
        echo date("Y-m-d : h",$time);   // Date Formatted.
    }
}