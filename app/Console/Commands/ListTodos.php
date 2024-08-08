<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Todo;
use function Laravel\Prompts\table;

class ListTodos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all todos';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $todos = Todo::all('id', 'task', 'completed');

        if ($todos->isEmpty()) {
            $this->info("No Todos found.");
            return;
        }

        $rows = $todos->map(function($todo) {
            return [
                'ID'        => $todo->id,
                'Task'      => $todo->task,
                'Completed' => $todo->completed ? '[]' : '[ ]',
            ];
        })->toArray();

        table(
            headers: ['ID', 'Task', 'Completed'],
            rows: $rows
        );
    }
}
