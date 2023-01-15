<?php

declare(strict_types=1);

namespace Booking\Core\Infrastructure\Repository;

use Booking\Core\Domain\Repository\DocumentRepositoryInterface;
use App\Models\DocumentModel;
use Booking\Core\Domain\ValueObject\Document;

class DocumentRepository implements DocumentRepositoryInterface
{
    public function __construct(
        private DocumentModel $model
    ) {
    }

    public function findByCostumer(int $id): Document
    {
    }
}
