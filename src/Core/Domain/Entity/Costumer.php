<?php

declare(strict_types=1);

namespace Booking\Core\Domain\Entity;

use Booking\Core\Domain\Enum\DocumentTypeEnum;
use Booking\Core\Domain\ValueObject\Document;

class Costumer
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $name,
        public readonly string $surname,
        public readonly string $email,
        public readonly Document $document,
    ) {
    }

    public static function create(array $data): self
    {
        return new self(
            uuid: $data['uuid'],
            name: $data['name'],
            surname: $data['surname'],
            email: $data['email'],
            document: Document::create($data['document']),
        );
    }

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'document' => $this->document->toArray(),
        ];
    }
}
