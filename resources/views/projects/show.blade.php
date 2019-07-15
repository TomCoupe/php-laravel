@extends('layout')

@section('content')
    <h1 class="title">{{$project->title}}</h1>

    <div class="content">
        {{$project->description}}
        <p>
            <a href="/projects/{{$project->id}}/edit">
                Edit
            </a>
        </p>
    </div>

        @if($project->tasks->count())
        <div>
            @foreach($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        {{ csrf_field() }}

                        <label class="checkbox" for="completed">
                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
        @endif

        {{-- add a new task form--}}
    <form method="POST" action="/projects/{{$project -> id}}/tasks">
        {{ csrf_field() }}
        <div class="field">
            <br>
            <label class="label" for="description">Add a New Task:</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
        @include('errors')
    </form>
    {{--<form method="POST" action="/projects/{{$task -> id}}/tasks">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <div class="field">
            <div class="control">
                <button type="submit" class="button"> Delete Task</button>
            </div>
        </div>
    </form>--}}
@endsection