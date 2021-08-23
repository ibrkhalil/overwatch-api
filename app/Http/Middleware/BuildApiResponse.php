<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BuildApiResponse
{
    /**
     * Convert the response to a JSON response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $response = $next($request);

        switch (true) {
            case $response instanceof Response:
                $responseData = $response->getOriginalContent();
                break;
            case $response instanceof JsonResponse:
                $responseData = $response->getData();
                break;
        }

        if ($responseData instanceof LengthAwarePaginator) {
            $responseData = [
                'total' => $responseData->total(),
                'first' => $responseData->url(1),
                'next' => $responseData->nextPageUrl(),
                'previous' => $responseData->previousPageUrl(),
                'last' => $responseData->url($responseData->lastPage()),
                'data' => $responseData->getCollection()->toArray(),
            ];
        }
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return new JsonResponse(
            $responseData,
            $response->getStatusCode(),
            $response->headers->all(),
            JSON_PRETTY_PRINT
        );
    }
}
