<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['user_id'] = auth()->id();
        Task::create($incomingFields);

        return redirect()->route('main');
    }

    public function displayTable() {
        $tasks = Task::all();

        return view('main', ['tasks' => $tasks]);
    }

    public function updatedTasks(Task $task, Request $request) {
        if (auth()->user()->id !== $task['user_id']) {
            return redirect()->route('login');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);

        $task->update($incomingFields);
        return redirect()->route('main');
    }

    public function showEditScreen(Task $task) {
        if (auth()->user()->id !== $task['user_id']) {
            return redirect()->route('main');
        }

        return view('edit-task', ['task' => $task]);
    }

    public function deletedTask(Task $task) {
        if (auth()->user()->id === $task['user_id']) {
            $task->delete();
        }

        return redirect()->route('main');
    }
}
