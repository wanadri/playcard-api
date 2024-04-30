<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCards extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('cards');
        $table->addColumn('name', 'string')
            ->addColumn('code', 'string')
            ->create();

        $table->addIndex(['code'], ['unique' => true]);
    }
}
