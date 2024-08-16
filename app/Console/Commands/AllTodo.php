<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use function Laravel\Prompts\select;

class AllTodo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display all commands';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $command = select(
            label: 'Which command would you like to excecute?',
            options: [
                'list' => 'List all tasks',
                'add' => 'Add a new task',
                'complete' => 'Complete selected tasks',
                'delete' => 'Delete selected tasks'
            ]
        );
        $this->call("todo:$command");
    }
}
