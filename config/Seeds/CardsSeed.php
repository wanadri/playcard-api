<?php
declare(strict_types=1);

use Cake\ORM\TableRegistry;
use Migrations\AbstractSeed;

/**
 * Cards seed.
 */
class CardsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $cardsTable = TableRegistry::getTableLocator()->get('Cards');

        $cardSuit = ['H', 'D', 'C', 'S'];
        $cardNumber = ['A', '2', '3', '4', '5', '6', '7', '8', '9', 'X', 'J', 'Q', 'K'];
        $data = [];

        foreach ($cardNumber as $number) {
            foreach ($cardSuit as $suit) {
                $data[] = [
                    'name' => "{$suit}-{$number}",
                    'code' => $suit . $number,
                ];
            }
        }

        foreach ($data as $d) {
            $card = $cardsTable->find()
                ->where(['code' => $d['code']])
                ->first();

            $entity = $card ?
                $cardsTable->patchEntity($card, $d) :
                $entity = $cardsTable->newEntity($d);

            $cardsTable->save($entity);
        }
    }
}
