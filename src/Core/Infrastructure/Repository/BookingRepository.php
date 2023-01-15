<?php

declare(strict_types=1);

namespace Booking\Core\Infrastructure\Repository;

use Booking\Core\Domain\Entity\Booking;
use Booking\Core\Domain\Exception\NotFoundException;
use Booking\Core\Domain\Repository\BookingRepositoryInterface;
use Booking\Core\Infrastructure\Repository\Model\Booking as BookingModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BookingRepository implements BookingRepositoryInterface
{
    public function __construct(
        private BookingModel $model
    ) {
    }

    public function create(Booking $booking): void
    {
    }

    /**
     * @throws NotFoundException
     */
    public function find(int $id): Booking
    {
        try {
            $booking = $this->model->findOrFail($id);

            return Booking::create([
                'uuid' => $booking->uuid,
                'booked_at' => $booking->booked_at,
                'start_at' => $booking->start_at,
                'end_at' => $booking->end_at,
                'status' => $booking->status,
            ]);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        }
    }

    public function cancel(int $id): bool
    {
        return true;
    }
}
