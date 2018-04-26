<?php

namespace App\Api\V1\Controllers;

use Config;
use App\User;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\SignUpRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Request;
use Session;
use Twilio;
use DB;
use Validator;
use App\Api\V1\Helpers\QrHelper;
use Carbon\Carbon;
use App\Reservation;
/**
 * @resource Example
 *
 * Longer description
 */
class SignUpController extends Controller
{
    public function signUp(SignUpRequest $request, JWTAuth $JWTAuth)
    {
        $user = new User($request->all());
        if(!$user->save()) {
            throw new HttpException(500);
        }
        
        $token = $JWTAuth->fromUser($user);
        return response()->json([
            'success' => true,
            'message' => 'success',
            'token' => $token
        ], 201);
    }

}
