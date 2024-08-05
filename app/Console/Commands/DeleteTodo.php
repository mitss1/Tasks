<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Todo;
use function Laravel\Prompts\text;

class DeleteTodo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a todo';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = text('Enter the ID of the todo to delete:');
        $todo = Todo::find($id);
        if ($todo) {
            $todo->delete();
            $this->info('Todo deleted.');
        } else {
            $this->error('Todo not found.');
        }
    }
}
