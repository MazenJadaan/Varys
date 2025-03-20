<?php 

    /*
    |--------------------------------------------------------------------------
    | A helper method that set new file name based on value
    |--------------------------------------------------------------------------
    |
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

namespace app\Helper;

class Utils {
    
    public function setFileName (string $value) :string {
        return preg_replace('/[^a-zA-Z0-9]/', '_', $value);
    }
}






