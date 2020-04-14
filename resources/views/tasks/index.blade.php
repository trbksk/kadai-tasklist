@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h2 class="mb-4">やることリスト</h2>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Status</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', 'やることを追加', [], ['class' => 'btn btn-warning']) !!}
    
@endsection
