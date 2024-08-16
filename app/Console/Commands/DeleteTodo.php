<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Todo;
use function Laravel\Prompts\multiselect;
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
            ->multiselect('Press space to select the tasks to delete:', $choices, name: 'ids')
            ->confirm('Are you sure you want to delete these tasks?', name: 'confirm')
            ->submit();

        if (empty($responses['ids'])) {
                $this->info('No tasks selected for deletion.');
                return;
        }

        if($responses['confirm']) {
        foreach ($responses['ids'] as $id) {
                $todo = Todo::find($id);

                if ($todo) {
                    $todo->delete();
                    $this->info("Task '($todo->task)' deleted.");
                } else {
                    $this->error('Task(s) not found.');
                }
            }
        } else {
                $this->info('Task deletion canceled.');
        }
    }
}
