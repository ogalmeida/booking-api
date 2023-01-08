<?php

declare(strict_types=1);

namespace Booking\Core\Domain\ValueObject;

use Booking\Core\Domain\Enum\DocumentTypeEnum;

class Document
{
    public function __construct(
        public readonly int $number,
        public readonly DocumentTypeEnum $type,
    ) {
    }

    public static function create(array $data): self
    {
        return new self(
            number: $data['number'],
            type: DocumentTypeEnum::from($data['type']),
        );
    }

    public function toArray(): array
    {
        return [
            'number' => $this->number,
            'type' => $this->type,
        ];
    }
}
