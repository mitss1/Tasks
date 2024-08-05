<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Todo;
use function Laravel\Prompts\text;

class AddTodo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new todo.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $task = text(
            label: 'Add a new task to your Todo list:',
            placeholder: 'E.g. create new project',
            required: true
        );
        Todo::create(['task' => $task]);
        $this->info('Todo added.');
    }
}
