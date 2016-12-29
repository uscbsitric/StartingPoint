<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
class authJWT
{
    public function handle($request, Closure $next)
    {
        try
        {
        	// Find a user using the user identifier in the subject claim.
            $user = JWTAuth::toUser($request->input('token'));
        }
        catch (Exception $e)
        {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException)
            {
                return response()->json(['error'=>'Token is Invalid']);
            }
            else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException)
            {
                return response()->json(['error'=>'Token is Expired']);
            }
            else if($e instanceof Tymon\JWTAuth\Exceptions\JWTException)
            {
            	return response()->json(['error' => 'Token Absent']);
            }
            else
            {
                return response()->json(['error'=>'Something is wrong']);
            }
        }
        return $next($request);
    }
}