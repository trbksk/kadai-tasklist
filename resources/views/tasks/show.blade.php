@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<div class="ml-1 mr-1">
    <h2>To do {{ $task->id }}</h2>
    
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <td>{{ $task->id }}</td>
            </tr>
            <tr>
                <th>やること</th>
                <td>{{ $task->content }}</td>
            </tr>
        </table>
        {!! link_to_route('tasks.edit', '編集', ['id' => $task->id], ['class' => 'btn btn-warning']) !!}
        
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger mt-1']) !!}
        {!! Form::close() !!}
</div>

@endsection
