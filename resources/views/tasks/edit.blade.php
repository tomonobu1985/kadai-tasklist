@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2 col-xs-12">   
            <table class="table table-bordered">
                <tr>
                    <th class="text-center">{!! Form::label('content', 'タスク') !!}</th>
                    <th class="text-center">{!! Form::label('status', '状態') !!}</th>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            {!! Form::text('content', null, ['class' => 'form-control']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        </div>
                    </td>
                </tr>
                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                </table>
        
            {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection