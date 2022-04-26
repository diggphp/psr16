<?php

declare(strict_types=1);

namespace DiggPHP\Psr16;

use Exception;
use Psr\SimpleCache\CacheException as CacheExceptionInterface;

class CacheException extends Exception implements CacheExceptionInterface
{
}
