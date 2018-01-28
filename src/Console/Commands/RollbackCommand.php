<?php

declare(strict_types=1);

namespace Rinvex\Pages\Console\Commands;

use Illuminate\Console\Command;

class RollbackCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:rollback:pages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rollback Rinvex Pages Tables.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->warn($this->description);
        $this->call('migrate:reset', ['--path' => 'vendor/rinvex/pages/database/migrations']);
    }
}