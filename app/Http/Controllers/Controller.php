<?php

namespace App\Http\Controllers;

use App\Http\Traits\JsonResponse;
use App\Http\Traits\ValidationDecrypt;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, JsonResponse, ValidationDecrypt;
}
