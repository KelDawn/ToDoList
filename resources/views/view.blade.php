@extends('Model')

@section('page-title', 'Task List')

@section('content')

<h1>Task List</h1>



<div class="row">
   <div class="col-md-6 col-xs-12">
     <div class="col-xs-6 col-md-6">
	 <h3>ToDo</h3>
		<form method="post" action="task/save" class="input_form">
			<input type="text" name="task" class="task_input">
			<div class="btn-group" data-toggle="buttons">
				<label class="btn active">
				<input type="checkbox" name="priority" checked autocomplete="off"> Priority
				</label>
        {{csrf_field()}}
			</div>

			<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
		</form>
	</div>
	</div>
</div>


<div class="row">
   <div class="col-md-6 col-xs-12">
     <div class="col-xs-6 col-md-6">
		<h3>Completed</h3>
	</div>
	</div>
</div>



@foreach($tasks as $task)
{{ $task->task }}


@endforeach

@stop

@section('scripts')

<script src="assets/js/jquery-3.3.1.js"></script>

<script src="/assets/js/bootstrap.min.js"></script>

<script src="/assets/js/app.js"></script>

<script src="/assets/js/jquery-editable-poshytip.js"></script>





$.ajax({ type:, url:, data:, });

@stop

@section('styles')

<link rel="stylesheet" href="/assets/css/jquery-editable.css">
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">


@stop
