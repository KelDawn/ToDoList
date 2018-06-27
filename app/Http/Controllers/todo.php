
<?php


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\todo;
use Illuminate\Support\Facades\Session;
use DB;


class todo extends Controller

public function savetask(Request $request)
{
	$task = new task;
	$task->task = $request->task;
	$task->priority = $request->priority;
	$task->complete_by = $request->complete_by;
	$task->time_completed = $request->time_completed;
	$task->user = $request->user;
	$task->save();
	$savechoice = $request->save;
	echo "test";
	print_r($task);
}

public function viewtask(Request $request)
{
$task = $request->id;
$task = todo::where('id', $task)->get();
return view('view', compact('task'));
}

public function addnew()
{
	return view('newtask');
}


public function edittask(Request $request)
{
$task = $request->id;
$request->session()->flash('task', $task);
$task = todo::where('id', $taskid)->get();
return view('edittask', compact('taskid'));
}

public function updatetask (Request $request)
$task = todo::find($id);
$task->task;
$task->save():
}

public function index()
{
	$tasks = DB::table('tasklist')->get();
	return view('tasklist.index', compact('tasks'));
}


?>
