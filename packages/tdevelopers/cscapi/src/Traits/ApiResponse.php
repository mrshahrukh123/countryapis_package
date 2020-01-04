<?php


namespace Tdev\CSCAPI\Traits;

trait ApiResponse
{
    public function apiResponse($success, $code, $message, $data = null)
    {
        return response()->json([
            'success'   => $success,
            'code'    => (int)$code,
            'message' => $message,
            'data'    => $data,
        ], 200);
    }

    public function success($message, $data = null)
    {
        return $this->apiResponse(true, 200, $message, $data);
    }

    public function error($message, $data = null)
    {
        return $this->apiResponse(false, 403, $message, $data);
    }

    public function notFound($message)
    {
        return $this->apiResponse(false, 404, $message);
    }

    public function caughtException($e)
    {
        return $this->apiResponse(false, $e->getCode(), $e->getMessage(), [
            'file' => $e->getFile(),
            'line' => $e->getLine(),
        ]);
    }
}
