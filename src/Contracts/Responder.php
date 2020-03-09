<?php

namespace Flugg\Responder\Contracts;

use Exception;
use Flugg\Responder\Contracts\Http\ErrorResponseBuilder;
use Flugg\Responder\Contracts\Http\SuccessResponseBuilder;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder as QueryBuilder;

/**
 * A contract for responding with error- and success responses.
 *
 * @package flugger/laravel-responder
 * @author Alexander Tømmerås <flugged@gmail.com>
 * @license The MIT License
 */
interface Responder
{
    /**
     * Build a success response.
     *
     * @param array|Arrayable|Builder|QueryBuilder|Relation $data
     * @return SuccessResponseBuilder
     */
    public function success($data = null): SuccessResponseBuilder;

    /**
     * Build an error response.
     *
     * @param Exception|int|string|null $errorCode
     * @param Exception|string|null $message
     * @return ErrorResponseBuilder
     */
    public function error($errorCode = null, $message = null): ErrorResponseBuilder;
}
