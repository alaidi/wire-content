<?php

namespace Alaidi\WireContent\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    public $signature = 'wire-content:install';

    public $description = 'Install the wire-content package';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
