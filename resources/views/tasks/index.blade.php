@extends('layouts.app')

@section('content')
    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
<div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2 col-xs-12">   
        <table class="table table-bordered">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">タスク</th>
                <th class="text-center">状態</th>
                <th class="text-center">日時</th>
            </tr>
            <ul>
            @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td> 
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->updated_at }}</td>
                </tr>
            @endforeach
            </ul>
        </table>
        {!! link_to_route('tasks.create', '新規タスクの登録', null, ['class' => 'btn btn-primary']) !!}
    </div>
</div>
    @endif
@endsection