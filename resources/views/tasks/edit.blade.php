@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <div class="row ml-1 mr-1">
        <div class="">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'Content:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新する', ['class' => 'btn btn-warning']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection
