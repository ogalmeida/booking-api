<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Enum;

enum BookingStatusEnum: string
{
    public const CREATED = 'created';
    public const CANCELED = 'canceled';
    public const PAID = 'paid';
    public const FINISHED = 'finished';

    case Created = self::CREATED;
    case Canceled = self::CANCELED;
    case Paid = self::PAID;
    case Finished = self::FINISHED;

    public static function validValue(): array
    {
        return array_map(
            fn ($item) => $item->value,
            self::cases(),
        );
    }
}
