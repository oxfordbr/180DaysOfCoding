@extends('layouts.master')
@section('content')
	<h1>All Tasks</h1>
	<ul class="list-group">
		@foreach($tasks as $task)
			<li class="list-group-item">
				<a href="/{{ $task->user->username }}/tasks"><img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}"></a>
				{{ link_to_task($task); }}
			</li>
		@endforeach
	</ul>

	<hr>

	@if (isset($users))
		<h3>Add New Task</h3>
		@include('tasks/partials/_form')
	@endif
@stop