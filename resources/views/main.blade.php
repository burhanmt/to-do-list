@extends('layout.tasks')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $index => $task)
            <tr>
                <th class="taskNumberRowSize" scope="row">
                    {{ $index + 1 }}
                </th>
                <td class="taskRowSize" class="taskRowSize">
                    @if($task->is_done)
                        <del>
                            {{ $task->name }}
                        </del>
                    @else
                        {{ $task->name }}
                    @endif
                </td>
                <td class="taskButtonsRowSize">
                    @if(!$task->is_done)
                        <div class="d-flex flex-row">
                            <div>
                                <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                </form>
                            </div>
                            <div>&nbsp;</div>
                            <div>
                                <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-x"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
