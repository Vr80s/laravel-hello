<?php
namespace Vr80s\LaravelHello\Console\Commands;

use Illuminate\Console\Command;

class CreateSampleCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'laravel-hello:create-sample';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'laravel-hello:create-sample Test Command';

    /**
     * Execute the console command.
     *
     * @return bool
     */
    public function fire()
    {
        $this->info('Command process done.');

        return true;
    }



}