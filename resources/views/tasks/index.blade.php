@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
<!--                <li>{{$task -> content}}</li>    -->
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}｜状態：{{ $task->status }}｜日時：{{ $task->updated_at }}</li>
            @endforeach
        </ul>
    @endif
@endsection