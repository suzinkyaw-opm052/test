<?php namespace App\Http\Controllers;
 
use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
 
class TasksController extends Controller {
 
	/**
	 * Display a listing of the resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function index(Project $project)
	{
		return view('tasks.index', compact('project'));
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function create($project)
	{
                 $data = Project::whereSlug($project)->first();
                 
		return view('tasks.create', compact('data'));
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function store()
	{
		echo "aa";exit;
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function show($task)
	{
               
                $task= Task::where('slug', $task)->get();
		return view('tasks.show', compact( 'task'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function edit(Project $project, Task $task)
	{
		return view('tasks.edit', compact('project', 'task'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function update(Project $project, Task $task)
	{
		//
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @param  \App\Task    $task
	 * @return Response
	 */
	public function destroy($task)
	{
             Task::where('slug', $task)->delete();
              return back();
	}
            //$task->delete();
		//

 
}