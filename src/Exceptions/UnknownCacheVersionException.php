<?php declare(strict_types=1);

namespace Nuwave\Lighthouse\Exceptions;

class UnknownCacheVersionException extends \Exception
{
    /**
     * @param  mixed  $version  Should be int, but could be something else
     */
    public function __construct($version)
    {
        parent::__construct("Expected lighthouse.schema_cache.version to be 1 or 2, got: {$version}.");
    }
}
