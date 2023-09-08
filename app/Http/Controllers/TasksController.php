<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Http\Requests\TaskFormRequest;

class TasksController extends Controller
{
	
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // GET

				return view('tasks.index', [
					'task' => Task::all(),
				]);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // GET
		  return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskFormRequest $request)
    {
		// POST
		$data = $request->validated();

		Task::create($data);

		return redirect()->route('tasks.index');
		
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
			// GET
			return view('tasks.show', [
				'task' => $task
			]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        // GET
		  return view('tasks.edit', [
				'task' => $task
			]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskFormRequest $request, Task $task)
    {
		// POST
		$data = $request->validated();

		$task->update($data);

		return redirect()->route('tasks.show', $task->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DELETE
    }
}