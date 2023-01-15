<?php

declare(strict_types=1);

namespace Booking\Core\Infrastructure\Repository;

use Booking\Core\Domain\Entity\Costumer;
use Booking\Core\Domain\Repository\CostumerRepositoryInterface;
use Booking\Core\Infrastructure\Repository\Model\Costumer as CostumerModel;

class CostumerRepository implements CostumerRepositoryInterface
{
    public function __construct(
        private CostumerModel $model
    ) {
    }

    public function create(Costumer $costumer): void
    {
    }

    public function find(int $id): Costumer
    {
    }
}
