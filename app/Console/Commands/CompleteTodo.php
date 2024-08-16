<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Todo;
use function Laravel\Prompts\multiselect;

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
            $this->info('No pending tasks found.');
            return;
        }

        $choices = $todos->mapWithKeys(function ($todo) {
            return [$todo->id => $todo->task];
        })->toArray();

        $ids = multiselect('Select the tasks you want to complete using space:', $choices);


        foreach ($ids as $id) {
            $todo = Todo::find($id);
            if ($todo) {
                $todo->completed = true;
                $todo->save();
                $this->info("Task '($todo->task)' marked as completed.");
            } else {
                $this->error('Todo not found.');
            }
        }
    }
}
