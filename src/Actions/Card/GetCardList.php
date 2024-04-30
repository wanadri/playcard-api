<?php

namespace App\Actions\Card;

use App\Actions\Card\Contracts\IGetCardList;
use Cake\Datasource\ModelAwareTrait;

class GetCardList implements IGetCardList
{
    use ModelAwareTrait;

    public function __invoke(): array
    {
        return $this->fetchModel('cards')
            ->find()
            ->toArray();
    }
}
