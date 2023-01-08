<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Enum;

enum DocumentTypeEnum: string
{
    public const ID = 'id';
    public const DRIVE_LICENSE = 'driver';
    public const PASSPORT = 'passport';

    case Id = self::ID;
    case DriverLicense = self::DRIVE_LICENSE;
    case Passport = self::PASSPORT;

    public static function validValue(): array
    {
        return array_map(
            fn ($item) => $item->value,
            self::cases(),
        );
    }
}
