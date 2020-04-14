@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<div class="ml-1 mr-1">
    <h5>List ID.{{ $task->id }}</h5>
    
        <ul class="list-group mb-2">
            <span>Status</span><li class="list-group-item mb-2">{{ $task->status }}</li>
            <span>Content</span><li class="list-group-item mb-2">{{ $task->content }}</li>
        </ul>
        
        {!! link_to_route('tasks.edit', '変更する', ['id' => $task->id], ['class' => 'btn btn-warning']) !!}
        
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除する', ['class' => 'btn btn-danger mt-2']) !!}
        {!! Form::close() !!}
</div>

@endsection
