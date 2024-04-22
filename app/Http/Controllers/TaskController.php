<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::join('users', 'tasks.user_id', '=', 'users.id')
                     ->select('tasks.*', 'users.name')
                     ->get();
        return view('tasks', ['tasks' => $tasks]); // ビューにユーザーデータを渡します
    }

//task_countsを追記
public function task_counts()
{
    $tasks = Task::join('users', 'tasks.user_id', '=', 'users.id')
                 ->select('tasks.*', 'users.name')
                 ->get();
       

    $taskCountsData = [];
    foreach ($tasks as $task) {
        $taskCountsData[$task->name] = [
            'remaining_tasks' => Task::where('user_id', $task->user_id)
                                        ->where('completed', '!=', '1')
                                        ->count(),
            'completed_tasks' => Task::where('user_id', $task->user_id)
                                        ->where('completed', '!=', '0')
                                        ->count()
        ];
    }
    //dd($taskCountsData); 渡した後のデータ見たいときはコメントアウト外す
    return view('taskcounts', ['taskCountsData' => $taskCountsData]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
