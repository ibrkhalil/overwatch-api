<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\Model\ListableInterface;
use App\Contracts\Model\ShowableInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ResourceController extends Controller
{
    /**
     * List a resource within a pagination envelope.
     *
     * @param  \Illuminate\Database\Eloquent\Model $resource
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Pagination\LengthAwarePaginator
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function listResource(Model $resource, Request $request)
    {
        if (! $resource instanceof ListableInterface) {
            throw new NotFoundHttpException;
        }

        $numberResults = (int) $request->get('limit', 50);

        return $resource->list()->paginate($numberResults);
    }

    /**
     * Show a resource.
     *
     * @param  \Illuminate\Database\Eloquent\Model $resource
     * @param  int $id
     * @return \App\Contracts\Model\ShowableInterface
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function showResource(Model $resource, $id)
    {
        if (! $resource instanceof ShowableInterface) {
            throw new NotFoundHttpException;
        }

        return $resource->where('id', $id)->show()->firstOrFail();
    }
}
