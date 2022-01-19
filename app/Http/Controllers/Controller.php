<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function error ($errors = []) {
        $response = ['error' => true];
        if (isset($errors['validator'])) {
            $validator = $errors['validator'];
            $response = array_merge($response, [
                'errors' => $validator->errors(),
                'message' => join(', ', $validator->errors()->all())
            ]);
        }

        if (isset($errors['message'])) {
            $response = array_merge($response, [
                'message' => $errors['message']
            ]);
        }
        
        return response()->json($response);
    }
}
