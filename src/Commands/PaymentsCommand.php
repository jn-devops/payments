<?php

namespace Homeful\Payments\Commands;

use Illuminate\Console\Command;

class PaymentsCommand extends Command
{
    public $signature = 'payments';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
