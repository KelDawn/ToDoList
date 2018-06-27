<?php

use App\Http\Controllers\Controller;
use App\todo;
use Illuminate\Support\Facades\Session;


class todo extends Controller

public function savetask(Request $request)
{
	/*
	$task = new task;
	$task->task = $request->task;
	$task->priority = $request->priority;
	$task->complete_by = $request->complete_by;
	$task->time_completed = $request->time_completed;
	$task->user = $request->user;
	$task->save();
	$savechoice = $request->save;
	*/
	echo "test";
	print_r($task);
}
?>
