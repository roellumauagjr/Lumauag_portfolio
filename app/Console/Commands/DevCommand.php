<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Laravel and Vite concurrently';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting Laravel and Vite...');

        $serve = new Process(['php', 'artisan', 'serve']);
        $vite = new Process(['npm', 'run', 'dev']);

        $serve->setTimeout(null);
        $vite->setTimeout(null);

        $serve->start(function ($type, $buffer) {
            $this->output->write($buffer);
        });

        $vite->start(function ($type, $buffer) {
            $this->output->write($buffer);
        });

        while ($serve->isRunning() && $vite->isRunning()) {
            usleep(100000);
        }

        $serve->stop();
        $vite->stop();

        return 0;
    }
}
