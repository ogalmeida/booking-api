<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Entity;

use Booking\Core\Domain\Enum\BookingStatusEnum;
use Carbon\CarbonImmutable;

class Booking
{
    public function __construct(
        public readonly string $uuid,
        public readonly CarbonImmutable $bookedAt,
        public readonly CarbonImmutable $startAt,
        public readonly CarbonImmutable $endAt,
        public readonly BookingStatusEnum $status,
    ) {
    }

    public static function create(array $data): self
    {
        return new self(
            uuid: $data['uuid'],
            bookedAt: self::generateDateAttribute($data['booked_at']),
            startAt: self::generateDateAttribute($data['start_at']),
            endAt: self::generateDateAttribute($data['end_at']),
            status: $data['status'],
        );
    }

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'booked_at' => $this->bookedAt,
            'start_at' => $this->startAt,
            'end_at' => $this->endAt,
            'status' => $this->status,
        ];
    }

    private static function generateDateAttribute(string|CarbonImmutable $date): CarbonImmutable
    {
        if ($date instanceof CarbonImmutable) {
            return $date;
        }

        return new CarbonImmutable($date);
    }
}
