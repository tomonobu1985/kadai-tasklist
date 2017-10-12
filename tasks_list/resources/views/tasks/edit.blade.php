@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のタスク詳細ページ</h1>

    <p>{{ $message->content }}</p>

    {!! link_to_route('messages.edit', 'このタスクを編集', ['id' => $message->id]) !!}

@endsection