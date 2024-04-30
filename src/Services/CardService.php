<?php

namespace App\services;

use App\Services\BaseService;
use App\Services\Contracts\ICardService;

class CardService extends BaseService implements ICardService
{
    public function getAll(): array
    {
        return $this->fetchModel('cards')
            ->find()
            ->toArray();
    }
}
