<?php

namespace Jrmadsen67\OneRosterApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jrmadsen67\OneRosterApi\Skeleton\SkeletonClass
 */
class OneRosterApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'one-roster-api';
    }
}
