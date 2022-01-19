<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function get (Request $request) {
        return response()->json($request->user());
    }

    public function login (Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails())
            return $this->error([ 'validator' => $validator ]);

        $user = User::where('email', $request->email)->first();
        if (!$user)
            return $this->error([ 'message' => 'User does not exist.' ]);
        
        if (!Hash::check($request->password, $user->password))
            return $this->error([ 'message' => 'Password mismatch.' ]);

        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        return response()->json([ 'token' => $token ]);
    }

    public function logout (Request $request) {
        $token = $request->user()->token();
        $isRevoke = $token->revoke();
        return response()->json([ 'isRevoke' => $isRevoke ]);
    }

    public function register (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        if($validator->fails())
            return $this->error([ 'validator' => $validator ]);

        $request['password'] = Hash::make($request['password']);
        $user = User::create($request->toArray());
        $token = $user->createToken('Laravel Password Grant Client')->accessToken;

        return response()->json([ 'token' => $token ]);
    }
}
