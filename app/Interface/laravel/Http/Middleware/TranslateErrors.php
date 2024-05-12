<?php

namespace App\Interface\laravel\Http\Middleware;

use App\Common\exception\ClientErrorException;
use App\Common\exception\dictionary\DomainErrorDictionary;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TranslateErrors
{

    public function handle(Request $request, \Closure $next)
    {
        $response = $next($request);
        if ($response->exception) {
            $exception = $response->exception;

            $codeException = DomainErrorDictionary::translate($exception);
            if ($codeException instanceof ClientErrorException) {
                $translatedError = DomainErrorDictionary::translate($exception);
                return \response()->json([
                    'status' => 'fail',
                    'message' => $translatedError->getMessage()
                ]);
            }

            return response()->json([
                'status' => 'error',
                'message' => __('messages.system_error'),
            ]);
        }

        return $response;
    }
}
