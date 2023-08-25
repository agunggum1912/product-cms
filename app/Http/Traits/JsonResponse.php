<?php

namespace App\Http\Traits;

trait JsonResponse
{

    function json200($data = [], $message = '')
    {
        return response()->json([
            'status' => true,
            'data' => $data,
            'message' => $message
        ], 200);
    }

    function json201($data, $message)
    {
        return response()->json([
            'status'    => true,
            'data'      => $data,
            'message'   => $message
        ], 201);
    }

    function json400($message = '', $data = null)
    {
        return response()->json([
            'status' => false,
            'data'  => $data,
            'message' => $message
        ], 400);
    }

    function json401()
    {
        return response()->json([
            'status'    => false,
            'data'      => NULL,
            'message'   => 'Unauthorized'
        ], 401);
    }

    function json403()
    {
        return response()->json([
            'status'    => false,
            'data'      => NULL,
            'message'   => 'Forbidden'
        ], 403);
    }

    function json404()
    {
        return response()->json([
            'status'    => false,
            'data'      => NULL,
            'message'   => 'Page Not Found'
        ], 404);
    }

    function json405()
    {
        return response()->json([
            'status'    => false,
            'data'      => NULL,
            'message'   => 'Method Not Allowed'
        ], 405);
    }

    function json500($message = null)
    {
        return response()->json([
            'status'    => false,
            'data'      => NULL,
            'message'   => $message ?: 'Internal Server Error'
        ], 500);
    }

    function json503()
    {
        return response()->json([
            'status'    => false,
            'data'      => NULL,
            'message'   => 'Service Unavailable or Under Maintenance'
        ], 503);
    }
}
