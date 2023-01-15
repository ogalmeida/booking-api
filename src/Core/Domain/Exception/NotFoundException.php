<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Exception;

use Exception;
use Throwable;

class NotFoundException extends Exception
{
    public function __construct($message = 'Entity not found.', ?Throwable $previous = null)
    {
        parrent::__construct(
            message: $message,
            previous: $previous
        );
    }
}
