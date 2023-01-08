<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Repository;

use Booking\Core\Domain\Entity\Costumer;

interface CostumerRepositoryInterface
{
    public function create(Costumer $costumer): void;

    public function find(int $id): Costumer;
}
