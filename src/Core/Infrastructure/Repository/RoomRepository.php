<?php

declare(strict_types=1);

namespace Booking\Core\Infrastructure\Repository;

use App\Models\Room as RoomModel;
use Booking\Core\Domain\Entity\Room;
use Booking\Core\Domain\Repository\RoomRepositoryInterface;

class RoomRepository implements RoomRepositoryInterface
{
    public function __construct(
        private RoomModel $model
    ) {
    }

    public function find(int $id): Room
    {
    }
}
