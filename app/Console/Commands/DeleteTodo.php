<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Todo;
use function Laravel\Prompts\select;
use function Laravel\Prompts\form;

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
        $todos = Todo::all();

        if($todos->isEmpty()) {
            $this->info('No todos found.');
        }

        $choices = $todos->mapWithKeys(function ($todo) {
            return [$todo->id => $todo->task];
        })->toArray();

        $responses = form()
            ->select('Enter the ID of the todo to delete:', $choices, name: 'id')
            ->confirm('Are you sure you want to delete this task?', name: 'confirm')
            ->submit();

        if($responses['confirm']) {
            $todo = Todo::find($responses['id']);

            if ($todo) {
                $todo->delete();
                $this->info('Todo deleted.');
            } else {
                $this->error('Todo not found.');
            }
        } else {
                $this->info('Todo deletion canceled.');
        }
    }
}
