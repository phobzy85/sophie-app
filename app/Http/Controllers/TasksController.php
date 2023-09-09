<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskFormRequest;

class TasksController extends Controller
{

	// Type Options
	private static function getTypeOptions()
	{
		return [
			['id' => 1, 'data' => 'Milk'],
			['id' => 2, 'data' => 'Calpol'],
			['id' => 3, 'data' => 'Ibrupofen'],
			['id' => 4, 'data' => 'Poop'],
			['id' => 5, 'data' => 'Bath'],
		];
	}

	// Amount Options
	private static function getAmountOptions()
	{
		return [
			['id' => 1, 'data' => '210'],
			['id' => 2, 'data' => '200'],
			['id' => 3, 'data' => '190'],
			['id' => 4, 'data' => '180'],
			['id' => 5, 'data' => '170'],
			['id' => 6, 'data' => '160'],
			['id' => 7, 'data' => '150'],
			['id' => 8, 'data' => '140'],
			['id' => 9, 'data' => '130'],
			['id' => 10, 'data' => '120'],
			['id' => 11, 'data' => '110'],
			['id' => 12, 'data' => '100'],
			['id' => 13, 'data' => '90'],
			['id' => 14, 'data' => '80'],
			['id' => 15, 'data' => '70'],
			['id' => 16, 'data' => '60'],
			['id' => 17, 'data' => '50'],
			['id' => 18, 'data' => '40'],
			['id' => 19, 'data' => '30'],
			['id' => 20, 'data' => '20'],
			['id' => 21, 'data' => '10'],
			['id' => 22, 'data' => '0'],
		];
	}
	
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // GET

			$tasks = Task::latest()->paginate(20);

			if($request->ajax())
			{
				$view = view('data', compact('tasks'))->render();
				return response()->json(['html' => $view]);
			}
			return view('tasks.index', compact('tasks'));
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // GET
		  return view('tasks.create', [
				'task_options' => self::getTypeOptions(),
				'amount_options' => self::getAmountOptions()
		  ]);
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