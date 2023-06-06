<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception) {
        if ($exception instanceof HttpException) {

            switch ($exception->getStatusCode()) {
                default:
                    $response = __('lang.error_request_could_not_be_completed');
                    //[MT]
                    $view = (request()->segment(1) == '') ? 'errors.saas.409' : 'errors.409';
                break;
            }

            if ($request->ajax()) {

                //do not do this for exception code 400
                if ($exception->getStatusCode() != 400) {
                    //ajax reponse for a notice popup
                    $jsondata['notification'] = [
                        'type' => 'error',
                        'value' => $response,
                    ];

                    //return response - with error code
                    return response()->json($jsondata, $exception->getStatusCode());
                }

            }

            
            $error = array('message' => $response);
            return response()->view($view, compact('error'));
        }

        if ($exception instanceof ValidationException) {
            $response = ($exception->getMessage() != '') ? $exception->getMessage() : 'Ha ocurrido un error';

            $jsondata['notification'] = [
                'type' => 'error',
                'value' => $response,
            ];

            return Response::json($jsondata, 422);
        }

        return parent::render($request, $exception);
    }
}
