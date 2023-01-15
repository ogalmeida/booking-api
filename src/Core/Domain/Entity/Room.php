<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Entity;

class Room
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $name,
        public readonly int $level,
        public readonly bool $isAvaliable,
        public readonly float $price,
    ) {
    }

    public static function create(array $data): self
    {
        return new self(
            uuid: $data['uuid'],
            name: $data['name'],
            level: $data['level'],
            isAvaliable: $data['is_avaliable'],
            price: $data['price'],
        );
    }

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'level' => $this->level,
            'is_avaliable' => $this->isAvaliable,
            'price' => $this->price,
        ];
    }
}
