@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2 col-xs-12">   
            <table class="table table-bordered">
                <tr>
                    <th class="text-center">タスク</th>
                    <th class="text-center">状態</th>
                    <th class="text-center">最終更新日</th>
                </tr>                
                <tr>
                    <td>
                        <div class="form-group">
                            <p>{{ $task->content }}</p>
                        </div>    
                    </td>
                    <td>
                        <div class="form-group">
                            <p>{{ $task->status}}</p>
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <p>{{ $task->updated_at }}</p>
                        </div>
                    </td>
                </tr>
            </table>
{!! link_to_route('tasks.edit', 'このタスクを編集',  $task -> id  , ['class' => 'btn btn-default']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    <input type="submit" class="btn btn-danger" value="削除">
<!--        {!! Form::submit('削除') !!}   -->
    {!! Form::close() !!}
@endsection