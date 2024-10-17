<?php

namespace Geisi\LaravelRickrollback\Commands;

use Exception;
use Illuminate\Console\Command;

class LaravelRickrollbackCommand extends Command
{
    public $signature = 'migrate:rollback';

    public function handle(): int
    {
        throw new Exception('Never gonna give you up, never gonna let you down');
    }
}
