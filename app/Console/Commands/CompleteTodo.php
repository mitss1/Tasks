<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Todo;
use function Laravel\Prompts\select;

class CompleteTodo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:complete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Complete a task in the todo list';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $todos = Todo::where('completed', false)->get(['id', 'task']);

        if ($todos->isEmpty()) {
            $this->info('No pending todos found.');
            return;
        }

        $choices = $todos->mapWithKeys(function ($todo) {
            return [$todo->id => $todo->task];
        })->toArray();

        $id = select('Select a todo to mark as completed:', $choices);

        $todo = Todo::find($id);
        if ($todo) {
            $todo->completed = true;
            $todo->save();
            $this->info('Todo marked as completed.');
        } else {
            $this->error('Todo not found.');
        }
    }
}
