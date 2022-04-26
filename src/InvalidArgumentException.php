<?php

declare(strict_types=1);

namespace DiggPHP\Psr16;

use \Psr\SimpleCache\InvalidArgumentException as InvalidArgumentExceptionInterface;

class InvalidArgumentException extends CacheException implements InvalidArgumentExceptionInterface
{
}
