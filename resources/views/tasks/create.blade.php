@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
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
                            {!! Form::text('content') !!}
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {!! Form::text('status') !!}
                        </div>
                    </td>
                </tr>
            </table>
        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
        </div>
    </div>
@endsection