<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Repository;

use Booking\Core\Domain\Entity\Booking;

interface BookingRepositoryInterface
{
    public function create(Booking $booking): void;

    public function find(int $id): Booking;

    public function cancel(int $id): bool;
}
