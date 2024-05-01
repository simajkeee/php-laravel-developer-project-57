<?php

namespace App\Http\Controllers;

use App\Models\TaskStatus;
use Illuminate\Http\Request;

class TaskStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('task_statuses.index', ['taskStatuses' => TaskStatus::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task_statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|unique:task_statuses,name',
        ]);

        TaskStatus::create($validated);

        return redirect()
            ->route('task_statuses.index')
            ->with('success', 'Task Status Created Successfully');
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
    public function edit(TaskStatus $taskStatus)
    {
        return view('task_statuses.edit', ['taskStatus' => $taskStatus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskStatus $taskStatus)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|unique:task_statuses,name,'.$taskStatus->id,
        ]);

        $taskStatus->update($validated);


        return redirect()
            ->route('task_statuses.index')
            ->with('success', 'Task Status Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        TaskStatus::destroy($id);

        return redirect()
            ->route('task_statuses.index')
            ->with('success', 'Task Status Deleted Successfully');
    }
}
