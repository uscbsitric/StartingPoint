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
                return response()->json(['error'=>'Token is Invalid: from /app/Http/Middleware/authJWT.php',
										 'errorCode' => 1
                						]);
            }
            else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException)
            {
                return response()->json(['error'=>'Token is Expired: from /app/Http/Middleware/authJWT.php',
                						 'errorCode' => 2
                						]);
            }
            else if($e instanceof Tymon\JWTAuth\Exceptions\JWTException)
            {
            	return response()->json(['error' => 'Token Absent: from /app/Http/Middleware/authJWT.php',
            							 'errorCode' => 3
            						    ]);
            }
            else
            {
                return response()->json(['error'=>'Something is wrong: from /app/Http/Middleware/authJWT.php',
                						 'errorCode' => 4
                						]);
            }
        }
        return $next($request);
    }
}