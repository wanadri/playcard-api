<?php

namespace App\Traits;

use App\Actions\Card\Contracts\IGetCardList;
use App\Actions\Card\GetCardList;
use App\services\CardService;
use App\Services\Contracts\ICardService;
use Cake\Core\ContainerInterface;

trait BindService
{
    public function registerCustomService(ContainerInterface $container)
    {
        foreach ($this->listOfServices() as $contract => $service) {
            $container->add($contract,$service);
        }
    }

    private function listOfServices(): array
    {
        return [
            ICardService::class => CardService::class,
            IGetCardList::class => GetCardList::class
        ];
    }
}
