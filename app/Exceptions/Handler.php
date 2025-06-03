
  <?php

    namespace App\Exceptions;

    use Illuminate\Auth\AuthenticationException;
    use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
    use Throwable;

    class Handler extends ExceptionHandler
    {
        // Leave the rest as default...


        protected function unauthenticated($request, AuthenticationException $exception)
        {
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }

            // Return 401 for all unauthenticated requests instead of redirecting
            return abort(401, 'Unauthenticated.');
        }
    }
