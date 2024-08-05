<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Todo;

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
        $todos = Todo::all();
        if ($todos->isEmpty()) {
            $this->info("No Todos found.");
        } else {
            foreach($todos as $todo) {
                $status = $todo->completed ? '' : ' ';
                $this->info("{$todo->id}: {$todo->task} [{$status}]");
            }
        }
    }
}
