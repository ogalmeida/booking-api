<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Repository;

use Booking\Core\Domain\Entity\Room;

interface RoomRepositoryInterface
{
    public function find(int $id): Room;
}
