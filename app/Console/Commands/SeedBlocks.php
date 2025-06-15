<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Block;

class SeedBlocks extends Command
{
    protected $signature = 'seed:blocks';
    protected $description = 'Заполнить таблицу blocks тестовыми данными';

    public function handle()
    {
        Block::factory()->count(10)->create();
        $this->info('Таблица blocks заполнена!');
    }
}