<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    public function index()
    {
        return TaskResource::collection(Task::orderBy('due_date', 'desc')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required', Rule::in(['pending', 'in-progress', 'completed'])],
            'due_date' => ['required', 'date']
        ]);

        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
        ]);

        return TaskResource::make($task);
    }

    public function show(Task $task)
    {
        return TaskResource::make($task);
    }

    public function update(Task $task, Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required', Rule::in(['pending', 'in-progress', 'completed'])],
            'due_date' => ['required', 'date']
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
        ]);

        return response()->json(TaskResource::make($task), Response::HTTP_ACCEPTED);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'message' => 'Task successfully deleted'
        ]);
    }
}
