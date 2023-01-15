<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Repository;

use Booking\Core\Domain\ValueObject\Document;

interface DocumentRepositoryInterface
{
    public function findByCostumer(int $id): Document;
}
