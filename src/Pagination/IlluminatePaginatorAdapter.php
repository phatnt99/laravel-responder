<?php

namespace Flugg\Responder\Pagination;

use Flugg\Responder\Contracts\Pagination\Paginator;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * A paginator adapter class for Laravel's paginator.
 *
 * @package flugger/laravel-responder
 * @author Alexander Tømmerås <flugged@gmail.com>
 * @license The MIT License
 */
class IlluminatePaginatorAdapter implements Paginator
{
    /**
     * The paginator instance.
     *
     * @var LengthAwarePaginator
     */
    protected $paginator;

    /**
     * Construct the class.
     *
     * @param LengthAwarePaginator $paginator
     */
    public function __construct(LengthAwarePaginator $paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * Get the current page.
     *
     * @return int
     */
    public function currentPage(): int
    {
        return $this->paginator->currentPage();
    }

    /**
     * Get the last page.
     *
     * @return int
     */
    public function lastPage(): int
    {
        return $this->paginator->lastPage();
    }

    /**
     * Get the total number of items.
     *
     * @return int
     */
    public function total(): int
    {
        return $this->paginator->total();
    }

    /**
     * Get the current number of items.
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->paginator->items());
    }

    /**
     * Get the number per page.
     *
     * @return int
     */
    public function perPage(): int
    {
        return $this->paginator->perPage();
    }

    /**
     * Get the url for the given page.
     *
     * @param int $page
     * @return string
     */
    public function url(int $page): string
    {
        return $this->paginator->url($page);
    }
}
