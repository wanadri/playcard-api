<?php

namespace App\Controller;

use App\Actions\Card\Contracts\IGetCardList;
use App\Services\Contracts\ICardService;

class CardsController extends ApiController
{
    public function index(IGetCardList $cardList)
    {
        $this->success($cardList());
    }
}
