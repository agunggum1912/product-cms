<?php

namespace App\Http\Traits;

use Illuminate\Contracts\Encryption\DecryptException;
use App\Http\Traits\JsonResponse;

/**
 * 
 */
trait ValidationDecrypt
{
    use JsonResponse;
    function checkDecrypt($params = [], $return)
    {
        try {
            foreach ($params as $value) {
                decrypt($value);
            }
        } catch (DecryptException $e) {
            if ($return == 'abort') abort(404);
            else return $this->json400('Data not found!');
        }
    }
}
